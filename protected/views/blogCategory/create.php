<?php
$this->breadcrumbs=array(
	'Blog Categories'=>array('admin'),
	'Create Category',
);

$this->menu=array(
        array('label'=>'Manage Categories','url'=>array('blogCategory/admin')),
	array('label'=>'Create Category','url'=>array('blogCategory/create')),
);
?>

<h1>Create Category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>