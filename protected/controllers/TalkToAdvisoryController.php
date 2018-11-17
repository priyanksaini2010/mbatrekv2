<?php

class TalkToAdvisoryController extends Controller
{
    
        public $errors = array();
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
        public function actions(){
            return array(
                // captcha action renders the CAPTCHA image displayed on the contact page
                'captcha'=>array(
                    'class'=>'CCaptchaAction',
                    'backColor'=>BACK_COLOR,
                ),
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
				'actions'=>array('index','view','create','captcha'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','admin','delete'),
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
                
                $this->layout = getCartLayot();
		$model=new TalkToAdvisory;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                if (isset($_POST['mbatrek_id'])) {
                    $user = Users::model()->findByAttributes(array("email"=>$_POST['mbatrek_id']));
                    $_POST['TalkToAdvisory']['name'] = $user->fname." ".$user->lname;
                    $_POST['TalkToAdvisory']['email'] = $user->email;
                    
                    
                }
                $_POST['TalkToAdvisory']['date'] = date("Y-m-d");
		if(isset($_POST['TalkToAdvisory']))
		{
			$model->attributes=$_POST['TalkToAdvisory'];
			if($model->save()){
				$this->redirect(array('site/page','view'=>"talk_to_advisory","thankc"=>1));
                        } else {
                           
                            foreach ($model->getErrors() as $error){
                                $this->errors['email'] = $error[0];
                            }
                            
                            $this->render('talk_to_advisory',array(
                                    'model'=>$model,
                            ));
                        }
		}
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

		if(isset($_POST['TalkToAdvisory']))
		{
			$model->attributes=$_POST['TalkToAdvisory'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('TalkToAdvisory');
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
		$model=new TalkToAdvisory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TalkToAdvisory']))
			$model->attributes=$_GET['TalkToAdvisory'];

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
		$model=TalkToAdvisory::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='talk-to-advisory-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
