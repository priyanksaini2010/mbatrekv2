<?php
$this->breadcrumbs=array(
	'Library Book Students',
);

$this->menu=array(
	array('label'=>'Create LibraryBookStudent','url'=>array('create')),
	array('label'=>'Manage LibraryBookStudent','url'=>array('admin')),
);
?>

<h1>Library Book Students</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
