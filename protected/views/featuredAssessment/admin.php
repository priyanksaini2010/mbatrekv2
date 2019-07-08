<?php
$this->breadcrumbs=array(
	'Featured Assessments'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Featured Assessment','url'=>array('featuredAssessment/admin')),
);

?>

<h1>Manage Featured Assessments</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'featured-assessment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'assessment_id',
        array(
            'header' =>'Current Featured Assessment',
            "name"=>'assessment_id',
            'value'=>'$data->assessment->headline'
        ),
		'point_1',
		'point_2',
		'point_3',
		'point_4',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}'
		),
	),
)); ?>
