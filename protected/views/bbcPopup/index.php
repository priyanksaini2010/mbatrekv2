<?php
$this->breadcrumbs=array(
	'Bbc Popups',
);

$this->menu=array(
	array('label'=>'Create BbcPopup','url'=>array('create')),
	array('label'=>'Manage BbcPopup','url'=>array('admin')),
);
?>

<h1>Bbc Popups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
