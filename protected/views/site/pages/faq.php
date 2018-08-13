<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  
<?php 
$faqs = Faq::model()->findAll();
?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">FAQ's</a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading faq_hdng">
            <h4>FAQ’s</h4>
            <h3>Frequently Asked Questions</h3>
        </div>
        <p class="blf_text">Expand the following drop-downs for answers to frequently asked questions.</p> 
        <div class="faq_Container">
			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li <?php if(!isset($_REQUEST['open'])){?>class="active"<?php }?>>
							<a href="#tab_default_1" data-toggle="tab">
							Student </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Institute </a>
						</li>
						<li <?php if(isset($_REQUEST['open'])){?>class="active"<?php }?>>
							<a href="#tab_default_3" data-toggle="tab">
							Industry </a>
						</li>
					</ul>
					<div class="tab-content">
						<div <?php if(!isset($_REQUEST['open'])){?>class="tab-pane active"<?php } else{?>class="tab-pane"<?php }?> id="tab_default_1">
								<ul id="" class="accordion">
									<?php foreach($faqs as $faq){
                                                                            if ($faq->type == 1) {
                                                                        ?>
									<li>
										<div class="link"><?php echo $faq->question?>? <span class="minus_icon"></span></div>
										<ul class="submenu">
											<p><?php echo $faq->answer;?></p>
										</ul>
									</li>
                                                                            <?php }}?>
								</ul>
						</div>
						<div class="tab-pane" id="tab_default_2">
							<ul id="" class="accordion">
									<?php foreach($faqs as $faq){
                                                                             if ($faq->type == 2) {
                                                                        ?>
									<li>
										<div class="link"><?php echo $faq->question?>? <span class="minus_icon"></span></div>
										<ul class="submenu">
											<p><?php echo $faq->answer;?></p>
										</ul>
									</li>
                                                                        <?php }}?>
								</ul>
						</div>
						<div <?php if(isset($_REQUEST['open'])){?>class="tab-pane active"<?php } else {?>class="tab-pane"<?php }?> id="tab_default_3">
							<ul id="" class="accordion">
									<?php foreach($faqs as $faq){
                                                                             if ($faq->type == 3) {
                                                                            ?>
									<li>
										<div class="link"><?php echo $faq->question?>? <span class="minus_icon"></span></div>
										<ul class="submenu">
											<p><?php echo $faq->answer;?></p>
										</ul>
									</li>
                                                                        <?php }}?>
								</ul>
						</div>
					</div>
				</div>
			</div>
		
            <div class="usefull_Faq margin_bottom_45">
                <span>Was this helpful?</span>
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo Yii::app()->createUrl("FaqAnalysis/create",array("type"=>1))?>">Yes</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl("FaqAnalysis/create",array("type"=>2))?>">No</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

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