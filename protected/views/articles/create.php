<?php
switch($_GET["type"]) {
    case 1:
        $text  ="Article";
        break;
    case 2 :
        $text  ="Success Story";
        break;
}
$this->breadcrumbs=array(
	'Articles'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage '.$text,'url'=>array('articles/admin',"type"=>$_GET['type'])),
	array('label'=>'Create '.$text,'url'=>array('articles/create',"type"=>$_GET['type'])),
);
?>

<h1>Create <?php echo $text;?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>