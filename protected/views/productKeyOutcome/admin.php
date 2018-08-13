<?php
  $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s Key Out Comes',
        
);
$this->menu= productsMenu($product_id);
?>

<h1>Manage Product's "Key Out Comes"</h1>

<a href="<?php echo Yii::app()->createUrl("productKeyOutcome/create",array("id"=>$modelProducts->id,"return"=>1))?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add More 
</a>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-key-outcome-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'description',
		array(
                'name'=>'icon', 
                    'type' => 'raw',
                    'filter' => '',
                    'value' => 'CHtml::image(Yii::app()->baseUrl . "/assets/products/" . $data->icon,"", array("width"=>32, "height"=>38))',
                ),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("productKeyOutcome/update", array("id"=>$data->id,"product_id"=>$data->product_id,"return"=>1))',
                        
                ),
	),
)); ?>
