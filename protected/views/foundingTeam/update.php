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
<h1>Update Team Member's Details </h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
