<script>
    
    <?php if (isset($this->errors) && count($this->errors) > 0) { ?>
            <?php foreach($this->errors as $error){?>
            validationMethod("error","<?php echo $error;?>")
            <?php }?>
<?php } ?>
    <?php if(isset($_REQUEST['thankreg'])){?>
	 validationMethod("thanks","Thanks for signup with us, please check your email to verify.")
    <?php }?>
    <?php if(isset($_REQUEST['thankforin'])){?>
	 validationMethod("error","Please use MBAtrek registered email address.")
    <?php }?>
    <?php if(isset($_REQUEST['thankfor'])){?>
	 validationMethod("thanks","Please check your inbox for password recovery.")
    <?php }?>
    <?php if(isset($_REQUEST['underconst'])){?>
	 validationMethod("error","This page is under construction.")
    <?php }?>
    <?php if(isset($_REQUEST['thankc'])){?>
	 validationMethod("thanks","Thanks for your feedback, we will get in touch with you soon.")
    <?php }?>
    <?php if(isset($_REQUEST['thankscampus'])){?>
	 validationMethod("thanks","Thanks for showing interest in  joining revolution to up-skill your peers.\n If our team is amazed by your idea we will get back to you with next step.\n Stay tuned.")
    <?php }?>
    <?php if(isset($_REQUEST['thanmscart'])){
        $type = ""
        
        ?>
	 validationMethod("thanks","Thanks for your feedback, we will get in touch with you soon.")
    <?php }?>
//        $(document).ready(function(){
//    //Registeration Form Validation
//        $(".cart-remove").click(function(){
//                if(confirm("Are you sure you want to remove this product from your cart?")){
//                    window.location.href = <?php echo Yii::app()->createUrl("cart/removeCart",array("p"));?>+$(this).val();
//                }
//            })
//    })
</script>