<script>
    
    <?php if (isset($this->errors) && count($this->errors) > 0) { ?>
            <?php foreach($this->errors as $error){?>
            validationMethod("error","<?php echo $error;?>")
            <?php }?>
<?php } ?>
    <?php if(isset($_REQUEST['thanksreg'])){?>
	 validationMethod("thanks","Thanks for signup with us, please check your email to verify.")
    <?php }?>
    <?php if(isset($_REQUEST['thankforin'])){?>
	 validationMethod("error","Please use MBAtrek registered email address.")
    <?php }?>
    <?php if(isset($_REQUEST['thankfor'])){?>
	 validationMethod("thanks","Please check your inbox for password for recovery.")
    <?php }?>
    <?php if(isset($_REQUEST['underconst'])){?>
	 validationMethod("error","This page is under construction.")
    <?php }?>
    <?php if(isset($_REQUEST['thankc'])){?>
	 validationMethod("thanks","Thanks for your feedback, we will get in touch with you soon.")
    <?php }?>
</script>