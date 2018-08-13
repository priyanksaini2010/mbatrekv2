<?php

class IndustryUserController extends Controller
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
                $this->layout = getLayot(); 
		$model=new IndustryUser;
                $modelUser = new Users;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['IndustryUser']))
		{
                    
                        if(isset($_POST['example10'])) {
                            $_POST['Users']['dob'] = $_POST['example10'];
                        }
                        $_POST['Users']['username'] = $_POST['Users']['email'];
			 $_POST['Users']['institute_id'] = "";
                        $_POST['Users']['role'] = 3;
                        $check = Users::model()->findByAttributes(array('email' => $_POST['Users']['email']));
                        if (count($check) > 0) {
                            Yii::app()->user->setFlash('error', "User with this email address already exists."); 
                        } else {
                            $modelUser->attributes=$_POST['Users'];
                            if ($modelUser->save()) {
                                $_POST['IndustryUser']['industry_id'] = $_GET['industry_id'];
                                $_POST['IndustryUser']['user_id'] = $modelUser->id;
                                $model->attributes=$_POST['IndustryUser'];
                                if ($model->save()) {
                                   Yii::app()->user->setFlash("success","User added successfully");
                                    $this->redirect(array('industries/view','id'=>$model->industry->id));
                                } else {
                                    $modelUser = Users::model()->findByPk($modelUser->id)->delete();
                                    $errors = $model->getErrors();
                                    foreach ($errors as $error) {
                                        Yii::app()->user->setFlash('error', $error[0]); 
                                        break;
                                    }
                                }
                            } else {
                                $errors = $modelUser->getErrors();
                                foreach ($errors as $error) {
                                    Yii::app()->user->setFlash('error', $error[0]); 
                                    break;
                                }
                            }
                        }
                }

		$this->render('create',array(
			'model'=>$model,
                        "modelUser"=> $modelUser
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            $this->layout = getLayot();
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['IndustryUser']))
		{
			$model->attributes=$_POST['IndustryUser'];
			if($model->save()){
                            Yii::app()->user->setFlash("success","User updated successfully");
                            $this->redirect(array('industries/view','id'=>$model->industry->id));
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
		$dataProvider=new CActiveDataProvider('IndustryUser');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($industry_id)
	{
            $this->layout  = getLayot();
		$model=new IndustryUser('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['IndustryUser']['industry_id'] = $industry_id;
		if(isset($_GET['IndustryUser']))
			$model->attributes=$_GET['IndustryUser'];

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
		$model=IndustryUser::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='industry-user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
