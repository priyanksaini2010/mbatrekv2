<?php
$this->breadcrumbs=array(
	'Traits Of Our Students'=>array('admin'),
	'Manage',
);

$this->menu=array(array('label'=>'Manage Traits','url'=>array('traits/admin')),);


?>

<h1>Update Traits </h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>