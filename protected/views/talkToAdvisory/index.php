<?php
$this->breadcrumbs=array(
	'Talk To Advisories',
);

$this->menu=array(
	array('label'=>'Create TalkToAdvisory','url'=>array('create')),
	array('label'=>'Manage TalkToAdvisory','url'=>array('admin')),
);
?>

<h1>Talk To Advisories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
