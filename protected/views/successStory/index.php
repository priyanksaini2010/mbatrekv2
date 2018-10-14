<?php
$this->breadcrumbs=array(
	'Success Stories',
);

$this->menu=array(
	array('label'=>'Create SuccessStory','url'=>array('create')),
	array('label'=>'Manage SuccessStory','url'=>array('admin')),
);
?>

<h1>Success Stories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
