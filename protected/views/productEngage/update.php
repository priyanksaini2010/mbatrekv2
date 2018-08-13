<?php
 $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s "How do we engage with you"'=>array("productEngage/admin","product_id"=>$modelProducts->id),
        'Update Product\'s "How do we engage with you"',
        
);
$this->menu= productsMenu($product_id);
?>

<h1>Update Product's : "How do we engage with you"</h1>

<?php echo $this->renderPartial('_form',array(
			'model'=>$model,
                        "modelProducts" => $modelProducts,
                        "id" => $product_id,
                        "product_id" => $product_id,
                        "return" => 0,
		)); ?>