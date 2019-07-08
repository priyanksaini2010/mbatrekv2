<?php
$this->breadcrumbs=array(
    'Manage Contact Institutes'=>array('contactAutofillCompany/admin'),

);

$this->menu=array(
    array('label'=>'Manage Contact Institutes','url'=>array('contactAutofillCompany/admin')),
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
