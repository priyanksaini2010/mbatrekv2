<?php
$ind = Industries::model()->findByPk($_GET['industry_id']);
$this->breadcrumbs=array(
	'Industries'=>array('industries/admin'),
        $ind->name=>array('industries/view',"id"=>$_GET['industry_id']),
	'Add User',
);
$this->menu = getMenu();
?>


<h1>Add User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelUser'=>$modelUser)); ?>