<?php
$this->breadcrumbs=array(
	'Universities'=>array('universities/admin'),
	'University Details' => array('universities/view',"id"=>$_GET['university_id']),
	'Manage Univeristy Courses and Bataches'
);

$this->menu=array(
	array('label'=>'Manage Universities','url'=>array('universities/admin')),
	array('label'=>'University Details','url'=>array('universities/view',"id"=>$_GET['university_id'])),
	array('label'=>'Universities Courses And Batches','url'=>array('universityCourseBatch/admin',"university_id"=>$_GET['university_id'])),
	array('label'=>'Add Courses And Batches','url'=>array('universityCourseBatch/create',"university_id"=>$_GET['university_id'])),
);
?>

<h1>Manage University Course Batches</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'university-course-batch-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'courser_name',
		'courser_batch',
	),
)); ?>
