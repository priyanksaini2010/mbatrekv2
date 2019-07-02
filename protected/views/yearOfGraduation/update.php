<?php
$this->breadcrumbs=array(
	'Year Of Graduations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Year Of Graduation','url'=>array('yearOfGraduation/admin')),
	array('label'=>'Create Year Of Graduation','url'=>array('yearOfGraduation/create')),
);


?>
<h1>Update Year Of Graduation </h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>