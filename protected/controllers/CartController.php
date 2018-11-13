<?php

class CartController extends Controller {

    public $errors = array();
    public $success = array();
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function __construct($id) {
        parent::__construct($id);
   		$this->layout = getCartLayot();
    }

        /**
         * Specifies the access control rules.
         * This method is used by the 'accessControl' filter.
         * @return array access control rules
         */
        public function accessRules() {
            return array(
                array('allow', // allow all users to perform 'index' and 'view' actions
                    'actions' => array('removeCoupon','industry','interview','index', 'view','student',"addtocart","cart","remove","buynow","verify", 
                                        'profesionals','institutes','register',"description","checkout","removeCart","applypromo","story","campus","loginandapply"),
                    'users' => array('*'),
                ),
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                    'actions' => array('create', 'update', 'admin', 'delete'),
                    'users' => array('@'),
                ),
                array('allow', // allow admin user to perform 'admin' and 'delete' actions
                    'actions' => array(),
                    'users' => array('admin'),
                ),
                array('deny', // deny all users
                    'users' => array('*'),
                ),
            );
        }
    
        public function actionRemoveCoupon(){
            if(isset(Yii::app()->user->id)){
                
                $cartID = Cart::model()->findByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                $coupon = CouponUsage::model()->findByAttributes(array("cart_id"=> $cartID->id));
                if(!empty($coupon)){
                    $model = CouponUsage::model()->findByPk($coupon->id);
                    $model->delete();
                    $this->redirect(Yii::app()->request->urlReferrer);
                } else{
                    $this->redirect(Yii::app()->request->urlReferrer);
                }
            } else {
                $this->redirect(Yii::app()->request->urlReferrer);
            }
        }
        
	public function actionVerify($id){
	    $user = UsersNew::model()->findByPk($id);
	    if(empty($user)){
		$this->errors["error"] = "You are not registered with us!";
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.home",array());
	    } else {
		$user->attributes = array("is_verified"=>1);
		if($user->save()){
		   $this->redirect(array('index','thanksverify'=>1));
		}else {
		    foreach($model->getErrors() as $key=>$err){
                            $this->errors[$key] = $err;
		    }
		}
		
	    }
	}
        public function actionLoginandapply(){
            $resp = array("status"=>"failure","message" => "Opps, that didn't work please try again");
            $model=new LoginForm;
            $_POST['LoginForm']= $_POST;
            if(isset($_POST['LoginForm']))
            {

                $model->attributes=$_POST['LoginForm'];
                if($model->validate() && $model->login()){
                    
                    $domain_name = substr(strrchr($_POST['username'], "@"), 1);
                    $isCouponValid = CouponCode::model()->findByAttributes(array("domain"=>$domain_name));
                   
                    if(!empty($isCouponValid)) {
                        $isThisUsed = CouponUsage::model()->findByAttributes(array("email_used"=>$_POST['username']));
                        if(empty($isThisUsed)){ 
                            $cart = Cart::model()->findByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                            $cartAll = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                            $total = 0;
                            foreach ($cartAll as $sum){
                              $total = $total +   $sum->product->price;
                            }
                            
                            if($total >= $isCouponValid->min_value){
                                $model = new CouponUsage;
                                $model->attributes = array(
                                                        "cart_id" => $cart->id,
                                                        "coupon_id" => $isCouponValid->id,
                                                        "email_used" => $_POST['username'],
                                                        "users_new_id" => Yii::app()->user->id,
                                                        "date_created"=> date("Y-m-d h:i:s")
                                                    );
                                if($model->save()){
                                    $resp['status'] = "success";
                                    $amount = $isCouponValid->discount;
                                    switch ($isCouponValid->discount_type){
                                        case 1:
                                            $resp['message'] = "A promo code is successfully applied to your college id. You have received ".$amount."% off discount.";
                                            break;
                                        case 2:
                                            $resp['message'] = "A Discount of Rs.".money($amount)."% have been applied successfully.";
                                            $resp['message'] = "A promo code is successfully applied to your college id. You have received Rs.".money($amount)." off discount.";
                                            break;
                                    }

                                }else {
                                    pr($model->getErrors());
                                    $resp['message'] = "Oops! Some error occured, Please try after some time.";
                                }
                            } else {
                                $resp['message'] = "This coupon code is valid only for minimum cart value of Rs.". money($isCouponValid->min_value).".";
                            }

                        } else {
                             
                            $resp['message'] = "Discount have been availed for this email address.";
                        }
                    }else {
                        $resp['message'] = "This email address is not valid for discount.".$domain_name;
                    }
                } else {
                    foreach($model->getErrors() as $key=>$errors){
                           $resp['message'] = $errors[0];
                    }
                }
            } else {
                 $resp['message'] = "Please enter valid username and password";
            }
            echo json_encode($resp);
            die;
        }
	public function actionIndex(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.home",array());
	}
	public function actionStory(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.story",array());
	}
	
	public function actionStudent(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.student",array());

	}
	public function actionCampus(){
		$this->layout = getCartLayot();
                $model=new CampusAmbassador;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CampusAmbassador']))
		{
                        $_POST['CampusAmbassador']['registeration_date'] = date("Y-m-d h:i:s");
			$model->attributes=$_POST['CampusAmbassador'];
			if($model->save()){
				$this->redirect(array('index','thankscampus'=>1));
                        }
		}
		$this->render("webroot.themes.cart.views.cart.campus",array("model"=>$model));

	}
	public function actionInterview(){
		$this->layout = getCartLayot();
                $model=new InterviewReadyCompetition;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InterviewReadyCompetition']))
		{
                        $_POST['InterviewReadyCompetition']['registeration_date'] = date("Y-m-d h:i:s");
			$model->attributes=$_POST['InterviewReadyCompetition'];
			if($model->save()){
				$this->redirect(array('index','thankscampus'=>1));
                        }
		}
		$this->render("webroot.themes.cart.views.cart.interview",array("model"=>$model));

	}
        public function actionIndustry(){
		$this->layout = getCartLayot();
                $model=new IndustryReadyCompetition;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['IndustryReadyCompetition']))
		{
                        $_POST['IndustryReadyCompetition']['registeration_date'] = date("Y-m-d h:i:s");
			$model->attributes=$_POST['IndustryReadyCompetition'];
			if($model->save()){
				$this->redirect(array('index','thankscampus'=>1));
                        }
		}
		$this->render("webroot.themes.cart.views.cart.industry",array("model"=>$model));

	}
	public function actionDescription($id){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.description",array("id"=>$id));

	}
	public function actionProfesionals(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.profesionals",array());

	}
	public function actionInstitutes(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.institutes",array());

	}
        
        public function actionCart(){
            
            $this->layout = getCartLayot();
            $this->render("webroot.themes.cart.views.cart.cart",array());
        }
        
        public function actionApplypromo(){
            $status = array("status"=>"failure","message"=>"Invalid Reequest");
            if(!empty($_POST)) {
                
                $domain_name = substr(strrchr($_POST['code'], "@"), 1);
                $isCouponValid = CouponCode::model()->findByAttributes(array("domain"=>$domain_name));
                if(!empty($isCouponValid)) {
                    $isThisUsed = CouponUsage::model()->findByAttributes(array("email_used"=>$_POST['code']));
                    if(empty($isThisUsed)){
                        $cart = Cart::model()->findByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                        $cartAll = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                        $total = 0;
                        foreach ($cartAll as $sum){
                          $total = $total +   $sum->product->price;
                        }
                        if($total >= $isCouponValid->min_value){
                            $model = new CouponUsage;
                            $model->attributes = array(
                                                    "cart_id" => $cart->id,
                                                    "coupon_id" => $isCouponValid->id,
                                                    "email_used" => $_POST['code'],
                                                    "users_new_id" => Yii::app()->user->id,
                                                    "date_created"=> date("Y-m-d h:i:s")
                                                );
                            if($model->save()){
                                $status['status'] = "success";
                                $amount = $isCouponValid->discount;
                                switch ($isCouponValid->discount_type){
                                    case 1:
                                        $status['message'] = "A promo code is successfully applied to your college id. You have received ".$amount."% off discount.";
                                        break;
                                    case 2:
                                        $status['message'] = "A Discount of Rs.".money($amount)."% have been applied successfully.";
                                        $status['message'] = "A promo code is successfully applied to your college id. You have received Rs.".money($amount)." off discount.";
                                        break;
                                }
                                
                            }else {
                                pr($model->getErrors());
                                $status['message'] = "Oops! Some error occured, Please try after some time.";
                            }
                        } else {
                            $status['message'] = "This coupon code is valid only for minimum cart value of Rs.". money($isCouponValid->min_value).".";
                        }
                        
                    } else {
                        $status['message'] = "Discount have been availed for this email address.";
                    }
                }else {
                    $status['message'] = "<span>Sorry!</span><br /><span>Currently no coupon is applicable on this Email ID</span><br/><span>Try Login with your College Email ID.</span>";
                }
            }
            echo json_encode($status);die;
        }
        
        public function actionCheckout(){
            if(!isset(Yii::app()->user->id)){
                 $this->redirect(array("site/login"));
            }else {
                $this->redirect(array("cart/checkout","underconst"=>1));
            }
        }


        public function actionAddtocart($id){
//             pr($_COOKIE['products']);
            $this->layout = getCartLayot();
           
            if (isset(Yii::app()->user->id)) {
                $modelPre = Cart::model()->findByAttributes(array(
                    "user_id" =>Yii::app()->user->id,
                    "product_id" =>$id,
                    "status" => 1,
                ));
                if(empty($modelPre)){
                    $model = new Cart();
                    $model->attributes = array(
                        "user_id" =>Yii::app()->user->id,
                        "product_id" =>$id,
                        "status" =>1,
                        "date_created" =>date("Y-m-d h:i:s"),
                    );
                    if($model->save()){
                        $this->redirect(Yii::app()->request->urlReferrer);
                    } else {

                        foreach($model->getErrors() as $key=>$err){
                            $this->errors[$key] = $err;
                        }
                    }
                } else {
                   $this->errors["exist"] = "This product already exist in your cart."; 
                   $this->render("webroot.themes.cart.views.cart.cart",array());
                }
                
                
                
            }else {
//                pr(unserialize(array(1,2,3)));
//                pr(unserialize(serialize(array(1,2,3))));
                if(isset($_COOKIE['products'])){
                    
                    $cookieCart = unserialize($_COOKIE['products']);
                    if(!in_array($id,$cookieCart)){
                        $cookieCart[] = $id;
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ),DIREC);
                        $this->redirect(Yii::app()->request->urlReferrer);
                    } else {
                        $this->errors["exist"] = "This product already exist in your cart."; 
                        $this->render("webroot.themes.cart.views.cart.cart",array());
                    }
                } else {
                    
                    $cookieCart = array($id);
                    setcookie("products", serialize($cookieCart),strtotime( '+30 days' ),DIREC);
                    $this->redirect(Yii::app()->request->urlReferrer);
                }
