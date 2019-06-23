<?php
$this->breadcrumbs=array(
	'Assessment Popups'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Assessment Popup','url'=>array('/assessmentPopup/admin')),
//	array('label'=>'Create AssessmentPopup','url'=>array('create')),
);

?>

<h1>Manage Assessment Popup</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'assessment-popup-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
//		'image',
        array(
            'header' =>'Status',
            "name"=>'status',
            'value'=>'$data->status == 1?"Active":"In-Active"'
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' =>'{update}'
		),
	),
)); ?>
