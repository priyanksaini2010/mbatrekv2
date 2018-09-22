<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<!DOCTYPE html>
<html lang="eng">
<head>
 <?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<title><?php echo Yii::app()->name . " ";
echo isset($this->pageTitle) ? ": " . $this->pageTitle : "";
?></title>      

 <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.head");?>
<link rel="icon" href="<?php echo $baseUrl;?>/images/favicon.ico" type="image/x-icon">
</head>
    <body>
        <div class="page-wrapper">
	 
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.header");?>

<div class="header-bottom">
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.social");?>                        
                </div> 
            <main>
                <?php echo $content;?>
            </main>
            <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.footer");?>
        </div>
        <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.foot");?>
         <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.validations");?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script href="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo $baseUrl; ?>/js/custome_new.js"></script>
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
    </body>
</html> 
