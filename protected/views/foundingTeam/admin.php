<?php
$this->breadcrumbs=array(
	'Teams'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Team','url'=>array('foundingTeam/admin')),
	array('label'=>'Create Team Member','url'=>array('foundingTeam/create')),
);


?>

<h1>Manage Founding Teams</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'founding-team-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'name',
		'desig',
//		'about',

		'email',
		'phone',
		/*'linked_in',
		'type',
		'college',
		'batch',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
