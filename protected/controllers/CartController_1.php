<?php

class CartController extends Controller {

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

    public function __construct($id) {
        parent::__construct($id);
   		$this->layout = getCartLayot();
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view','student','profesionals','institutes','register',"description"),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete'),
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

	public function actionIndex(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.home",array());
	}
	
	public function actionStudent(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.student",array());

	}
	public function actionDescription($id){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.description",array("id"=>$id));

	}
	public function actionProfesionals(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.profesionals",array());

	}
	public function actionInstitutes(){
		$this->layout = getCartLayot();
		$this->render("webroot.themes.cart.views.cart.institutes",array());

	}
        
        public function actionCart(){
            
        }
        
        public function actionAddToCart(){
            
        }


        public function actionRegister(){
            $model = new UsersNew;
            if(isset($_POST['UsersNew']))
            {
                $_POST['UsersNew']['role'] = 1;
                $_POST['UsersNew']['password'] = md5($_POST['UsersNew']['password']);
                $_POST['UsersNew']['is_verified'] = 0;
                $_POST['UsersNew']['date_created'] = date('Y-m-d h:i:s');
                $model->attributes=$_POST['UsersNew'];
                try {
                    if($model->save()){
                        $subject = "Your Account Has Been Created";
                        $template = getTemplate("register");
                        $name = ucfirst($_POST['UsersNew']['full_name']);
                        $body = str_replace("{{SUBJECT}}", $subject, $template);
                        $body = str_replace("{{NAME}}", $name, $body);
                        $link = Yii::app()->params['url']."index.php?r=cart/verify&id=".$model->id;
                        $body = str_replace("{{LINK}}", $link, $body);
                        $headers="From: ".Yii::app()->params['adminEmail']." <".Yii::app()->params['adminEmail']."> \r\n".
                                        "Reply-To: ".Yii::app()->params['adminEmail']." \r\n";
                        $headers .= "MIME-Version: 1.0\r\n".
                                            "Content-Type: text/html; charset=UTF-8";

                        $sentToUser = sendEmail($_POST['Users']['email'], $subject,$body,$headers);
                        $this->refresh(true,"&thankreg=1");
                    } else {
                        pr($model->getErrors());
                    }
                } catch (Exception $ex) {
                    $model->addError('email', 'Email already exist');
                    $this->errors['email'] = 'Email already exist';
                }
            }
            $this->layout = getCartLayot();
            $this->render("webroot.themes.cart.views.cart.register",array('model'=>$model));
        }
       
}
		