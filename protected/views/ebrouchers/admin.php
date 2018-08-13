<?php
$this->breadcrumbs=array(
	'Ebrouchers'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Ebrouchers','url'=>array('ebrouchers/admin')),
        array('label'=>'Create Ebrouchers','url'=>array('ebrouchers/create')),
);
?>
<h1>Manage Ebrouchers</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ebrouchers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		
                array(
                    'name'=>'category_id',
                    'filter'=>CHtml::listData( EbrouchersCategory::model()->findAll(), 'id', 'name'),
                    'value'=>'EbrouchersCategory::model()->findByAttributes(array("id"=>$data->category_id))->name'
                ),
		'name',
//		'file',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        "template" => "{update}{delete}"
		),
	),
)); ?>
