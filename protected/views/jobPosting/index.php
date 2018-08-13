<?php
$this->breadcrumbs=array(
	'Job Postings',
);

$this->menu=array(
	array('label'=>'Create JobPosting','url'=>array('create')),
	array('label'=>'Manage JobPosting','url'=>array('admin')),
);
?>

<h1>Job Postings</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
