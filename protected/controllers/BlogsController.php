<?php

class BlogsController extends Controller
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
		$model=new Blogs;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Blogs']))
		{
                        if (!empty($_FILES)) {
                            $path="assets/blogs";
                            if (!is_dir($path)) {
                                CFileHelper::createDirectory($path,null,true);
                            }
                            if (isset($_FILES['Blogs']['name']['background_image']) && !empty($_FILES['Blogs']['name']['background_image'])) {
                                $fileName = rand().$_FILES['Blogs']['name']['background_image'];  // random number + file name
                                move_uploaded_file($_FILES['Blogs']['tmp_name']['background_image'],$path."/".$fileName);
                                $_POST['Blogs']['background_image'] = $fileName;
                            } 
                            if (isset($_FILES['Blogs']['name']['banner_image']) && !empty($_FILES['Blogs']['name']['banner_image'])) {
                                $fileName = rand().$_FILES['Blogs']['name']['banner_image'];  // random number + file name
                                move_uploaded_file($_FILES['Blogs']['tmp_name']['banner_image'],$path."/".$fileName);
                                $_POST['Blogs']['banner_image'] = $fileName;
                            } 
                        }
			$model->attributes=$_POST['Blogs'];
			$imageSize = getimagesize($path."/".$fileName);
			$error =false;
			if ($imageSize[0] < 1138 || $imageSize[0] < 761 ) {
			    $model->addError("banner_image","Banner Image Size Must Be greater than equal to 1138X761");
			    $error =true;
			}
			
			
			if(!$error && $model->save()){
                             Yii::app()->user->setFlash('success', "Blog added successfully.");
                            $this->redirect(array('admin'));
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

		if(isset($_POST['Blogs']))
		{
                        if (!empty($_FILES)) {
                            
                            $path="assets/blogs";
                            if (!is_dir($path)) {
                                CFileHelper::createDirectory($path,null,true);
                            }
                            if (isset($_FILES['Blogs']['name']['background_image']) && !empty($_FILES['Blogs']['name']['background_image'])) {
                                $fileName = rand().$_FILES['Blogs']['name']['background_image'];  // random number + file name
                                move_uploaded_file($_FILES['Blogs']['tmp_name']['background_image'],$path."/".$fileName);
                                $_POST['Blogs']['background_image'] = $fileName;
                            } 
                            if (isset($_FILES['Blogs']['name']['banner_image']) && !empty($_FILES['Blogs']['name']['banner_image'])) {
                                $fileName = rand().$_FILES['Blogs']['name']['banner_image'];  // random number + file name
                                move_uploaded_file($_FILES['Blogs']['tmp_name']['banner_image'],$path."/".$fileName);
                                $_POST['Blogs']['banner_image'] = $fileName;
                            }
                        }
			$model->attributes=$_POST['Blogs'];
			if($model->save()){
                             Yii::app()->user->setFlash('success', "Blog updated successfully.");
                            $this->redirect(array('admin'));
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
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$dataProvider=new CActiveDataProvider('Blogs');
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
		$model=new Blogs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Blogs']))
			$model->attributes=$_GET['Blogs'];

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
		$model=Blogs::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='blogs-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
