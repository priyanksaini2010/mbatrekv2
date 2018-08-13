<?php
$this->breadcrumbs=array(
	'Content Jsons',
);

$this->menu=array(
	array('label'=>'Create ContentJson','url'=>array('create')),
	array('label'=>'Manage ContentJson','url'=>array('admin')),
);
?>

<h1>Content Jsons</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
