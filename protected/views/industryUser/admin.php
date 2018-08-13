<?php
$ind = Industries::model()->findByPk($_GET['industry_id']);
$this->breadcrumbs=array(
	'Industries'=>array('industries/admin'),
        $ind->name=>array('industries/view',"id"=>$_GET['industry_id']),
	'Manage Users',
);

$this->menu = getMenu();
?>


<h1>Manage Industry Users</h1>

<?php
$filter = CHtml::listData(Users::model()->findAllByAttributes(array("role" => 4)), "id", "fname");
$filter2 = CHtml::listData(Users::model()->findAllByAttributes(array("role" => 4)), "id", "email");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'industry-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            array("name"=>"user_id","value"=>'$data->user->fname." ".$data->user->lname',"filter"=>$filter),
            array("header"=>"Email","value"=>'$data->user->email',"filter"=>$filter2),
            array("header"=>"Last Login","value"=>'$data->user->last_login',"filter"=>$filter2),
	),
)); ?>
