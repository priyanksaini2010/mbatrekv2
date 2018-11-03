<?php

class EventGalleryController extends Controller
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
		$model=new EventGallery;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EventGallery']))
		{
                        $path="assets/eBrouchers";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        $error =false;
                        if (!empty($_FILES)) {
//                            pr($_FILES);
                            $fileName = rand().str_replace(" ","", $_FILES['EventGallery']['name']['image_1']);  // random number + file name
                            $tmp_name = $_FILES['EventGallery']['tmp_name']['image_1'];
                            move_uploaded_file($tmp_name, $path."/".$fileName);
                            $imageSize = getimagesize($path."/".$fileName);
                            
                            if ($imageSize[0] < 376 || $imageSize[0] < 282 ) {
                                $model->addError("image_1","Image 1 Size Must Be greater than equal to 376x282");
                                $error =true;
                            }
                            $_POST['EventGallery']['image_1'] = $fileName;
                            $fileName = rand().str_replace(" ","", $_FILES['EventGallery']['name']['image_2']);  // random number + file name
                            $tmp_name = $_FILES['EventGallery']['tmp_name']['image_2'];
                           
                            move_uploaded_file($tmp_name, $path."/".$fileName);
                             $imageSize = getimagesize($path."/".$fileName);
                            if ($imageSize[0] < 376 || $imageSize[0] < 282 ) {
                                $model->addError("image_2","Image 2 Size Must Be greater than equal to 376x282");
                                $error =true;
                            }
                            $_POST['EventGallery']['image_2'] = $fileName;
                            $fileName = rand().str_replace(" ","", $_FILES['EventGallery']['name']['image_3']);  // random number + file name
                            $tmp_name = $_FILES['EventGallery']['tmp_name']['image_3'];
                            move_uploaded_file($tmp_name, $path."/".$fileName);
                            $imageSize = getimagesize($path."/".$fileName);
                            if ($imageSize[0] < 376 || $imageSize[0] < 282 ) {
                            $model->addError("image_3","Image 3 Size Must Be greater than equal to 376x282");
                                $error =true;
                            }
                            $_POST['EventGallery']['image_3'] = $fileName;

                        }
                        
                        $model->attributes=$_POST['EventGallery'];
			if(!$error && $model->save()){
                            Yii::app()->user->setFlash('success', "Event Category Added Successfully."); 
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
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EventGallery']))
		{
                        $path="assets/eBrouchers";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path,null,true);
                        }
                        if (!empty($_FILES)) {
                            if($_FILES['EventGallery']['tmp_name']['image_1'] != ""){
                                $fileName = rand().str_replace(" ","", $_FILES['EventGallery']['name']['image_1']);  // random number + file name
                                $tmp_name = $_FILES['EventGallery']['tmp_name']['image_1'];
                                move_uploaded_file($tmp_name, $path."/".$fileName);
                                $_POST['EventGallery']['image_1'] = $fileName;
                            }else {
                                 $_POST['EventGallery']['image_1'] = $model->image_1;
                            }
                            if($_FILES['EventGallery']['tmp_name']['image_2'] != ""){
                                $fileName = rand().str_replace(" ","", $_FILES['EventGallery']['name']['image_2']);  // random number + file name
                                $tmp_name = $_FILES['EventGallery']['tmp_name']['image_2'];
                                move_uploaded_file($tmp_name, $path."/".$fileName);
                                $_POST['EventGallery']['image_2'] = $fileName;
                            }else {
                                 $_POST['EventGallery']['image_2'] = $model->image_2;
                            }
                            if($_FILES['EventGallery']['tmp_name']['image_3'] != ""){
                                $fileName = rand().str_replace(" ","", $_FILES['EventGallery']['name']['image_3']);  // random number + file name
                                $tmp_name = $_FILES['EventGallery']['tmp_name']['image_3'];
                                move_uploaded_file($tmp_name, $path."/".$fileName);
                                $_POST['EventGallery']['image_3'] = $fileName;
                            }else {
                                 $_POST['EventGallery']['image_3'] = $model->image_3;
                            }
                            

                        }
                       
                        
			$model->attributes=$_POST['EventGallery'];
			if($model->save()){
                            Yii::app()->user->setFlash('success', "Event Added Successfully."); 
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
		$dataProvider=new CActiveDataProvider('EventGallery');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EventGallery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EventGallery']))
			$model->attributes=$_GET['EventGallery'];

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
		$model=EventGallery::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-gallery-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
