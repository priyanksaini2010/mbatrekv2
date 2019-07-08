<?php
$this->breadcrumbs=array(
	'Popup Reponses',
);

$this->menu=array(
	array('label'=>'Create PopupReponse','url'=>array('create')),
	array('label'=>'Manage PopupReponse','url'=>array('admin')),
);
?>

<h1>Popup Reponses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
