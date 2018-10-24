<?php
$this->breadcrumbs=array(
	'Campus Ambassadors',
);

$this->menu=array(
	array('label'=>'Create CampusAmbassador','url'=>array('create')),
	array('label'=>'Manage CampusAmbassador','url'=>array('admin')),
);
?>

<h1>Campus Ambassadors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
