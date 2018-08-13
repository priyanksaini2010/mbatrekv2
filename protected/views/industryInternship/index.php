<?php
$this->breadcrumbs=array(
	'Industry Internships',
);

$this->menu=array(
	array('label'=>'Create IndustryInternship','url'=>array('create')),
	array('label'=>'Manage IndustryInternship','url'=>array('admin')),
);
?>

<h1>Industry Internships</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
