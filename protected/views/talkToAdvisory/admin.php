<?php
$this->breadcrumbs=array(
	'Manage Talk To Advisory'=>array('talkToAdvisory/admin'),
	
);

$this->menu=array(
	array('label'=>'Manage Talk To Advisory','url'=>array('talkToAdvisory/admin')),
	
);

?>

<h1>Manage Talk To Advisory</h1>
<a href="<?php echo Yii::app()->createUrl("talkToAdvisory/export");?>"> <button class="btn btn-info" >Export To Excel</button></a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'talk-to-advisory-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'name',
		'email',
		'message',
		'area',
                'date'
		
	),
)); ?>
