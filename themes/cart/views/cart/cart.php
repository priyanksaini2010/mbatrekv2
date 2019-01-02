<?php $this->setPageTitle('View Cart'); ?>
<?php 
if(isset(Yii::app()->user->id)){
  $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
  $cartID = Cart::model()->findByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
  $modelIp = CartIp::model()->findAllByAttributes(array(
			"ip" =>$_SERVER['REMOTE_ADDR'],
			"status" => 1,
		    ));
  if(empty($cart)){
      $cart = $modelIp;
  }
  $coupon = CouponUsage::model()->findByAttributes(array("cart_id"=> $cartID->id));
  if(!empty($coupon)){
      $discount = $coupon->coupon->discount;
      $discount_type = $coupon->coupon->discount_type;
  }
  $hasRecommendation = false;
  foreach ($cart as $c){
    if(count($c->product->productRecommendedValueSaverPacks) > 0){
//        pr($c->product->productRecommendedValueSaverPacks);
          $hasRecommendation = true;
          break;
    }
  }
 $baseUrl = Yii::app()->request->baseUrl;;
?>
<div class="cart_area_wrapper">
    <div class="container">
        <div class="">
            <div class="cart_wrapper">
                <h3>Your ‘Ready & Relevant’ Cart </h3>
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="cart_detail">
                            <label class="cart_price_title">Price</label>
                            <div class="cart_repeat">
                                
                                    <?php 
                                    
                                    $total = 0;
                                    if(!empty($cart)){  
                                    foreach($cart as $iKey=>$icart){
                                        $total = $total +  $icart->product->price;

  
                                    ?>
                                    <ul>
                                    <li class="cart_icon">
                                        <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$icart->product->id));?>">
                                        <img height="44" width="41" src="<?php echo $baseUrl;?>/assets/products/<?php echo $icart->product->home_page_icon;?>"/>
                                        </a>
                                        <span>
                                            <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$icart->product->id));?>">
                                                <?php echo $icart->product->title;?>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="cart_label">
                                        <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$icart->product->id));?>">
                                        <h4><?php echo $icart->product->description1;?></h4>
                                        </a>
                                        <a class="remove_cart" href="<?php echo Yii::app()->createUrl("cart/remove",array("id"=>$icart->product->id));?>">Remove</a>
                                    </li>
                                    <li class="cart_money">
                                        <span>&#8377 <?php echo money($icart->product->price);?></span>
                                    </li></ul>
                                    <?php }}else {?>
                                    <li class="cart_icon">
                                        <img height="44" width="41" src="<?php echo $baseUrl;?>/themes/cart/images/icons/add_cart.png"/>
                                        <span>Your Cart is empty</span>
                                    </li>
                                     </ul>
                                    <?php }?>
                               
                            </div>
                            <!--<a class="View_cart" href="<?php // echo Yii::app()->createUrl("cart/cart");?>">View Cart</a>-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_price">
                            <div class="price_cart">
                               
                                <label>Sub Total (<?php echo count($cart)>1?count($cart)." Items":count($cart)." Item";?>): <span> &#8377 <?php echo money($total);?></span></label>
                                <?php if(!empty($coupon)){?>
                                 <label>You Save : <span> &#8377 <?php 
                                    if($discount_type == 1){
                                         $total_dis = ceil(($total * $discount)/100);
                                    }else {
                                         $total_dis = $discount;
                                    }
                                    echo money($total_dis);
//                                    echo  "(".money(($total_dis/$total)*100)."%)";
                                    
                                 ?></span></label>
                                <label> Total : <span> &#8377 <?php echo money($total - $total_dis);?></span></label>
                                <?php }?>
                                
                                <a href="<?php echo Yii::app()->createUrl("cart/checkout");?>">Checkout</a>
								<span><input type="text" value="<?php echo $cartID->gstin;      ?>" class="input_field" id="gstin" name="GSTIN" placeholder="GSTIN ( if applicable )"></span>
                            </div> 
                            <?php if(empty($coupon)){?>
                            <span class="promocode">Have a promocode? Enter here</span>
							<?php if (!isset(Yii::app()->user->id)){?>
                                <?php
							$form = $this->beginWidget('CActiveForm', array(
								'id' => 'login-form',
								'enableClientValidation' => true,
								'enableAjaxValidation' => true,
								'clientOptions' => array(
									'validateOnSubmit' => true,
									'validateOnChange' => true
								),
								'htmlOptions'=> array(
									"class" => "form-signin mg-btm"
								),
							));
                                                        $model=new LoginForm;
							$pwdErr = $form->error($model, 'password');
							$userErr = $form->error($model, 'username');
						?>
							<div class="promo_card_apply">
								<label>Kindly Login with your college ID to apply the promocode</label>
								<div class="phAnimate"><label for="lastname">Email ID: <em>*</em></label> <input id="name" class="input_field" type="text" name="name" /></div>
								<div class="phAnimate"><label for="lastname">Password: <em>*</em></label> <input id="name" class="input_field" type="text" name="name" /></div>
								<div class="promo_btn">
									<input type="submit" value="Submit" name="submit" />
								</div>
							</div>
                                        <?php $this->endWidget();?>      
                            <?php }else{?>
                            <div class="promo_card_apply">
                                <label> </label>
                                <div class="phAnimate"><label for="lastname">Email ID: <em>*</em></label> <input class="apply-promo-value input_field" id="name" class="input_field" type="text" name="name" /></div>
                                <div class="promo_btn">
                                    <input type="submit" value="Apply" name="submit" class="apply-promo"/>
                                </div>
                            </div>
                            <?php }}?>
                            <?php
                            
                            if(!empty($coupon)){?>
                            <div class="promo_card_applied">
                                <div class="applied_now">
                                <label class="applicd_code">Applied Promo Code:</label>
                                <label for="lastname"><?php echo $coupon->email_used;?></label>
                                <br />
                                <a style="background: none;color:#777;font-size:16px;"class="remove-coupon" href="<?php echo Yii::app()->createUrl("remove-coupon");?>">
                                    <i>Remove Promo Code</i>
                                </a>
                            </div>
                            </div>    
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
                        foreach($cart as $c){
                            $array2[] = $c->product->id;
                        }
                        foreach($cart as $c){
                           
                        foreach($c->product->productRecommendedValueSaverPacks as $saver){
                        if(!in_array($saver->recommendedProduct->id,$array) && !in_array($saver->recommendedProduct->id,$array2)){
                            $array[] = $saver->recommendedProduct->id;
?>
                        <li>
                            <div class="recomended_title">
                                 <a  href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$saver->recommendedProduct->id));?>">
									<div class="discount_outer">
                                    <span class="discount_text"><?php echo $saver->recommendedProduct->title;?></span>
                                    <span class="shot_descrptn">
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
				<div class="need_help">
					<span>
                                            Need Help? Visit the <a href="<?php echo Yii::app()->createUrl("frequently-asked-questions");?>">FAQs</a> or <a href="<?php echo Yii::app()->createUrl("contact-us");?>">Contact Us</a>
					</span>
				</div>
            </div>
        </div>
    </div>
</div>
<?php } else if(isset($_COOKIE['products'])) { ?>
<?php echo $this->renderPartial("webroot.themes.cart.views.cart.cart_cookie");?> 
 
<?php }
?>