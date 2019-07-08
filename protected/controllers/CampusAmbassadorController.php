<?php

class CampusAmbassadorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='webroot.themes.bootstrap.views.layouts.main';
        
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
				'actions'=>array('create','update','admin','delete',"import","importcolleges","importcompcolleges","importcontact", 'export'),
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

        public function behaviors() {
                return array(
                    'exportableGrid' => array(
                        'class' => 'application.components.ExportableGridBehavior',
                        'filename' => 'PostsWithUsers.csv',
                        'csvDelimiter' => ';', //i.e. Excel friendly csv delimiter
                        ));
            }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
//                $this->redirect("admin");
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
    public function actionImport(){
	    $model = new Courses;
	    if(!empty($_FILES)){
            $path="assets/imports";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {

                $fileName = rand().str_replace(" ","", $_FILES["files"]['name']);  // random number + file name

                $tmp_name = $_FILES["files"]['tmp_name'];
                move_uploaded_file($tmp_name, $path."/".$fileName);
                $inputFileName = $path."/".$fileName;
                $array = $this->ImportCSV2Array($inputFileName);
                foreach ($array as $item){
                    $model = new Courses;
                    $model->attributes = array("title" => $item["title"]);
                    if($model->save()){
                        Yii::app()->user->setFlash('success', "Campus Ambassador Courses Added Successfully.");
                    } else {
                        Yii::app()->user->setFlash('success', "Some of Campus Ambassador Courses are not Added.");
                    }
                }

            }
        }

	    $this->render("import", array("model"=>$model));
    }
    public function actionImportcontact(){
        $model = new Courses;
        if(!empty($_FILES)){
            $path="assets/imports";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {

                $fileName = rand().str_replace(" ","", $_FILES["files"]['name']);  // random number + file name

                $tmp_name = $_FILES["files"]['tmp_name'];
                move_uploaded_file($tmp_name, $path."/".$fileName);
                $inputFileName = $path."/".$fileName;
                $array = $this->ImportCSV2Array($inputFileName);
                foreach ($array as $item){
                    $model = new ContactAutofill();
                    $model->attributes = array("name" => $item["title"]);
                    if($model->save()){
                        Yii::app()->user->setFlash('success', "Contact Company / Institutes Added Successfully.");
                    } else {
                        Yii::app()->user->setFlash('success', "Some of Contact Company / Institutes Courses are not Added.");
                    }
                }

            }
        }

        $this->render("importcontact", array("model"=>$model));
    }
    public function actionExport(){
        $data = CampusAmbassador::model()->findAll();
        $objPHPExcel = new PHPExcel();
        $headers = array(
            "First Name",
            "Last Name",
            "Mobile Number",
            "Email",
            "Name Of College",
            "Name Of Course",
            "Year Of Graduation",
            "Why do you want to be a MBAtrek Campus Ambassador? ",
            "Suggest two super creative ideas to share the importance of career development in your college / university",
            "Any additional information you would like to provide us",
            "Registration Date",
            "Name Of College(Others)",
            "Name Of Course(Others)",
        );
        $objPHPExcel->setActiveSheetIndex(0);
        $rowCount = 1;
        $colCount = 0;
        foreach($headers as $head){
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$head);
            $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($colCount,$rowCount)->getFont()->setBold("true");
            $colCount++;
        }
        $colCount = 0;
        $rowCount = $rowCount + 1;
        foreach ($data as $row){
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->first_name);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->last_name);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->mobile_number);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->email_id);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,Colleges::model()->findByAttributes(array("id"=>$row->college_id))->name);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,Courses::model()->findByAttributes(array("id"=>$row->course_id))->title);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->year_of_graduation_id);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->question_1);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->question_2);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->question_3);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->registeration_date);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->name_of_college);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->name_of_course);$colCount++;


            $colCount = 0;
            $rowCount++;
        }
