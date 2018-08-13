<?php
$this->breadcrumbs=array(
	'Products'=>array('admin'),
	$model->title,
);

$this->menu=$this->menu=productsMenu($model->id);;
?>
<div class="container">
<h1>Products Details :</h1>
<table class="table">
    <thead>
        <tr>
            <?php
            $new = new Products();
              
            foreach($model as $key=>$mod){?>
            <th><?php echo $new->getAttributeLabel($key);?></th>
            
            <?php }?>
        </tr>
    </thead>
    <tr>
        <?php
        
        foreach($model as $key=>$mod){?>
        <td>
            <?php
                switch($key){
                    case "logo":
                        ?>
            <img height="100" width="100" src="assets/products/<?php echo $mod;?>"/>
            <?php           break;
                    case "type":
                        if($mod == 1){
                            echo "Student";
                        }else if($mod == 2){
                            echo "Young Proffesional";
                        }
                    break;
                    case "status":
                        if($mod == 1){
                            echo "active";
                        }else if($mod == 0){
                            echo "In-active";
                        }
                    break;
                    case "is_saver":
                        if($mod == 1){
                            echo "Yes";
                        }else if($mod == 0){
                            echo "No";
                        }
                    break;
                    case "product_sub_category_id":
                        echo $model->productSubCategory->description;
                    break;
                    default :
                        echo $mod;
                        break;
                }
                
            ?>
        </td>
        <?php }?>
    </tr>
</table>
<h3>
    Product's Includes
</h3>
<?php

$keypoints = ProductInclude::model()->findByAttributes(array("product_id"=>$model->id));
$new = new ProductInclude();
?>
<table class="table">
    <thead>
        <tr>
            <?php
          
              
            foreach($keypoints as $key=>$mod){?>
            <?php 
            if($key != "id" && $key != "product_id"){?>
            <th>
            <?php echo $new->getAttributeLabel($key);?></th>
            <?php }?>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach($model->productIncludes as $keyp=>$modp){;?>
        <tr>
        <?php foreach($modp as $keyi=>$modi){ if($keyi != "id" && $keyi != "product_id"){?>
        
        <td>
            <?php
                switch($keyi){
                    case "logo":?>
            <img style="background-color:  #f1aa35;"height="32" width="38" src="assets/products/<?php echo $modi;?>"/>
            <?php        break;
            
            
                    default :
                        echo $modi;
                        break;
                }
                
            ?>
        </td>
        <?php }?><?php }?></tr><?php }?>
    
</table>
<h3>
    Product's Key Points
</h3>
<?php

$keypoints = ProductKeyPoints::model()->findByAttributes(array("product_id"=>$model->id));
$new = new ProductKeyPoints();
?>
<table class="table">
    <thead>
        <tr>
            <?php
          
              
            foreach($keypoints as $key=>$mod){?>
            <?php 
            if($key != "id" && $key != "product_id"){?>
            <th>
            <?php echo $new->getAttributeLabel($key);?></th>
            <?php }?>
            <?php }?>
        </tr>
    </thead>
    <tr>
        <?php
        
        foreach($model->productKeyPoints as $keyp=>$modp){?>
    <tr>
        <?php foreach($modp as $keyi=>$modi){ if($keyi != "id" && $keyi != "product_id"){?>
        <td>
            <?php
                switch($keyi){
                    case "logo":?>
            <img style="background-color:  #f1aa35;"height="32" width="38" src="assets/products/<?php echo $modi;?>"/>
            <?php        break;
            
            
                    default :
                        echo $modi;
                        break;
                }
                
            ?>
        </td>
        <?php }}?></tr><?php }?>
    </tr>
</table>
<h3>
    Product's How do we engage with you
</h3>
<?php

$keypoints = ProductEngage::model()->findByAttributes(array("product_id"=>$model->id));
$new = new ProductEngage();
?>
<table class="table">
    <thead>
        <tr>
            <?php
          
              
            foreach($keypoints as $key=>$mod){?>
            <?php 
            if($key != "id" && $key != "product_id"){?>
            <th>
            <?php echo $new->getAttributeLabel($key);?></th>
            <?php }?>
            <?php }?>
        </tr>
    </thead>
    <tr>
        <?php
        
        foreach($model->productEngages as $keyp=>$modp){?>
    <tr>
        <?php foreach($modp as $keyi=>$modi){ if($keyi != "id" && $keyi != "product_id"){?>
        <td>
            <?php
                switch($keyi){
                    case "icon":?>
            <img height="32" width="38" src="assets/products/<?php echo $modi;?>"/>
            <?php        break;
            
            
                    default :
                        echo $modi;
                        break;
                }
                
            ?>
        </td>
        <?php }}?></tr><?php }?>
    
</table>
<h3>
    Product's Key Outcomes
</h3>
<?php

$keypoints = ProductKeyOutcome::model()->findByAttributes(array("product_id"=>$model->id));
$new = new ProductKeyOutcome();
?>
<table class="table">
    <thead>
        <tr>
            <?php
          
              
            foreach($keypoints as $key=>$mod){?>
            <?php 
            if($key != "id" && $key != "product_id"){?>
            <th>
            <?php echo $new->getAttributeLabel($key);?></th>
            <?php }?>
            <?php }?>
        </tr>
    </thead>
    <tr>
        <?php
        
        foreach($model->productKeyOutcomes as $keyp=>$modp){?>
    <tr>
        <?php foreach($modp as $keyi=>$modi){ if($keyi != "id" && $keyi != "product_id"){?>
        <td>
            <?php
                switch($keyi){
                    case "icon":?>
            <img height="32" width="38" src="assets/products/<?php echo $modi;?>"/>
            <?php        break;
            
            
                    default :
                        echo $modi;
                        break;
                }
                
            ?>
        </td>
        <?php }}?>
        
    </tr>
        <?php }?>
    
</table>
<h3>
    Product's Recommended Value Saver Packages
</h3>
<?php

$keypoints = ProductRecommendedValueSaverPack::model()->findByAttributes(array("product_id"=>$model->id));
$new = new ProductRecommendedValueSaverPack();
?>
<table class="table">
    <thead>
        <tr>
            <?php
          
              
            foreach($keypoints as $key=>$mod){?>
            <?php 
            if($key != "id" && $key != "product_id"){?>
            <th>
            <?php echo $new->getAttributeLabel($key);?></th>
            <?php }?>
            <?php }?>
        </tr>
    </thead>
    <tr>
        <?php
        
        foreach($model->productRecommendedValueSaverPacks as $keyp=>$modp){?>
    <tr>
        <?php foreach($modp as $keyi=>$modi){ if($keyi != "id" && $keyi != "product_id"){?>
        <td>
            <?php
                switch($keyi){
                    case "icon":?>
            <img style="background-color: #229897;" height="32" width="38" src="assets/products/<?php echo $modi;?>"/>
            <?php        break;
                    
                    case "recommended_product_id":
                        echo $modp->recommendedProduct->title;
                        break;
                    default :
                        echo $modi;
                        break;
                }
                
            ?>
        </td>
        <?php }}?></tr><?php }?>

</table>
</div>
