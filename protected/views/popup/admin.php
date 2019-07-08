<?php
$this->breadcrumbs=array(
	'Popups'=>array('popup/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Popup','url'=>array('popup/admin')),
	array('label'=>'Create Popup','url'=>array('popup/create')),
);

?>

<h1>Manage Call To Actions</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'popup-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',1
		'url',
		'for_user',
		'header_text',
		'sub_heading_text',
		'button_text',
		'cancellation_text',
        array(
                'header' =>'Status',
                "name"=>'status',
                'value'=>'$data->status == 1?"Active":"In-Active"'
            ),
        array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{update},{delete}'
		),
	),
)); ?>
