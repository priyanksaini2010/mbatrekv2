<?php
$this->breadcrumbs=array(
    'Assessments'=>array('admin'),
    'Manage',
);

$this->menu=array(
    array('label'=>'Manage Assessments','url'=>array('assessments/admin')),
    array('label'=>'Create Assessments','url'=>array('assessments/create')),
);
?>


<h1>Update Assessments</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>