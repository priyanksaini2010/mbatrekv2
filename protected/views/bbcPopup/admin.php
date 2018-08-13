<?php
$this->breadcrumbs=array(
	'B2C Popups'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage B2C Popup','url'=>array('bbcPopup/admin')),
	
);

?>

<h1>Manage B2C Popups</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bbc-popup-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => "{update}"
		),
	),
)); ?>
