<?php
$this->breadcrumbs=array(
	'Content Management'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage ContentJson','url'=>array('contentJson/admin')),
);
?>

<h1>Update  <?php echo $model->page; ?></h1>

<?php 
if ($model->page != 'home') {
    echo $this->renderPartial("_form",array('model'=>$model));
} else {
    echo $this->renderPartial($model->page,array('model'=>$model));
}
?>