<?php
  $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Products Includes',
        
);

$this->menu = productsMenu($modelProducts->id);


?>

<h1>Manage Product Includes</h1>
<a href="<?php echo Yii::app()->createUrl("productInclude/create",array("id"=>$modelProducts->id,"return"=>1))?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add More 
</a>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-include-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'description',
                array(
                'name'=>'logo', 
                    'type' => 'raw',
                    'filter' => '',
                    'value' => 'CHtml::image(Yii::app()->baseUrl . "/assets/products/" . $data->logo,"", array("width"=>32, "height"=>38,"style"=>"background-color:  #f1aa35;"))',
                 ),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("productInclude/update", array("id"=>$data->id,"product_id"=>$data->product_id,"return"=>1))',
                        
                    ),
	),
)); ?>
