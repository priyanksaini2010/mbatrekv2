<?php

class IndustryController extends Controller {

    public $errors = array();
    public $success = array();
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
                'actions' => array('deleteconsulting','deleteproject','deletejob','deleteinternship','deletecampus','portal', 'createintership', 'createproject', 'createjobs','createconsultingprojects','profile','sessionatcampus'),
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
    
    
    public function actionProfile(){
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        if (!empty($_POST)) {
            $path="assets/companylogo";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {
                if (isset($_FILES['founder_image']['size']) && $_FILES['founder_image']['size'] > 0) {
                    $fileName = rand().str_replace(" ","", $_FILES['founder_image']['name']); 
                    $tmp_name = $_FILES['founder_image']['tmp_name'];
                    move_uploaded_file($tmp_name, $path."/".$fileName);
                    $_POST['founder_image'] = $fileName;
                }
                
            }
            $model = Industries::model()->findByPk($industryProfile->industry->id);
            if (empty($model)) {
                $model = new Industries;
                $model->attributes = $_POST;
                if ($model->save()) {
                    $id = $model->id;
                    $model = new IndustryUser;
                    $model->attributes = array("industry_id"=>$id,"user_id"=>   Yii::app()->user->id);
                    if ($model->save()) {
                        $this->redirect(array('portal','thankp'=>1));
                    } else {
                        pr($model->getErrors());
                    }
                } else {
                    pr($model->getErrors());
                }
            } else {
                $model->attributes = $_POST;
                if ($model->save()) {
                    $this->redirect(array('portal','thankp'=>1));
                } else {
                    pr($model->getErrors());
                }
            }
            
            
        }
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
       
        $data['modules'] = Module::model()->findAll();
        
         $data['profile'] = Module::model()->findAll();
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['consulting_projectss'] = JobPosting::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $this->render('profile', array('data' => $data));
    }

    public function actionPortal() {
        $data = array();
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
       
        $data['modules'] = Module::model()->findAll();
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
         $data['profile'] = Module::model()->findAll();
        $data['internships'] = IndustryInternship::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['projects'] = LiveProjects::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['jobs'] = JobPosting::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['consulting_projectss'] = industryProjectWithFaculty::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['session'] = IndustrySession::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $this->render('portal', array('data' => $data));
    }

    public function actionCreateintership($id = null) {
        $data = array();
        if ($id == null) {
            $model = new IndustryInternship;
        } else {
            $model = IndustryInternship::model()->findByPk($id);
        }
        

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        if (isset($_POST['IndustryInternship'])) {
            $_POST['IndustryInternship']['industry_id'] =  $industryProfile->industry_id;
            $_POST['IndustryInternship']['start_date'] = $_POST['example10'];
            $_POST['IndustryInternship']['end_date'] = $_POST['example11'];
            $_POST['IndustryInternship']['created_by'] = Yii::app()->user->id;
            $model->attributes = $_POST['IndustryInternship'];
//	    pr($_POST);
            if ($model->save()){
                $this->redirect(array('portal','thankd'=>1));
            }else {
                foreach($model->getErrors() as $key=>$errors){
                    $this->errors[$key]  = $errors[0];
                }
            }
            
        }
        $data['modules'] = Module::model()->findAll();
        $data['cities'] = getCities();
        $this->render("createintership", array('data_renderer' => $data, 'model' => $model));
    }
    
    

