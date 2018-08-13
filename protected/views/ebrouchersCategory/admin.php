<?php
$this->breadcrumbs=array(
	'Ebrouchers Categories'=>array('admin'),
	'Manage',
);

$this->menu=array(
        array('label'=>'Manage Ebrouchers Category','url'=>array('ebrouchersCategory/admin')),
	array('label'=>'Create Ebrouchers Category','url'=>array('ebrouchersCategory/create')),
);

?>

<h1>Manage Ebrouchers Categories</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ebrouchers-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update}{delete}'
		),
	),
)); ?>
