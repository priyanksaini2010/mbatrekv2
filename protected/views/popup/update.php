<?php
$this->breadcrumbs=array(
    'Popups'=>array('popup/admin'),
    'Manage',
);

$this->menu=array(
    array('label'=>'Manage Popup','url'=>array('popup/admin')),
    array('label'=>'Create Popup','url'=>array('popup/create')),
);

?>

<h1>Update Call To Actions</h1>


<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
