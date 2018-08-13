<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/script/ace-responsive-menu.js" type="text/javascript"></script>
        <script src="<?php echo $baseUrl; ?>/script/scripts" type="text/javascript"></script> 
        <script src="<?php echo $baseUrl; ?>/script/validation.js" type="text/javascript"></script> 
<!------ Include the above in your HEAD tag ---------->
       <script>
	   $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
	   </script>