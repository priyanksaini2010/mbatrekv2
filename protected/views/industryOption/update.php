<?php

$this->breadcrumbs=array(
	'Industry Options'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Industry Option','url'=>array('industryOption/admin',"option_number"=>$_GET['option_number'])),
	array('label'=>'Create IndustryOption','url'=>array('industryOption/create',"option_number"=>$_GET['option_number'])),
);

?>

<h1>Update Industry Option</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>