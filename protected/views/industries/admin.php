<?php
$this->breadcrumbs=array(
	'Industries'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Industries','url'=>array('industries/admin')),
	array('label'=>'Create Industries','url'=>array('industries/create')),
	array('label'=>'All Industries Analysis','url'=>array('industries/analysis')),
);


?>

<h1>Manage Industries</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'industries-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=> "{view}{update}{delete}",
                        'buttons' => array(
                            "view"=> array(
                                "options" => array("View Details"),
                                
                            ),
                        )
		),
	),
)); ?>
