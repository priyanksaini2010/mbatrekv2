<?php
if($return == 1){
      $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s "Recommended Value Saver Packs"'=>array("productRecommendedValueSaverPack/admin","product_id"=>$modelProducts->id),
        'Add Product\'s "Recommended Value Saver Packs"',
        
);

$this->menu = productsMenu($modelProducts->id);
} else {

}
?>

<h1>
    <?php if($return == 1){?>
     Create Product: "Recommended Value Saver Packs"
    <?php } else {?>
    Step 5: Create Product: "Recommended Value Saver Packs"
    <?php } ?>
</h1>
<?php echo $this->renderPartial('_form', array(
			'model'=>$model,
                        "product_id"=>$id,
                        "id"=>$id,
                        'return' => $return,
                        "modelProducts" => $modelProducts
		)); ?>