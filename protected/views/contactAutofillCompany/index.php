<?php
$this->breadcrumbs=array(
	'Contact Autofill Companies',
);

$this->menu=array(
	array('label'=>'Create ContactAutofillCompany','url'=>array('create')),
	array('label'=>'Manage ContactAutofillCompany','url'=>array('admin')),
);
?>

<h1>Contact Autofill Companies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
