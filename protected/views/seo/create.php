<?php
$this->breadcrumbs=array(
    'SEO Management'=>array('admin'),
    'Manage',
);

$this->menu=array(
    array('label'=>'SEO Management','url'=>array('seo/admin')),
    array('label'=>'Add SEO Details','url'=>array('seo/create')),
);
?>

<h1>Add SEO Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
