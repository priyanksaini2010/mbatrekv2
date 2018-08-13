<?php

class InstitutesController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }



    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
        $model = new Institutes;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Institutes'])) {
            $model->attributes = $_POST['Institutes'];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Institutes'])) {
            $model->attributes = $_POST['Institutes'];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Institutes');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $this->layout = 'webroot.themes.bootstrap.views.layouts.main';
        $model = new Institutes('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Institutes']))
            $model->attributes = $_GET['Institutes'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Institutes::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'institutes-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionPortal() {
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
	$data['userData'] = $userData;
        $data['modules'] = Module::model()->findAll();
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        
	
//        pr($data['institute']->institute->instituteCourses[0]->instituteBatches);
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['consulting_projectss'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $this->render('portal', array('data' => $data));
    }
    
    public function actionTalktous(){
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
//        pr($data['institute']->institute->instituteCourses[0]->instituteBatches);
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['consulting_projectss'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
       
        $this->render('talktous', array('data' => $data));
    }
    
    public function actionInteractionwithfaculty() {
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
//        pr($data['institute']->institute->instituteCourses[0]->instituteBatches);
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['consulting_projectss'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
       
        $this->render('interactionwithfaculty', array('data' => $data));
    }
    
    public function actionFeedbacktombatrack($batch_id) {
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
//        pr($data['institute']->institute->instituteCourses[0]->instituteBatches);
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['consulting_projectss'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['batch_id'] = $batch_id;
        
        $this->render('feedbacktombatrack', array('data' => $data,"batch_id"=>$batch_id));
    }
    
    public function actionFeedbackfrommbatrack($batch_id, $module_id = null) {
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
//        pr($data['institute']->institute->instituteCourses[0]->instituteBatches);
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $data['consulting_projectss'] = JobPosting::model()->findAllByAttributes(array("industry_id" => Yii::app()->user->id));
        $criteria = new CDbCriteria;
        $criteria->addCondition("due_month<= ".date("m"));
        $modules_ytd = Module::model()->findAll($criteria);
        $criteria = new CDbCriteria;
        $students = array();
        $modules = array();
        $batchStudents = Students::model()->findAllByAttributes(array("institute_batch_id"=>$batch_id));
        foreach ($modules_ytd as $module_ytd) {
            $modules[] = $module_ytd->id; 
        }
        foreach ($batchStudents as $batchStudent) {
            $students[] = $batchStudent->id; 
        }
        
        if (!empty($students)) {
            $criteria->addInCondition('student_id', $students);
        } 
        if ($module_id != "") {
            $criteria->addCondition("module_id= ".$module_id);
        }
        $data['rating'] = ModuleStudentRating::model()->findAll($criteria);
        $criteria = new CDbCriteria;
        if (!empty($students)) {
            $criteria->addInCondition('student_id', $students);
        } 
        if (!empty($modules)) {
            $criteria->addInCondition('student_id', $students);
        } 
        $rating_ytd = ModuleStudentRating::model()->findAll($criteria);
        $to = 0;
        $gv = 0;
        foreach ($rating_ytd as $ytd) {
            $to = $to +10;
            $gv = $gv +$ytd->rating;
        }
        $data['per'] = 0;
        if ($to != 0) {
           $data['per'] = $gv /$to * 100; 
        }
        $data['sections'] = InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id" => $batch_id));
        $data['batch_id'] = $batch_id;
        $data['module_id'] = $module_id;
        $this->render('feedbackfrommbatrack', array('data' => $data,"batch_id"=>$batch_id));
    }
    
    public function actionStudentscore($batch_id, $module_id = null) {
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['batch_id'] = $batch_id;
        $data['module_id'] = $module_id;
        $data['modules'] = Module::model()->findAll();
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        $criteria = new CDbCriteria;
        $batches = array();
        foreach ($data['institute']->institute->instituteCourses[0]->instituteBatches as $batch) {
            $batches[] = $batch->id; 
        }
        if($batch_id != "") {
            $criteria->addCondition("institute_batch_id= ".$batch_id);
        }
        else if (!empty($batches)) {
            $criteria->addInCondition('institute_batch_id', $batches);
        } 
        if ($module_id != "") {
            $criteria->addCondition("module_id= ".$module_id);
        }
        $data['assigment'] = ModuleAssignment::model()->findAll($criteria);
        $this->render('studentscore', array('data' => $data));
    }
    
    public function actionAttendance($batch_id, $module_id = null){
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['batch_id'] = $batch_id;
        $data['module_id'] = $module_id;
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        $criteria = new CDbCriteria;
        $batches = array();
        foreach ($data['institute']->institute->instituteBatches as $batch) {
            $batches[] = $batch->id; 
        }
        if($batch_id != "") {
            $criteria->addCondition("institute_batch_id= ".$batch_id);
        }
        else if (!empty($batches)) {
            $criteria->addInCondition('institute_batch_id', $batches);
        }   
        if ($module_id != "") {
            $criteria->addCondition("module_id= ".$module_id);
        }
        $data['sessions'] = InstituteBatchSession::model()->findAll($criteria);
	$data['sessions_univ'] = InstituteBatchSession::model()->findAll();
        $this->render('attendancce', array('data' => $data));
    }
    
    public function actionInteraction($id,$type){
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['type'] = $type; 
        $data['id'] = $id; 
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        $criteria = new CDbCriteria;
         $criteria->addCondition("institute_id= ".$data['institute']->institute_id);
        if ($id != "") {
            $criteria->addCondition("id= ".$id);
        }
        $data['interactions'] = InstituteInteractionWithPlacemnet::model()->find($criteria);
        
        $criteria = new CDbCriteria;
        $criteria->addCondition("institute_id= ".$data['institute']->institute_id);
        if ($type != "") {
            $criteria->addCondition("type= ".$type);
        }
        $criteria->addCondition("module_id= ".$data['interactions']->module_id);
        $data['allinteractions'] = InstituteInteractionWithPlacemnet::model()->findAll($criteria);
        $this->render('interaction', array('data' => $data));
    }
    
    public function actionInteractionLanding($type,$module_id = null){
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['type'] = $type;
        $data['module_id'] = $module_id;
        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        $criteria = new CDbCriteria;
        $criteria->addCondition("institute_id= ".$data['institute']->institute_id);
	if ($type != "") {
            $criteria->addCondition("type= ".$type);
        }
        if ($module_id != "") {
            $criteria->addCondition("module_id= ".$module_id);
        }
        $data['interactions'] = InstituteInteractionWithPlacemnet::model()->findAll($criteria);
        $this->render('interactionlanding', array('data' => $data));
    }
    
    public function actionEditprofile() {
        $industryProfile = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        $data = array();
        if (!empty($_POST)) {
         // pr($_POST);
            $path="assets/companylogo";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {
                if (isset($_FILES['profile_pic']['size']) && $_FILES['profile_pic']['size'] > 0) {
                    $fileName = rand().str_replace(" ","", $_FILES['profile_pic']['name']); 
                    $tmp_name = $_FILES['profile_pic']['tmp_name'];
                    move_uploaded_file($tmp_name, $path."/".$fileName);
                    $_POST['profile_pic'] = $fileName;
                }
                
            }
            if (!isset($_POST['prog_1'])) {
                $_POST['prog_1'] = 0;
            } else {
            	 $_POST['prog_1'] = 1;
            }
            if (!isset($_POST['prog_2'])) {
                $_POST['prog_2'] = 0;
            } else {
             $_POST['prog_2'] = 1;
            }
            if (!isset($_POST['prog_3'])) {
                $_POST['prog_3'] = 0;
            } else{
            	 $_POST['prog_3'] = 1;
            }
            $model = InstituteUser::model()->findByPk($industryProfile->id);
            $model->attributes = $_POST;
            if ($model->save()) {
//                $this->redirect(array('portal','thankp'=>1));
            } else {
                pr($model->getErrors());
            }
            $modelUsers = Users::model()->findByPk(Yii::app()->user->id);
            $modelUsers->attributes = array(
                                            'fname'=> $_POST['fname'],
                                            'lname'=> $_POST['lname'],
                                            'phone_number'=> $_POST['phone_number'],
                                            'city'=> $_POST['city'],
                                        );
            
            if ($modelUsers->save()) {
                $this->redirect(array('portal','thankp'=>1));
            } else {
                pr($model->getErrors());
            }
        }
        $this->render('editprofile', array('data' => $data));
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
                'actions' => array(
                                    'create',
                                    'update',
                                    'portal',
                                    'talktous',
                                    'interactionwithfaculty',
                                    'feedbacktombatrack',
                                    'studentscore',
                                    'attendance',
                                    'interaction',
                                    'interactionlanding',
                                    'admin', 'delete','feedbackfrommbatrack','editprofile'
                                ),
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

}
