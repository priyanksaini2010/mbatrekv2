<?php

class ContactController extends Controller
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
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
                $this->layout = getCartLayot();
		$model=new Contact;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Contact']))
		{
			
			$model->attributes=$_POST['Contact'];
			
			if($model->save()){
                                $subject = $_POST['Contact']['subject'];
                                $body = "Hello Admin,<br/><br/>"
                                        . "New Enquiry recieved: <br/><br/ >"
                                        . "First Name: ".$_POST['Contact']['first_name']."<br/ >"
                                        . "Last Name: ".$_POST['Contact']['last_name']."<br/ >"
                                        . "Mobile No.: ".$_POST['Contact']['mobile_no']."<br/ >"
                                        . "Email : ".$_POST['Contact']['email']."<br/ >"
                                        . "Rep Type : ".$_POST['Contact']['are_you']."<br/ >"
                                        . "Name of Company / Institute : ".$_POST['Contact']['name_of_company_institute']."<br/ >"
                                        . "Subject : ".$_POST['Contact']['subject']."<br/ ><br/ >"
                                        . "Message : ".$_POST['Contact']['your_message']."<br/ ><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Feedback Service";
                                $headers="From: ".$_POST['Contact']['first_name']." ".$_POST['Contact']['last_name']." <".$_POST['Contact']['email']."> \r\n".
                                        "Reply-To: ".$_POST['Contact']['first_name']." ".$_POST['Contact']['last_name']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                                $sentToUser = sendEmail(Yii::app()->params['adminEmail'], $subject,$body,$headers);
				
                                $body = "Hello ".$_POST['Contact']['first_name']." ".$_POST['Contact']['last_name'].",<br/><br/>"
                                        . "Thanks to contact us. Will get in touch soon: <br/><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Feedback Service";
                                $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";
                                $sentToUser = sendEmail($_POST['Contact']['email'], $subject,$body,$headers);
                                $this->redirect(Yii::app()->createUrl('contact/create',array('thankc'=>1)));
                        }
		}

		$this->render('contact',array(
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

		if(isset($_POST['Contact']))
		{
			$model->attributes=$_POST['Contact'];
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
		$dataProvider=new CActiveDataProvider('Contact');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Contact('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Contact']))
			$model->attributes=$_GET['Contact'];

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
		$model=Contact::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
