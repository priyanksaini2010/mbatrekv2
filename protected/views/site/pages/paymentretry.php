<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  
<section class="bielf_container">
    <div class="container">
        <div class="main_heading faq_hdng">
            <h4>Payment Failure</h4>
            <h3 style="color :  red;">OOps!! Transaction Failed</h3>
        </div>
        <p class="blf_text">Your transaction for payment Rs.<?php echo $orderDetails->amount;?> has been failed. Please click <a style="color:#333;text-decoration: underline;" href="<?php echo Yii::app()->createUrl("site/payment",array("params"=>$params))?>">here</a> to retry payment.</p> 
    </div>
</section>