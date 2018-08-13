<?php

class SiteController extends Controller
{
        public $errors = array();
        public $success = array();
	/**
	 * Declares class-based actions.
	 */
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
                    $_POST['Users']['is_verified'] = 1;
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
                                $subject = "Your Account Have Been Created";
                                $body = "Hello,<br/><br/>"
                                        . "Your Account have been created .<br/><br/ >"
                                        . "Please click <a href='http://mbatrek.com/index.php?r=site/index'>here</a>  to verify.<br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Team";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = mail($_POST['Users']['email'], $subject,$body,$headers);
                                $this->refresh();
                        }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                            $this->errors['email'] = 'Email already exist';
                    }
            }
            $this->render('pages/industry_register',  array('model'=>$model));
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
                    $_POST['Users']['is_verified'] = 1;
                    $model->attributes=$_POST['Users'];
                    try {
                    if($model->save()){
                                $modelInstitute = new Institutes;
                                $modelInstitute->attributes = array("name" => $_POST['Users']['institute_industry_name'],"university_id" => 0);
                                $modelInstitute->save();
                                $modelInUser = new InstituteUser;
                                $modelInUser->attributes = array("institute_id" => $modelInstitute->id,"user_id" => $model->id);
                                $modelInUser->save();
                                $subject = "Your Account Have Been Created";
                                $body = "Hello,<br/><br/>"
                                        . "Your Account have been created .<br/><br/ >"
                                        . "Please click <a href='http://mbatrek.com/index.php?r=site/index'>here</a>  to verify.<br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Team";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = mail($_POST['Users']['email'], $subject,$body,$headers);
                                
                                $this->success[] = true;
                                $this->refresh();
                    }
                    }
                    catch(CDbException $e) {
                            $model->addError('email', 'Email already exist');
                            $this->errors['email'] = 'Email already exist';
                    }
                    
            }
            $this->render('pages/industry_register',  array('model'=>$model));
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
                    $_POST['Users']['is_verified'] = 1;
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
                        $subject = "Your Account Have Been Created";
                                $body = "Hello,<br/><br/>"
                                        . "Your Account have been created .<br/><br/ >"
                                        . "Please click <a href='http://mbatrek.com/index.php?r=site/index'>here</a>  to verify.<br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Team";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = mail($_POST['Users']['email'], $subject,$body,$headers);
                                $this->success[] = true;
                                $this->refresh();
                    
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
                    $_POST['Users']['is_verified'] = 1;
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
                        $subject = "Your Account Have Been Created";
                                $body = "Hello,<br/><br/>"
                                        . "Your Account have been created .<br/><br/ >"
                                        . "Please click <a href='http://mbatrek.com/index.php?r=site/index'>here</a>  to verify.<br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Team";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = mail($_POST['Users']['email'], $subject,$body,$headers);
                        $this->success[] = true;
                        $this->refresh();
                    
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
                    $_POST['Users']['is_verified'] = 1;
                    $_POST['Users']['dob'] = $_POST['example10'];
                    $_POST['Users']['date_registered'] = date('Y-m-d h:i:s');
                    $model->attributes=$_POST['Users'];
                    try {
                    if($model->save()){
                        $subject = "Your Account Have Been Created";
                                $body = "Hello,<br/><br/>"
                                        . "Your Account have been created .<br/><br/ >"
                                        . "Please click <a href='http://mbatrek.com/index.php?r=site/index'>here</a>  to verify.<br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Team";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = mail($_POST['Users']['email'], $subject,$body,$headers);
                        $this->success[] = true;
                    
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
                        $url = Yii::app()->createAbsoluteUrl("site/downloadall", array("category_id"=>$category_id));
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
			if($model->validate() && $model->login()){
                            
                            if (Yii::app()->user->admin == 0) {
                                die(Yii::app()->createUrl('/users/admin',array("role"=>1)));
                                $this->redirect(Yii::app()->createUrl('/users/admin',array("role"=>1)));
                            } else if(Yii::app()->user->admin == 1){
                                $this->redirect(Yii::app()->createUrl('student/portal'));
                            } else if(Yii::app()->user->admin == 2){
                                $this->redirect(Yii::app()->createUrl('institutes/portal'));
                            } else {
                                $this->redirect(Yii::app()->createUrl('industry/portal'));
                            }
                        } else {
                            foreach($model->getErrors() as $key=>$errors){
                                $this->errors[$key]  = $errors[0];
                            }
                        }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
                $model = Users::model()->findByPk(Yii::app()->user->id);
                $model->last_login = date("Y-m-d h:i:s");
                $model->save(); 
		Yii::app()->user->logout();
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
                    $subject = "Your Comment Have Been Added";
                    $body = "Hello,<br/><br/>"
                            . "Your comment have been added and is under review.<br/><br/ >"
                            . "Your comment will appear once approved.<br/><br/ >"
                            . "Thanks,<br/ >"
                            . "MBATrek Team";
                    $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                            "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                    $headers .= "MIME-Version: 1.0\r\n".
                                "Content-Type: text/html; charset=UTF-8";

                    $sentToUser = mail($_POST['email'], $subject,$body,$headers);
                    $this->refresh();
                } 
            }
            $criteria=new CDbCriteria();
            $criteria->order = "date_updated desc";
            $criteria->addCondition("id = ".$id);
            $model=Blogs::model()->find($criteria);
            $approvedComments = BlogComments::model()->findAllByAttributes(array("blog_id"=>$id,"is_approved" =>1));
            
            $criteria=new CDbCriteria();
            $criteria->order = "date_updated desc";
            $count=  Blogs::model()->count($criteria);
            $pages=new CPagination($count);

            // results per page
            $pages->pageSize=4;
            $pages->applyLimit($criteria);
            $latest=Blogs::model()->findAll($criteria);
            // display the login form
            $this->render('blogdetails', array(
                'model' => $model,
                'comments' => $approvedComments,
                'latests' => $latest,
            ));
	}
        
        public function actionGetprograms(){
            $data = InstituteCourse::model()->findAllByAttributes(array("institute_id"=>$_POST['institute_id']));
            $html = "<option value=''>Select Program</option>";
            foreach ($data as $d){
                $html .= '<option value="'.$d->course_id.'">'.$d->course->name."</option>";
            }
            echo $html;
            exit;
        }
        public function actionBatch(){
            $data = InstituteBatches::model()->findAllByAttributes(array("institute_course_id"=>$_POST['institute_course_id']));
            $html = "<option value=''>Select Batch</option>";
            foreach ($data as $d){
                $html .= '<option value="'.$d->id.'">'.$d->name."</option>";
            }
            echo $html;
            exit;
        }
}