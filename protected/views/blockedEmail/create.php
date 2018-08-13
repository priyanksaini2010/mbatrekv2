<?php
$this->breadcrumbs=array(
	'Blocked Emails'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage BlockedEmail','url'=>array('admin')),
);
?>

<h1>Add Email To Block List</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>