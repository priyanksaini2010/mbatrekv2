<?php
ob_start();
class SiteController extends Controller
{
        public $errors = array();
        public $success = array();
	/**
	 * Declares class-based actions.    
	 */
	 
	 public function __construct($id) {
        parent::__construct($id);
   		$this->layout = getCartLayot();
    }
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            $this->pageTitle = "Home";
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
    public function actionRetrieve(){
        $model = new UsersNew;
        if(!empty($_POST['UsersNew'])){
            $keys = array_keys($_GET);
                $user_id = base64_decode($_GET['id']);
            $user = UsersNew::model()->findByPk($user_id);
            if (!empty($user)) {
                $user->attributes = array("password"=>$_POST['UsersNew']['password']);
                if($user->save()){
                    Yii::app()->user->setFlash('resetdone', 1);
                    $this->redirect(Yii::app()->createUrl("site/login"));
                } else{
                    pr($user->getErrors());
                }
            } else {
                $this->redirect(Yii::app()->createUrl("site/error"));
            }
        }
        $this->render('retrieve',  array('model'=>$model));
    }
        /**
         * Register Industry/Institute
         */
	public function actionRegister()
	{
            $model = new Users;
            if(isset($_POST['Users']))
            {
                    $_POST['Users']['username'] = $_POST['Users']['email'];
                    $_POST['Users']['role'] = 3;
                    $_POST['Users']['is_approve'] = 1;
                    $_POST['Users']['is_verified'] = 0;
                    $_POST['Users']['date_registered'] = "'".date('Y-m-d h:i:s')."'";
                    $model->attributes=$_POST['Users'];
                    try {
                    if($model->save()){
                        
                                $modelInstitute = new Industries;
                                $modelInstitute->attributes = array("name" => $_POST['Users']['institute_industry_name'],"university_id" => 0);
                                $modelInstitute->save();
                                $modelInUser = new IndustryUser;
                                $modelInUser->attributes = array("industry_id" => $modelInstitute->id,"user_id" => $model->id);
                                $modelInUser->save(); 
                                $subject = "Your Account Has Been Created";
				$template = getTemplate("industry");
				$name = ucfirst($_POST['Users']['fname'])." ".ucfirst($_POST['Users']['lname']);
				$body = str_replace("{{SUBJECT}}", $subject, $template);
				$body = str_replace("{{NAME}}", $name, $body);
				$link = Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id;
				$body = str_replace("{{LINK}}", $link, $body);
				
//                                $body = "Hello,<br/><br/>"
//                                        . "Your Account has been created .<br/><br/ >"
//                                        . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id."'>here</a>  to verify.<br/><br/ >"
//                                        . "Thanks,<br/ >"
//                                        . "MBATrek";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                                $this->refresh(true,"&thankreg=1");
                        }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                            $this->errors['email'] = 'Email already exist';
                    }
            }
            $this->render('pages/industry_register',  array('model'=>$model));
	}
        
        public function actionForgot(){
            $model = new UsersNew;
            if (!empty($_POST)) {
                $find = UsersNew::model()->findByAttributes(array("email" => $_POST['UsersNew']['email']));
                if (empty($find)) {
                    $this->redirect(array("site/forgot","thankforin"=>1));
                } else {
                    $subject = "MBATrek | Password Recovery";
//                    $body = "Hello,<br/><br/>"
//                            . "Your Password is - ".$find->password."<br/><br/>"
//                            . "<br/><br/ >"
//                            . "Thanks,<br/ >"
//                            . "MBATrek";
		    $template = getTemplate("forget");
				$name = ucfirst($find->full_name);
				$body = str_replace("{{SUBJECT}}", $subject, $template);
				$body = str_replace("{{NAME}}", $name, $body);
//				$link = Yii::app()->createUrl("site/retrieve",array("id"=>base64_encode($find->id)));
				$link = "https://mbatrek.com/site/retrieve?id=".base64_encode($find->id);
				$body = str_replace("{{PASSWORD}}", $link, $body);

                    $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                            "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                    $headers .= "MIME-Version: 1.0\r\n".
                                "Content-Type: text/html; charset=UTF-8";
//		    pr($_POST);
                    $sentToUser = sendEmail($_POST['UsersNew']['email'], $subject,$body,$headers);
                    $this->redirect(array("site/forgot","thankfor"=>1));
                }
            }
            $this->render('forgot',  array('model'=>$model));
        }
        
