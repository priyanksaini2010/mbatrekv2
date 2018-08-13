<?php
if($return == 1){
      $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s "How do we engage with you"'=>array("productEngage/admin","product_id"=>$modelProducts->id),
        'Add Product\'s "How do we engage with you"',
        
);

$this->menu = productsMenu($modelProducts->id);
} else {

}
?>

<h1>
    <?php if($return == 1){?>
    Create Product's: "How do we engage with you"
    <?php } else {?>
    Step 3: Create Product's "How do we engage with you"
    <?php } ?>
</h1>

<?php echo $this->renderPartial('_form', array(
			'model'=>$model,
                        "product_id"=>$id,
                        "id"=>$id,
                        'return' => $return,
                        "modelProducts" => $modelProducts
		)); ?>