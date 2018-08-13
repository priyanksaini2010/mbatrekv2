<?php
 $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s "Recommended Value Saver Packs"'=>array("productRecommendedValueSaverPack/admin","product_id"=>$modelProducts->id),
        'Update Product\'s "Recommended Value Saver Packs"',
        
);
$this->menu= productsMenu($product_id);
?>

<h1>Update Product's "Recommended Value Saver Packs"</h1>

<?php echo $this->renderPartial('_form',array(
			'model'=>$model,
                        "modelProducts" => $modelProducts,
                        "id" => $product_id,
                        "product_id" => $product_id,
                        "return" => 0,
		)); ?>