//            pr($data);

        ob_clean();
        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="campus-ambassador-'.date("Y-m-d").'.xls"');
        header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
    public function actionImportcolleges(){
        $model = new Colleges;
        if(!empty($_FILES)){
            $path="assets/imports";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {

                $fileName = rand().str_replace(" ","", $_FILES["files"]['name']);  // random number + file name

                $tmp_name = $_FILES["files"]['tmp_name'];
                move_uploaded_file($tmp_name, $path."/".$fileName);
                $inputFileName = $path."/".$fileName;
                $array = $this->ImportCSV2Array($inputFileName);
                foreach ($array as $item){
                    $model = new Colleges;
                    $model->attributes = array("name" => $item["title"]);
                    if($model->save()){
                        Yii::app()->user->setFlash('success', "Campus Ambassador Colleges Added Successfully.");
                    } else {
                        Yii::app()->user->setFlash('success', "Some of Campus Ambassador Colleges are not Added.");
                    }
                }
            }
        }

        $this->render("importcolleges", array("model"=>$model));
    }

    /**
     * @throws PHPExcel_Exception
     * @throws PHPExcel_Reader_Exception
     */
    public function actionImportcompcolleges(){
        $model = new CollegesCompetition;
        if(!empty($_FILES)){
            $path="assets/imports";
            if (!is_dir($path)) {
                CFileHelper::createDirectory($path,null,true);
            }
            if (!empty($_FILES)) {

                $fileName = rand().str_replace(" ","", $_FILES["files"]['name']);  // random number + file name

                $tmp_name = $_FILES["files"]['tmp_name'];
                move_uploaded_file($tmp_name, $path."/".$fileName);
                $inputFileName = $path."/".$fileName;
                $array = $this->ImportCSV2Array($inputFileName);
                foreach ($array as $item){
                    $model = new CollegesCompetition;
                    $model->attributes = array("name" => $item["title"]);
                    if($model->save()){
                        Yii::app()->user->setFlash('success', "Colleges for Competition Added Successfully.");
                    } else {
                        Yii::app()->user->setFlash('success', "Some of Colleges for Competition are not Added.");
                    }
                }

            }
        }

        $this->render("importcompcolleges", array("model"=>$model));
    }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new CampusAmbassador;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CampusAmbassador']))
		{
			$model->attributes=$_POST['CampusAmbassador'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['CampusAmbassador']))
		{
			$model->attributes=$_POST['CampusAmbassador'];
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
		$dataProvider=new CActiveDataProvider('CampusAmbassador');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CampusAmbassador('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CampusAmbassador']))
			$model->attributes=$_GET['CampusAmbassador'];
                 if ($this->isExportRequest()) { //<==== [[ADD THIS BLOCK BEFORE RENDER]]
                        //set_time_limit(0); //Uncomment to export lage datasets
                        //Add to the csv a single line of text
//                        $this->exportCSV(array('POSTS WITH FILTER:'), null, false);
                        //Add to the csv a single model data with 3 empty rows after the data
//                        $this->exportCSV($model, array_keys($model->attributeLabels()), false, 3);
                        //Add to the csv a lot of models from a CDataProvider
                        $this->exportCSV($model->search(), array('first_name', 'last_name', 'mobile_number', 'email_id','college_id','college.name','course_id','course.title','question_1','question_2','question_3','name_of_college','name_of_course'));
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
		$model=CampusAmbassador::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='campus-ambassador-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    private function ImportCSV2Array($filename)
    {
        $row = 0;
        $col = 0;

        $handle = @fopen($filename, "r");
        if ($handle)
        {
            while (($row = fgetcsv($handle, 4096)) !== false)
            {
                if (empty($fields))
                {
                    $fields = $row;
                    continue;
                }

                foreach ($row as $k=>$value)
                {
                    $results[$col][$fields[$k]] = $value;
                }
                $col++;
                unset($row);
            }
            if (!feof($handle))
            {
                echo "Error: unexpected fgets() failn";
            }
            fclose($handle);
        }

        return $results;
    }
}
