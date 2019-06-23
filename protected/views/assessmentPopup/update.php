<?php
$this->breadcrumbs=array(
    'Assessment Popups'=>array('admin'),
    'Manage',
);

$this->menu=array(
    array('label'=>'Manage Assessment Popup','url'=>array('/assessmentPopup/admin')),
//	array('label'=>'Create AssessmentPopup','url'=>array('create')),
);

?>

<h1>Update Assessment Popup</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>