<?php
$this->breadcrumbs=array(
	'Users '=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Users','url'=>array('usersnew/admin')),
	
);

?>

<h1>Manage Users </h1>
<a href="<?php echo Yii::app()->createUrl("usersNew/export");?>"> <button class="btn btn-info" >Export To Excel</button></a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'users-new-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'full_name',
		'email',
		'password',
        'mobile_number',
//		'update_subscription',
                array(
                        'header'=>"Role",
                        "name"=>'role',
                        "value"=>'$data->role==1?"College Student":" Young Professional"',
                        'filter'=>array(1=>"College Student",2=>"Young Professional"),
                    ),
                'name_of_college_company',
                array(
                        'header'=>"Subscription Opted",
                        "name"=>'update_subscription',
                        "value"=>'$data->update_subscription==1?"Opted":"Not-Opted"',
                        'filter'=>array(1=>"Opted",0=>"Not-Opted"),
                    ),
		'is_verified',
                'date_created',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',    
                        "template" => "{delete}",
                        
		),
	),
)); ?>
