<?php 
$cookieCart = unserialize($_COOKIE['products']);
$criteria = new CDbCriteria;
$criteria->addInCondition("id", $cookieCart);
$products = Products::model()->findAll($criteria);
$hasRecommendation = false;
foreach ($products as $c){
    if(count($c->productRecommendedValueSaverPacks) > 0){
//        pr($c->product->productRecommendedValueSaverPacks);
          $hasRecommendation = true;
          break;
    }
  }
   $baseUrl = Yii::app()->request->baseUrl;
           
?>
 <div class="cart_area_wrapper">
    <div class="container">
        <div class="row">
            <div class="cart_wrapper">
                <h3>Your ‘Ready & Relevant’ Cart </h3>
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="cart_detail">
                            <label class="cart_price_title">Price</label>
                            <div class="cart_repeat">
                                
                                    <?php 
                                    
                                    $total = 0;
                                    if(!empty($products)){
                                    foreach($products as $iKey=>$icart){
                                        $total = $total +  $icart->price;
                                    ?>
<ul class="list-inline">
                                    <li class="cart_icon">
                                        <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$icart->id));?>">
                                        <img height="44" width="41" src="<?php echo $baseUrl;?>/assets/products/<?php echo $icart->home_page_icon;?>"/>
                                        <span><?php echo $icart->title;?></span>
                                        </a>
                                    </li>
                                    <li class="cart_label">
                                        <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$icart->id));?>">
                                        <h4><?php echo $icart->description1;?></h4>
                                        </a>
                                        <a  class="remove_cart" href="<?php echo Yii::app()->createUrl("cart/remove",array("id"=>$icart->id));?>">Remove</a>
                                    </li>
                                    <li class="cart_money">
                                        <span>&#8377 <?php echo money($icart->price);?></span>
                                    </li></ul>
                                    <?php }}else {?>
                                    <li class="cart_icon">
                                        <img height="44" width="41" src="<?php echo $baseUrl;?>/themes/cart/images/icons/add_cart.png"/>
                                        <span>Your Cart is empty</span>
                                    </li></ul>

                                    <?php }?>
                                
                            </div>
                            <!--<a class="View_cart" href="<?php // echo Yii::app()->createUrl("cart/cart");?>">View Cart</a>-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_price">
                            <div class="price_cart">
                                
                                <label>Sub Total (<?php echo count($products)>1?count($products)." Items":count($products)." Item";?>): <span> &#8377 <?php echo money($total);?></span></label>
                               
                                <a href="<?php echo Yii::app()->createUrl("cart/checkout");?>">Checkout</a>
                                <span><input type="text" class="input_field" name="GSTIN" placeholder="GSTIN ( if applicable )"></span>
                            </div>
                            <span class="promocode">Have a promocode? Enter here</span>
							<?php if (!isset(Yii::app()->user->id)){?>
                                <?php
							$form = $this->beginWidget('CActiveForm', array(
								'id' => 'login-form-cart',
								'enableClientValidation' => true,
								'enableAjaxValidation' => true,
								'clientOptions' => array(
									'validateOnSubmit' => true,
									'validateOnChange' => true
								),
								'htmlOptions'=> array(
									"class" => "form-signin mg-btm",
                                                                        
								),
                                                            "action" =>     Yii::app()->createUrl("site/login")
							));
                                                        $model=new LoginForm;
							$pwdErr = $form->error($model, 'password');
							$userErr = $form->error($model, 'username');
						?>
							<div class="promo_card_apply">
								<label>Kindly Login with your college ID to apply the promocode</label>
								<div class="phAnimate"><label for="lastname">Email ID: <em>*</em></label> 
                                                                    <input class="input_field" placeholder="" name="LoginForm[username]" id="LoginForm_username" type="text"></div>
								<div class="phAnimate"><label for="lastname">Password: <em>*</em></label> 
                                                                    <input class="input_field" placeholder="" name="LoginForm[password]" id="LoginForm_password" type="password"></div>
								<div class="promo_btn">
									<input type="button" class="apply-promo" id="login-form-submit" value="Submit" name="submit" />
								</div>
							</div>
                                        <?php $this->endWidget();?>       
                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php if($hasRecommendation){?>
                <div class="our_recomanded">
                    <h4>Our Recommendations</h4>
                    <ul>
                        <?php 
//                        $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                        $array = array();
                        $array2 = array();
                        foreach($products as $c){
                            $array2[] = $c->id;
                        }
                        foreach($products as $c){
                            
                        foreach($c->productRecommendedValueSaverPacks as $saver){
                        if(!in_array($saver->recommendedProduct->id,$array) && !in_array($saver->recommendedProduct->id,$array2)){
                            $array[] = $saver->recommendedProduct->id;
?>
                        <li>
                            <div class="recomended_title">
								<div class="">
									<a style="cursor: pointer !important;" href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$saver->recommendedProduct->id));?>">
								</div>
                                <div class="discount_outer">
									<span class="discount_text"><?php echo $saver->recommendedProduct->title;?></span>
									 <span>
                                        (<?php echo $saver->short_description;?>)
                                    </span>
								</div>
								<img src="<?php echo $baseUrl;?>/assets/products/<?php echo $saver->icon;?>"/>
                                 </a>
                                
                            </div>
                            <div class="recomended_price">
                                <label> &#8377 <?php echo money($saver->recommendedProduct->price);?></label>
                                <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->recommendedProduct->id));    ?>">Add to cart</a>
                            </div>
                        </li>
                        <?php }}}?>
                    </ul>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>  