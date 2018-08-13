<?php
$this->breadcrumbs=array(
	'Faqs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Faq','url'=>array('faq/admin')),
	array('label'=>'Add Faq','url'=>array('faq/create')),
);

?>

<h1>Manage Faqs</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'faq-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'question',
		array(
                        'header'=>"Type",
                        "name"=>'type',
                        "value"=>'FaqType::model()->findByAttributes(array("id"=>$data->type))->name',
                        'filter'=>CHtml::listData( FaqType::model()->findAll(), 'id', 'name'),
                    ),
		'answer',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}"
		),
	),
)); ?>
