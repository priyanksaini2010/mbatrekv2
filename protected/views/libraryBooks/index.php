<?php
$this->breadcrumbs=array(
	'Library Books',
);

$this->menu=array(
	array('label'=>'Create LibraryBooks','url'=>array('create')),
	array('label'=>'Manage LibraryBooks','url'=>array('admin')),
);
?>

<h1>Library Books</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
