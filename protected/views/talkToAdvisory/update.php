<?php
$this->breadcrumbs=array(
	'Talk To Advisories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TalkToAdvisory','url'=>array('index')),
	array('label'=>'Create TalkToAdvisory','url'=>array('create')),
	array('label'=>'View TalkToAdvisory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TalkToAdvisory','url'=>array('admin')),
);
?>

<h1>Update TalkToAdvisory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>