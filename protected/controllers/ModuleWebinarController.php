<?php

class ModuleWebinarController extends Controller
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
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=new ModuleWebinar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ModuleWebinar']))
		{
                        if (!empty($_FILES)) {
                            $path="assets/webinar";
                            if (!is_dir($path)) {
                                CFileHelper::createDirectory($path,null,true);
                            }
                            if (isset($_FILES['ModuleWebinar']['name']['file']) && !empty($_FILES['ModuleWebinar']['name']['file'])) {
                                $fileName = rand().$_FILES['ModuleWebinar']['name']['file'];  // random number + file name
                                move_uploaded_file($_FILES['ModuleWebinar']['tmp_name']['file'],$path."/".$fileName);
                                $_POST['ModuleWebinar']['file'] = $fileName;
                            } 
                        }
                        $_POST['ModuleWebinar']['date_time'] = $_POST['example10']." ".$_POST['hour'].":".$_POST["minute"].":00";
			$model->attributes=$_POST['ModuleWebinar'];
			if($model->save()){
                            if ($model->type ==1) {
                                Yii::app()->user->setFlash('success', "Webinar added successfully."); 
                            } else {
                                Yii::app()->user->setFlash('success', "Speaker's takeaway added successfully."); 
                            }
                            $this->redirect(array('admin','institute_batch_id'=>$model->institute_batch_id,"type"=>$model->type));
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
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ModuleWebinar']))
		{
			if (!empty($_FILES)) {
                            $path="assets/webinar";
                            if (!is_dir($path)) {
                                CFileHelper::createDirectory($path,null,true);
                            }
                            if (isset($_FILES['ModuleWebinar']['name']['file']) && !empty($_FILES['ModuleWebinar']['name']['file'])) {
                                $fileName = rand().$_FILES['ModuleWebinar']['name']['file'];  // random number + file name
                                move_uploaded_file($_FILES['ModuleWebinar']['tmp_name']['file'],$path."/".$fileName);
                                $_POST['ModuleWebinar']['file'] = $fileName;
                            } 
                        }
                        $_POST['ModuleWebinar']['date_time'] = $_POST['example10']." ".$_POST['hour'].":".$_POST["minute"].":00";
			$model->attributes=$_POST['ModuleWebinar'];
			if($model->save()){
                            if ($model->type ==1) {
                                Yii::app()->user->setFlash('success', "Webinar updated successfully."); 
                            } else {
                                Yii::app()->user->setFlash('success', "Speaker's takeaway updated successfully."); 
                            }
                            
                            $this->redirect(array('admin','institute_batch_id'=>$model->institute_batch_id,"type"=>$model->type));
                        }
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
		$dataProvider=new CActiveDataProvider('ModuleWebinar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($institute_batch_id,$type)
	{
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
                $_GET['ModuleWebinar']["institute_batch_id"] = $institute_batch_id;
                $_GET['ModuleWebinar']["type"] = $type;
		$model=new ModuleWebinar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ModuleWebinar']))
			$model->attributes=$_GET['ModuleWebinar'];

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
		$model=ModuleWebinar::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='module-webinar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
