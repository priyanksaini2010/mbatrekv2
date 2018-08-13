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

<h1>Manage <?php echo $text;?></h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'articles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'details',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',    
                        "template" => "{update}{delete}",
                        'updateButtonUrl' =>'$this->grid->controller->createUrl("articles/update", array("type"=>$_GET[\'type\'],"id"=>$data->id))',
		),
	),
)); ?>
