<?php
$this->breadcrumbs=array(
	'Case Study Functions'=>array('admin'),
	'Create',
);


$this->menu=array(
	array('label'=>'Manage Case Study Functions','url'=>array('casestudyFunctions/admin')),
	array('label'=>'Add Functions','url'=>array('casestudyFunctions/create')),
);



?>


<h1>Create Case Study Functions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>