//                $modelPre = CartIp::model()->findByAttributes(array(
//                    "ip" =>$_SERVER['REMOTE_ADDR'],
//                    "product_id" =>$id,
//                    "status" => 1,
//                ));
//                if(empty($modelPre)){
//                    $model = new CartIp();
//                    $model->attributes = array(
//                        "ip" =>$_SERVER['REMOTE_ADDR'],
//                        "product_id" =>$id,
//                        "status" =>1,
//                        "date_created" =>date("Y-m-d h:i:s"),
//                    );
//                    if($model->save()){
//                        $this->redirect(Yii::app()->request->urlReferrer);
//                    } else {
//
//                        foreach($model->getErrors() as $key=>$err){
//                            $this->errors[$key] = $err;
//                        }
//                    }
//                } else {
//                   $this->errors["exist"] = "This product already exist in your cart."; 
//                   $this->render("webroot.themes.cart.views.cart.cart",array());
//                }
            }
        }
         public function actionRemove($id){
            $this->layout = getCartLayot();
            
            if (isset(Yii::app()->user->id)) {
                $model = Cart::model()->findByAttributes(array(
                    "user_id" =>Yii::app()->user->id,
                    "product_id" =>$id,
                    
                ));
               
                
                if($model->delete()){
                    $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                    $cartID = Cart::model()->findByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                    $coupon = CouponUsage::model()->findByAttributes(array("cart_id" => $cartID->id));
                    if (!empty($coupon)) {
                        $totalAmount = 0;
                        foreach ($cart as $c){
                            $totalAmount = $totalAmount + $c->product->price;
                        }
                        if($coupon->coupon->min_value > $totalAmount){
                            $model = CouponUsage::model()->findByPk($coupon->id);
                            $model->delete();
                        }
                    }

                $this->redirect(Yii::app()->createUrl("cart/cart"));
                } else {
                   pr($model->getErrors());
                    foreach($model->getErrors() as $key=>$err){
                        $this->errors[$key] = $err;
                    }
                }
            }else {
                 if(isset($_COOKIE['products'])){
                    
                    $cookieCart = unserialize($_COOKIE['products']);
                    if(in_array($id,$cookieCart)){
                        $arrFlip = array_flip($cookieCart);
                        unset($arrFlip[$id]);
                        $cookieCart = array_flip($arrFlip);
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ),DIREC);

                    }
                 }
                 $this->redirect(Yii::app()->createUrl("cart/cart"));
            }
        }
         public function actionRemoveCart($p){
            $this->layout = getCartLayot();
            $id = $p;
            if (isset(Yii::app()->user->id)) {
                $model = Cart::model()->findByAttributes(array(
                    "user_id" =>Yii::app()->user->id,
                    "product_id" =>$id,
                    
                ));
               
                
                
                
                
                if($model->delete()){
                    $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                    $cartID = Cart::model()->findByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                    $coupon = CouponUsage::model()->findByAttributes(array("cart_id" => $cartID->id));
                    if (!empty($coupon)) {
                        $totalAmount = 0;
                        foreach ($cart as $c){
                            $totalAmount = $totalAmount + $c->product->price;
                        }
                        if($coupon->coupon->min_value > $totalAmount){
                            $model = CouponUsage::model()->findByPk($coupon->id);
                            $model->delete();
                        }
                    }
                    $this->redirect(Yii::app()->request->urlReferrer."?show_cart=1",array("show_cart"=>1));
                } else {
                   pr($model->getErrors());
                    foreach($model->getErrors() as $key=>$err){
                        $this->errors[$key] = $err;
                    }
                }
            }else {
                 if(isset($_COOKIE['products'])){
                    
                    $cookieCart = unserialize($_COOKIE['products']);
                    if(in_array($id,$cookieCart)){
                        $arrFlip = array_flip($cookieCart);
                        unset($arrFlip[$id]);
                        $cookieCart = array_flip($arrFlip);
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ),DIREC);

                    }
                 }
                 $this->redirect(Yii::app()->request->urlReferrer."?show_cart=1",array("show_cart"=>1));
            }
        }
        public function actionBuynow($id){
             $this->layout = getCartLayot();
            
            if (isset(Yii::app()->user->id)) {
                $modelPre = Cart::model()->findByAttributes(array(
                    "user_id" =>Yii::app()->user->id,
                    "product_id" =>$id,
                    "status" => 1,
                ));
                if(empty($modelPre)){
                    $model = new Cart();
                    $model->attributes = array(
                        "user_id" =>Yii::app()->user->id,
                        "product_id" =>$id,
                        "status" =>1,
                        "date_created" =>date("Y-m-d h:i:s"),
                    );
                    if($model->save()){
                        $this->redirect(Yii::app()->createUrl("cart/cart"));
                    } else {

                        foreach($model->getErrors() as $key=>$err){
                            $this->errors[$key] = $err;
                        }
                    }
                } else {
                   $this->errors["exist"] = "This product already exist in your cart."; 
                   $this->render("webroot.themes.cart.views.cart.cart",array());
                }
                
                
                
            }else {
                $this->redirect(Yii::app()->createUrl("site/login"));
            }
        }

        public function actionRegister(){
            $model = new UsersNew;
            if(isset($_POST['UsersNew']))
            {
                $_POST['UsersNew']['role'] = 1;
                $_POST['UsersNew']['password'] = $_POST['UsersNew']['password'];
                $_POST['UsersNew']['is_verified'] = 0;
                $_POST['UsersNew']['date_created'] = date('Y-m-d h:i:s');
                $model->attributes=$_POST['UsersNew'];
                try {
                    if($model->save()){
                        $subject = "Your Account Has Been Created";
                        $template = getTemplate("register");
                        $name = ucfirst($_POST['UsersNew']['full_name']);
                        $body = str_replace("{{SUBJECT}}", $subject, $template);
                        $body = str_replace("{{NAME}}", $name, $body);
                        $link = Yii::app()->params['url']."cart/verify?id=".$model->id;
                        $body = str_replace("{{LINK}}", $link, $body);
                        $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";
                        $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                        $sentToUser = sendEmail($_POST['UsersNew']['email'], $subject,$body,$headers);
                        $this->refresh(true,"?thankreg=1");
                    } else {
                        pr($model->getErrors());
                    }
                } catch (Exception $ex) {
                    $model->addError('email', 'Email already exist');
                    $this->errors['email'] = 'Email already exist';
                }
            }
            $this->layout = getCartLayot();
            $this->render("webroot.themes.cart.views.cart.register",array('model'=>$model));
        }
       
}
		