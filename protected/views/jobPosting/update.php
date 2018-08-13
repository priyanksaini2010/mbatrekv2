<?php
$this->breadcrumbs=array(
	'Job Postings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobPosting','url'=>array('index')),
	array('label'=>'Create JobPosting','url'=>array('create')),
	array('label'=>'View JobPosting','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage JobPosting','url'=>array('admin')),
);
?>

<h1>Update JobPosting <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>