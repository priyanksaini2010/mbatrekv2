<?php
$this->breadcrumbs=array(
	'Popup Reponses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PopupReponse','url'=>array('index')),
	array('label'=>'Manage PopupReponse','url'=>array('admin')),
);
?>

<h1>Create PopupReponse</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>