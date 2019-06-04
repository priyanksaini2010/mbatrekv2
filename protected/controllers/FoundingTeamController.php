<?php

class FoundingTeamController extends Controller
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete'),
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
		$model=new FoundingTeam;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        $path = "assets/team";
        if (!is_dir($path)) {
            CFileHelper::createDirectory($path, null, true);
        }
        if (!empty($_FILES)) {
            $fileName = rand() . str_replace(" ", "", $_FILES['FoundingTeam']['name']['photo_1']);  // random number + file name
            $tmp_name = $_FILES['FoundingTeam']['tmp_name']['photo_1'];
            move_uploaded_file($tmp_name, $path . "/" . $fileName);
            $_POST['FoundingTeam']['photo_1'] = $fileName;
            $fileName = rand() . str_replace(" ", "", $_FILES['FoundingTeam']['name']['photo_2']);  // random number + file name
            $tmp_name = $_FILES['FoundingTeam']['tmp_name']['photo_2'];
            move_uploaded_file($tmp_name, $path . "/" . $fileName);
            $_POST['FoundingTeam']['photo_2'] = $fileName;


        }
		if(isset($_POST['FoundingTeam']))
		{
			$model->attributes=$_POST['FoundingTeam'];
			if($model->save()){
                Yii::app()->user->setFlash("success",'Team member added successfully');
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FoundingTeam']))
		{
            $path = "assets/team";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path, null, true);
            }
            if (!empty($_FILES)) {
                if($_FILES['FoundingTeam']['name']['photo_1'] != ""){
                    $fileName = rand() . str_replace(" ", "", $_FILES['FoundingTeam']['name']['photo_1']);  // random number + file name
                    $tmp_name = $_FILES['FoundingTeam']['tmp_name']['photo_1'];
                    move_uploaded_file($tmp_name, $path . "/" . $fileName);
                    $_POST['FoundingTeam']['photo_1'] = $fileName;
                } else {
                    $_POST['FoundingTeam']['photo_1'] = $model->photo_1;
                }
                if($_FILES['FoundingTeam']['name']['photo_2'] != ""){
                    $fileName = rand() . str_replace(" ", "", $_FILES['FoundingTeam']['name']['photo_2']);  // random number + file name
                    $tmp_name = $_FILES['FoundingTeam']['tmp_name']['photo_2'];
                    move_uploaded_file($tmp_name, $path . "/" . $fileName);
                    $_POST['FoundingTeam']['photo_2'] = $fileName;
                } else {
                    $_POST['FoundingTeam']['photo_2'] = $model->photo_2;
                }
            }
            $model->attributes=$_POST['FoundingTeam'];
            if($model->save()){
                Yii::app()->user->setFlash("success",'Team member updated successfully');
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
		$dataProvider=new CActiveDataProvider('FoundingTeam');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FoundingTeam('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FoundingTeam']))
			$model->attributes=$_GET['FoundingTeam'];

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
		$model=FoundingTeam::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='founding-team-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