	public function actionRegisterinstitute()
	{
            $model = new Users;
            if(isset($_POST['Users']))
            {
                    $_POST['Users']['username'] = $_POST['Users']['email'];
                    $_POST['Users']['role'] = 2;
                    $_POST['Users']['is_approve'] = 1;
                    $_POST['Users']['date_registered'] = "'".date('Y-m-d h:i:s')."'";
                    $_POST['Users']['is_verified'] = 0;
                    $model->attributes=$_POST['Users'];
                    try {
                    if($model->save()){
                                $modelInstitute = new Institutes;
                                $modelInstitute->attributes = array("name" => $_POST['Users']['institute_industry_name'],"university_id" => 0);
                                $modelInstitute->save();
                                $modelInUser = new InstituteUser;
                                $modelInUser->attributes = array("institute_id" => $modelInstitute->id,"user_id" => $model->id);
                                $modelInUser->save();
                                $subject = "Your Account Has Been Created";
				$template = getTemplate("institute");
				$name = ucfirst($_POST['Users']['fname'])." ".ucfirst($_POST['Users']['lname']);
				$body = str_replace("{{SUBJECT}}", $subject, $template);
				$body = str_replace("{{NAME}}", $name, $body);
				$link = Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id;
				$body = str_replace("{{LINK}}", $link, $body);
//                                $body = "Hello,<br/><br/>"
//                                        . "Your Account has been created .<br/><br/ >"
//                                        . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id."'>here</a>  to verify.<br/><br/ >"
//                                        . "Thanks,<br/ >"
//                                        . "MBATrek";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                                
                                $this->success[] = true;
                                $this->refresh(true,"&thankreg=1");
                    }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                            $this->errors['email'] = 'Email already exist';
                    }
                    
            }
            $this->render('pages/industry_register',  array('model'=>$model));
	}
        
