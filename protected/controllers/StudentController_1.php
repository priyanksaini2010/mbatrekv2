<?php

class StudentController extends Controller {

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

    
    public function actionPortal() {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['assigments'] = ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        
        $this->render('portal', array('data' => $data));
    }
    
    public function actionAssignments() {
        $data = array();
        $module_id = isset($_REQUEST['module'])?$_REQUEST['module']:"";;
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        
        
        $criteria = new CDbCriteria;
        $criteria->addCondition("institute_batch_id= ".$data['student_profile']->institute_batch_id);
        if ($module_id != "") {
            $criteria->addCondition("module_id= ".$module_id);
        }
        $data['assigments'] = ModuleAssignment::model()->findAll($criteria);
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $data['module'] = isset($_REQUEST['module'])?$_REQUEST['module']:"";
        $this->render('assignments', array('data' => $data));
    }
    
    public function actionWebinars() {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['assigments'] = ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $data['webinars'] = ModuleWebinar::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id,'type' => 1));
        
        $this->render('webinars', array('data' => $data));
    }
    
    public function actionSpeakertakeaway() {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['assigments'] = ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $data['webinars'] = ModuleWebinar::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id,'type' => 2));
        
        $this->render('speakertakeaway', array('data' => $data));
    }
    
    public function actionCasestudy() {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['assigments'] = ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $data['webinars'] = ModuleWebinar::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));

        $data['casestudiesFunctions'] = CasestudyFunctions::model()->findAll();
        $function = isset($_REQUEST['function'])?$_REQUEST['function']:"";
        
        $criteria = new CDbCriteria;
        $criteria->addCondition("institute_batch_id= ".$data['student_profile']->institute_batch_id);
        if ($function != "") {
            $criteria->addCondition("function_id= ".$function);
        }
        $data['function'] = $function;
        $data['casestudies'] = ModuleCasestudy::model()->findAll($criteria);
        $this->render('casestudy', array('data' => $data));
    }
    
    public function actionCasestudeydetail($id) {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['assigments'] = ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $data['webinars'] = ModuleWebinar::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['casestudy'] = ModuleCasestudy::model()->findByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id,'id' => $id));
        $data['casestudiesFunctions'] = CasestudyFunctions::model()->findAll();
        $data['casestudyQuiz'] = CasestudyQuiz::model()->findAllByAttributes(array("casestudy_id" =>$id));
        
        $this->render('casestudeydetail', array('data' => $data));
    }
    
    public function actionQuizstart($id) {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['assigment'] = ModuleAssignment::model()->findByPk($id);
        $data['quiz'] = ModuleAssigmentQuiz::model()->findAllByAttributes(array("module_assignment_quiz_id"=>$id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $this->render('quizstart', array('data' => $data));
    }
    
    public function actionCheckCaseStudyAnswer() {
        $studentData = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        
        //Check if this quiz already attempted
        $check = CasestudyStudentScore::model()->findByAttributes(array("student_id"=>$studentData->id,"casestudy_id"=>$_REQUEST['casestudy_id']));
        if (count($check) > 0) {
            echo json_encode(array("status"=>'failure',"msg" => "You have already attempted this case study on ".date("d/m/Y", strtotime($check->completion_date))));
            die;
        }
        
        
        if (isset($_REQUEST['answers']) && !empty($_REQUEST['answers'])) {
            $score = 0;
            $correct = 0;
            foreach ($_REQUEST['answers'] as $answers) {
                $quizDetails = CasestudyQuiz::model()->findByPk($answers['question_id']);
                $answerDetail = CasestudyQuizAnwers::model()->findByPk($answers['question_id']);
                if ($answerDetail->is_correct == 1) {
                    $score  = $score + $quizDetails->question_score; 
                    $correct++;
                }
            }
            $c = new CDbCriteria;
            $c->addCondition("casestudy_id = ".$quizDetails->casestudy_id);

            $c->select = array(
                            'SUM(question_score) as total_score',
                        );
            $totalScore = CasestudyQuiz::model()->find($c)->total_score;
            $studentData = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
            $model = new CasestudyStudentScore();
            $model->attributes = array(
                            "casestudy_id" => $quizDetails->casestudy_id,
                            "student_id" => $studentData->id,
                            "total_score" => $totalScore,
                            "student_score" => $score,
                            "completion_date" => date("Y-m-d")
                        );
            if ($model->save()) {
                echo json_encode(array("status"=>'success',"data"=>array("total_score"=>$totalScore,"student_score"=>$score,"question_answered"=>count($_REQUEST['answers']),"correct" => $correct)));
            } else {
                  echo json_encode(array("status"=>"failure","msg" => "Sorry, Some error occured. Please try again after sometime."));
            }
            die;
        } else {
            echo json_encode(array("status"=>"failure","msg" => "Please attempt atleast one question."));
        }
    }
    
    public function actionCheckAssigmentAnswer() {
        $studentData = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        
//        //Check if this quiz already attempted
        $check = ModuleAssignmentStudentScore::model()->findByAttributes(array("student_id"=>$studentData->id,"module_assignment_id"=>$_REQUEST['assigment_id']));
//        if (count($check) > 0) {
//            echo json_encode(array("status"=>'failure',"msg" => "You have already attempted this quiz."));
//            die;
//        }
        
        
        if (isset($_REQUEST['answers']) && !empty($_REQUEST['answers'])) {
            $score = 0;
            $correct = 0;
            foreach ($_REQUEST['answers'] as $answers) {
                $quizDetails = ModuleAssigmentQuiz::model()->findByPk($answers['question_id']);
                $answerDetail = ModuleAssigjmentQuizAnswer::model()->findByPk($answers['question_id']);
                if ($answerDetail->is_correct == 1) {
                    $score  = $score + $quizDetails->question_score; 
                    $correct++;
                }
            }
            $c = new CDbCriteria;
            $c->addCondition("module_assignment_quiz_id = ".$_REQUEST['assigment_id']);

            $c->select = array(
                            'SUM(question_score) as total_score',
                        );
            $totalScore = ModuleAssigmentQuiz::model()->find($c)->total_score;
            $studentData = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
            if (count($check) > 0) {
                $model = ModuleAssignmentStudentScore::model()->findByPk($check->id);
            } else {
                $model = new ModuleAssignmentStudentScore();
            }
            $model->attributes = array(
                            "module_assignment_id" => $_REQUEST['assigment_id'],
                            "student_id" => $studentData->id,
                            "total_score" => $totalScore,
                            "student_score" => $score,
                            "status" => 2,
                            "close_date" => date("Y-m-d")
                        );
            if ($model->save()) {
                echo json_encode(array("status"=>'success',"data"=>array("total_score"=>$totalScore,"student_score"=>$score,"question_answered"=>count($_REQUEST['answers']),"correct" => $correct)));
            } else {
                echo json_encode(array("status"=>"failure","msg" => "Sorry, Some error occured. Please try again after sometime."));
            }
            die;
        } else {
            echo json_encode(array("status"=>"failure","msg" => "Please attempt atleast one question."));
        }
    }
    
    
    public function actionClose($id){
        $model = ModuleAssignmentStudentScore::model()->findByPk($id);
        $model->close_date = date("Y-m-d");
        $model->status = 3;
        if ($model->save()) {
            $this->redirect(Yii::app()->createUrl('student/assignments'));
        } else {
             $this->redirect(Yii::app()->createUrl('student/assignments'));
        }
    }
    
    public function actionLibrary(){
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        if (!empty($_POST)) {
            $model = new LibraryBooks;
            $path="assets/books";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {
                $uploadedFile=CUploadedFile::getInstance($model,'file');
                $fileName = rand().$_FILES['file']['name'];  // random number + file name
                move_uploaded_file($_FILES['file']['tmp_name'],$path."/".$fileName);
            }
            $_POST['file'] = $fileName;
            $_POST['library_subject_id'] = $_POST['subject'];
            $_POST['added_by'] = $data['student_profile']->id;
            $model->attributes = $_POST;
            if ($model->save()) {
                $this->redirect(Yii::app()->createUrl('student/library',array("thankBook" => 1)));
            } else {
                pr($model->getErrors());
            }
            
        }
        
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $data['subjects'] = LibrarySubjects::model()->findAll();
        $data['studentFavs'] = LibraryBookStudent::model()->findAllByAttributes(array("student_id" => $data['student_profile']->id));
        $data['notShow'] = array();
        foreach ($data['studentFavs'] as $val) {
            $data['notShow'][] = $val->book_id;
        }
        $this->render("library", array("data"=>$data));
    }
    
    
    public function actionEditprofile() {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['profile_json'] = isset($data['student_profile']->profile_json) && !empty($data['student_profile']->profile_json)?json_decode($data['student_profile']->profile_json):"";
        
        if (!empty($_POST)) {
            $modelUser = Users::model()->findByPk( Yii::app()->user->id);
            $modelUser->fname = $_REQUEST['fname'];
            $modelUser->lname = $_REQUEST['lname'];
            $path="assets/profilepics";
            $pathResume="assets/resumes";
            if (!is_dir($pathResume)) {
                CFileHelper::createDirectory($pathResume,null,true);
            }
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {
                
                if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                    $fileName = rand().$_FILES['img']['name'];  // random number + file name
                    move_uploaded_file($_FILES['img']['tmp_name'],$pathResume."/".$fileName);
                    $_REQUEST['profile_pic'] = $fileName;
                } else {
                    $_REQUEST['profile_pic'] = isset($data['profile_json']->profile_pic)?$data['profile_json']->profile_pic:"";
                }
                
                if (isset($_FILES['fname']['name']) && !empty($_FILES['fname']['name'])) {
                    $fileNameResume= rand().$_FILES['fname']['name'];  // random number + file name
                    move_uploaded_file($_FILES['fname']['tmp_name'],$pathResume."/".$fileNameResume);
                    $_REQUEST['resume'] = $fileNameResume;  
                } else {
                    $_REQUEST['resume'] = isset($data['profile_json']->resume)?$data['profile_json']->resume:"";
                }
                
            } else {
                $_REQUEST['profile_pic'] = isset($data['profile_json']->profile_pic)?$data['profile_json']->profile_pic:"";
                $_REQUEST['resume'] = isset($data['profile_json']->resume)?$data['profile_json']->resume:"";
            }
            
            $modelUserProfile = Students::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
            $modelUserProfile->attributes = array('profile_json' => json_encode($_REQUEST));
            
            if($modelUser->save() & $modelUserProfile->save()) {
                
            } else {
                pr($modelUser->getErrors(), false);
                pr($modelUserProfile->getErrors());
            }
        }
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $data['profile_json'] = isset($data['student_profile']->profile_json) && !empty($data['student_profile']->profile_json)?json_decode($data['student_profile']->profile_json):"";
        
        $data['modules'] = Module::model()->findAll();
        $data['scores'] = StudentScore::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['todos'] = StudentToDo::model()->findAllByAttributes(array('student_id' => Yii::app()->user->id));
        $data['userData'] = Users::model()->findByAttributes(array("id" => Yii::app()->user->id));
        $data['courseSchedules'] = InstituteCourses::model()->findAllByAttributes(array("institute_batch_id" =>$data['student_profile']->institute_batch_id));
        $data['areaOfImprovements'] = StudentAreaOfImprovement::model()->findAllByAttributes(array("student_id" => Yii::app()->user->id));
        $this->render("editprofile", array("data" => $data));
    }


    public function actionAddFav($book_id) {
        $data = array();
        $data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id)); 
        $model = new LibraryBookStudent();
        $attributes = array(
                            "book_id" => $book_id,
                            "student_id" => $data["student_profile"]->id
                        );
        $model->attributes = $attributes;
        if ($model->save()) {
            $this->redirect($this->createUrl("student/library"));
        } else {
            pr($model->getErrors());
        }
        
    }
    
    public function actionRemoveFav($id) {
        $data = array();
        $model = LibraryBookStudent::model()->findByPk($id);
        if ($model->delete()) {
            $this->redirect($this->createUrl("student/library"));
        } else {
            pr($model->getErrors());
        }
        
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
                'actions' => array( 'portal',
                                    'casestudeydetail',
                                    'createproject', 
                                    'createjobs',
                                    'assignments',
                                    'webinars',
                                    'casestudy',
                                    'checkCaseStudyAnswer',
                                    'speakertakeaway',
                                    'quizstart',
                                    'checkAssigmentAnswer',
                                    'close',
                                    'library',
                                    'addFav',
                                    'removeFav',
                                    'editprofile',
                                    'admin'
                                    
                                ),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array(),
                'users' => array(),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
}
