<div class="container">
    <div class="row">
        <div class="header-bottom-inner">
            <div class="social-icons">
				<ul>
                    <li><a href="#" class="youtube_icon"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="linked_icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="facebook_icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter_icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="quora_icon"><i class="fa fa-quora" aria-hidden="true"></i></a></li>
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
                        <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a>
                    <?php } else { ?>
                        <a href="<?php echo Yii::app()->createUrl('site/login'); ?>">login</a>
                    <?php } ?>
                </div>
                <div class="cart">
                    <?php
//		    $modelIp = CartIp::model()->findAllByAttributes(array(
//			"ip" =>$_SERVER['REMOTE_ADDR'],
//			"status" => 1,
//		    ));
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
                            <div class="cart-wrapper">
                                <div class="cart-heading">
                                    <div class="cart-title">items</div>
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
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </span>
                                    <span class="item-price"><?php echo $cart->product->price;?></span>                                                
                                </div>
                                <?php }?>
                                <div class="total">
                                    <span class="total-title">Total</span>
                                    <span class="total-price"><?php echo $total;?></span>
                                </div>
                                <div class="total"><a style="background: none;" href="<?php echo Yii::app()->createUrl("cart/cart",array());?>">View Cart</a></div>
                            </div>
    <?php }
} else if(isset($_COOKIE['products'])) {
    
    $criteria = new CDbCriteria;
    $criteria->addInCondition("id", $cookieCart);
    $products = Products::model()->findAll($criteria);
    ?>
                    <div class="cart-wrapper">
                                <div class="cart-heading">
                                    <div class="cart-title">items</div>
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
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </span>
                                    <span class="item-price"><?php echo $cart->price;?></span>                                                
                                </div>
                                <?php }?>
                                <div class="total">
                                    <span class="total-title">Total</span>
                                    <span class="total-price"><?php echo $total;?></span>
                                </div>
                                <div class="total"><a style="background: none;" href="<?php echo Yii::app()->createUrl("cart/cart",array());?>">View Cart</a></div>
                            </div>
<?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>