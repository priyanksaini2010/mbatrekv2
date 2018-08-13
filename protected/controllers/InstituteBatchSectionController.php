<?php

class InstituteBatchSectionController extends Controller
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
				'actions'=>array('create','update','admin','delete','addstudents','view','matrixview'),
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
	
	public function actionMatrixview($institute_batch_id)
	{
	    $this->layout = getLayot();
	    if (!empty($_POST)) {
//		pr($_POST);
		$batch  = InstituteBatchSection::model()->findAllByAttributes(array('institute_batch_id'=>$_GET['institute_batch_id']));
		foreach ($batch as $bat) {
		    $attributes = array("institute_batch_section_id"=>$bat->id);
		    InstituteBatchSectionStudent::model()->deleteAll("institute_batch_section_id = :institute_batch_section_id",$attributes);
		}
		foreach ($_POST['student'] as $stud) {
		    $broke = explode("-",$stud);
		    $model =  new InstituteBatchSectionStudent();
		    $attributes = array("institute_batch_section_id"=>$broke[1]);
		    $attributes['student_id'] = $broke[0];
		    $model->attributes = $attributes;
		    if ($model->save()) {
			    Yii::app()->user->setFlash("success","Students assigned to sections successfully.");
		    }
		}

	    }
	    $this->render('matrixview');
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
	     $this->layout = getLayot();
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	public function __call($name, $parameters) {
	    parent::__call($name, $parameters);
	}
	
	public function actionAddstudents(){
	    $this->layout = getLayot();
	    if (!empty($_POST)) {
		if (!empty($_POST['student_id']) && !empty($_POST['section_id'])) {
		    foreach($_POST['student_id'] as $student){
			$model = new InstituteBatchSectionStudent();
			$model->attributes = array(
						    "institute_batch_section_id"=>$_POST['section_id'],
						    "student_id" => $student
						);
			if ($model->save()) {
			    Yii::app()->user->setFlash("success","Students Added to Sections ");
			}
		    }
		    $this->redirect(array('admin','institute_batch_id'=>$_REQUEST['institute_batch_id']));
		}
	    }
	    $this->render("addstudents");
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new InstituteBatchSection;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		if(isset($_POST['InstituteBatchSection']))
		{
			$model->attributes=$_POST['InstituteBatchSection'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Section Added Successfully."); 
                            $this->redirect(array('admin','institute_batch_id'=>$model->institute_batch_id));
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
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InstituteBatchSection']))
		{
			$model->attributes=$_POST['InstituteBatchSection'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Section Updated Successfully."); 
                            $this->redirect(array('admin','institute_batch_id'=>$model->institute_batch_id));
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
		$dataProvider=new CActiveDataProvider('InstituteBatchSection');
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
                $_GET['InstituteBatchSection']['institute_batch_id'] = $institute_batch_id    ;
		$model=new InstituteBatchSection('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InstituteBatchSection']))
			$model->attributes=$_GET['InstituteBatchSection'];

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
		$model=InstituteBatchSection::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='institute-batch-section-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
