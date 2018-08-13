<?php

class InstituteBatchSessionStudentAttendanceController extends Controller
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
				'actions'=>array('create','update','admin','delete','students','createall','institutebatch',
				    'institutebatchsection','institutebatchsession','sessionstudent'),
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
	
	public function actionCreateall(){
	    $model=new InstituteBatchSessionStudentAttendance;
	     Yii::app()->user->setFlash('info', "Please use following directions: <br /> <ol><li>Please select all fields in shown sequence. </li><li>Student list will appear after selecting section.</li><li> By Clicking checkbox student will be marked as <b>Present</b> else <b>Absent</b>.</li></ol>"); 
	     
	     // Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(!empty($_POST))
		{       
		$attributes = array("institute_batch_session_id"=>$_POST['institute_batch_session_id'],'section_id' => $_POST['section_id']);
InstituteBatchSessionStudentAttendance::model()->deleteAll("institute_batch_session_id = :institute_batch_session_id AND section_id = :section_id",$attributes);
                        if (!empty($_POST['studp'])) {
                            $studs= CHtml::listData(InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_POST['section_id'])), "id", "student_id");
                            $sess = InstituteBatchSession::model()->findByPk($_POST['institute_batch_session_id']);
                            foreach ($_POST['studp'] as $k=>$stud) {
                                 $pre = 1;
                                $model=new InstituteBatchSessionStudentAttendance;
                                $model->attributes =  array(
                                                            "student_id" => $stud,
                                                            "section_id" => $_POST['section_id'],
                                                            "institute_batch_session_id" => $_POST['institute_batch_session_id'],
                                                            "is_present" => $pre,
                                                            "session_date" => $sess->session_date
                                                        );
                                if($model->save()){
				    Yii::app()->user->setFlash('success',"Attendance marked sucesssfully.");
                                } else {
                                   Yii::app()->user->setFlash('fail',"Please try again!");
                                }
                            }
                        }
			if (!empty($_POST['studa'])) {
                            $studs= CHtml::listData(InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_POST['section_id'])), "id", "student_id");
                            $sess = InstituteBatchSession::model()->findByPk($_POST['institute_batch_session_id']);
                            foreach ($_POST['studa'] as $k=>$stud) {
                                $pre = 0;
                                $model=new InstituteBatchSessionStudentAttendance;
                                $model->attributes =  array(
                                                            "student_id" => $stud,
                                                            "section_id" => $_POST['section_id'],
                                                            "institute_batch_session_id" => $_POST['institute_batch_session_id'],
                                                            "is_present" => $pre,
                                                            "session_date" => $sess->session_date
                                                        );
                                if($model->save()){
				    Yii::app()->user->setFlash('success',"Attendance marked sucesssfully.");
                                } else {
                                   Yii::app()->user->setFlash('fail',"Please try again!");
                                }
                            }
                        }
			
                        
		}
	    $this->render('createall',array(
			'model'=>$model,
		    ));
	    
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new InstituteBatchSessionStudentAttendance;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InstituteBatchSessionStudentAttendance']))
		{       
                        if (!empty($_POST['stud'])) {
                            $studs= CHtml::listData(InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_POST['section_id'])), "id", "student_id");
                            $sess = InstituteBatchSession::model()->findByPk($_POST['InstituteBatchSessionStudentAttendance']['institute_batch_session_id']);
                            foreach ($studs as $k=>$stud) {
                                if (in_array($stud, $_POST['stud'])) {
                                    $pre = 1;
                                } else {
                                    $pre = 0;
                                }
                                $model=new InstituteBatchSessionStudentAttendance;
                                $model->attributes =  array(
                                                            "student_id" => $stud,
                                                            "section_id" => $_POST['section_id'],
                                                            "institute_batch_session_id" => $_POST['InstituteBatchSessionStudentAttendance']['institute_batch_session_id'],
                                                            "is_present" => $pre,
                                                            "session_date" => $sess->session_date
                                                        );
                                if($model->save()){

                                } else {
                                    pr($model->getErrors());
                                }
                            }
                        }
			
                        $this->redirect(array('admin','institute_batch_id'=>$_GET['institute_batch_id'],"institute_batch_session_id"=>$_GET['institute_batch_session_id']));
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

		if(isset($_POST['InstituteBatchSessionStudentAttendance']))
		{
			$model->attributes=$_POST['InstituteBatchSessionStudentAttendance'];
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
		$dataProvider=new CActiveDataProvider('InstituteBatchSessionStudentAttendance');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InstituteBatchSessionStudentAttendance('search');
		$model->unsetAttributes();  // clear any default values
                $_GET['InstituteBatchSessionStudentAttendance']['institute_batch_session_id'] = $_GET['institute_batch_session_id'];
		if(isset($_GET['InstituteBatchSessionStudentAttendance'])){
			$model->attributes=$_GET['InstituteBatchSessionStudentAttendance'];
                }

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
		$model=InstituteBatchSessionStudentAttendance::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function actionStudents(){
	    $students = InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_POST['section_id']));
	    $html = '<table class="table table-bordered">';
	    $html .= '<thead><tr><th>Students</th><th>Present</th><th>Absent</th>';
	    $html .= '<tbody>';
	    
	    
	    foreach ($students as $data) {
		$html.= "<tr>";
    $html .= '<td>'.$data->student->name.'</td><td><input name="studp[]" type="checkbox" value="'.$data->student->id.'"/></td>';
    $html .= '<td><input name="studa[]" type="checkbox" value="'.$data->student->id.'"/></td>';
    $html.= "</tr>";
	    }
	    $html .= "</tbody></table>";
	    echo $html;exit;
	}
	
	public function actionSessionstudent(){
	    $students = InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_POST['section_id']));
	    $html = '<table class="table table-bordered">';
	    $html .= '<thead><tr><th>Students</th><th>Present</th><th>Absent</th>';
	    $html .= '<tbody>';
	    
	    
	    foreach ($students as $data) {
	    $check = InstituteBatchSessionStudentAttendance::model()->findByAttributes(array(
				"institute_batch_session_id"=>$_POST['session_id'],
				'student_id' => $data->student->id
			    ));
	    
	    $checkp = '';
	    $checka = '';
	    if(!empty($check)) {
		if ($check->is_present == 1) {
		    $checkp = "checked = 'checked'";
		} else {
		    $checka = "checked = 'checked'";
		}
	    } 
	    $html.= "<tr>";
    $html .= '<td>'.$data->student->name.'</td><td><input '.$checkp.' name="studp[]" type="checkbox" value="'.$data->student->id.'"/></td>';
    $html .= '<td><input name="studa[]" type="checkbox" '.$checka.' value="'.$data->student->id.'"/></td>';
    $html.= "</tr>";
	    }
	    $html .= "</tbody></table>";
	    echo $html;exit;
	}
	public function actionInstitutebatch(){
	    $students = InstituteBatches::model()->findAllByAttributes(array("institute_id"=>$_POST['institute']));
	    
	    $html = ' <option value="" >Select Batch</option>';
	    foreach ($students as $data) {
		$html .= '<option value="'.$data->id.'"> '.$data->name;
	    }
	    echo $html;exit;
	}
	public function actionInstitutebatchsection(){
	    $students = InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$_POST['institute_batch_id']));
	    
	    $html = ' <option value="" >Select Section</option>';
	    foreach ($students as $data) {
		$html .= '<option value="'.$data->id.'"> '.$data->section_name;
	    }
	    echo $html;exit;
	}
	public function actionInstitutebatchsession(){
	    $students = InstituteBatchSession::model()->findAllByAttributes(array("institute_batch_id"=>$_POST['institute_batch_id']));
	    
	    $html = ' <option value="" >Select Session</option>';
	    foreach ($students as $data) {
		$html .= '<option value="'.$data->id.'"> '.$data->session_name;
	    }
	    echo $html;exit;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='institute-batch-session-student-attendance-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
