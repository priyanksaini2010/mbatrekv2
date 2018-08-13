<?php
$this->breadcrumbs=array(
	'Traits',
);

$this->menu=array(
	array('label'=>'Create Traits','url'=>array('create')),
	array('label'=>'Manage Traits','url'=>array('admin')),
);
?>

<h1>Traits</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
