<?php

class BannersController extends Controller
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
				'actions'=>array('create','update','admin','delete','sort'),
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
        public function actionSort()
        {

                if (isset($_POST['items']) && is_array($_POST['items'])) {
                        $i = 0;
                        
                        foreach ($_POST['items'] as $item) {
                                $project = $this->loadModel($item);
                                $project->sortOrder = $i;
                                $project->save();
                                $i++;
                        }
                }
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
		$model=new Banners;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Banners']))
		{
			$path="assets/Banners";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        if (!empty($_FILES)) {
                            
                            $fileName = rand().str_replace(" ","", $_FILES['Banners']['name']['image']);  // random number + file name
                            $tmp_name = $_FILES['Banners']['tmp_name']['image'];
                            move_uploaded_file($tmp_name, $path."/".$fileName);

                        }
                        $_POST['Banners']['image'] = $fileName;
                        $model->attributes=$_POST['Banners'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Banned Added Successfully."); 
                            $this->redirect(array('admin'));
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
	{   $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Banners']))
		{
			$path="assets/Banners";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        if (!empty($_FILES) && !empty($_FILES['Banners']['name']['image'])) {
                            $fileName = rand().str_replace(" ","", $_FILES['Banners']['name']['image']);  // random number + file name
                            $tmp_name = $_FILES['Banners']['tmp_name']['image'];
                            move_uploaded_file($tmp_name, $path."/".$fileName);
                            $_POST['Banners']['image'] = $fileName;
                        } else {
                             $_POST['Banners']['image'] = $model->image;
                        }
                        
			$model->attributes=$_POST['Banners'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Banner Updated Successfully."); 
                            $this->redirect(array('admin'));
                        } else {
                            $errors = $model->getErrors();
                            foreach ($errors as $error) {
                                Yii::app()->user->setFlash('error', $error[0]); 
                                break;
                            }
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
		$dataProvider=new CActiveDataProvider('Banners');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{   $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=new Banners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Banners']))
			$model->attributes=$_GET['Banners'];

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
		$model=Banners::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='banners-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
