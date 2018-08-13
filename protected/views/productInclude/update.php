<?php
   $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s Includes'=>array("productInclude/admin","product_id"=>$modelProducts->id),
        'Update Products Includes',
        
);


$this->menu= productsMenu($product_id);
?>

<h1>Update Product's Includes</h1>

<?php echo $this->renderPartial('_form',array(
			'model'=>$model,
                        'return' =>$return,
                        'product_id' => $product_id,
                        'id' => $product_id,
                        'modelProducts' => $modelProducts
		)); ?>