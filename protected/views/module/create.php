<?php
$this->breadcrumbs=array(
	'Modules'=>array('admin'),
	'Create',
);


$this->menu=array(
        array('label'=>'Manage Module','url'=>array('module/admin')),
	array('label'=>'Create Module','url'=>array('module/create')),
);
?>

<h1>Create Module</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>