        public function actionPayment($params){
            $this->layout = false;
            $this->render('pages/payment',  array('params'=>$params));
        }
        public function actionPaymentretry($params){
            $orderDetails = SubscriptionPayment::model()->findByAttributes(array("user_id"=>$params));
            $this->render('pages/paymentretry',  array('params'=>$params,"orderDetails"=>$orderDetails));
        }
        public function actionPaymentsurl(){
            $order = SubscriptionPayment::model()->findByAttributes(array("order_id"=>$_REQUEST['ORDERID']));
            if (!empty($order)) {
                $modelOrder = SubscriptionPayment::model()->findByPk($order->id);
                $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum);
                if ($isValidChecksum) {
                    switch($_REQUEST['STATUS']){
                        case "TXN_SUCCESS" :
                            $status = 1;
                            $responseMessage = "Transaction Success";
                            break;
                        default :
                            $status = 2;
                            $responseMessage = $_REQUEST['RESPMSG'];
                            break;
                    }
                } else {
                    $status = 2;
                    $responseMessage = "Checksum Failed";
                }
                
                $modelOrder->attributes = array(
                    "response_message" => $responseMessage,
                    "status" => $status,
                    "paytm_response" => json_encode($_REQUEST)
                );
                if($modelOrder->save()) {
                    $model = Users::model()->findByPk($modelOrder->user_id);
                    $modelStudent = Students::model()->findByAttributes(array("user_id"=>$modelOrder->user_id));
                    if($status == 1){
                        $model->attributes = array("payment_status" => 2);
                        if($model->save()) {
                            //Sendin Mail
                            $subject = "Your Account Has Been Created";
                            $template = getTemplate("student");
                            $body = str_replace("{{SUBJECT}}", $subject, $template);
                            $body = str_replace("{{NAME}}", $modelStudent->name, $body);
                            $link = Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id;
                            $body = str_replace("{{LINK}}", $link, $body);
                            $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                                "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                            $headers .= "MIME-Version: 1.0\r\n".
                                        "Content-Type: text/html; charset=UTF-8";

                            $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                            $this->redirect($this->createUrl("site/registerstudent",array("thankreg"=>1)));
                        } else {
                            pr($model->getErrors());
                        }
                        
                    } else {
                        $model->attributes = array("payment_status" => 3);
                        if($model->save()) {
                            $this->redirect($this->createUrl("site/paymentretry",array("params"=>$modelOrder->user_id)));
                        } else {
                            pr($model->getErrors());
                        }
                    }
                } else {
                    pr($modelOrder->getErrors());
                }
            } else {
                $this->redirect($this->createUrl("site/registerstudent"));
            }
        }
        
        /**
         * Register Student
         */
	public function actionRegisterstudent()
	{
            $model = new Users;
            if(isset($_POST['Users']))
            {
                    
                    $_POST['Users']['username'] = $_POST['Users']['email'];
                    $_POST['Users']['role'] = 1;
                    $_POST['Users']['is_approve'] = 1;
                    $_POST['Users']['is_verified'] = 0;
                    $_POST['Users']['date_registered'] = date('Y-m-d h:i:s');
                    $_POST['Users']['dob'] = $_POST['example10'];
                    $model->attributes=$_POST['Users'];
                    
                    try {
                    if($model->save()){
                        $modelStudent = new Students;
                        $modelStudent->attributes = array(
                                        "name" =>  $_POST['Users']["fname"]." ".$_POST['Users']["lname"],
                                        "institute_batch_id" =>  $_POST['Users']['batch'],
                                        "user_id" => $model->id,
                                        "profile_json" => json_encode(array()),
                                    );
                        $modelStudent->save();
                        if ($model->subscription != "" && $model->subscription > 1){
                            $model = Users::model()->findByPk($modelStudent->user_id);
                            $model->attributes= array("payment_status" => 1);
                            if($model->save()) {
                                $this->redirect($this->createUrl("site/payment",array("params"=>  $model->id)));
                            } else {
                                 pr($model->getErrors());
                            }
                            
                        }
                        $subject = "Your Account Has Been Created";
			$template = getTemplate("student");
			$body = str_replace("{{SUBJECT}}", $subject, $template);
			$body = str_replace("{{NAME}}", $modelStudent->name, $body);
			$link = Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id;
			$body = str_replace("{{LINK}}", $link, $body);
//                                $body = "Hello,<br/><br/>"
//                                        . "Your Account has been created .<br/><br/ >"
//                                        . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id."'>here</a>  to verify.<br/><br/ >"
//                                        . "Thanks,<br/ >"
//                                        . "MBATrek";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                                $this->success[] = true;
                                $this->refresh(true,"?thankreg=1");
                    
                    }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                             $this->errors['email'] = 'Email already exist';
                    }
            }
             
            $this->render('pages/mba_signup_student',  array('model'=>$model));
	}
        /**
         * Register Student
         */
	public function actionRegisterstudentms()
	{
            $model = new Users;
            if(isset($_POST['Users']))
            {
                    $_POST['Users']['username'] = $_POST['Users']['email'];
                    $_POST['Users']['role'] = 1;
                    $_POST['Users']['is_approve'] = 1;
                    $_POST['Users']['is_verified'] = 0;
                    $_POST['Users']['date_registered'] = date('Y-m-d h:i:s');
                    $_POST['Users']['dob'] = $_POST['example10']; 
                    $model->attributes=$_POST['Users'];
                    try {
                    if($model->save()){
                        $modelStudent = new Students;
                        $modelStudent->attributes = array(
                                        "name" =>  $_POST['Users']["fname"]." ".$_POST['Users']["lname"],
                                        "institute_batch_id" =>  $_POST['Users']['batch'],
                                        "user_id" => $model->id,
                                        "profile_json" => json_encode(array()),
                                    );
                        $modelStudent->save();
                        if ($model->subscription != "" && $model->subscription > 1){
                            $model = Users::model()->findByPk($modelStudent->user_id);
                            $model->attributes= array("payment_status" => 1);
                            if($model->save()) {
                                $this->redirect($this->createUrl("site/payment",array("params"=>  $model->id)));
                            } else {
                                 pr($model->getErrors());
                            }
                            
                        }
                        $subject = "Your Account Has Been Created";
			$template = getTemplate("student");
			$body = str_replace("{{SUBJECT}}", $subject, $template);
			$body = str_replace("{{NAME}}", $modelStudent->name, $body);
			$link = Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id;
			$body = str_replace("{{LINK}}", $link, $body);
//                                $body = "Hello,<br/><br/>"
//                                        . "Your Account has been created .<br/><br/ >"
//                                        . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id."'>here</a>  to verify.<br/><br/ >"
//                                        . "Thanks,<br/ >"
//                                        . "MBATrek";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                        $this->success[] = true;
                       $this->refresh(true,"?thankreg=1");
                    
                    }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                             $this->errors['email'] = 'Email already exist';
                    }
            }
            $this->render('pages/ms_signup_student',  array('model'=>$model));
	}
        /**
         * Register Student
         */
	public function actionRegisterstudentgrand()
	{
            $model = new Users;
            if(isset($_POST['Users']))
            {
                    $_POST['Users']['username'] = $_POST['Users']['email'];
                    $_POST['Users']['role'] = 1;
                    $_POST['Users']['is_approve'] = 1;
                    $_POST['Users']['is_verified'] = 0;
                    $_POST['Users']['dob'] = $_POST['example10'];
                    $_POST['Users']['date_registered'] = date('Y-m-d h:i:s');
                    $model->attributes=$_POST['Users'];
                    try {
                    if($model->save()){
                        $subject = "Your Account Has Been Created";
                                $body = "Hello,<br/><br/>"
                                        . "Your Account has been created .<br/><br/ >"
                                        . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$model->id."'>here</a>  to verify.<br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                        $this->success[] = true;
                        $this->refresh(true,"&thankreg=1");
                    
                    }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                             $this->errors['email'] = 'Email already exist';
                    }
            }
            $this->render('pages/grandexplore_signup_student',  array('model'=>$model));
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionDownload($id = null, $category_id = null) 
	{
            $this->pageTitle = "Home";
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            $model = new EbroucherDownloadForm();
            if(isset($_POST['EbroucherDownloadForm']))
            {
                    $model->attributes=$_POST['EbroucherDownloadForm'];
                    if($model->save() && $category_id!= null){
                        $url = Yii::app()->createAbsoluteUrl("site/dowloadall", array("category_id"=>$category_id));
                        $data = array("url" => $url);
                        echo json_encode($data);
                        exit;
//                        echo '<script>window.open("'.$url.'");</script>';
                    }else if($model->save() && $id!= null){
                        $url = Yii::app()->createAbsoluteUrl("site/downladone", array("id"=>$id));
                        $data = array("url" => $url);
                        echo json_encode($data);
                        exit;
//                        echo '<script>window.open("'.$url.'");</script>';
//                        $this->redirect(Yii::app()->createUrl('site/index'));
                    } else {
                        $data = array("url" => $url);
                        echo json_encode($data);
                        exit;
                    }
                        
            } 
            $this->render('download',array('model'=>$model));
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionDownladone($id)
	{
            
            $model = Ebrouchers::model()->findByAttributes(array('id'=>$id));

            $basename = basename($model->file);
            $filename =  getcwd().'/assets/eBrouchers/' . $basename; // don't accept other directories
            
            $mime = ($mime = getimagesize($filename)) ? $mime['mime'] : $mime;
            $size = filesize($filename);
            $fp   = fopen($filename, "rb");
            if (!($mime && $size && $fp)) {
              // Error.
//              return;
            }

            header("Content-type: " . $mime);
            header("Content-Length: " . $size);
            // NOTE: Possible header injection via $basename
            header("Content-Disposition: attachment; filename=" . $basename);
            header('Content-Transfer-Encoding: binary');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            fpassthru($fp);
            flush();
            
	}
        /* creates a compressed zip file */
        public function create_zip($files = array(), $destination = '', $overwrite = false) {
                //if the zip file already exists and overwrite is false, return false
                if (file_exists($destination) && !$overwrite) {
                    return false;
                }
                //vars
                $valid_files = array();
                //if files were passed in...
                if (is_array($files)) {
                    //cycle through each file
                    foreach ($files as $file) {
                        //make sure the file exists
                        if (file_exists($file)) {
                            $valid_files[] = $file;
                        }
                    }
                }
                //if we have good files...
                if (count($valid_files)) {
                    //create the archive
                    $zip = new ZipArchive();
                    if ($zip->open($destination, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
                        return false;
                    }
                    //add the files
                    foreach ($valid_files as $file) {
                        $zip->addFile($file, $file);
                    }
                    //debug
                    //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
                    //close the zip -- done!
                    $zip->close();

                    //check to make sure the file exists
                    return file_exists($destination);
                } else {
                    return false;
                }
            }

            /**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionDowloadall($category_id)
	{
            $model = Ebrouchers::model()->findAllByAttributes(array('category_id'=>$category_id));
            foreach ($model as $files){
                $filesall[] = getcwd().'/assets/eBrouchers/' .$files->file;
            }
            $destination = 'downlaod.zip';
            $this->create_zip($filesall, $destination);
            $file_name = basename($destination);

            header("Content-Type: application/zip");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Length: " . filesize($destination));

            readfile($yourfile);
            exit;
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout = getCartLayot();
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
                
		if(isset($_POST['LoginForm']))
		{
                        
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
//                        pr(md5($_POST['LoginForm']['password']));
			if($model->validate() && $model->login()){
//                            $model2 = Users::model()->findByPk(Yii::app()->user->id);
//			    $model2->attributes=array("login_count"=>($model2->login_count+1));
//			    $model2->save(); 
                            
                            $cookieCart = unserialize($_COOKIE['products']);
                            $criteria = new CDbCriteria;
                            $criteria->addInCondition("id", $cookieCart);
                            $products = Products::model()->findAll($criteria);
                            setcookie('products', null, -1, DIREC);
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
                                            
                                        }
                                        $this->render("webroot.themes.cart.views.cart.login",array('model'=>$model));
                                        
                                    }
                                } 
                            }
                            if (Yii::app()->user->admin == 0) {
                                $this->redirect(Yii::app()->createUrl('/usersNew/admin',array("role"=>1)));
                            }  else {
                                if($_REQUEST['b'] == 1){
                                    $this->redirect(Yii::app()->createUrl("choose-payment-gateway"));
                                }else {
                                    $this->redirect(Yii::app()->createUrl('cart/index'));
                                }

                            }
                        } else {
                            foreach($model->getErrors() as $key=>$errors){
                                $this->errors[$key]  = $errors[0];
                            }
                        }
		}
		// display the login form
		$this->render("webroot.themes.cart.views.cart.login",array('model'=>$model));
			
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
//                $model = Users::model()->findByPk(Yii::app()->user->id);
                Yii::app()->user->logout();
//                $model->attributes=array("last_login"=>date("Y-m-d h:i:s"));
//                $model->save(); 
		
		$this->redirect(Yii::app()->homeUrl);
	}
        
        /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionBlogs()
	{  
            $criteria=new CDbCriteria();
            $criteria->order = "date_updated desc";
            if(isset($_GET['cat_id'])) {
                 $criteria->addCondition("blog_category_id = ".$_GET['cat_id']);
            }
            if(isset($_GET['type'])) {
                 $criteria->addCondition("type = ".$_GET['type']);
            } else {
                $criteria->addCondition("type = 1");
            }
            $count=  Blogs::model()->count($criteria);
            $pages=new CPagination($count);

            // results per page
            $pages->pageSize=9;
            $pages->applyLimit($criteria);
            $models=Blogs::model()->findAll($criteria);
            
            // display the login form
            $this->render('blogs', array(
                'models' => $models,
                     'pages' => $pages
                ));
	}
        /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionVideos()
	{  
            $criteria=new CDbCriteria();
            $criteria->order = "date_updated desc";
            if(isset($_GET['type'])) {
                 $criteria->addCondition("type = ".$_GET['type']);
            } else {
                $criteria->addCondition("type = 1");
            }
            $count=  Videos::model()->count($criteria);
            $pages=new CPagination($count);

            // results per page
            $pages->pageSize=9;
            $pages->applyLimit($criteria);
            $models=Videos::model()->findAll($criteria);
            
            // display the login form
            $this->render('video_series', array(
                'models' => $models,
                     'pages' => $pages
                ));
	}
        /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionArticles()
	{  
            $criteria=new CDbCriteria();
            
            if(isset($_GET['type'])) {
                 $criteria->addCondition("type = ".$_GET['type']);
            }
            $count= Articles::model()->count($criteria);
            $pages=new CPagination($count);

            // results per page
            $pages->pageSize=9;
            $pages->applyLimit($criteria);
            $models=Articles::model()->findAll($criteria);
            
            // display the login form
            $this->render('articles', array(
                'models' => $models,
                     'pages' => $pages
                ));
	}
        /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionArticledetails($id)
	{  
            
            
            $criteria=new CDbCriteria();
            
            $criteria->addCondition("id = ".$id);
            
            $model=Articles::model()->find($criteria);
            
            
            $criteria=new CDbCriteria();
            
            $count=  Articles::model()->count($criteria);
            $pages=new CPagination($count);

            // results per page
            $pages->pageSize=4;
            $pages->applyLimit($criteria);
            $latest=Articles::model()->findAll($criteria);
            // display the login form
            $this->render('articledetails', array(
                'model' => $model,
            ));
	}
        /**
	 * Logs out the current user and redirect to homepage.
	 */
//	public function actionVideos()
//	{  
//            $criteria=new CDbCriteria();
//            
//            $count= Videos::model()->count($criteria);
//            $pages=new CPagination($count);
//
//            // results per page
//            $pages->pageSize=9;
//            $pages->applyLimit($criteria);
//            $models=Videos::model()->findAll($criteria);
//            
//            // display the login form
//            $this->render('pages/videos', array(
//                'models' => $models,
//                     'pages' => $pages
//                ));
//	}
        /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionBlogdetails($id)
	{  
            
            if (!empty($_POST)) {
                
                $comment = new BlogComments;
                $comment->attributes = array(
                    "blog_id" =>$id,
                    "name" =>$_POST['name'],
                    "email" =>$_POST['email'],
                    "comment" =>$_POST['comment'],
                    "is_approved" =>0,
                    "date_created" => date("Y-m-d h:i:s"),
                );
                if ($comment->save()) {
                    $subject = "Your Comment Has Been Added";
                    $body = "Hello,<br/><br/>"
                            . "Your comment has been added and is under review.<br/><br/ >"
                            . "Your comment will appear once approved.<br/><br/ >"
                            . "Thanks,<br/ >"
                            . "MBATrek";
                    $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                            "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                    $headers .= "MIME-Version: 1.0\r\n".
                                "Content-Type: text/html; charset=UTF-8";

                    $sentToUser = sendEmail($_POST['email'], $subject,$body,$headers);
                    $this->refresh();
                } 
            }
            $criteria=new CDbCriteria();
            $criteria->order = "date_updated desc";
            $criteria->addCondition("id = ".$id);
            $model=Blogs::model()->find($criteria);
            
            $criteria=new CDbCriteria();
            $criteria->order = "date_updated desc";
            $criteria->limit = 4;
//            $count=  Blogs::model()->count($criteria);
//            $pages=new CPagination($count);
//
//            // results per page
//            $pages->pageSize=4;
//            $pages->applyLimit($criteria);
            $latest=Blogs::model()->findAll($criteria);

            // display the login form
            $this->render('blogdetails', array(
                'model' => $model,
                'latest' => $latest,
            ));
	}
        
        public function actionGetprograms(){
            $data = InstituteCourse::model()->findAllByAttributes(array("institute_id"=>$_POST['institute_id']));
	    $arr = array();
	    foreach ($data as $d){
		if (!in_array($d->course->name)) {
		    $arr[$d->course->name] = $d->course->name;
		}
		
	    }
	    
            $html = "<option value=''>Select Program</option>";
            foreach ($arr as $d){
                $html .= '<option value="'.$d.'">'.$d."</option>";
            }
            echo $html;
            exit;
        }
        public function actionVerify($id){
            $model = Users::model()->findByPk($id);
            $model->attributes = array("is_verified" => 1);
            if ($model->save()) {
                $this->redirect(array('site/index','tv'=>1));
            }else {
                $this->redirect(array('site/index','tv'=>0));
            }
        }
        public function actionBatch(){
            $data = InstituteBatches::model()->findAllByAttributes(array("institute_id"=>$_POST['institute_id']));
            $html = "<option value=''>Select Batch</option>";
            foreach ($data as $d){
                $html .= '<option value="'.$d->id.'">'.$d->name."</option>";
            }
            echo $html;
            exit;
        }
        
        public function actionDownloadfiles($path,$name){
       
            downloadFile(getcwd().$path,$name);
        }
        
	public function actionChangepassword(){
	    if (!empty($_POST)) {
		$model = Users::model()->findByPk(Yii::app()->user->id);
		if ($model->password == $_POST['current_password']) {
		    $model->attributes = array("password"=>$_POST['new_password']);
		    if ($model->save()) {
			$this->refresh(true,"?thankpass=1");
		    }
		} else {
		    $this->refresh(true,"?thankpassfail=1");
		}
	    }
	    $this->render("changepassword");
	}
        
}?>