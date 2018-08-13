<?php
$this->breadcrumbs=array(
	'Traits Of Our Students'=>array('admin'),
	'Manage',
);

$this->menu=array(array('label'=>'Manage Traits','url'=>array('module/admin')),);


?>
<h1>Manage Traits</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'traits-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'traits',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => "{update}"
		),
	),
)); ?>
