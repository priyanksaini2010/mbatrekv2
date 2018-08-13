<?php
$this->breadcrumbs=array(
	'Library Subjects',
);

$this->menu=array(
	array('label'=>'Create LibrarySubjects','url'=>array('create')),
	array('label'=>'Manage LibrarySubjects','url'=>array('admin')),
);
?>

<h1>Library Subjects</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
