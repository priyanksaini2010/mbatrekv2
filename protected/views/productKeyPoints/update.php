<?php
if($return == 1){
    $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Product\'s : Key Points'=>array('productKeyPoints/admin',"product_id"=>$modelProducts->id),
        'Update Key Points',
        
);

$this->menu=productsMenu($modelProducts->id);
} else{
$this->breadcrumbs=array(
	'Product Key Points'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductKeyPoints','url'=>array('index')),
	array('label'=>'Create ProductKeyPoints','url'=>array('create')),
	array('label'=>'View ProductKeyPoints','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ProductKeyPoints','url'=>array('admin')),
);
}
?>

<h1>Update Product's Key Point</h1>

<?php echo $this->renderPartial('_form',array(
			'model'=>$model,
                        'product_id'=>$product_id,
                        'return' => $return,
                        'modelProducts'=>$modelProducts
		)); ?>