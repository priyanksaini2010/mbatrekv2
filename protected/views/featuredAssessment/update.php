<?php
$this->breadcrumbs=array(
    'Featured Assessments'=>array('admin'),
    'Manage',
);

$this->menu=array(
    array('label'=>'Manage Featured Assessment','url'=>array('featuredAssessment/admin')),
);

?>

<h1>Update Featured Assessments</h1>



<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>