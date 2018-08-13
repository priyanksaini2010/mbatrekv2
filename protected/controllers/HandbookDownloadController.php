<?php

class HandbookDownloadController extends Controller
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

        public function __construct($id) {
            parent::__construct($id);
            $this->layout = getLayot();
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
				'actions'=>array('update', 'admin', 'delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create', 'update', 'admin', 'delete'),
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
		$model=new HandbookDownload;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HandbookDownload']))
		{
			$model->attributes=$_POST['HandbookDownload'];
			if($model->save()){
                             $subject = "Feedback Recieved";
                            $body = "Hello Admin,<br/><br/>"
                                    . "Handbook  downloaded: <br/><br/ >"
                                    . "Email : ".$_POST['HandbookDownload']['email_address']."<br/ >"
                                    . "First Name : ".$_POST['HandbookDownload']['first_name']."<br/ ><br/ >"
                                    . "Last Name : ".$_POST['HandbookDownload']['last_name']."<br/ ><br/ >"
                                    . "Institute Name : ".$_POST['HandbookDownload']['institute_name']."<br/ ><br/ >"
                                    . "Company Name : ".$_POST['HandbookDownload']['comapny_name']."<br/ ><br/ >"
                                    . "Thanks,<br/ >"
                                    . "MBATrek Feedback Service";
                            $headers="From: ".Yii::app()->params['noreply']." <".Yii::app()->params['noreply']."> \r\n".
                                    "Reply-To: ".Yii::app()->params['noreply']." \r\n";

                            $headers .= "MIME-Version: 1.0\r\n".
                                        "Content-Type: text/html; charset=UTF-8";

                            $sentToUser = mail(Yii::app()->params['adminEmail'], $subject,$body,$headers);
                            $this->redirect(Yii::app()->createUrl('site/page',array('view'=>'handbook','thankh'=>1)));
                        }
				
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

		if(isset($_POST['HandbookDownload']))
		{
			$model->attributes=$_POST['HandbookDownload'];
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
		$dataProvider=new CActiveDataProvider('HandbookDownload');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HandbookDownload('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HandbookDownload']))
			$model->attributes=$_GET['HandbookDownload'];

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
		$model=HandbookDownload::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='handbook-download-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
