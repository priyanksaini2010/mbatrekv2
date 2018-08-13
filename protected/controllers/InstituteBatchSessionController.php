<?php

class InstituteBatchSessionController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','addrating'),
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
	public function actionaddrating($institute_batch_id){
	    $modules= Module::model()->findAll();
	    $sections = InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$institute_batch_id));
	    
	    if(!empty($_POST)) {
		$students = InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_POST['section']));
		foreach ($students as $stud) {
		    $arr = array("module_id"=>$_POST['module'],"student_id"=>$stud->student_id);
		    $model = ModuleStudentRating::model()->findByAttributes($arr);
		   
		    if(empty($model)){
			$model = new ModuleStudentRating();
		    } else {
			$model = ModuleStudentRating::model()->findByPk($model->id);
		    }
//		    $arr = array();
		    $arr['rating'] = $_POST['rating'];
		    $model->attributes = $arr;
//		    pr($model->attributes);
		    if (!$model->save()) {
			pr($model->getErrors());
		    } else {
			Yii::app()->user->setFlash('success', "Rating Added Successfully."); 
//			$this->redirect(array('admin','institute_batch_id'=>$institute_batch_id));
		    }
		}
	    }
	    $this->render("addrating",array("module"=>$modules,'section'=>$sections));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
                $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
		$model=new InstituteBatchSession;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['InstituteBatchSession']))
		{
                        $path="assets/webinar";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        if (!empty($_FILES)) {
//                            $uploadedFile=CUploadedFile::getInstance($model,'session_plan_file');
                            $fileName = rand().str_replace(" ","", $_FILES['InstituteBatchSession']['name']['session_plan_file']);  // random number + file name
                            $tmp_name = $_FILES['InstituteBatchSession']['tmp_name']['session_plan_file'];
                            move_uploaded_file($tmp_name, $path."/".$fileName);
                            $_POST['InstituteBatchSession']['session_plan_file'] = $fileName;
                        }
                        $_POST['InstituteBatchSession']['session_date'] = $_POST['example111'];
			$model->attributes=$_POST['InstituteBatchSession'];
//			pr($_POST);
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Session Added Successfully."); 
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

		if(isset($_POST['InstituteBatchSession']))
		{
                        $path="assets/webinar";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        // Uncomment the following line if AJAX validation is needed
                        // $this->performAjaxValidation($model);
                        if (!empty($_FILES)) {
                            $uploadedFile=CUploadedFile::getInstance($model,'session_plan_file');
                            $fileName = rand().str_replace(" ","", $_FILES['InstituteBatchSession']['name']['session_plan_file']);  // random number + file name
                            $tmp_name = $_FILES['InstituteBatchSession']['tmp_name']['session_plan_file'];
                            move_uploaded_file($tmp_name, $path."/".$fileName);
                            $_POST['InstituteBatchSession']['session_plan_file'] = $fileName;
                        }
			
			$_POST['InstituteBatchSession']['session_date'] = $_POST['example111'];
			$model->attributes=$_POST['InstituteBatchSession'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Session Updated Successfully."); 
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
		$dataProvider=new CActiveDataProvider('InstituteBatchSession');
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
		$model=new InstituteBatchSession('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['InstituteBatchSession']['institute_batch_id'] = $institute_batch_id;
		if(isset($_GET['InstituteBatchSession']))
			$model->attributes=$_GET['InstituteBatchSession'];

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
		$model=InstituteBatchSession::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='institute-batch-session-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
