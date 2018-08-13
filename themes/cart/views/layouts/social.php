<div class="container">
    <div class="row">
        <div class="header-bottom-inner">
            <div class="social-icons">
                <ul>
                    <li><a href="#" class="ytube">youtube</a></li>
                    <li><a href="#" class="in">linkedin</a></li>
                    <li><a href="#" class="fbook">facebook</a></li>
                    <li><a href="#" class="twitter">twitter</a></li>
                    <li><a href="#" class="quora">q</a></li>
                </ul>
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
                    if (isset(Yii::app()->user->id)) {
                    $cart = Cart::model()->findAllByAttributes(array("user_id" => Yii::app()->user->id, "status" => 1));?>
                    <a href="#" id="cart-link">cart(<?php echo count($cart);?>)</a>
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
                                    <div class="cart-price">Price (in $)</div>
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
} ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>