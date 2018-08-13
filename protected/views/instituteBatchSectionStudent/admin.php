<?php
$this->breadcrumbs=array(
	'Institute Batch Section Students'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InstituteBatchSectionStudent','url'=>array('index')),
	array('label'=>'Create InstituteBatchSectionStudent','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('institute-batch-section-student-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Institute Batch Section Students</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batch-section-student-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'institute_batch_section_id',
		'student_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
