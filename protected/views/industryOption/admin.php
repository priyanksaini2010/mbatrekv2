<?php
$this->breadcrumbs=array(
	'Industry Options'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Industry Option','url'=>array('industryOption/admin',"option_number"=>$_GET['option_number'])),
	array('label'=>'Create IndustryOption','url'=>array('industryOption/create',"option_number"=>$_GET['option_number'])),
);

?>

<h1>Manage Industry Options</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'industry-option-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'option_name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => "{update}"
		),
	),
)); ?>
