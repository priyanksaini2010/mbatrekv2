<?php
$product = Products::model()->findByPk($id);
?>
<?php $this->setPageTitle( $product->title); ?>
<div class="comany_conainer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="company_left">
                    <h3><?php echo $product->title; ?>
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

                                <div class="li_wrap"><img src="<?php echo Yii::app()->baseUrl;?>/assets/products/<?php echo $include->logo; ?>"/></div>
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
        <?php if( $id != 19 && $id != 18 && $id != 31 && $id != 32){?>
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
                        <img src="<?php echo Yii::app()->baseUrl;?>/assets/products/<?php echo $engage->icon;?>"/>
                    </div>

                </li>
                <?php } else {?>
                <li>
                    
                    <div class="icon_wrapper four_line">
                       <img src="<?php echo Yii::app()->baseUrl;?>/assets/products/<?php echo $engage->icon;?>"/>
                    </div>
                    <span class="step_up"> <div class="arrow_big"></div><div class="inner_pro_text"><?php echo $engage->description2;?></div></span>
                    <span><?php echo $engage->description;?></span>
                </li>
                <?php }}?>
            </ul>
        </div>
        </div>
        <?php }?>
    
    
    <?php if($id == 19 || $id == 31 || $id == 32){?>
        <div class="how_We_engage">
					<div class="container">
						
						<ul>
							<li>
								<div class="title_eng">
									<h3>InternACE</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internace_icon.png"/>
								</div>
								<div class="title_descrip">
									Getting ready and relevant for internship
								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								<img src="<?php echo $baseUrl; ?>/images/plus_icon.png"/>
							</li>
							<li>
								<div class="title_eng">
									<h3>InternPRO</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internPro_icon.png"/>
								</div>
								<div class="title_descrip">
									Delivering your best during the internship

								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								<img src="<?php echo $baseUrl; ?>/images/plus_icon.png"/>
							</li>
							<li>
								<div class="title_eng">
									<h3>InternARISE</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internet_arice_icon.png"/>
								</div>
								<div class="title_descrip">
									Mapping your internship with final placement


								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								
							</li>
						</ul>
						<div class="discount_eng">
							<div class="combo_price">
								<label>Combo Price &#8377 6,750</label>
								<span class="discount_line">Total Price &#8377 9,000</span>
								<span>You save &#8377 2,2250 (25%)</span>
							</div>
						</div>
					</div>
                </div>
    <?php }?>
    <?php if($id == 1000){?>
                <div class="how_We_engage">
					<div class="container">
						
						<ul>
							<li>
								<div class="title_eng">
									<h3>InternACE</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internace_icon.png"/>
								</div>
								<div class="title_descrip">
									Getting ready and relevant for internship
								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								<img src="<?php echo $baseUrl; ?>/images/plus_icon.png"/>
							</li>
							<li>
								<div class="title_eng">
									<h3>InternPRO</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internPro_icon.png"/>
								</div>
								<div class="title_descrip">
									Delivering your best during the internship

								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								<img src="<?php echo $baseUrl; ?>/images/plus_icon.png"/>
							</li>
							<li>
								<div class="title_eng">
									<h3>InternARISE</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internet_arice_icon.png"/>
								</div>
								<div class="title_descrip">
									Mapping your internship with final placement


								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								
							</li>
						</ul>
						<div class="discount_eng">
							<div class="combo_price">
								<label>Combo Price &#8377 6,750</label>
								<span class="discount_line">Total Price &#8377 9,000</span>
								<span>You save &#8377 2,2250 (25%)</span>
							</div>
						</div>
					</div>
                </div>
    <?php }?>
     <?php if($id == 18){?>
                <div class="how_We_engage">
					<div class="container">
						for interview ready
						<ul>
							<li>
								<div class="title_eng">
									<h3>InternACE</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internace_icon.png"/>
								</div>
								<div class="title_descrip">
									Getting ready and relevant for internship
								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								<img src="<?php echo $baseUrl; ?>/images/plus_icon.png"/>
							</li>
							<li>
								<div class="title_eng">
									<h3>InternPRO</h3>
								</div>
								<div class="engage_img">
									<img src="<?php echo $baseUrl; ?>/images/internPro_icon.png"/>
								</div>
								<div class="title_descrip">
									Delivering your best during the internship

								</div>
								<div class="price_eng">
									<label>&#8377 4,500</label>
								</div>
								<img src="<?php echo $baseUrl; ?>/images/plus_icon.png"/>
							</li>
							
						</ul>
						<div class="discount_eng">
							<div class="combo_price">
								<label>Combo Price &#8377 6,750</label>
								<span class="discount_line">Total Price &#8377 9,000</span>
								<span>You save &#8377 2,2250 (25%)</span>
							</div>
						</div>
					</div>
				</div>
     <?php }?>
    <div class="container">
        <?php if($id != 28 && $id != 20 && $id != 18 && $id != 31 && $id != 32){?>
        <div class="key_outcomes">
            <h3>Key Outcomes </h3>
            <ul>
                 <?php foreach ($product->productKeyOutcomes as $outcomes){?>
                <li>
                    <img src="<?php echo Yii::app()->baseUrl;?>/assets/products/<?php echo $outcomes->icon;?>"/>
                    <span><?php echo $outcomes->description;?></span>
                </li>
                 <?php }?>
                
            </ul>
        </div>
        <?php }?>
        <div class="our_recomanded product_recomnd">
            <h4>Recommended Value Saver Packages </h4>
            <ul>
                <?php foreach($product->productRecommendedValueSaverPacks as $recon){?>
                <li>
                    <div class="recomended_title">
                        <label>
                           <?php echo $recon->recommendedProduct->title;?>
                            <span>
                                (Choose your best fit)
                            </span>
                            
                        </label>
                        <img src="<?php echo Yii::app()->baseUrl;?>/assets/products/<?php echo $recon->icon;?>"/>
                        <div class="add_to_Cart_div">
                                <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$recon->recommended_product_id));?>">Add to Cart</a>
                                <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$recon->recommended_product_id));?>">Buy Now</a>
                            </div>
                    </div>

                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
