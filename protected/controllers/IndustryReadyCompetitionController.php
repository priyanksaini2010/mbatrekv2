<?php

class IndustryReadyCompetitionController extends Controller
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
				'actions'=>array('create','update','admin','delete','export'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
    public function actionExport(){
        $data = IndustryReadyCompetition::model()->findAll();
        $objPHPExcel = new PHPExcel();
        $headers = array(
            "Team Name",
            "First Name(Member 1)",
            "Last Name(Member 1)",
            "Mobile Number(Member 1)",
            "Email(Member 1)",
            "First Name(Member 2)",
            "Last Name(Member 2)",
            "Mobile Number(Member 2)",
            "Email(Member 2)",
            "First Name(Member 3)",
            "Last Name(Member 3)",
            "Mobile Number(Member 3)",
            "Email(Member 3)",
            "MBA Batch",
            "Name Of College",
            "Name of your Student Placement Coordinator / Student Committee Member",
            "Email of your Student Placement Coordinator / Student Committee Member",
            "Mobile No of your Student Placement Coordinator / Student Committee Member",
            "Registration Date",
            'Name Of College(Others)',
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
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->team_name);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->first_name);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->last_name);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->mobile_number);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->email_id);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->first_name_1);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->last_name_1);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->mobile_number_1);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->email_Id_1);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->first_name_2);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->last_name_2);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->mobile_number_2);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->email_Id_2);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,CollegesCompetition::model()->findByAttributes(array("id"=>$row->college))->name);$colCount++;

            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->mba_batch);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->question_1);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->question_2);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->question_3);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->registeration_date);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->name_of_college);$colCount++;



            $colCount = 0;
            $rowCount++;
        }
//            pr($data);

        ob_clean();
        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="industry-ready-competition-'.date("Y-m-d").'.xls"');
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new IndustryReadyCompetition;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['IndustryReadyCompetition']))
		{
			$model->attributes=$_POST['IndustryReadyCompetition'];
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

		if(isset($_POST['IndustryReadyCompetition']))
		{
			$model->attributes=$_POST['IndustryReadyCompetition'];
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
		$dataProvider=new CActiveDataProvider('IndustryReadyCompetition');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new IndustryReadyCompetition('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['IndustryReadyCompetition']))
			$model->attributes=$_GET['IndustryReadyCompetition'];
                if ($this->isExportRequest()) { //<==== [[ADD THIS BLOCK BEFORE RENDER]]
                        //set_time_limit(0); //Uncomment to export lage datasets
                        //Add to the csv a single line of text
//                        $this->exportCSV(array('POSTS WITH FILTER:'), null, false);
                        //Add to the csv a single model data with 3 empty rows after the data
//                        $this->exportCSV($model, array_keys($model->attributeLabels()), false, 3);
                        //Add to the csv a lot of models from a CDataProvider
                        $this->exportCSV($model->search(), array('first_name', 'last_name', 'mobile_number', 'email_id','college','college.name','mba_batch','course.title','question_1','question_2','question_3'));
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
		$model=IndustryReadyCompetition::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='interview-ready-competition-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
