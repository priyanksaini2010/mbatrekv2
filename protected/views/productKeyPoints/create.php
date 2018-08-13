<?php
if($return == 1){
    $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s : Key Points'=>array('productKeyPoints/admin',"product_id"=>$modelProducts->id),
        'Add Key Points',
        
);

$this->menu=productsMenu($modelProducts->id);;
} else{


}
?>

<h1>
    <?php if($return == 1){?>
     Create Product: "Key Points"
    <?php } else {?>
    Step 6: Create Product: "Key Points"
    <?php } ?>
</h1>


<?php echo $this->renderPartial('_form', array(
			'model'=>$model,
                        'id'=>$id,
                        'return' => $return,
                        'modelProducts'=>$modelProducts
		)); ?>