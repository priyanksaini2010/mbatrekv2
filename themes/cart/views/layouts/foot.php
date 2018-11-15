<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src="<?php echo $baseUrl; ?>/js/velocity.min.js"></script>
		<script src="<?php echo $baseUrl; ?>/js/velocity.ui.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/script/ace-responsive-menu.js" type="text/javascript"></script>
        <script src="<?php echo $baseUrl; ?>/script/scripts" type="text/javascript"></script> 
        <script src="<?php echo $baseUrl; ?>/script/validation.js" type="text/javascript"></script> 
		<script src="<?php echo $baseUrl; ?>/js/custome_new.js"></script>
		<script src="<?php echo $baseUrl; ?>/js/responsiveslides.min.js"></script>
		<script src="<?php echo $baseUrl; ?>/js/jquery.waypoints.min.js"></script>
                <script src="<?php echo $baseUrl;?>/js/jssocials.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
		
	/* Accordian FOR FAQ Js */
 $(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('.accordion'), false);
});  
/* Accordian FOR FAQ js */
		</script>
