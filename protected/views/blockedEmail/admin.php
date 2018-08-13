<?php
$this->breadcrumbs=array(
	'Blocked Emails'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Add Email To Block List','url'=>array('create')),
);


?>

<h1>Manage Blocked Emails</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blocked-email-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'email',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			 "template" => "{update}{delete}",
		),
	),
)); ?>
