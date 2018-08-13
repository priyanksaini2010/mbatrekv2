<?php
$this->breadcrumbs=array(
	'Users'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Students Users','url'=>array('users/admin',"role"=>1)),
	array('label'=>'Institute Users','url'=>array('users/adminins',"role"=>2)),
	array('label'=>'Industry Users','url'=>array('users/adminind',"role"=>3)),
);
?>

<h1>Manage Users</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$status = array(0=>'Admin',1=>'Student',2=>'Industry',3=>'Institute');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'email',
		'username','password',
		'date_registered',
		
//            array(
//                'name'=>'role',
//                'filter'=>$status,
//                'value'=>array($this,'getRole')
//                ),
		
		'fname',
		'lname',
		/*'is_approve',
		'is_verified',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{delete}'
		),
	),
)); ?>
