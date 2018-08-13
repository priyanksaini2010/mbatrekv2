<?php
$this->breadcrumbs=array(
	'Module Casestudies',
);

$this->menu=array(
	array('label'=>'Create ModuleCasestudy','url'=>array('create')),
	array('label'=>'Manage ModuleCasestudy','url'=>array('admin')),
);
?>

<h1>Module Casestudies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
