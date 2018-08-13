<?php
$this->breadcrumbs=array(
	'Feedbacks'=>array('admin'),
	'Manage',
);

?>

<h1>Manage Feedbacks</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'feedback-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'email',
		'message',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{view} {delete}'
		),
	),
)); ?>
