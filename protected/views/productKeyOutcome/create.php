<?php
if($return == 1){
      $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s "Key Out Comes"'=>array("productKeyOutcome/admin","product_id"=>$modelProducts->id),
        'Add Product\'s "Key Out Comes"',
        
);

$this->menu = productsMenu($modelProducts->id);
} else {
    
}
?>
<h1>
    <?php if($return == 1){?>
     Create Product : "Key Out Comes"
    <?php } else {?>
    Step 4: Create Product : "Key Out Comes"
    <?php } ?>
</h1>

<?php echo $this->renderPartial('_form', array(
			'model'=>$model,
                        "product_id"=>$id,
                        "id"=>$id,
                        'return' => $return,
                        "modelProducts" => $modelProducts
		)); ?>