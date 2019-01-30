<?php $this->setPageTitle('Payment Successfull');
$baseUrl = Yii::app()->request->baseUrl;
$criteria = new CDbCriteria();
$criteria->order = "id desc";
$criteria->limit = 1;
$criteria->addCondition("user_id = ".Yii::app()->user->id);
$recentOrder = CustomerOrder::model()->find($criteria);
//pr($recentOrder->carts[0]->product->title);
$hasRecommendation = false;
foreach ($recentOrder->carts as $c){
    if(count($c->product->productRecommendedValueSaverPacks) > 0){
//        pr($c->product->productRecommendedValueSaverPacks);
        $hasRecommendation = true;
        break;
    }
}
?>

<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Payment Successfull</a></li>
    </ul>
</div>
<div class="sucess_container">
    <div class="container">
        <div class="sucess_block">
			<h2>Order Successful!</h2>
			<div class="smile_icon">
				<img src="<?php echo $baseUrl;?>/images/smile_icon.png"/>
			</div>
			<div class="order_div">
				<h2>Your Order #<?php echo $recentOrder->ordfer_hash;?> worth <span class="rs_order">&#8377; <?php echo money($recentOrder->order_amount);?> </span> has been successfully placed.</h2>
				<h3 class="one_of">One of our <span>Career Advisors</span> will contact you within one business day to take you on your career development journey using our below service(s);</h3>
				<div class="our_more_product">
                    <?php
                    $total = count($recentOrder->carts);
                    foreach($recentOrder->carts as $key=>$cart){
                        $url = str_replace("#","",rtrim($cart->product->title));
                        $url = str_replace(" ","-",$url);
                        $url = strtolower($url);
                    ?>
					<a href="<?php echo Yii::app()->createUrl($url);?>"><?php echo $cart->product->title;?></a>

                 <?php
                    if($key < ($total - 1)){
                        echo ",";
                    }
                }?>
				</div>
				<h3>You will receive a GST Invoice within 3 - 5 business days on your registered Email ID</h3>
				
				<div class="our_recomanded product_recomnd">
                         <h4>Recommended Value Saver Packages </h4>
            <?php if($hasRecommendation){?>
            <ul>
                <?php
                    //                        $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));
                    $array = array();
                    $array2 = array();
                    foreach($recentOrder->carts as $c){
                        $array2[] = $c->product->id;
                    }
                    foreach($recentOrder->carts as $c){

                    foreach($c->product->productRecommendedValueSaverPacks as $saver){
                    if(!in_array($saver->recommendedProduct->id,$array) && !in_array($saver->recommendedProduct->id,$array2)){
                    $array[] = $saver->recommendedProduct->id;
                ?>
                <li>
                    <div class="recomended_title">
						<div class="recomended_bound">
                            <a  href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$saver->recommendedProduct->id));?>">
                                <span><?php echo $saver->recommendedProduct->title;?></span>
								<span class="shot_descrptn">
									(<?php echo $saver->short_description;?>)
								</span>
                            </a>
							<div class="rec_wrap">
                                <img src="<?php echo $baseUrl;?>/assets/products/<?php echo $saver->icon;?>"/>
							</div>
                            <br>
                        </div>
                        <div class="add_to_Cart_div">
                            <label class="new_price">Price &#8377 <?php echo money($saver->recommendedProduct->price);?></label>
                                <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->recommendedProduct->id));    ?>">Add to Cart</a>
                                <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$saver->recommendedProduct->id));    ?>">Buy Now</a>
                        </div>
                    </div>
                </li>
                <?php }}}?>
              
            </ul>
            <?php }?>
        </div>
		<div class="any_query">
			<h3>Do you have any query?</br>
			Call us at : +91 9821948334, +91 9821948335
			</h3>
		</div>
			</div>
		</div>
    </div>
</div>
