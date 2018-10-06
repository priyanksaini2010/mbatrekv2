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
                'actions' => array('index', 'view','student',"addtocart","cart","remove","buynow","verify", 
                                    'profesionals','institutes','register',"description","checkout","removeCart","applypromo"),
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
	public function actionVerify($id){
	    $user = UsersNew::model()->findByPk($id);
	    if(empty($user)){
		$this->errors["error"] = "You are not registered with us!";
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.home",array());
	    } else {
		$user->attributes = array("is_verified"=>1);
		if($user->save()){
		    $this->errors["error"] = "Your account has been verified.";
		    $this->layout = getCartLayot();
		    $this->render("webroot.themes.cart.views.cart.home",array());
		}else {
		    foreach($model->getErrors() as $key=>$err){
                            $this->errors[$key] = $err;
		    }
		}
		
	    }
	}
	public function actionIndex(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.home",array());
	}
	
	public function actionStudent(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.student",array());

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
                            $status['message'] = "Discount have been applied successfully.";
                        }else {
                            pr($model->getErrors());
                            $status['message'] = "Oops! Some error occured, Please try after some time.";
                        }
                    } else {
                        $status['message'] = "Discount have been availed for this email address.";
                    }
                }else {
                    $status['message'] = "This email address is not valid for discount.".$domain_name;
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
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ));
                        $this->redirect(Yii::app()->request->urlReferrer);
                    } else {
                        $this->errors["exist"] = "This product already exist in your cart."; 
                        $this->render("webroot.themes.cart.views.cart.cart",array());
                    }
                } else {
                    
                    $cookieCart = array($id);
                    setcookie("products", serialize($cookieCart),strtotime( '+30 days' ));
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
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ));

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
                    $this->redirect(Yii::app()->createUrl("cart/index"));
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
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ));

                    }
                 }
                 $this->redirect(Yii::app()->createUrl("cart/index"));
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
                $_POST['UsersNew']['password'] = md5($_POST['UsersNew']['password']);
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
                        $link = Yii::app()->params['url']."index.php?r=cart/verify&id=".$model->id;
                        $body = str_replace("{{LINK}}", $link, $body);
                        $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";
                        $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                        $sentToUser = sendEmail($_POST['UsersNew']['email'], $subject,$body,$headers);
                        $this->refresh(true,"&thankreg=1");
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
		