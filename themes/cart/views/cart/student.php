<?php
$products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>1,"type"=>1,"status"=>1,"is_saver"=>0));
$category = ProductCategory::model()->findByPk(1);
$category2 = ProductCategory::model()->findByPk(2);
$subs = ProductSubCategory::model()->findAllByAttributes(array("product_category_id"=>2));
$saver = Products::model()->findByAttributes(array("product_sub_category_id"=>1,"type"=>1,"status"=>1,"is_saver" => 1));

$arrProd = array();
$baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart");
?>
<div class="studen-wrapper">
    <?php $this->setPageTitle('Students'); ?>
    <?php $data  = ContentJson::model()->findByAttributes(array("page"=>"student_page"));
        echo $data->data;
    ?>
    <div class="student-title">
        <div class="container">
            <div class="student-title-inner">
                <?php echo $category->category;?>
            </div>
        </div>
    </div>
    <div class="student-cta1">
        <div class="container">
            <div class="student-cta1-inner">
                <ul class="student-cta1-listing">
                    <?php
                    if(!empty($products)){
                        foreach($products as $key=>$prod){?>
                        <li>
                        <div class="intern-type">
                            <div class="top-icon">
                                <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$prod->id));?>">
                                    <img src="assets/products/<?php echo $prod->logo;?>">
                                </a>
                            </div>
                            <div class="intern-title"><?php echo $prod->title;?></div>
                            <div class="intern-body">
                                <?php echo $prod->description1;?>
                            </div>
                            <div class="intern-read-more">
                                <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$prod->id));?>">read more >></a>
                            </div>
                            <div class="intern-price">
                                PRICE &#8377 <?php echo money($prod->price);?>
                            </div>
                            <div class="intern-link">
                                <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$prod->id));?>">buy now</a>
                                <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$prod->id));?>">add to cart</a>
                            </div>
                        </div>
                        <div class="intern-desc">
                            <ul>
                                <?php foreach($prod->productKeyPoints as $keypoint){?>
                                <li>
                                    <?php echo $keypoint->points;?>
                                </li>
                                <?php }?>   
                            </ul>
                        </div>
                    </li>
                    <?php }}else {?>
                    <!--<span class="no-products">No Products Found</span>-->
                    <?php }?>
                </ul>
                <?php if(!empty($saver)){?>
                <div class="student-cta1-bottom">
                    <div class="student-cta1-bottom-inner">
                        <div class="student-cta1-bottom-title">
                           <?php echo $saver->title;?>
                        </div>
                        <div class="student-cta1-bottom-sub-title">
                            PRICE - <span class="old_price">&#8377 <?php echo money($saver->actuall_price);?></span>, <span class="new-price">Now - &#8377  <?php echo money($saver->price);?></span>
                        </div>
                        <div class="buy-and-cart">
                            <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$saver->id));?>">buy now</a>
                            <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->id));?>">add to cart</a>
                        </div>
                        <div class="read-more">
                            <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$saver->id));?>">read more >></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="student-placement-title">
        <div class="container">
            <div class="student-placement-title-inner">
                 <?php echo $category2->category;?>
            </div>
        </div>
    </div>
    <div class="right-choice">
        <div class="container">
            <?php foreach($subs as $sub){
               $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>$sub->id,"type"=>1,"status"=>1));
               if(!empty($products)){
            ?>
            <div class="right-choice-inner1">
                <div class="right-choice-inner-title">
                    <?php echo $sub->description;?>
                </div>
                <div class="student-cta2">
                    <div class="student-cta2-inner">
                        <ul class="student-cta-listing">
                            <?php foreach($products as $product){?>
                            <li>
                                <div class="intern-type">
                                    <div class="top-icon">
                                        <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$product->id));?>">
                                            <img src="assets/products/<?php echo $product->logo?>">
                                        </a>
                                    </div>
                                    <div class="intern-title"><?php echo $product->title?></div>
                                    <div class="intern-body">
                                        <?php echo $product->description1?>
                                    </div>
                                    <div class="intern-read-more">
                                        <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$product->id));?>">read more >></a>
                                    </div>
                                    <div class="intern-price">
                                        PRICE &#8377 <?php echo money($product->price);?>
                                    </div>
                                    <div class="intern-link">
                                        <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$product->id));?>">buy now</a>
                                        <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$product->id));?>">add to cart</a>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                        </ul>                                    
                    </div>
                </div>
            </div>
           
            <?php } else{?>
                <!--<span class="no-product">No Product Found</span>-->
            <?php }
            
            }?>
<!--            <div class="student-cta1-bottom">
                <div class="student-cta1-bottom-inner">
                    <div class="student-cta1-bottom-title">
                        Campus 2 Corporate
                    </div>
                    <div class="student-cta1-bottom-sub-title">
                        PRICE Rs 3000, <span class="new-price">Now- 2700</span>
                    </div>
                    <div class="buy-and-cart">
                        <a href="#">buy now</a>
                        <a href="#">add to cart</a>
                    </div>
                    <div class="read-more">
                        <a href="read-more">read more</a>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>  