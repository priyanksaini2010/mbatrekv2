<?php
$this->breadcrumbs=array(
    'Manage Contact Company'=>array('contactAutofill/admin'),
    'Import  Contact Company',
);

$this->menu=array(
    array('label'=>'Manage Contact Company / Institutes','url'=>array('contactAutofill/admin')),
);
?>

<h1>Manage Contact Company</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'contact-autofill-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => "{delete}"
		),
	),
)); ?>
