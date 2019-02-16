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
                    'actions' => array('captcha','removeCoupon','industry','interview','index', 'view','student',"addtocart","cart","remove","buynow","verify", 
                                        'profesionals','institutes','register',"description","checkout","removeCart","applypromo","story","campus","loginandapply","applygstin","clearcart",
                                        "profile","pastorder","changepassword","checkout","gateway","payusurl","postpayment","paytmsurl"),
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
        private function generateOrderHash($role, $sno){
            if($role == 1){
                return "STU000000".$sno;
            } else{
                return "YPF000000".$sno;
            }
        }
        private function sendOrderMail($params, $status = 1){
            $userData = UsersNew::model()->findByPk(Yii::app()->user->id);
            $link = "";
            $role = "";
            if($status == 1){
                $subjectAdmin = "New Order Recieved";
                $subject = "Your Order Was Successful";
                $template = getTemplate("order_success");
            } else {
                $subjectAdmin = "Order Failed";
                $subject = "Your Order Was Failed";
                $template = getTemplate("order_failure");
                if($userData->role == 1){
                    $link = "https://www.mbatrek.com/students";
                    $role = "Student";
                } else {
                    $link = "https://www.mbatrek.com/professionals";
                    $role = "Young Professionals";
                }

            }

            $body = str_replace("{{ORDER_ID}}", $params['order_id'], $template);
            $body = str_replace("{{AMOUNT}}", money($params['amount']), $body);
            $body = str_replace("{{LIST}}", $params['list'], $body);

            if($status == 2){
                $body = str_replace("{{LINK}}", $link, $body);
                $body = str_replace("{{ROLE}}", $role, $body);
            }

            $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";
            $headers .= "MIME-Version: 1.0\r\n".
                "Content-Type: text/html; charset=UTF-8";

            $sentToUser = sendEmail($params['email'], $subject,$body,$headers);

            $sentToAdmin = sendEmail(Yii::app()->params['adminEmail'], $subjectAdmin,$body,$headers);
            if($sentToUser && $sentToAdmin){
                return true;
            }
        }
        public function actions(){
            return array(
                // captcha action renders the CAPTCHA image displayed on the contact page
                'captcha'=>array(
                    'class'=>'CCaptchaAction',
                    'backColor'=>BACK_COLOR,
                ),
            );
	}
        public function actionGateway(){
            $this->layout = getCartLayot();
            $this->render("webroot.themes.cart.views.cart.gateway",array());
        }

        public function actionPostpayment($status){
            $this->layout = getCartLayot();
            $flash = Yii::app()->user->getFlashes();
            $order = CustomerOrder::model()->findByPk($flash['order_id']);
            if($order->payment_gateway == 1){
                $response = PayuResponse::model()->findByAttributes(array("order_id"=>$order->id));
            } else if($order->payment_gateway == 2){
                $response = PayuResponse::model()->findByAttributes(array("order_id"=>$order->id));
                $responseBack = json_decode($response->payu_response);
                $reason = $responseBack->error_Message;
            }
            if($status == 2){
                $this->render("webroot.themes.cart.views.cart.success");
            } else {

                $this->render("webroot.themes.cart.views.cart.failure",array("reason"=>$reason));
            }
        }
        public function actionPaytmsurl(){

            $order = CustomerOrder::model()->findByAttributes(array("ordfer_hash"=>$_REQUEST['ORDERID']));
            $userData = UsersNew::model()->findByPk(Yii::app()->user->id);
            if(empty($userData)){
                $userData = UsersNew::model()->findByPk($order->user_id);
                $model=new LoginForm;
                $model->attributes = array("username"=>$userData->email,"password"=>$userData->password);
                $model->login();

            }
            //Revoking Previous Cart Items After BuyNow option
            $presetCartItems = Cart::model()->findAllByAttributes(array("user_id" =>Yii::app()->user->id,"status" => 4));
            if(!empty($presetCartItems)){
                foreach($presetCartItems as $presetCartItem){
//                    pr($presetCartItem);
//                    $itemModel = Cart::model()->findByPk($presetCartItem->id);
                    $presetCartItem->attributes = array("status" => 1);
                    $presetCartItem->save();
                }
            }
            $cartData = Cart::model()->findAllByAttributes(array("order_id"=>$order->id));
            switch ($_REQUEST['STATUS']){
                case "TXN_SUCCESS":
                    $status = 2;
                    break;
                default:
                    $status = 3;
                    break;
            }
            $order->attributes = array("status"=>$status);
            if($order->save()){
                $payuModel = new PaytmResponse();
                $payuModel->attributes = array(
                    "order_id" => $order->id,
                    "payu_response" => json_encode($_REQUEST),
                    "date_created" => date("Y-m-d h:i:s"),
                );
                if($payuModel->save()){
                    $list = "";
                    $totalItems = (count($cartData) - 1);
                    foreach($cartData as $key=>$item){
                        $url = str_replace("#","",rtrim($item->product->title));
                        $url = str_replace(" ","-",$url);
                        $url = strtolower($url);
                        if($key != $totalItems){
                            $list .= "<a href='https://mbatrek.com/".$url."' target='_blank'>".$item->product->title.", </a>";
                        } else{
                            $list .= "<a href='https://mbatrek.com/".$url."' target='_blank'>".$item->product->title."</a>";
                        }

                        $itemModel = Cart::model()->findByPk($item->id);
                        $itemModel->attributes = array("status"=>2);
                        if($itemModel->save()){

                        } else{
                            pr($itemModel->getErrors());
                        }
                    }
                    $mailParams = array(
                                        "order_id"=>$order->ordfer_hash,
                                        "email"=>$userData->email,
                                        "amount"=>$order->order_amount,
                                        "list" => $list
                                    );
                    if($status == 2){

                        $this->sendOrderMail($mailParams,1);
                        Yii::app()->user->setFlash('order_id', $order->id);
                        $this->redirect(Yii::app()->createUrl("success"));
                    } else {
                        $this->sendOrderMail($mailParams,2);
                        Yii::app()->user->setFlash('order_id', $order->id);
                        $this->redirect(Yii::app()->createUrl("failure"));
                    }


                } else {
                    pr($payuModel->getErrors());
                }
            } else {
                pr($order->getErrors());
            }
        }
        public function actionPayusurl(){
            $order = CustomerOrder::model()->findByAttributes(array("ordfer_hash"=>$_REQUEST['txnid']));
            $userData = UsersNew::model()->findByPk(Yii::app()->user->id);
            if(empty($userData)){
                $userData = UsersNew::model()->findByPk($order->user_id);
                $model=new LoginForm;
                $model->attributes = array("username"=>$userData->email,"password"=>$userData->password);
                $model->login();
            }
            //Revoking Previous Cart Items After BuyNow option
            $presetCartItems = Cart::model()->findAllByAttributes(array("user_id" =>Yii::app()->user->id,"status" => 4));
            if(!empty($presetCartItems)){
                foreach($presetCartItems as $presetCartItem){
//                    pr($presetCartItem);
//                    $itemModel = Cart::model()->findByPk($presetCartItem->id);
                    $presetCartItem->attributes = array("status" => 1);
                    $presetCartItem->save();
                }
            }
            $cartData = Cart::model()->findAllByAttributes(array("order_id"=>$order->id));
            switch ($_REQUEST['status']){
                case "success":
                    $status = 2;
                break;
                default:
                    $status = 3;
                    break;
            }
            $order->attributes = array("status"=>$status);
            if($order->save()){
                $payuModel = new PayuResponse();
                $payuModel->attributes = array(
                    "order_id" => $order->id,
                    "payu_response" => json_encode($_REQUEST),
                    "date_created" => date("Y-m-d h:i:s"),
                );
                if($payuModel->save()){
                    $list = "";
                    $totalItems = (count($cartData) - 1);
                    foreach($cartData as $key=>$item){
                        $url = str_replace("#","",rtrim($item->product->title));
                        $url = str_replace(" ","-",$url);
                        $url = strtolower($url);
                        if($key != $totalItems){
                            $list .= "<a href='https://mbatrek.com/".$url."' target='_blank'>".$item->product->title.", </a>";
                        } else{
                            $list .= "<a href='https://mbatrek.com/".$url."' target='_blank'>".$item->product->title."</a>";
                        }
                        $itemModel = Cart::model()->findByPk($item->id);
                        $itemModel->attributes = array("status"=>2);
                        if($itemModel->save()){

                        } else{
                            pr($itemModel->getErrors());
                        }
                    }
                    $mailParams = array(
                        "order_id"=>$order->ordfer_hash,
                        "email"=>$userData->email,
                        "amount"=>$order->order_amount,
                        "list" => $list
                    );
                    if($status == 2){
                        $this->sendOrderMail($mailParams,1);
                        Yii::app()->user->setFlash('order_id', $order->id);
                        $this->redirect(Yii::app()->createUrl("success"));
                    } else {
                        $this->sendOrderMail($mailParams,2);
                        Yii::app()->user->setFlash('order_id', $order->id);
                        $this->redirect(Yii::app()->createUrl("failure"));
                    }


                } else {
                    pr($payuModel->getErrors());
                }
            } else {
                pr($order->getErrors());
            }
        }

	    public function actionCheckout($paymentGateWay){
            $this->layout = false;
            $cartData = Cart::model()->findAllByAttributes(array("user_id"=>Yii::app()->user->id,"status"=>1));
            $userData = UsersNew::model()->findByPk(Yii::app()->user->id);
            $order = new CustomerOrder();
            $amount = 0;
            $discount = 0;
            $discountType = 0;
            foreach($cartData as $items){
                $checkCoupon =CouponUsage::model()->findByAttributes(array("cart_id"=>$items->id));
                if($checkCoupon){
                    $discount = $checkCoupon->coupon->discount;
                    $discountType = $checkCoupon->coupon->discount_type;
                }
                $amount = $amount  + $items->product->price;
            }
            if($discount != 0 && $discountType !=0){
                if($discountType  == 1){
                    $amount = $amount - ceil(($amount * $discount)/100);
                } else {
                    $amount = $amount - $discount;
                }
            }
            $order->attributes = array(
                                        "user_id" => Yii::app()->user->id,

                                        "order_amount" => $amount,
                                        "payment_gateway" => $paymentGateWay,
                                        "status" => 1,
                                        "date_created" => date("Y-m-d h:i:s")
                                    );

            if($order->save()) {
                $hash = $this->generateOrderHash($userData->role,$order->id);
                $order->attributes = array("ordfer_hash" => $hash);
                $order->save();
                foreach($cartData as $item){
                    $itemModel = Cart::model()->findByPk($item->id);
                    $itemModel->attributes = array("order_id"=>$order->id);
                    if($itemModel->save()){
                        $attribsArray = array(
                            "transaction_id"=>$order->ordfer_hash,
                            "email"=>$userData->email,
                            "amount"=>$amount,
                            "product_info"=>"MBATrek Subscription",
                            "name"=>$userData->full_name,
                            "mobile"=>$userData->mobile_number,
                        );

                    } else {
                        pr($itemModel->getErrors());
                    }
                    switch ($paymentGateWay){
                        //PayTm
                        case 1:
                            define("merchantMid", "ePBMbS84105354717491");
// Key in your staging and production MID available in your dashboard
                            define("merchantKey", "Ejy%Uaom7f3sDNR@");
// Key in your staging and production merchant key available in your dashboard
                            define("orderId", "order1");
                            define("channelId", "WEB");
                            define("custId", "cust123");
                            define("mobileNo", "7777777777");
                            define("email", "username@emailprovider.com");
                            define("txnAmount", "100.12");
                            define("website", "DEFAULT");
// This is the staging value. Production value is available in your dashboard
                            define("industryTypeId", "Retail");
// This is the staging value. Production value is available in your dashboard
                            define("callbackUrl", "https://localhost/mbt/payment_lib/PaytmKit/pgResponse.php");
                            $paytmParams = array();
                            $paytmParams["MID"] = merchantMid;
                            $paytmParams["ORDER_ID"] = $order->ordfer_hash;
                            $paytmParams["CUST_ID"] = $userData->id;
                            $paytmParams["MOBILE_NO"] = $userData->mobile_number;
                            $paytmParams["EMAIL"] = $userData->email;
                            $paytmParams["CHANNEL_ID"] = channelId;
                            $paytmParams["TXN_AMOUNT"] = $order->order_amount;
                            $paytmParams["WEBSITE"] = website;
                            $paytmParams["INDUSTRY_TYPE_ID"] = industryTypeId;
                            $paytmParams["CALLBACK_URL"] = PAYTM_CALLBACK_URL;
                            $this->render("webroot.themes.cart.views.cart.pytm",array("paytmParams"=>$paytmParams));
                            break;
                        //Payu
                        case 2:
                            $attribsArray['udf5'] = "BOLT_KIT_PHP7";
                            $attribsArray['surl'] =  "https://mbatrek.com/cart/payusurl";
//                                $attribsArray['surl'] = "https://localhost/mbt/cart/payusurl";
                            $hash=hash('sha512', Yii::app()->params['payu_merchant_id'].'|'.$attribsArray['transaction_id'].'|'.$attribsArray['amount'].'|'.$attribsArray['product_info'].'|'.$attribsArray['name'].'|'.$attribsArray['email'].'|||||'.$attribsArray['udf5'].'||||||'.Yii::app()->params['payu_salt']);
                            $attribsArray['hash'] = $hash;
                            $this->render("webroot.themes.cart.views.cart.payu",array("params"=>$attribsArray));
                            break;
                    }
                }

            }else{
                pr($order->getErrors());
            }

        }
	    public function actionClearcart(){
            if(isset(Yii::app()->user->id)){
                $items = Cart::model()->findAllByAttributes(array("user_id"=>Yii::app()->user->id,"status"=>1));
                if(!empty($items)){
                    foreach ($items as $item){
                        $model = Cart::model()->findByPk($item->id);
                        $model->delete();
                    }
                }
            }else{
                if(isset($_COOKIE['products'])){
                    setcookie("products",$_COOKIE['products'],strtotime( '-30 days' ),DIREC);
                }
            }
            $this->redirect(Yii::app()->request->urlReferrer);
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
		    foreach($user->getErrors() as $key=>$err){
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
                    $cookieCart = unserialize($_COOKIE['products']);
                    $criteria = new CDbCriteria;
                    $criteria->addInCondition("id", $cookieCart);
                    $products = Products::model()->findAll($criteria);

                    foreach($products as $product){
                        $modelPre = Cart::model()->findByAttributes(array(
                            "user_id" =>Yii::app()->user->id,
                            "product_id" =>$product->id,
                            "status" => 1,
                        ));

                        if(empty($modelPre)){
                            $modelCart = new Cart();
                            $modelCart->attributes = array(
                                "user_id" =>Yii::app()->user->id,
                                "product_id" =>$product->id,
                                "status" =>1,
                                "date_created" =>date("Y-m-d h:i:s"),
                            );
                            if($modelCart->save()){
//                                        $this->redirect(Yii::app()->request->urlReferrer);
                            } else {
                                foreach($modelCart->getErrors() as $key=>$err){

                                    $this->errors[$key] = $err[0];
                                    $resp['message'] = "Oops! Some error occured, Please try after some time.";
                                    die;
                                }
                            }
                        } 
                    }
                    $domain_name = substr(strrchr($_POST['username'], "@"), 1);
                    $isCouponValid = CouponCode::model()->findByAttributes(array("domain"=>$domain_name));
                   
                    if(!empty($isCouponValid)) {
//                        $isThisUsed = CouponUsage::model()->findByAttributes(array("email_used"=>$_POST['username']));
                        $isThisUsed = false;
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
                                            $resp['message'] = "You have successfully received ".$amount."% off on your cart.";
                                            break;
                                        case 2:
                                            $resp['message'] = "A Discount of Rs.".money($amount)."% have been applied successfully.";
                                            $resp['message'] = "You have successfully received Rs.".money($amount)." off on your cart.";
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
                            $resp['status'] = "success";
                            $resp['message'] = "Discount have been availed for this email address.";
                        }
                    }else {
                        $resp['message'] = "This email address is not valid for discount.".$domain_name;
                    }
                } else {
                    foreach($model->getErrors() as $key=>$errors){
                           $resp['message'] = $errors[0];
                    }
                    $resp['status'] = "loginfailed";
                }
            } else {
                 $resp['message'] = "Please enter valid username and password";
            }
            echo json_encode($resp);
            die;
        }

    public function actionApplygstin(){
        $resp = array("status"=>"failure","message" => "Opps, that didn't work please try again");
        $cart = Cart::model()->findByAttributes(array("user_id"=>Yii::app()->user->id));
        if (!empty($cart)){
            $cart->attributes = array("gstin"=>$_POST['gstin']);
            if($cart->save()){
                $resp = array("status"=>"success","message" => "GSTIN Applied successfully");
            }else {
//                $error = json_encode($cart->getErrors());
                $error = "Oops! that didn't work, please try again.";
                $resp['message'] = $error;
            }
        }
        echo json_encode($resp);
        die;
    }

	public function actionIndex(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.home",array());
	}
	public function actionStory($subtype=1){
		$this->layout = getCartLayot();
        $criteria=new CDbCriteria();
//        $criteria->order = "date_updated desc";
        $criteria->addCondition("sub_type = ".$subtype);
        $models=SuccessStory::model()->findAll($criteria);


		$this->render("webroot.themes.cart.views.cart.story",array("models"=>$models,"subtype"=>$subtype));
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

			    //Sending Mail
                $subject = "MBAtrek | Campus Ambassador | Registration";
                $template = getTemplate("ca");
                $body = str_replace("{{SUBJECT}}", $subject, $template);

                $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                    "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";
                $headers .= "MIME-Version: 1.0\r\n".
                    "Content-Type: text/html; charset=UTF-8";
                //Sending To User
                $sentToUser = sendEmail($_POST['CampusAmbassador']['email_id'], $subject,$body,$headers);
                //Sending To Admin
                $subject = "MBAtrek | New Campus Ambassador | Registration";
                $sentToAdmin = sendEmail(Yii::app()->params['adminEmail'], $subject,$body,$headers);


				$this->redirect(array('index','thankscampus'=>1));
            } else {
                foreach ($model->getErrors() as $error){
                    $this->errors['email'] = $error[0];
                }
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
                $subject = "MBAtrek | #InterviewReady | New Registration";
                $template = getTemplate("industry_ready");

//                                $body = str_replace("{{SUBJECT}}", $subject, $template);
//                                $body = str_replace("{{NAME}}", $name, $body);
//                                $link = Yii::app()->params['url']."cart/verify?id=".$model->id;
//                                $body = str_replace("{{LINK}}", $link, $body);
                $body = $template;
                $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                    "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                $headers .= "MIME-Version: 1.0\r\n".
                    "Content-Type: text/html; charset=UTF-8";
                $sentToUser = sendEmail($_POST['InterviewReadyCompetition']['email_id'], $subject,$body,$headers);
                $this->redirect(array('index','thanksinterview'=>1));
                        } else {
                            foreach ($model->getErrors() as $error){
                                $this->errors['email'] = $error[0];
                            }
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
                $subject = "MBAtrek | #IndustryREADY | New Registration";
                $template = getTemplate("industry_ready");

//                                $body = str_replace("{{SUBJECT}}", $subject, $template);
//                                $body = str_replace("{{NAME}}", $name, $body);
//                                $link = Yii::app()->params['url']."cart/verify?id=".$model->id;
//                                $body = str_replace("{{LINK}}", $link, $body);
                $body = $template;
                $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                    "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                $headers .= "MIME-Version: 1.0\r\n".
                    "Content-Type: text/html; charset=UTF-8";
                $sentToUser = sendEmail($_POST['IndustryReadyCompetition']['email_id'], $subject,$body,$headers);
                $sentToUser = sendEmail($_POST['IndustryReadyCompetition']['email_Id_1'], $subject,$body,$headers);
                $sentToUser = sendEmail($_POST['IndustryReadyCompetition']['email_Id_2'], $subject,$body,$headers);
				$this->redirect(array('index','thanksindustry'=>1));
                        } else {
                            foreach ($model->getErrors() as $error){
                                $this->errors['email'] = $error[0];
                            }
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
                //Only Login User can use his email as acoupon
                $userEmail = UsersNew::model()->findByPk( Yii::app()->user->id);
                
                if(!empty($isCouponValid)) {
                    if($userEmail->email != $_POST['code']){
                        $status['message'] = "Please login with ".$_POST['code']." to avail discount.";
                        echo json_encode($status);die;
                    }
//                    $isThisUsed = CouponUsage::model()->findByAttributes(array("email_used"=>$_POST['code']));
                    $isThisUsed = false;
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
//                                        $status['message'] = "A promo code is successfully applied to your college id. You have received ".$amount."% off discount.";
                                        $status['message'] = "You have successfully received ".$amount."% off on your cart.";
                                        break;
                                    case 2:
//                                        $status['message'] = "A Discount of Rs.".money($amount)."% have been applied successfully.";
//                                        $status['message'] = "A promo code is successfully applied to your college id. You have received Rs.".money($amount)." off discount.";
                                        $status['message'] = "You have successfully received Rs".money($amount)." off on your cart.";
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
                    $status['status'] = "notapplied";
                }
            }
            echo json_encode($status);die;
        }
        
