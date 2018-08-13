<?php
$this->breadcrumbs=array(
	'Talk To Advisories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TalkToAdvisory','url'=>array('index')),
	array('label'=>'Manage TalkToAdvisory','url'=>array('admin')),
);
?>

<h1>Create TalkToAdvisory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>