<?php

class ProductsController extends Controller
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
		$model=new Products;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Products']))
		{
                        $_POST['Products']["status"] = 0;
                        $path = "assets/products";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path, null, true);
                        }
                        if (!empty($_FILES)) {
                            $fileName = rand() . str_replace(" ", "", $_FILES['Products']['name']['logo']);  // random number + file name
                            $tmp_name = $_FILES['Products']['tmp_name']['logo'];
                            move_uploaded_file($tmp_name, $path . "/" . $fileName);
                            $_POST['Products']['logo'] = $fileName;
                            $fileName = rand() . str_replace(" ", "", $_FILES['Products']['name']['home_page_icon']);  // random number + file name
                            $tmp_name = $_FILES['Products']['tmp_name']['home_page_icon'];
                            move_uploaded_file($tmp_name, $path . "/" . $fileName);
                            $_POST['Products']['home_page_icon'] = $fileName;

                        }
			$model->attributes=$_POST['Products'];
			if($model->save()){
                            Yii::app()->user->setFlash("success","Product added successfully but is not active please add following items to activate"
                                    . " <ul>"
                                    . "<li>Includes</li>"
                                    . "<li>How do we engage with you</li>"
                                    . "<li>Key Outcomes</li>"
                                    . "<li>Recommended Value Saver Packages</li>"
                                    . "<li>Key Points</li>"
                                    . "</ul>");
                            $this->redirect(array('ProductInclude/create','id'=>$model->id));
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

		if(isset($_POST['Products']))
		{
                        $path = "assets/products";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path, null, true);
                        }
                        if (!empty($_FILES)) {
                            if($_FILES['Products']['name']['logo'] != ""){
                            $fileName = rand() . str_replace(" ", "", $_FILES['Products']['name']['logo']);  // random number + file name
                            $tmp_name = $_FILES['Products']['tmp_name']['logo'];
                            move_uploaded_file($tmp_name, $path . "/" . $fileName);
                            $_POST['Products']['logo'] = $fileName;
                            } else {
                                 $_POST['Products']['logo'] = $model->logo;
                            }
                        if($_FILES['Products']['name']['home_page_icon'] != ""){
                            $fileName = rand() . str_replace(" ", "", $_FILES['Products']['name']['home_page_icon']);  // random number + file name
                            $tmp_name = $_FILES['Products']['tmp_name']['home_page_icon'];
                            move_uploaded_file($tmp_name, $path . "/" . $fileName);
                            $_POST['Products']['home_page_icon'] = $fileName;
                            
                            } else {
                                 $_POST['Products']['home_page_icon'] = $model->home_page_icon;
                            }
                        } else {
                            $_POST['Products']['logo'] = $model->logo;
                            $_POST['Products']['home_page_icon'] = $model->home_page_icon;
                        }
			$model->attributes=$_POST['Products'];
//                        pr($model->attributes);
			if($model->save())
                        {
                            Yii::app()->user->setFlash("success","Product updated successfully");
                            $this->redirect(array('admin','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Products');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Products('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Products']))
			$model->attributes=$_GET['Products'];

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
		$model=Products::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='products-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
