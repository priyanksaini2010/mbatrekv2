<?php
$this->breadcrumbs=array(
	'Library Subjects'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Subjects','url'=>array('librarySubjects/admin')),
	array('label'=>'Create Subjects','url'=>array('librarySubjects/create')),
);
?>

<h1>Create Library Subjects</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>