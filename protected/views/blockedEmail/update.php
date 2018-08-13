<?php
$this->breadcrumbs=array(
	'Blocked Emails'=>array('admin'),
	'Update',
);

?>

<h1>Update Email To Block List</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>