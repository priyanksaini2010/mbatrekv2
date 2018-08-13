<?php

class StudentsController extends Controller
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
				'actions'=>array('create','update','admin','delete','viewprofile','internship','projects'),
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
	
	
	public function actionInternship($student_id){
	    if (!empty($_POST)) {
		$model = StudentCompleteProfile::model()->findByAttributes(array("id"=>$student_id));
		
		$json = json_decode($model->profile_json);
		$_POST['industry'] = explode("|",$_POST['industry']);
		$intid  = $_POST['industry'][0];
		$_POST['industry'] =  $_POST['industry'][1];
		if (empty($json)) {
		    $json = array(
			    "fname"=>"",
			    "lname"=> "",
			    "profile_fb"=> "",
			    "profile_linked"=> "",
			    "profile_industry"=> array(),
			    "profile_companies"=> array(),
			    "profile_intership"=> array(),
			    "profile_liveproject"=> array(),
			    "profile_pic"=> "",
			    "resume"=> ""
		    );
		    $json = json_decode(json_encode($json));
		}
		$intter = isset($json->profile_intership)?$json->profile_intership:array();
		$count = count($intter);
		$intter = $json->profile_liveproject;
		$count = count($intter);
		$mod = new StudentInternship();
		$mod->attributes = array('student_id'=>$student_id,'internship_id'=>$intid);
		if(!in_array($_POST['industry'], $intter)){
		    $model= Students::model()->findByAttributes(array("id"=>$student_id));
//		    pr(json_decode($model->profile_json));
		    $intter[$count] = $_POST['industry'];
		    if (empty($json)) {
			
		    }
		    $json->profile_intership = $intter;
//		    $json  = json_encode($json);
		    
		    $mod->save();
		    $model->attributes=array("profile_json" => json_encode($json));
//		    pr($model->attributes);
		    if($model->save()) {
			Yii::app()->user->setFlash("success","Internship assigned successfully.");
		    }
		} else {
		    Yii::app()->user->setFlash("error","This internship is already assigned to this student");
		}
		
	
	    }
	    $this->layout = getLayot();
            $this->render('internship',array(
			'model'=>  StudentCompleteProfile::model()->findByAttributes(array("id"=>$student_id))
            ));
	}
	public function actionProjects($student_id){
	    if (!empty($_POST)) {
		$model = StudentCompleteProfile::model()->findByAttributes(array("id"=>$student_id));
		$json = json_decode($model->profile_json);
		$_POST['industry'] = explode("|",$_POST['industry']);
		$intid  = $_POST['industry'][0];
		$_POST['industry'] =  $_POST['industry'][1];
		if (empty($json)) {
		    $json = array(
			    "fname"=>"",
			    "lname"=> "",
			    "profile_fb"=> "",
			    "profile_linked"=> "",
			    "profile_industry"=> array(),
			    "profile_companies"=> array(),
			    "profile_intership"=> array(),
			    "profile_liveproject"=> array(),
			    "profile_pic"=> "",
			    "resume"=> ""
		    );
		    $json = json_decode(json_encode($json));
		}
		$intter = $json->profile_liveproject;
		$count = count($intter);
		$mod = new StudentLiveProject();
		$mod->attributes = array('student_id'=>$student_id,'live_project_id'=>$intid);
		if(!in_array($_POST['industry'], $intter)){
		    $model= Students::model()->findByAttributes(array("id"=>$student_id));
//		    pr(json_decode($model->profile_json));
		    $intter[$count] = $_POST['industry'];
		    $json->profile_liveproject = $intter;
//		    $json  = json_encode($json);
		    
		    $mod->save();
		    $model->attributes=array("profile_json" => json_encode($json));
//		    pr($model->attributes);
		    if($model->save()) {
			Yii::app()->user->setFlash("success","Live project assigned successfully.");
		    }
		} else {
		    Yii::app()->user->setFlash("error","This project is already assigned to this student");
		}
		
	
	    }
	    $this->layout = getLayot();
            $this->render('projects',array(
			'model'=>  StudentCompleteProfile::model()->findByAttributes(array("id"=>$student_id))
            ));
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=new Students;
		$modelUser=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
//		    pr($_POST);
                        if(isset($_POST['example10'])) {
                            $_POST['Users']['dob'] = $_POST['example10'];
                        }
                        $_POST['Users']['username'] = $_POST['Users']['email'];
                        
                        $_POST['Users']['role'] = 1;
                        $check = Users::model()->findByAttributes(array('email' => $_POST['Users']['email']));
                        if (count($check) > 0) {
                            Yii::app()->user->setFlash('error', "Student with this email address already exists."); 
                        } else {
                            $modelUser->attributes=$_POST['Users'];
                            if ($modelUser->save()) {
                                $_POST['Students']['name'] = $modelUser->fname." ".$modelUser   ->lname;
                                $_POST['Students']['user_id'] = $modelUser->id;
                                $model->attributes=$_POST['Students'];
                                if ($model->save()) {
                                    $subject = "Your Account Has Been Created.";
				    $template = getTemplate("student_admin");
				    $body = str_replace("{{SUBJECT}}", $subject, $template);
				    $body = str_replace("{{NAME}}", $model->name, $body);
				    $link = Yii::app()->params['url']."index.php?r=site/verify&id=".$modelUser->id;
				    $body = str_replace("{{LINK}}", $link, $body);
				    $body = str_replace("{{PASSWORD}}", $modelUser->password, $body);
				    $body = str_replace("{{EMAIL}}", $modelUser->email, $body);
//                                    $body = "Hello,<br/><br/>"
//                                            . "Your Account has been created .<br/><br/ >"
//                                            . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$modelUser->id."'>here</a>  to verify.<br/><br/ >"
//                                            . "your password is :".$modelUser->password."<br/ >"
//                                            . "Thanks,<br/ >"
//                                            . "MBATrek";
				    pr($body);
                                    $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                            "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                    $headers .= "MIME-Version: 1.0\r\n".
                                                "Content-Type: text/html; charset=UTF-8";

                                    $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
				    Yii::app()->user->setFlash('success', "Student Added Successfully."); 
                                    $this->redirect(array('admin','institute_batch_id'=>$_GET['institute_batch_id']));
                                } else {
                                    $modelUser = Users::model()->findByPk($modelUser->id)->delete();
                                    $errors = $model->getErrors();
                                    foreach ($errors as $error) {
                                        Yii::app()->user->setFlash('error', $error[0]); 
                                        break;
                                    }
                                }
                            } else {
                                $errors = $modelUser->getErrors();
                                foreach ($errors as $error) {
                                    Yii::app()->user->setFlash('error', $error[0]); 
                                    break;
                                }
                            }
                        }
		}

		$this->render('create',array(
			'model'=>$model,
                        'modelUser' =>$modelUser
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=$this->loadModel($id);
		$modelUser=Users::model()->findByPk($model->user_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		

		$this->render('update',array(
			'model'=>$model,
			'modelUser' => $modelUser
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
			$data = $this->loadModel($id);
			$model=Users::model()->findByPk($data->user_id);
			$model->delete();
			// we only allow deletion via POST request
//			$this->loadModel($id)->delete();

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
		$dataProvider=new CActiveDataProvider('Students');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=new Students('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['Students']['institute_batch_id'] = $_GET["institute_batch_id"];
		if(isset($_GET['Students']))
			$model->attributes=$_GET['Students'];

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
		$model=Students::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        public function actionViewprofile($id) {
            $this->layout = getLayot();
            $this->render('viewprofile',array(
			'model'=>  StudentCompleteProfile::model()->findByAttributes(array("id"=>$id))
            ));
        }

        /**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='students-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
