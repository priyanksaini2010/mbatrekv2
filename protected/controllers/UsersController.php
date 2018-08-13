<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','adminins','adminind','uploadindustry','uploadstudents'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionUploadindustry(){
	    $this->layout = getLayot();
	    $model = new Users();
	    if (!empty($_FILES)) {
		$path="assets/industrycsv";
		if (!is_dir($path)) {
		    CFileHelper::createDirectory($path,null,true);
		}
		$fileName = rand().str_replace(" ","", $_FILES['Users']['name']['username']);  // random number + file name
		$tmp_name = $_FILES['Users']['tmp_name']['username'];
		move_uploaded_file($tmp_name, $path."/".$fileName);
		
		$csv = array();
		$lines = file($path."/".$fileName, FILE_IGNORE_NEW_LINES);
		
		foreach ($lines as $key => $value)
		{
		    $csv[$key] = str_getcsv($value);
		}
		if (!empty($csv)) {
		    $headers = $csv[0];
		    unset($csv[0]);
		    
		    
		    foreach ($csv as $indData) {
                        $check = Users::model()->findByAttributes(array("email"=>$indData[0]));
                        if(empty($check)) {
                            $modelUser = new Users();
                            $modelIndustry = new Industries();
                            $modelIndustryUser = new IndustryUser();
                            $userAttributes = array(
                                "email" =>$indData[0],
                                "password" =>$indData[1],
                                "username" =>$indData[0],
                                "date_registered" =>date("Y-m-d h:i:s"),
                                "role" =>3,
                                "institute_industry_name" => $indData[4],
                                "fname" => $indData[2],
                                "lname" => $indData[3],
                                "phone_number" => "00000000",
                                "dob" => date("Y-m-d"),
                                "institute_email_address" => $indData[0],
                                "institute" => $indData[4],
                                "city" => "Others",
                                "program" => "Others",
                                "batch" => "Others",
                                "is_approve" => 1,
                                "is_verified" => 1,
                                "last_login" => date("Y-m-d h:i:s"),
                                "login_count" => 0
                            );
                            $indData = array(
                                    "name" => $indData[4]
                            );
                            $modelUser->attributes = $userAttributes;
                            $modelIndustry->attributes = $indData;
                            if ($modelUser->save() && $modelIndustry->save()) {
                                $modelIndustryUser->attributes = array(
                                                                        "industry_id" => $modelIndustry->id,
                                                                        "user_id" => $modelUser->id,
                                                                    );
    //			    pr($modelIndustryUser->attributes);
                                if ($modelIndustryUser->save()) {
                                    Yii::app()->user->setFlash("success","Industries Uploaded Successfully");
                                } else {
                                    Yii::app()->user->setFlash("error","Industries Not Uploaded, Please try again.");
                                }
                            }
                            
                        }
                    }
		}
		
	    }
	    $this->render("uploadindustry",array("model"=>$model));
	}
	
	
	public function actionUploadstudents(){
	    $this->layout = getLayot();
	    $model = new Users();
	    if (!empty($_FILES)) {
		$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

		$path="assets/industrycsv";
		if (!is_dir($path)) {
		    CFileHelper::createDirectory($path,null,true);
		}
		$fileName = rand().str_replace(" ","", $_FILES['Users']['name']['username']);  // random number + file name
		$tmp_name = $_FILES['Users']['tmp_name']['username'];
		move_uploaded_file($tmp_name, $path."/".$fileName);
		
		$csv = array();
		$lines = file($path."/".$fileName, FILE_IGNORE_NEW_LINES);
		
		foreach ($lines as $key => $value)
		{
		    $csv[$key] = str_getcsv($value);
		}
		if (!empty($csv)) {
		    $headers = $csv[0];
		    unset($csv[0]);
		    foreach ($csv as $line => $indData) {
			
			$modelUser = new Users();
			$modelStudents = new Students();
			if ($int->institute_id == 0) {
			    $password = $indData[11];
			    $sub = $indData[12];
			    $is_verified = 1;
			} else {
			    $password = $indData[11];
			    $sub = "";
			    $is_verified = 1;
			}
			$userAttributes = array(
			    "email" =>$indData[0],
			    "password" =>  $password,
			    "username" =>$indData[0],
			    "date_registered" =>date("Y-m-d h:i:s"),
			    "role" =>1,
			    "institute_industry_name" => $indData[4],
			    "fname" => $indData[1],
			    "lname" => $indData[2],
			    "phone_number" => $indData[10],
			    "dob" => $indData[3],
			    "institute_email_address" => $indData[0],
			    "institute" => $int->institute->name,
			    "city" => $indData[5],
			    "program" => $indData[9],
			    "batch" => "Others",
			    "is_approve" => 1,
			    "is_verified" => $is_verified,
			    "last_login" => date("Y-m-d h:i:s"),
			    "login_count" => $is_verified,
			    'subscription' => $sub
			);
			$studentData = array(
				"name" => $indData[1]." ".$indData[2] ,
				"institute_batch_id"=> $_GET['institute_batch_id'],
				"profile_json" => json_encode(array("")),
				"work_exerience" => $indData['7'],
				"academic_background" => $indData['8'],
				"function" => $indData['6'],
				"user_id" => 1,
			);
			
			$modelUser->attributes = $userAttributes;
			try {
			if ($modelUser->save()) {
			    $subject = "Your Account Has Been Created";
			    $template = getTemplate("student_admin");
			    $body = str_replace("{{SUBJECT}}", $subject, $template);
			    $body = str_replace("{{NAME}}",  $indData[1]." ".$indData[2], $body);
			    $link = Yii::app()->params['url']."index.php?r=site/verify&id=".$modelUser->id;
			    $body = str_replace("{{LINK}}", $link, $body);
			    $body = str_replace("{{PASSWORD}}", $modelUser->password, $body);
			    $body = str_replace("{{EMAIL}}", $modelUser->email, $body);
			   
//			    $body = "Hello,<br/><br/>"
//				    . "Your Account has been created .<br/><br/ >"
//				    . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$modelUser->id."'>here</a>  to verify.<br/><br/ >"
//				    . "your password is :".$modelUser->password."<br/ >"
//				    . "Thanks,<br/ >"
//				    . "MBATrek";
			   $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
				    "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

			    $headers .= "MIME-Version: 1.0\r\n".
					"Content-Type: text/html; charset=UTF-8";
			    if ($int->institute_id != 0) {
				$sentToUser = sendEmail($modelUser->email, $subject,$body,$headers);
			    }
			   
                            
			    $studentData['user_id'] = $modelUser->id;
			    $modelStudents->attributes = $studentData;
			    if ($modelStudents->save()) {
				
				Yii::app()->user->setFlash("success","Students Uploaded Successfully");
			    } else {
				Yii::app()->user->setFlash("error","Students Not Uploaded, Please try again.");
				
			    }
			} else {
			    Yii::app()->user->setFlash("error","Students Not Uploaded, Please try again.");
			 
			}
			}catch(CDbException $e) {
				
			    Yii::app()->user->setFlash("error",$modelUser->email. ", Already exists.");
			}
			
		    }
		}
		
	    }
	    $this->render("uploadstudents",array("model"=>$model));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($role)
	{
//            pr($this->getLayoutFile('webroot.themes.bootstrap.views.layouts.main'));
             $this->layout = getLayot();
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['Users']['role'] = $role;
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionAdminins($role)
	{
//            pr($this->getLayoutFile('webroot.themes.bootstrap.views.layouts.main'));
             $this->layout = getLayot();
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['Users']['role'] = $role;
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionAdminind($role)
	{
//            pr($this->getLayoutFile('webroot.themes.bootstrap.views.layouts.main'));
             $this->layout = getLayot();
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['Users']['role'] = $role;
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function getRole($data,$row){
            switch ($data->role){
                case 0:
                    $status = "Admin";
                    break;
                case 1:
                    $status = "Student";
                    break;
                case 2:
                    $status = "Industry";
                    break;
                case 3:
                    $status = "Institute";
                    break;
            }
            return $status;
        }
}
