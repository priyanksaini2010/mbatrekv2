<?php
$this->breadcrumbs=array(
	'Library Book Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LibraryBookStudent','url'=>array('index')),
	array('label'=>'Create LibraryBookStudent','url'=>array('create')),
	array('label'=>'View LibraryBookStudent','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage LibraryBookStudent','url'=>array('admin')),
);
?>

<h1>Update LibraryBookStudent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>