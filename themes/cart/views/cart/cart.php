<?php 
if(isset(Yii::app()->user->id)){
  $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
  $modelIp = CartIp::model()->findAllByAttributes(array(
			"ip" =>$_SERVER['REMOTE_ADDR'],
			"status" => 1,
		    ));
  if(empty($cart)){
      $cart = $modelIp;
  }
  $hasRecommendation = false;
  foreach ($cart as $c){
    if(count($c->product->productRecommendedValueSaverPacks) > 0){
//        pr($c->product->productRecommendedValueSaverPacks);
          $hasRecommendation = true;
          break;
    }
  }
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
                                    <ul class="list-inline">
                                    <li class="cart_icon">
                                        <img height="44" width="41" src="assets/products/<?php echo $icart->product->logo;?>"/>
                                        <span><?php echo $icart->product->title;?></span>
                                    </li>
                                    <li class="cart_label">
                                        <h4><?php echo $icart->product->description1;?></h4>
                                        <a href="<?php echo Yii::app()->createUrl("cart/remove",array("id"=>$icart->product->id));?>">Remove</a>
                                    </li>
                                    <li class="cart_money">
                                        <span>&#8377 <?php echo $icart->product->price;?></span>
                                    </li></ul>
                                    <?php }}else {?>
                                    <li class="cart_icon">
                                        <img height="44" width="41" src="images/icons/add_cart.png"/>
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
                                <label>Sub Total (<?php echo count($cart)>1?count($cart)." Items":count($cart)." Item";?>): <span> &#8377 <?php echo $total;?></span></label>
                                <a href="">Checkout</a>
                            </div>
                            <span class="promocode">Have a promocode? Enter here</span>
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
                                <img src="assets/products/<?php echo $saver->icon;?>"/>
                            </div>
                            <div class="recomended_price">
                                <label> &#8377 <?php echo $saver->recommendedProduct->price;?></label>
                                <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->recommendedProduct->id));    ?>">Add to cart</a>
                            </div>
                        </li>
                        <?php }}?>
                    </ul>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php } else if(isset($_COOKIE['products'])) { ?>
<?php echo $this->renderPartial("webroot.themes.cart.views.cart.cart_cookie");?> 
 
<?php }
?>