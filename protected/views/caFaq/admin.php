<?php
$this->breadcrumbs=array(
	'CA Faqs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage CA Faq','url'=>array('caFaq/admin')),
	array('label'=>'Add CA Faq','url'=>array('caFaq/create')),
);

?>

<h1>Manage CA Faqs</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'faq-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'question',
		array(
                        'header'=>"Type",
                        "name"=>'type',
                        "value"=>'CaFaqType::model()->findByAttributes(array("id"=>$data->type))->name',
                        'filter'=>CHtml::listData( CaFaqType::model()->findAll(), 'id', 'name'),
                    ),
		'answer',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}"
		),
	),
)); ?>
