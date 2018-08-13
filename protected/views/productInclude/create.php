<?php
if($return == 1){
      $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s Includes'=>array("productInclude/admin","product_id"=>$modelProducts->id),
        'Add Products Includes',
        
);

$this->menu = productsMenu($modelProducts->id);
} else {
//    $this->breadcrumbs=array(
//	'Product Includes'=>array('index'),
//	'Create',
//    );
//
//    $this->menu=array(
//            array('label'=>'List ProductInclude','url'=>array('index')),
//            array('label'=>'Manage ProductInclude','url'=>array('admin')),
//    );
}
if($return == 0){
?>

<h1>Step 2: Create Product Include </h1>

<?php } else {?>
<h1>Create Product Include</h1>

<?php } ?>
<?php echo $this->renderPartial('_form', array(
			'model'=>$model,
                        'product_id'=>$product_id,
                        'id'=>$product_id,
                        'modelProducts'=>$modelProducts,'return' => $return
		)); ?>