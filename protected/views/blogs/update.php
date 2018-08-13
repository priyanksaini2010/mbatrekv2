<?php
$this->breadcrumbs=array(
	'Blogs'=>array("admin"),
	'Manage',
);
$this->menu=array(
        array('label'=>'Manage Blogs','url'=>array('blogs/admin')),
	array('label'=>'Create Blogs','url'=>array('blogs/create')),
);
?>
<h1>Update Blog</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>