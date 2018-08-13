<?php
$this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$model->product->title=>array("products/view","id"=>$model->product->id),
        'Manage Product\'s : Key Points'
);

$this->menu=productsMenu($model->product_id);?>

<h1>Manage Product Key Points</h1>
<a href="<?php echo Yii::app()->createUrl("productKeyPoints/create",array("id"=>$model->product_id,"return"=>1))?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add More 
</a>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-key-points-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'points',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("productKeyPoints/update", array("id"=>$data->id,"product_id"=>$data->product_id,"return"=>1))',
                        
		),
	),
)); ?>
