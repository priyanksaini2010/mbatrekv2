<?php
$this->breadcrumbs=array(
	'Job Postings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobPosting','url'=>array('index')),
	array('label'=>'Manage JobPosting','url'=>array('admin')),
);
?>

<h1>Create JobPosting</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>