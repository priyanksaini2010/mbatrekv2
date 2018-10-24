<?php
  $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s Key Out Comes',
        
);
$this->menu= productsMenu($product_id);
?>

<h1>Manage Product's "Recommended Value Saver Packs"</h1>

<a href="<?php echo Yii::app()->createUrl("productRecommendedValueSaverPack/create",array("id"=>$modelProducts->id,"return"=>1))?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add More 
</a>

<?php
$prods = CHtml::listData(Colleges::model()->findAll(), "id", "title");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-recommended-value-saver-pack-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'title',
		'short_description',
                array(
                    'name'=>'recommended_product_id', 
                    'value' => '$data->recommendedProduct->title',
                    'filter' => $prods
                ),
            
//		array(
//                'name'=>'icon', 
//                    'type' => 'raw',
//                    'filter' => '',
//                    'value' => 'CHtml::image(Yii::app()->baseUrl . "/assets/products/" . $data->icon,"", array("width"=>32, "height"=>38, "style" =>"background-color : #229897"))',
//                ),
//		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("productRecommendedValueSaverPack/update", array("id"=>$data->id,"product_id"=>$data->product_id,"return"=>1))',
                        
                ),
	),
)); ?>
