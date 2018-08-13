<?php

class InstituteBatchNotificationController extends Controller
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
		    array('allow', // allow all users to perform 'index' and 'view' actions
			'actions' => array('index', 'view'),
			'users' => array('*'),
		    ),
		    array('allow', // allow authenticated user to perform 'create' and 'update' actions
			'actions' => array('create', 'update', 'admin', 'delete','stop'),
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
		$model=new InstituteBatchNotification;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InstituteBatchNotification']))
		{
			$model->attributes=$_POST['InstituteBatchNotification'];
			$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

			if($model->save()){
                            Yii::app()->user->setFlash('success', "Notification Added Successfully."); 
                            $this->redirect(array('instituteBatches/view','institute_id'=>$int->institute_id,'id'=>$int->id));
                        } else {
                            $errors = $model->getErrors();
                            foreach ($errors as $error) {
                                Yii::app()->user->setFlash('error', $error[0]); 
                                break;
                            }
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

		if(isset($_POST['InstituteBatchNotification']))
		{
			$model->attributes=$_POST['InstituteBatchNotification'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionStop()
	{
		$notifications = InstituteBatchNotification::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id']));
		
		$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
		foreach ($notifications as $notification) {
		    $id = $notification->id;
		    $model=$this->loadModel($id);
		    $_POST['InstituteBatchNotification'] = array(
					    "institute_batch_id"=>$model->institute_batch_id,
					    "institute_batch_session_id"=>$model->institute_batch_session_id,
					    "type"=> $model->type,
					    "status"=> 0
					);
		    if(isset($_POST['InstituteBatchNotification']))
		    {
			$model->attributes=$_POST['InstituteBatchNotification'];
			if($model->save()){
			    
			} else {
			    $errors = $model->getErrors();
			    foreach ($errors as $error) {
				Yii::app()->user->setFlash('error', $error[0]); 
				break;
			    }
			}
		    }
		}
		Yii::app()->user->setFlash('success', "Notification Stoped Successfully."); 
		$this->redirect(array('instituteBatches/view','institute_id'=>$int->institute_id,'id'=>$int->id));

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
		$dataProvider=new CActiveDataProvider('InstituteBatchNotification');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InstituteBatchNotification('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InstituteBatchNotification']))
			$model->attributes=$_GET['InstituteBatchNotification'];

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
		$model=InstituteBatchNotification::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='institute-batch-notification-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
