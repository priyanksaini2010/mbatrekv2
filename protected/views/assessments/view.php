<?php
$this->breadcrumbs=array(
	'Assessments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Assessments','url'=>array('index')),
	array('label'=>'Create Assessments','url'=>array('create')),
	array('label'=>'Update Assessments','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Assessments','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assessments','url'=>array('admin')),
);
?>

<h1>View Assessments #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'headline',
		'sub_heading_text',
		'price',
		'rating',
		'time',
		'questions',
		'degree',
		'small_description',
		'bullet_points',
		'zoho_html_code',
		'zoho_iframe_code',
		'zoho_javascript_code',
		'zoho_popup_html_code',
		'category',
		'user_type',
		'status',
		'date_created',
		'date_updated',
	),
)); ?>
