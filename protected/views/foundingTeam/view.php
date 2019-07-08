<?php
$this->breadcrumbs=array(
    'Team'=>array('admin'),
    'Manage',
);

$this->menu=array(
    array('label'=>'Manage Team','url'=>array('foundingTeam/admin')),
    array('label'=>'Add Team Member','url'=>array('foundingTeam/create')),
);


?>
<h1>View Team Member's Details </h1>
<h3>Text Details: </h3>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'desig',

		'email',
		'phone',
		'linked_in',
		'college',
		'batch',
        'about',
	),
)); ?>
<h3>Images: </h3>
<h4>Colored Pic:</h4>
<img src="assets/team/<?php echo $model->photo_1 ?>" height="50px" width="50px"/>
<h4>BnW Pic:</h4>
<img src="assets/team/<?php echo $model->photo_2 ?>" height="50px" width="50px"/>


<br />
<h3>Details Ends </h3>