//        public function actionCheckout(){
//            if(!isset(Yii::app()->user->id)){
//                 $this->redirect(array("site/login"));
//            }else {
//                $this->redirect(array("cart/checkout","underconst"=>1));
//            }
//        }


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
                   $this->errors["exist"] = "This product already exists in your cart.";
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
                        $this->errors["exist"] = "This product already exists in your cart.";
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
            #Setting Temp Unavailable To All other items in cart
            $presetCartItems = Cart::model()->findAllByAttributes(array("user_id" =>Yii::app()->user->id,"status" => 1));
            if(!empty($presetCartItems)){
                foreach($presetCartItems as $presetCartItem){
//                    pr($presetCartItem);
//                    $itemModel = Cart::model()->findByPk($presetCartItem->id);
                    $presetCartItem->attributes = array("status" => 4);
                    if(!$presetCartItem->save()){
                        pr($presetCartItem->getErrors());
                    }
                }
            }

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
                        $this->redirect(Yii::app()->createUrl("choose-payment-gateway"));
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
                if(isset($_COOKIE['products'])){

                    $cookieCart = unserialize($_COOKIE['products']);
                    if(!in_array($id,$cookieCart)){
                        $cookieCart[] = $id;
                        setcookie("products", serialize($cookieCart),strtotime( '+30 days' ),DIREC);
                    } else {
                        $this->errors["exist"] = "This product already exist in your cart.";
                        $this->render("webroot.themes.cart.views.cart.cart",array());
                    }
                } else {

                    $cookieCart = array($id);
                    setcookie("products", serialize($cookieCart),strtotime( '+30 days' ),DIREC);
                }
                $this->redirect(Yii::app()->createUrl("site/login",array("b"=>1)));
            }
        }

        public function actionRegister(){
            $model = new UsersNew;
            if(isset($_POST['UsersNew']))
            {
//                $_POST['UsersNew']['email'] = $_POST['UsersNew']['email'].time();
                $_POST['UsersNew']['password'] = $_POST['UsersNew']['password'];
                $_POST['UsersNew']['is_verified'] = 0;
                $_POST['UsersNew']['date_created'] = date('Y-m-d h:i:s');
                if(!empty($_POST['UsersNew']['name_of_college']) && $_POST['UsersNew']['role'] == 1){
                    $_POST['UsersNew']['name_of_college_company'] = $_POST['UsersNew']['name_of_college'];
                }
                if(!empty($_POST['UsersNew']['name_of_company']) && $_POST['UsersNew']['role'] == 2){
                    $_POST['UsersNew']['name_of_college_company'] = $_POST['UsersNew']['name_of_company'];
                }
                $model->attributes=$_POST['UsersNew'];
               
                try {
                   
                 
                    if($model->save()){
                        if($_POST["UsersNew"]["role"] == 1){
                            $basket =  "https://mbatrek.com/students";
                        } else {
                            $basket =  "https://mbatrek.com/professionals";
                        }
                        $subject = "MBAtrek | New Account | Verification";
                        $template = getTemplate("verify");
                        $name = ucfirst($_POST['UsersNew']['full_name']);
                        $body = str_replace("{{SUBJECT}}", $subject, $template);
                        $body = str_replace("{{NAME}}", $name, $body);
                        $link = Yii::app()->params['url']."cart/verify?id=".$model->id;
                        $body = str_replace("{{LINK}}", $link, $body);
                        $body = str_replace("{{BASKET}}", $basket, $body);

                        $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                            "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";
                        $headers .= "MIME-Version: 1.0\r\n".
                            "Content-Type: text/html; charset=UTF-8";

                        $sentToUser = sendEmail($_POST['UsersNew']['email'], $subject,$body,$headers);

                        $sentToAdmin = sendEmail(Yii::app()->params['adminEmail'], $subject,$body,$headers);
//                        $this->refresh(true,"?thankreg=1");
                        $this->redirect(Yii::app()->createUrl("cart/index",array("thankreg"=>1)));
                    } else {
                        foreach ($model->getErrors() as $error){
                            $this->errors['email'] = $error[0];
                        }
                    }
                } catch (Exception $ex) {
                    $model->addError('emailexist', 'This Email ID is already registered with us.Kindly Login to access your account');
                    $this->errors['emailexist'] = 'This Email ID is already registered with us.Kindly Login to access your account';
                }
            }
            $this->layout = getCartLayot();
            $this->render("webroot.themes.cart.views.cart.register",array('model'=>$model));
        }

        public function actionProfile(){
            $model = UsersNew::model()->findByPk(Yii::app()->user->id);
            if(!empty($_POST['UsersNew'])){
                $model->attributes = $_POST['UsersNew'];
                if($model->save()){
                    $this->refresh(true,"?thankprofile=1");
                } else {
                    $errors = json_encode($model->getErrors());
                    Yii::log("Error: Profile Update Failure: ".$errors);
                }
            }
            $this->render("webroot.themes.cart.views.cart.profile",array('model'=>$model));
        }

        public function actionPastorder(){
            $model = new UsersNew();
            $this->render("webroot.themes.cart.views.cart.pastorder",array('model'=>$model));
        }

        public function actionChangepassword(){
            $model = UsersNew::model()->findByPk(Yii::app()->user->id);
            if(!empty($_POST['UsersNew'])){
                if($_POST['UsersNew']['old- password'] != $model->password){
                    $model->addError('passwordmatch', 'Please enter correct old password.');
                    $this->errors['passwordmatch'] = 'Please enter correct old password.';
                } else{
                    $model->attributes = $_POST['UsersNew'];
                    if($model->save()){
                        Yii::app()->user->setFlash('thankcp', 1);
                        $this->refresh(true);
                    } else {
                        $errors = json_encode($model->getErrors());
                        Yii::log("Error: Profile Update Failure: ".$errors);
                    }
                }

            }
            $this->render("webroot.themes.cart.views.cart.changepassword",array('model'=>$model));
        }

}

