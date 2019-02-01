<?php

class CustomerOrderController extends Controller
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
                'actions' => array('create', 'update', 'admin', 'delete',"sort"),
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
	public function actionCreate()
	{
		$model=new CustomerOrder;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CustomerOrder']))
		{
			$model->attributes=$_POST['CustomerOrder'];
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

		if(isset($_POST['CustomerOrder']))
		{
			$model->attributes=$_POST['CustomerOrder'];
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
    public function behaviors() {
        return array(
            'exportableGrid' => array(
                'class' => 'application.components.ExportableGridBehavior',
                'filename' => 'CustomerOrders.csv',
                'csvDelimiter' => ';', //i.e. Excel friendly csv delimiter
            ));
    }
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('CustomerOrder');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($status, $task = "")
	{
		if ($task == "xls") {
            $objPHPExcel = new PHPExcel();
            // Set document properties

            $headers = array(
                "Order Id",
                "Order Amount",
                "User Name",
                "User Email",
                "User Phone Number",
                "Payment Gateway",
                "Order Date",
                "Order Items"
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
            $data = CustomerOrder::model()->findAllByAttributes(array("status"=>$status));
            foreach ($data as $row){
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->ordfer_hash);$colCount++;
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,"Rs.".money($row->order_amount));$colCount++;
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->user->full_name);$colCount++;
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->user->email);$colCount++;
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->user->mobile_number);$colCount++;
                if($row->payment_gateway == 1){
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,"PayTm");$colCount++;
                } else{
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,"Payu");$colCount++;
                }
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$row->date_created);$colCount++;
                $list = "";
                foreach ($row->carts as $key=>$item){
                    $list .= ($key+1).". ".$item->product->title."\n";
                }
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colCount,$rowCount,$list);
                $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($colCount,$rowCount)->getAlignment()->setWrapText(true);

                $colCount = 0;
                $rowCount++;
            }




// Redirect output to a client’s web browser (Excel2007)
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="orders.xlsx"');
            header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
            header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
            header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
            header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
            header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
            header ('Pragma: public'); // HTTP/1.0
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('php://output');
            exit;
        }
        $model=new CustomerOrder('search');
        $model->unsetAttributes();  // clear any default values
        $_GET['CustomerOrder']['status'] = $status;
        if(isset($_GET['CustomerOrder']))
            $model->attributes=$_GET['CustomerOrder'];
		$this->render('admin',array(
		    'status' => $status,
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
		$model=CustomerOrder::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='customer-order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
