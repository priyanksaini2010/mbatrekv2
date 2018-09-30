<?php
$product = Products::model()->findByPk($id);
?>
<?php $this->setPageTitle( $product->title); ?>
<div class="comany_conainer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="company_left">
                    <h3>#<?php echo $product->title; ?>
                    </h3>
                    <?php echo $product->description; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="buy_now">
                    <a href="javascript:void(0)">&#8377 <?php echo money($product->price); ?></a>
                    <div class="order_div">
                        <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$product->id));?>">Buy Now</a>
                        <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$product->id));?>">Add to Cart</a>
                    </div>
                    <ul class="gd_ul">
                        <h2>Includes</h2>
                        <?php foreach ($product->productIncludes as $include) { ?>
                            <li>

                                <div class="li_wrap"><img src="assets/products/<?php echo $include->logo; ?>"/></div>
                                <div class="li_Text_wrap">
                                    <?php echo $include->description; ?> 
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <div class="how_We_contaner">
            <div class="container">
            <h3>How do we engage with you  </h3>
            <ul class="">
                <?php foreach ($product->productEngages as $eKey=>$engage){?>
                <?php if($eKey % 2 == 0 || $eKey == 0){?>
                <li>
                    
                    <span class="four_line"><?php echo $engage->description;?></span>
                    <span class="step_up"><div class="arrow_big"></div><div class="inner_pro_text"><?php echo $engage->description2;?></div></span>
                    <div class="icon_wrapper">
                        <img src="assets/products/<?php echo $engage->icon;?>"/>
                    </div>

                </li>
                <?php } else {?>
                <li>
                    
                    <div class="icon_wrapper four_line">
                       <img src="assets/products/<?php echo $engage->icon;?>"/>
                    </div>
                    <span class="step_up"> <div class="arrow_big"></div><div class="inner_pro_text"><?php echo $engage->description2;?></div></span>
                    <span><?php echo $engage->description;?></span>
                </li>
                <?php }}?>
            </ul>
        </div>
        </div>
    <div class="container">
        <div class="key_outcomes">
            <h3>Key Outcomes </h3>
            <ul>
                 <?php foreach ($product->productKeyOutcomes as $outcomes){?>
                <li>
                    <img src="assets/products/<?php echo $outcomes->icon;?>"/>
                    <span><?php echo $outcomes->description;?></span>
                </li>
                 <?php }?>
                
            </ul>
        </div>
        <div class="our_recomanded product_recomnd">
            <h4>Recommended Value Saver Packages </h4>
            <ul>
                <?php foreach($product->productRecommendedValueSaverPacks as $recon){?>
                <li>
                    <div class="recomended_title">
                        <label>
                           <?php echo $recon->title;?>
                            <span>
                                (Choose your best fit)
                            </span>
                            
                        </label>
                        <img src="assets/products/<?php echo $recon->icon;?>"/>
                        <div class="add_to_Cart_div">
                                <a href="">Add to Cart</a>
                                <a href="">Buy Now</a>
                            </div>
                    </div>

                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
