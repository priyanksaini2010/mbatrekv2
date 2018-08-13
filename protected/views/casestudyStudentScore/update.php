<?php
$this->breadcrumbs=array(
	'Casestudy Student Scores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CasestudyStudentScore','url'=>array('index')),
	array('label'=>'Create CasestudyStudentScore','url'=>array('create')),
	array('label'=>'View CasestudyStudentScore','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CasestudyStudentScore','url'=>array('admin')),
);
?>

<h1>Update CasestudyStudentScore <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>