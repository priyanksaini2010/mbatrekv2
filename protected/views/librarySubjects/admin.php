<?php
$this->breadcrumbs=array(
	'Library Subjects'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Subjects','url'=>array('librarySubjects/admin')),
	array('label'=>'Create Subjects','url'=>array('librarySubjects/create')),
);

?>

<h1>Manage Library Subjects</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'library-subjects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}"
		),
	),
)); ?>
