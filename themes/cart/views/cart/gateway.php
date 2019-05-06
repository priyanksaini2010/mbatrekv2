<?php $this->setPageTitle('Payment Method');
$baseUrl = Yii::app()->request->baseUrl;
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
    $discount = $coupon->discount_availed;
    $discountType = $coupon->coupon->discount_type;
}
?>
<div class="page-wrapper">
    <div class="payment_block">
        <div class="container">
            <h3 class="payment_heading">Select a preferred payment gateway </h3>
            <h4 class="blink-one">Have you applied a promo-code? <a href="<?php echo Yii::app()->createUrl("cart");?>">Check the card</a> before making a payment</h4> 
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="payment_select">
                        <ul>
                            <li>
                                <div class="img_payment">
                                    <img src="<?php echo $baseUrl;?>/images/paymentimages/paytm.png"/>
                                </div>
                                <div class="payment_button">
                                    <a href="<?php echo Yii::app()->createUrl("paytm-checkout");?>">Proceed to pay</a>
                                </div>
                            </li>
                            <li>
                                <div class="img_payment">
                                    <img src="<?php echo $baseUrl;?>/images/paymentimages/paytu.png"/>
                                </div>
                                <div class="payment_button">
                                    <a href="<?php echo Yii::app()->createUrl("payu-checkout");?>">Proceed to pay</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <?php
                    $total = 0;
                    foreach($cart as $itcart) {
                        $total = $total + $itcart->product->price;
                    }
                    ?>
                    <div class="order_sumery">
                        <h3>Order Summary  </h3>
						 <div class="total_payment">
                             <?php  if($discount != 0 && $discountType !=0){
                                if($discountType == 1){
                                    $total = $total - $discount;
                                }else {
                                    $total = $total - $discount;
                                }
                            ?>
                                 <label>Discount : <span>&#8377 <?php echo money($discount);?></span></label>
                                 <label>Total (<?php echo count($cart)?> Item): <span>&#8377 <?php echo money($total);$total = 0;?></span></label>
                             <?php }else {?>
                                 <label>Total (<?php echo count($cart)?> Item): <span>&#8377 <?php echo money($total);$total = 0;?></span></label>
                             <?php }?>

                        </div>
                        <ul>
                            <?php
                            $total = 0;
                            foreach($cart as $iKey=>$icart){
                                $total = $total +  $icart->product->price;
                                $url = str_replace("#","",rtrim($icart->product->title));

                                $url = str_replace(" ","-",$url);
                                $url = strtolower($url);
                            ?>
                            <li>
                                <div class="order_icon">
                                    <img src="<?php echo $baseUrl;?>/assets/products/<?php echo $icart->product->home_page_icon;?>"/>
                                    <span><?php echo $icart->product->title;?></span>
                                </div>
                                <div class="order_rs">
                                    <span>&#8377 <?php echo money($icart->product->price);?></span>
                                </div>
                            </li>
                           <?php }?>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>