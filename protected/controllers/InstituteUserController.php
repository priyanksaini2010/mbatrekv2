<?php

class InstituteUserController extends Controller
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
				'actions'=>array('create','update','admin','delete'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
                $this->layout = getLayot();
		$model=new InstituteUser;
                $modelUser = new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InstituteUser']))
		{
			
                    if(isset($_POST['example10'])) {
                            $_POST['Users']['dob'] = $_POST['example10'];
                        }
                        $_POST['Users']['username'] = $_POST['Users']['email'];
                        $_POST['Users']['role'] = 2;
                        $check = Users::model()->findByAttributes(array('email' => $_POST['Users']['email']));
                        if (count($check) > 0) {
                            Yii::app()->user->setFlash('error', "Student with this email address already exists."); 
                        } else {
                            $modelUser->attributes=$_POST['Users'];
                            if ($modelUser->save()) {
                                $_POST['InstituteUser']['institute_id'] = $_GET['institute_id'];
                                $_POST['InstituteUser']['user_id'] = $modelUser->id;
                                $model->attributes=$_POST['InstituteUser'];
                                if ($model->save()) {
				    $subject = "Your Account Has Been Created";
				    $template = getTemplate("institute_admin");
				    $name = ucfirst($_POST['Users']['fname'])." ".ucfirst($_POST['Users']['lname']);
				    $body = str_replace("{{SUBJECT}}", $subject, $template);
				    $body = str_replace("{{NAME}}", $name, $body);
				    $link = Yii::app()->params['url']."index.php?r=site/verify&id=".$modelUser->id;
				    $body = str_replace("{{LINK}}", $link, $body);
				    $body = str_replace("{{PASSWORD}}", $modelUser->password, $body);
//                                    $body = "Hello,<br/><br/>"
//                                            . "Your Account has been created .<br/><br/ >"
//                                            . "Please click <a href='".Yii::app()->params['url']."index.php?r=site/verify&id=".$modelUser->id."'>here</a>  to verify.<br/><br/ >"
//                                            . "your password is :".$modelUser->password."<br/ >"
//                                            . "Thanks,<br/ >"
//                                            . "MBATrek";
                                    $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                            "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                    $headers .= "MIME-Version: 1.0\r\n".
                                                "Content-Type: text/html; charset=UTF-8";

                                    $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                                    Yii::app()->user->setFlash('success', "User Added Successfully."); 
                                    $this->redirect(array('admin','institute_id'=>$_GET['institute_id']));
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
//                        $model->attributes=$_POST['InstituteUser'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
                        "modelUser"=> $modelUser
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
                $this->layout = getLayot();
		$model=$this->loadModel($id);
		$modelUser = Users::model()->findByPk($model->user_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['InstituteUser']))
		{
			
                    if(isset($_POST['example10'])) {
                            $_POST['Users']['dob'] = $_POST['example10'];
                        }
                        $_POST['Users']['username'] = $_POST['Users']['email'];
                        $_POST['Users']['role'] = 2;
                        $check = Users::model()->findByAttributes(array('email' => $_POST['Users']['email']));
                        
                            $modelUser->attributes=$_POST['Users'];
                            if ($modelUser->save()) {
                                $_POST['InstituteUser']['institute_id'] = $_GET['institute_id'];
                                $_POST['InstituteUser']['user_id'] = $modelUser->id;
                                $model->attributes=$_POST['InstituteUser'];
                                if ($model->save()) {
				    $this->redirect(array('admin','institute_id'=>$_GET['institute_id']));
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
                        
//                        $model->attributes=$_POST['InstituteUser'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		     "modelUser"=> $modelUser
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
		$dataProvider=new CActiveDataProvider('InstituteUser');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{   
                $this->layout = getLayot();
		$model=new InstituteUser('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['InstituteUser']['institute_id'] = $_GET['institute_id'];
		if(isset($_GET['InstituteUser']))
			$model->attributes=$_GET['InstituteUser'];

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
		$model=InstituteUser::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='institute-user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
