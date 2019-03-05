<?php

class ContactController extends Controller
{


        public $errors = array();
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='webroot.themes.bootstrap.views.layouts.main';
        
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
                'actions'=>array('index','view','create','captcha'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('update','admin','delete','export'),
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
    public function actionExport(){
        $data = Contact::model()->findAll();
        $objPHPExcel = new PHPExcel();
        $headers = array(
            "First Name",
            "Last Name",
            "Mobile No.",
            "Email",
            "Are You?",
            "Name of Company / Institute",
            "Subject",
            "Your Message",
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
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->mobile_no);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->email);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->are_you);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->name_of_company_institute);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->subject);$colCount++;
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->your_message);$colCount++;
            $colCount = 0;
            $rowCount++;
        }
//            pr($data);

        ob_clean();
        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="contacts-'.date("Y-m-d").'.xls"');
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
                $this->layout = getCartLayot();
		$model=new Contact;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
              
		if(isset($_POST['Contact']))
		{
            $blokedEmails = CHtml::listData(BlockedEmail::model()->findAll(),"id","email");
            if(in_array($_POST['Contact']['email'], $blokedEmails)){
                $this->redirect(Yii::app()->createUrl('contact/create'));
            }
			$model->attributes=$_POST['Contact'];
			
			if($model->save()){
                                $subject = $_POST['Contact']['subject'];
                                $body = "Hello Admin,<br/><br/>"
                                        . "New Enquiry recieved: <br/><br/ >"
                                        . "First Name: ".$_POST['Contact']['first_name']."<br/ >"
                                        . "Last Name: ".$_POST['Contact']['last_name']."<br/ >"
                                        . "Mobile No.: ".$_POST['Contact']['mobile_no']."<br/ >"
                                        . "Email : ".$_POST['Contact']['email']."<br/ >"
                                        . "Rep Type : ".$_POST['Contact']['are_you']."<br/ >"
                                        . "Name of Company / Institute : ".$_POST['Contact']['name_of_company_institute']."<br/ >"
                                        . "Subject : ".$_POST['Contact']['subject']."<br/ ><br/ >"
                                        . "Message : ".$_POST['Contact']['your_message']."<br/ ><br/ >"
                                        . "Thanks,<br/ >"
                                        . "MBATrek Feedback Service";
                                $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";
                                
                                $sentToUser = sendEmail(Yii::app()->params['contactEmail'], $subject,$body,$headers);
				
//                                $body = "Hello ".$_POST['Contact']['first_name']." ".$_POST['Contact']['last_name'].",<br/><br/>"
//                                        . "Thanks to contact us. Will get in touch soon: <br/><br/ >"
//                                        . "Thanks,<br/ >"
//                                        . "MBATrek Feedback Service";
                                $templateType = "";
                                switch ($_POST['Contact']['are_you']){
                                    case 1:
                                        $templateType = "contact_companie";
                                        break;
                                    case 2:
                                        $templateType = "contact_younprofession";
                                        break;
                                    case 3:
                                        $templateType = "contact_student";
                                        break;
                                    case 4:
                                        $templateType = "contact_institute";
                                        break;
                                }
                                $subject = "MBAtrek | Inquiry";
                                $template = getTemplate($templateType);
                                $name = ucfirst($_POST['UsersNew']['full_name']);
//                                $body = str_replace("{{SUBJECT}}", $subject, $template);
//                                $body = str_replace("{{NAME}}", $name, $body);
//                                $link = Yii::app()->params['url']."cart/verify?id=".$model->id;
//                                $body = str_replace("{{LINK}}", $link, $body);
                                $body = $template;
                                $headers="From: ".Yii::app()->params['adminName']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";

                                $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";
                                $sentToUser = sendEmail($_POST['Contact']['email'], $subject,$body,$headers);
                                $this->redirect(Yii::app()->createUrl('contact/create',array('thankc'=>1)));
                        } else {
                            foreach ($model->getErrors() as $error){
                                $this->errors['email'] = $error[0];
                            }
                        }
		}

		$this->render('contact',array(
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

		if(isset($_POST['Contact']))
		{
			$model->attributes=$_POST['Contact'];
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
		$dataProvider=new CActiveDataProvider('Contact');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Contact('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Contact']))
			$model->attributes=$_GET['Contact'];

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
		$model=Contact::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
