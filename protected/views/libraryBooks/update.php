<?php
$this->breadcrumbs=array(
	'Library Books'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Books','url'=>array('libraryBooks/admin')),
	array('label'=>'Add Books','url'=>array('libraryBooks/create')),
);


?>

<h1>Update Books</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>