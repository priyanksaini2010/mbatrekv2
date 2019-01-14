<div class="container">
    <div class="row">
        <div class="header-bottom-inner">
            <div class="social-icons">
				<ul>
                    <li><a href="https://www.youtube.com/channel/UCJg7bO36Hii_AXTDL6TLY4A" target="_blank"  class="youtube_icon"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/mbatrek-private-ltd/" class="linked_icon" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i></a></li>
                    <li><a href="https://www.facebook.com/MBAtrekIndia/" class="facebook_icon" target="_blank"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a></li>
                    <li><a href="https://twitter.com/MBAtrekIndia" class="twitter_icon" target="_blank"><i class="fa fa-twitter" aria-hidden="true" target="_blank"></i></a></li>
                    <li><a href="https://www.quora.com/profile/Abhishek-Srivastava-1486" class="quora_icon" target="_blank"><i class="fa fa-quora" aria-hidden="true" target="_blank"></i></a></li>
                    <li><a href="https://www.instagram.com/mbatrek/" class="quora_icon" target="_blank"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
                </ul>
                <!--<ul>
                    <li><a href="#" class="ytube">youtube</a></li>
                    <li><a href="#" class="in">linkedin</a></li>
                    <li><a href="#" class="fbook">facebook</a></li>
                    <li><a href="#" class="twitter">twitter</a></li>
                    <li><a href="#" class="quora">q</a></li>
                </ul>--> 
            </div>
            <div class="login-cart">
                <div class="login">
                    <?php if (isset(Yii::app()->user->id)) { ?>
                        <a class="profile_open" href="#">Logout</a>
						<div class="profile_div">
							<ul>
								<li><a href="<?php echo Yii::app()->createUrl("update-profile"); ?>">My Profile</a></li>
								<li><a href="<?php echo Yii::app()->createUrl("past-order"); ?>">Past Orders</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a></li>
							</ul>
						</div>
                    <?php } else { ?>
                        <a id="login-button" href="<?php echo Yii::app()->createUrl('site/login'); ?>">login</a>
						
                    <?php } ?>
                </div>
                <div class="cart">
                    <?php
//		    $modelIp = CartIp::model()->findAllByAttributes(array(
//			"ip" =>$_SERVER['REMOTE_ADDR'],
//			"status" => 1,
//		    ));
//                    pr($_COOKIE,false);
		    if(isset($_COOKIE['products'])){
                        $cookieCart = unserialize($_COOKIE['products']);
                        
                    }
                    if (isset(Yii::app()->user->id)) {
                    $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));?>
                    <a href="#" id="cart-link">cart<span><?php echo count($cart);?></span></a>
                    <?php }elseif(isset($_COOKIE['products'])){?>
		    <a href="#" id="cart-link">cart<span><?php echo count($cookieCart);?></span></a>
		    <?php } else {?>
                    <a href="#" id="cart-link">cart</a>
                    <?php }?>
                    <?php
                    if (isset(Yii::app()->user->id)) {
                        
                        if (!empty($cart)) {
                            ?>
                            <div <?php if(isset($_REQUEST['show_cart'])){echo "style='display:block;'";}?> class="cart-wrapper">
                                <div class="cart-heading">
                                    <div class="cart-title">Products</div>
                                    <div class="cart-price">Price (in &#8377)</div>
                                </div>
                                <?php
                                $total = 0;
                                foreach($cart as $iKey=>$cart){
                                    $total = $total +  $cart->product->price;
                                ?>
                                <div class="items-inner">
                                    <span class="item-title">
                                        <label class="container-cart"><?php echo $cart->product->title?>
                                            <input type="checkbox" checked="checked" class="cart-remove" value="<?php echo $cart->product->id;?>">
                                            <span class="checkmark" ></span>
                                        </label>
                                    </span>
                                    <span class="item-price"><?php echo money($cart->product->price);?></span>                                                
                                </div>
                                <?php }?>
                                <div class="total">
                                    <span class="total-title">Total</span>
                                    <span class="total-price"><?php echo money($total);?></span>
                                </div>
                                <div class="total">
                                    <a style="background: none;" id="view-cart" href="<?php echo Yii::app()->createUrl("cart",array());?>">View Cart</a>
                                    <a style="background: none;" id="clear-cart" href="<?php echo Yii::app()->createUrl("cart/clearcart",array());?>">Clear Cart</a>
                                </div>

                            </div>
    <?php }
} else if(isset($_COOKIE['products'])) {
    $cookieCart = unserialize($_COOKIE['products']);
    $criteria = new CDbCriteria;
    $criteria->addInCondition("id", $cookieCart);
    $products = Products::model()->findAll($criteria);
    ?>
                    <div class="cart-wrapper">
                                <div class="cart-heading">
                                    <div class="cart-title">Products</div>
                                    <div class="cart-price">Price (in &#8377)</div>
                                </div>
                                <?php
                                $total = 0;
                                foreach($products as $iKey=>$cart){
                                    $total = $total +  $cart->price;
                                ?>
                                <div class="items-inner">
                                    <span class="item-title">
                                        <label class="container-cart"><?php echo $cart->title?>
                                            <input type="checkbox" checked="checked"  class="cart-remove" value="<?php echo $cart->id;?>">
                                            <span class="checkmark"></span>
                                        </label>
                                    </span>
                                    <span class="item-price"><?php echo money($cart->price);?></span>                                                
                                </div>
                                <?php }?>
                                <div class="total">
                                    <span class="total-title">Total</span>
                                    <span class="total-price"><?php echo money($total);?></span>
                                </div>
                                <div class="total">
                                    <a style="background: none;" href="<?php echo Yii::app()->createUrl("cart",array());?>">View Cart</a>
                                    <a style="background: none;" id="clear-cart" href="<?php echo Yii::app()->createUrl("cart/clearcart",array());?>">Clear Cart</a>
                                </div>

                            </div>
<?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
