<?php

class ModuleCasestudyController extends Controller
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
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
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
		$model=new ModuleCasestudy;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ModuleCasestudy']))
		{
                        
                        if (!empty($_FILES)) {
                            $path="assets/casestudy";
                            $pathResume="assets/casestudy";
                            if (!is_dir($pathResume)) {
                                CFileHelper::createDirectory($pathResume,null,true);
                            }
                            if (!is_dir($path)) {
                                CFileHelper::createDirectory($path,null,true);
                            }
                            if (isset($_FILES['ModuleCasestudy']['name']['background_image']) && !empty($_FILES['ModuleCasestudy']['name']['background_image'])) {
                                $fileName = rand().$_FILES['ModuleCasestudy']['name']['background_image'];  // random number + file name
                                move_uploaded_file($_FILES['ModuleCasestudy']['tmp_name']['background_image'],$path."/".$fileName);
                                
                            } 

                            if (isset($_FILES['ModuleCasestudy']['name']['file']) && !empty($_FILES['ModuleCasestudy']['name']['file'])) {
                                $fileNameResume= rand().$_FILES['ModuleCasestudy']['name']['file'];  // random number + file name
                                move_uploaded_file($_FILES['ModuleCasestudy']['tmp_name']['file'],$pathResume."/".$fileNameResume);
                                
                            } 
                            $_POST['ModuleCasestudy']['background_image'] = $fileName;
                            $_POST['ModuleCasestudy']['file'] = $fileNameResume;
                        }
                        
			$model->attributes=$_POST['ModuleCasestudy'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Case study added successfully."); 
                            $this->redirect(array('admin','institute_batch_id'=>$model->institute_batch_id));
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

		if(isset($_POST['ModuleCasestudy']))
		{
                    if (!empty($_FILES)) {
                        $path="assets/casestudy";
                        $pathResume="assets/casestudy";
                        if (!is_dir($pathResume)) {
                            CFileHelper::createDirectory($pathResume,null,true);
                        }
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        if (isset($_FILES['ModuleCasestudy']['name']['background_image']) && !empty($_FILES['ModuleCasestudy']['name']['background_image'])) {
                            $fileName = rand().$_FILES['ModuleCasestudy']['name']['background_image'];  // random number + file name
                            move_uploaded_file($_FILES['ModuleCasestudy']['tmp_name']['background_image'],$path."/".$fileName);
                            $_POST['ModuleCasestudy']['background_image'] = $fileName;
                        } 

                        if (isset($_FILES['ModuleCasestudy']['name']['file']) && !empty($_FILES['ModuleCasestudy']['name']['file'])) {
                            $fileNameResume= rand().$_FILES['ModuleCasestudy']['name']['file'];  // random number + file name
                            move_uploaded_file($_FILES['ModuleCasestudy']['tmp_name']['file'],$pathResume."/".$fileNameResume);
                            $_POST['ModuleCasestudy']['file'] = $fileNameResume;
                        } 
                       
                        
                    }   
                    $model->attributes=$_POST['ModuleCasestudy'];
                    if($model->save()){
                        Yii::app()->user->setFlash('success', "Case study added successfully."); 
                        $this->redirect(array('admin','institute_batch_id'=>$model->institute_batch_id));
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
		$dataProvider=new CActiveDataProvider('ModuleCasestudy');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($institute_batch_id)
	{
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=new ModuleCasestudy('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['ModuleCasestudy']['institute_batch_id'] = $institute_batch_id;
		if(isset($_GET['ModuleCasestudy'])) {
                    
                    $model->attributes=$_GET['ModuleCasestudy'];
                }

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
		$model=ModuleCasestudy::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='module-casestudy-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