    public function actionCreateproject($id = null) {
        $data = array();
        $model = new LiveProjects;
        if ($id == null) {
            $model = new LiveProjects;
        } else {
            $model = LiveProjects::model()->findByPk($id);
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        if (isset($_POST['LiveProjects'])) {
            $_POST['LiveProjects']['industry_id'] = $industryProfile->industry_id;
            $_POST['LiveProjects']['start_date'] = $_POST['example10'];
            $_POST['LiveProjects']['end_date'] = $_POST['example11'];
            $_POST['LiveProjects']['created_by'] = Yii::app()->user->id;
            $model->attributes = $_POST['LiveProjects'];
            if ($model->save()){
		$subject = "New project posted";
		$body = "Hello Admin,"
			. "New project have been posted by ".Yii::app()->user->name.".<br/><br/ >"
			. "Thanks,<br/ >"
			. "MBATrek";
		$headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
			"Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

		$headers .= "MIME-Version: 1.0\r\n".
			    "Content-Type: text/html; charset=UTF-8";

		mail(Yii::app()->params['adminEmail'], $subject,$body,$headers);
                $this->redirect(array('portal','thankd'=>1));
            }else {
                foreach($model->getErrors() as $key=>$errors){
                    $this->errors[$key]  = $errors[0];
                }
            }
            
        }
        $data['modules'] = Module::model()->findAll();
        $data['cities'] = getCities();
        $this->render("createproject", array('data_renderer' => $data, 'model' => $model));
    }
    
    
    public function actionCreatejobs($id = null) {
        $data = array();
        if ($id == null) {
            $model = new JobPosting;
        } else {
            $model = JobPosting::model()->findByPk($id);
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        if (isset($_POST['JobPosting'])) {
            $_POST['JobPosting']['industry_id'] = $industryProfile->industry_id;
            $_POST['JobPosting']['created_by'] = Yii::app()->user->id;
            $model->attributes = $_POST['JobPosting'];
            if ($model->save()){
		$subject = "New job posted";
		$body = "Hello Admin,"
			. "New job have been posted by ".Yii::app()->user->name.".<br/><br/ >"
			. "Thanks,<br/ >"
			. "MBATrek";
		$headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
			"Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

		$headers .= "MIME-Version: 1.0\r\n".
			    "Content-Type: text/html; charset=UTF-8";

		mail(Yii::app()->params['adminEmail'], $subject,$body,$headers);
                $this->redirect(array('portal','thankd'=>1));
            }else {
                foreach($model->getErrors() as $key=>$errors){
                    $this->errors[$key]  = $errors[0];
                }
            }
            
        }
        $data['modules'] = Module::model()->findAll();
        $data['cities'] = getCities();
        $this->render("createjobs", array('data_renderer' => $data, 'model' => $model));
    }
    
    public function actionCreateconsultingprojects($id = null) {
        $data = array();
        if ($id == null) {
            $model = new IndustryProjectWithFaculty;
        } else {
            $model = IndustryProjectWithFaculty::model()->findByPk($id);
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        if (isset($_POST['IndustryProjectWithFaculty'])) {
            $_POST['IndustryProjectWithFaculty']['industry_id'] = $industryProfile->industry_id;
            $_POST['IndustryProjectWithFaculty']['created_by'] = Yii::app()->user->id;
            $model->attributes = $_POST['IndustryProjectWithFaculty'];
            if ($model->save()){
		$subject = "New consultig project posted";
		$body = "Hello Admin,"
			. "New consulting project have been posted by ".Yii::app()->user->name.".<br/><br/ >"
			. "Thanks,<br/ >"
			. "MBATrek";
		$headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
			"Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

		$headers .= "MIME-Version: 1.0\r\n".
			    "Content-Type: text/html; charset=UTF-8";

		mail(Yii::app()->params['adminEmail'], $subject,$body,$headers);
                $this->redirect(array('portal','thankd'=>1));
            }else {
                foreach($model->getErrors() as $key=>$errors){
                    $this->errors[$key]  = $errors[0];
                }
            }
            
        }
        $data['modules'] = Module::model()->findAll();
        $data['cities'] = getCities();
        $this->render("createconsulting", array('data_renderer' => $data, 'model' => $model));
    }
    
    public function actionSessionatcampus($id = null) {
        if ($id == null) {
            $model = new IndustrySession;
        } else {
            $model = IndustrySession::model()->findByPk($id);
        }
        
        $userData = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
        if (!empty($_POST)) {
           
            $model->attributes = array("industry_id"=>$industryProfile->industry->id,'thought'=>$_POST['thought'],
					"created_by"=>Yii::app()->user->id,
				    );
            if ($model->save()) {
                if ($id == null) {
                    $this->refresh(true,"&thanksession=1");
                    
                } else {
                    $this->redirect(array('industry/sessionatcampus',"thanksessionup"=>1));
                }
                
            } else {
                pr($model->getErrors());
            }
        }
        $data = array();
        $data['session'] = IndustrySession::model()->findAllByAttributes(array("industry_id" => $industryProfile->industry_id));
        $data['modules'] = Module::model()->findAll();
        $data['cities'] = getCities();
        $this->render("sessionatcampus", array('data' => $data,"model"=>$model));
    }
    
    public function actionDeletecampus($id = null){
        $model = IndustrySession::model()->findByPk($id);
        if ($model->delete()) {
            $this->redirect(array('industry/sessionatcampus',"thanksessiondel"=>1));
        }
    }
    public function actionDeleteinternship($id = null){
        $model = IndustryInternship::model()->findByPk($id);
        if ($model->delete()) {
            $this->redirect(array('industry/portal',"thankinternshipdel"=>1));
        }
    }
    public function actionDeletejob($id = null){
        $model = JobPosting::model()->findByPk($id);
        if ($model->delete()) {
            $this->redirect(array('industry/portal',"thankjobndel"=>1));
        }
    }
    public function actionDeleteproject($id = null){
        $model = LiveProjects::model()->findByPk($id);
        if ($model->delete()) {
            $this->redirect(array('industry/portal',"thankprojectdel"=>1));
        }
    }
    public function actionDeleteconsulting($id = null){
        $model = industryProjectWithFaculty::model()->findByPk($id);
        if ($model->delete()) {
            $this->redirect(array('industry/portal',"thankprojectdel"=>1));
        }
    }

    

}
