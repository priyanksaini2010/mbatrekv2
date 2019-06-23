<?php
$this->breadcrumbs=array(
	'Assessment Popups',
);

$this->menu=array(
	array('label'=>'Create AssessmentPopup','url'=>array('create')),
	array('label'=>'Manage AssessmentPopup','url'=>array('admin')),
);
?>

<h1>Assessment Popups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
