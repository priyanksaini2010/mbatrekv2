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

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'users-new-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'full_name',
		'email',
		'password',
//		'update_subscription',
                array(
                        'header'=>"Role",
                        "name"=>'role',
                        "value"=>'$data->role==1?"College Student":" Young Proffesional"',
                        'filter'=>CHtml::listData( CaFaqType::model()->findAll(), 'id', 'name'),
                    ),
		'is_verified',
                'date_created',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',    
                        "template" => "{delete}",
                        
		),
	),
)); ?>
