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
                                        <img height="44" width="41" src="<?php echo $baseUrl;?>/assets/products/<?php echo $icart->product->logo;?>"/>
                                        <span><?php echo $icart->product->title;?></span>
                                    </li>
                                    <li class="cart_label">
                                        <h4><?php echo $icart->product->description1;?></h4>
                                        <a href="<?php echo Yii::app()->createUrl("cart/remove",array("id"=>$icart->product->id));?>">Remove</a>
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
                            <a class="View_cart" href="<?php echo Yii::app()->createUrl("cart/cart");?>">View Cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_price">
                            <div class="price_cart">
                                <label>Sub Total (<?php echo count($cart)>1?count($cart)." Items":count($cart)." Item";?>): <span> &#8377 <?php echo money($total);?></span></label>
                                <?php if(!empty($coupon)){?>
                                 <label>Discount : <span> &#8377 <?php 
                                    if($discount_type == 1){
                                        echo $total_dis = money(ceil(($total * $discount)/100));
                                    }else {
                                        echo $total_dis = money($discount);
                                    }
                                 
                                 ?></span></label>
                                <label> Total : <span> &#8377 <?php echo money($total - $total_dis);?></span></label>
                                <?php }?>
                                <a href="<?php echo Yii::app()->createUrl("cart/checkout");?>">Checkout</a>
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
                                <label>Kindly enter your College / Company ID to apply the promocode</label>
                                <div class="phAnimate"><label for="lastname">Email ID: <em>*</em></label> <input class="apply-promo-value" id="name" class="input_field" type="text" name="name" /></div>
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
                                <label for="lastname"><?php echo $coupon->email_used;?></div>
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
                        foreach($cart as $c){
                        foreach($c->product->productRecommendedValueSaverPacks as $saver){
                        
?>
                        <li>
                            <div class="recomended_title">
                                <label>
                                    <?php echo $saver->title?>
                                    <span>
                                        (<?php echo $saver->short_description?>)
                                    </span>
                                </label>
                                <img src="<?php echo $baseUrl;?>/assets/products/<?php echo $saver->icon;?>"/>
                            </div>
                            <div class="recomended_price">
                                <label> &#8377 <?php echo money($saver->recommendedProduct->price);?></label>
                                <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->recommendedProduct->id));    ?>">Add to cart</a>
                            </div>
                        </li>
                        <?php }}?>
                    </ul>
                </div>
				
                <?php }?>
				<div class="need_help">
					<span>
						Need Help? Visit the <a href="javascript:void(0);">Help Center</a> or <a href="javascript:void(0)">Contact Us</a>
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