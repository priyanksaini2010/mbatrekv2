<?php

class ProductIncludeController extends Controller
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
                'actions' => array('create', 'update', 'admin', 'delete','sort'),
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
	public function actionCreate($id, $return = 0)
	{
		$model=new ProductInclude;
                $modelProducts = Products::model()->findByPk($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductInclude']))
		{
                    $path = "assets/products";
                    if (!is_dir($path)) {
                        CFileHelper::createDirectory($path, null, true);
                    }
                    if (!empty($_FILES)) {
                        $fileName = generateRandomString(10) . str_replace(" ", "", $_FILES['ProductInclude']['name']['logo']);  // random number + file name
                        $tmp_name = $_FILES['ProductInclude']['tmp_name']['logo'];
                        move_uploaded_file($tmp_name, $path . "/" . $fileName);
                        $_POST['ProductInclude']['logo'] = $fileName;

                    }
                    
                    $model->attributes=$_POST['ProductInclude'];
                    if($model->save()){
                        
                        if($_POST['addmore'] == 0){
                            if($return == 1){
                                 Yii::app()->user->setFlash("success","Product Include added successfully");
                                 $this->refresh(true);
                            } else {
                                Yii::app()->user->setFlash("success","Product Include added successfully but product is not active please add following items to activate"
                                    . "<ul>"
                                    . "<li>How do we engage with you</li>"
                                    . "<li>Key Outcomes</li>"
                                    . "<li>Recommended Value Saver Packages</li>"
                                    . "<li>Key Points</li>"
                                    . "</ul>");
                                $this->redirect(array('ProductEngage/create','id'=>$id));
                            }
                        } else {
                             if($return == 1){
                                   Yii::app()->user->setFlash("success","Product Include added successfully");
                             } else {
                            Yii::app()->user->setFlash("success","Product Include added successfully but is not active please add following items to activate"
                                . "<ul>"
                                . "<li>How do we engage with you</li>"
                                . "<li>Key Outcomes</li>"
                                . "<li>Recommended Value Saver Packages</li>"
                                . "<li>Key Points</li>"
                                . "</ul>");
                             }
                            $this->refresh(true);
                        }
                        
                    }
		}
               
		$this->render('create',array(
			'model'=>$model,
                        'product_id'=>$id,
                        'modelProducts'=>$modelProducts,'return' => $return
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id,$product_id,$return = 0)
	{
		$model=$this->loadModel($id);
                $modelProducts = Products::model()->findByPk($product_id);
                $path = "assets/products";
                if (!is_dir($path)) {
                    CFileHelper::createDirectory($path, null, true);
                }
                if (!empty($_FILES)) {
                    if(!empty($_FILES['ProductInclude']['name']['logo'])){
                        $fileName = generateRandomString(10) . str_replace(" ", "", $_FILES['ProductInclude']['name']['logo']);  // random number + file name
                        $tmp_name = $_FILES['ProductInclude']['tmp_name']['logo'];
                        move_uploaded_file($tmp_name, $path . "/" . $fileName);
                        $_POST['ProductInclude']['logo'] = $fileName;
                    } else {
                        $_POST['ProductInclude']['logo'] = $model->logo;
                    }
                    

                }
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductInclude']))
		{
			$model->attributes=$_POST['ProductInclude'];
			if($model->save()){
                                Yii::app()->user->setFlash("success","Product Include updated successfully");
                                $this->redirect(array('ProductInclude/admin','product_id'=>$product_id));
                        }
		}

		$this->render('update',array(
			'model'=>$model,
                        'return' =>$return,
                        'product_id' => $product_id,
                        'modelProducts' => $modelProducts
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
		$dataProvider=new CActiveDataProvider('ProductInclude');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($product_id)
	{
		$model=new ProductInclude('search');
                $modelProduct = Products::model()->findByPk($product_id);
		$model->unsetAttributes();  // clear any default values
                $_GET['ProductInclude']['product_id'] = $product_id;
		if(isset($_GET['ProductInclude']))
			$model->attributes=$_GET['ProductInclude'];

		$this->render('admin',array(
			'model'=>$model,
			'modelProducts'=>$modelProduct,
                        'product_id' => $product_id
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ProductInclude::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-include-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
