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
<h1>Add Team Member</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
