<?php
$this->breadcrumbs=array(
	'Contact Autofills',
);

$this->menu=array(
	array('label'=>'Create ContactAutofill','url'=>array('create')),
	array('label'=>'Manage ContactAutofill','url'=>array('admin')),
);
?>

<h1>Contact Autofills</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
