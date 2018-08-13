<script>
    
    <?php if (isset($this->errors) && count($this->errors) > 0) { ?>
            <?php foreach($this->errors as $error){?>
            validationMethod("error","<?php echo $error;?>")
            <?php }?>
<?php } ?>
    <?php if(isset($_REQUEST['thanksreg'])){?>
	 validationMethod("thanks","Thanks for signup with us, please check your email to verify.")
    <?php }?>
</script>