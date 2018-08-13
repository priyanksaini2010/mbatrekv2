<?php

class ProductKeyOutcomeController extends Controller
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
	public function actionCreate($id,$return = 0)
	{
                $modelProducts = Products::model()->findByPk($id);
		$model=new ProductKeyOutcome;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductKeyOutcome']))
		{
                        $path = "assets/products";
                        if (!is_dir($path)) {
                            CFileHelper::createDirectory($path, null, true);
                        }
                        if (!empty($_FILES)) {
                            $fileName = generateRandomString(10) . str_replace(" ", "", $_FILES['ProductKeyOutcome']['name']['icon']);  // random number + file name
                            $tmp_name = $_FILES['ProductKeyOutcome']['tmp_name']['icon'];
                            move_uploaded_file($tmp_name, $path . "/" . $fileName);
                            $_POST['ProductKeyOutcome']['icon'] = $fileName;

                        }

			$model->attributes=$_POST['ProductKeyOutcome'];
			if($model->save()){
                            
                            if($_POST['addmore'] == 0){
                                if($return == 1){
                                    Yii::app()->user->setFlash("success","Product's key out comes added successfully");
                                    $this->redirect(array('productKeyOutcome/admin','product_id'=>$id));
                                }else {
                                    Yii::app()->user->setFlash("success","Product's key out comes added successfully but product is not active please add following items to activate"
                                    . "<ul>"
                                    . "<li>Recommended Value Saver Packages</li>"
                                    . "<li>Key Points</li>"
                                    . "</ul>");
                                    $this->redirect(array('ProductRecommendedValueSaverPack/create','id'=>$id));
                                }
                                
                            } else {
                                if($return == 1){
                                    Yii::app()->user->setFlash("success","Product's key out comes added successfully");
                                }else {
                                  Yii::app()->user->setFlash("success","Product Include added successfully but is not active please add following items to activate"
                                    . "<ul>"
                                    . "<li>Recommended Value Saver Packages</li>"
                                    . "<li>Key Points</li>"
                                    . "</ul>");  
                                }
                                
    //                            $this->redirect(array('ProductEngage/create','id'=>$id));
                                $this->refresh(true);
                            }
                        }
		}

		$this->render('create',array(
			'model'=>$model,
                        "product_id"=>$id,
                        "id"=>$id,
                        'return' => $return,
                        "modelProducts" => $modelProducts
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id,$product_id)
	{
		$model=$this->loadModel($id);
                $modelProducts = Products::model()->findByPk($product_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                $path = "assets/products";
                if (!is_dir($path)) {
                    CFileHelper::createDirectory($path, null, true);
                }
                if (!empty($_FILES)) {
                    $fileName = generateRandomString(10) . str_replace(" ", "", $_FILES['ProductKeyOutcome']['name']['icon']);  // random number + file name
                    $tmp_name = $_FILES['ProductKeyOutcome']['tmp_name']['icon'];
                    move_uploaded_file($tmp_name, $path . "/" . $fileName);
                    $_POST['ProductKeyOutcome']['icon'] = $fileName;

                } else {
                    if(isset($_POST['ProductKeyOutcome'])){
                        $_POST['ProductKeyOutcome']['icon'] = $model->icon;
                    }
                   
                }
		if(isset($_POST['ProductKeyOutcome']))
		{
			$model->attributes=$_POST['ProductKeyOutcome'];
			if($model->save())
                        {
                             Yii::app()->user->setFlash("success","Product's key out comes updated successfully");
                                $this->redirect(array('productKeyOutcome/admin','product_id'=>$product_id));
                        }
		}

		$this->render('update',array(
			'model'=>$model,
                        "modelProducts" => $modelProducts,
                        "id" => $product_id,
                        "product_id" => $product_id,
                        "return" => 0,
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
		$dataProvider=new CActiveDataProvider('ProductKeyOutcome');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($product_id)
	{
                $modelProducts = Products::model()->findByPk($product_id);
		$model=new ProductKeyOutcome('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['ProductKeyOutcome']['product_id'] = $product_id;
		if(isset($_GET['ProductKeyOutcome']))
			$model->attributes=$_GET['ProductKeyOutcome'];

		$this->render('admin',array(
			'model'=>$model,
                        'product_id' => $product_id,  
                        'id' => $product_id,  
                        'modelProducts' => $modelProducts,  
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ProductKeyOutcome::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-key-outcome-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
