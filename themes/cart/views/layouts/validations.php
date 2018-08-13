<script>
    
    <?php if (isset($this->errors) && count($this->errors) > 0) { ?>
            <?php foreach($this->errors as $error){?>
            validationMethod("error","<?php echo $error;?>")
            <?php }?>
<?php } ?>
</script>