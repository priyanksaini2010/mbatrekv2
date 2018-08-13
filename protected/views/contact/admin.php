<?php
$this->breadcrumbs=array(
	'Contacts'=>array('admin'),
	'Manage',
);

?>

<h1>Manage Contacts</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'name',
		'phone',
		'email',
		'subject',
		'type',
		/*
		'message',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{view}{delete}'
		),
	),
)); ?>
