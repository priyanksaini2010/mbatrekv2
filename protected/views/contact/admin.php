<?php
$this->breadcrumbs=array(
	'Contacts'=>array('contact/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Contact','url'=>array('contact/admin')),

);

;
?>

<h1>Manage Contacts</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'mobile_no',
		'email',
		'are_you',
		'name_of_company_institute',
		'subject',
		'your_message',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{delete}'
        ),


	),
)); ?>
