<?php
$this->breadcrumbs=array(
	'Library Book Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LibraryBookStudent','url'=>array('index')),
	array('label'=>'Manage LibraryBookStudent','url'=>array('admin')),
);
?>

<h1>Create LibraryBookStudent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>