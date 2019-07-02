<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'seo-form',
	'enableAjaxValidation'=>false,
));
$ruleArray = array(
    'our-story' => 'site/page/view/mbatrek_story',
    'how-are-we-different' => 'site/page/view/how_we_are_different',
    'abhishek-srivastava' => 'site/page/view/abhishek',
    'alok-srivastava' => 'site/page/view/alok',
    'mbatrek-on-the-ground' => 'site/page/view/mbatrek_on_the_ground',
    'mbatrek-campus' => 'site/page/view/mbatrek_on_the_ground',
    'support' => 'site/page/view/support',
    'interview-ready-registeration' => 'cart/interview',
    'interview-ready-registration' => 'cart/interview',
    'industry-ready-registeration' => 'cart/industry',
    'industry-ready-registration' => 'cart/industry',
    'career' => 'site/page/view/career',
    'feedback' => 'site/page/view/feedback',
    'e-brouchers' => 'site/page/view/download_ebrochersform',
    'videos' => 'site/page/view/videos',
    'handbook' => 'site/page/view/handbook',
    'success/students' => "cart/story/subtype/1",
    'success/story/you-be-the-executive' => "cart/story/subtype/1",
    'success/story/campus-2-corporate' => "cart/story/subtype/2",
    'success/story/leverage-your-2-year-mba' => "cart/story/subtype/3",
    'videos' => 'site/videos/type/1',
    'videos/interview-ready' => 'site/videos/type/1',
    'videos/interngo' => 'site/videos/type/2',
    'videos/cxo-thoughts' => 'site/videos/type/3',
    'event-gallery' => 'site/page/view/event_gallery',
    'campus-ambassador' => 'site/page/view/campus_ambassador',
    'campus-abassador-register' => 'cart/campus',
    'campus-ambassador-register' => 'cart/campus',
    'remove-coupon' => 'cart/removeCoupon',
    'copyright-notice' => 'site/page/view/copyright_notice',
    'industry-ready-competition' => 'site/page/view/industry_ready_compitition',
    'interview-ready-competition' => 'site/page/view/interview_ready_compitition',
    'privacy-policy' => 'site/page/view/privacy_policy',
    'disclaimer' => 'site/page/view/declimier',
    'terms-and-conditions' => 'site/page/view/terms_conditions',
    'talk-to-our-career-advisor' => 'site/page/view/talk_to_advisory',
    'quick-links' => 'site/page/view/quick_links',
    'companies' => 'site/page/view/comp',
    'our-team' => 'site/page/view/team',
    'our-team-beta' => 'cart/team',
    'frequently-asked-questions' => 'site/page/view/faq',
    'sitemap' => 'site/page/view/quick_links',
    'articles' => 'site/articles/type/1',
    'success-story' => 'site/articles/type/2',
    'blogs' => 'site/blogs',
    'blogs/career-preparation' => 'site/blogs/type/1',
    'blogs/job-ready' => 'site/blogs/type/2',
    'blogs/cxo-thoughts' => 'site/blogs/type/3',
    'blogs/details/3' => 'site/blogdetails/id/3',
    'contact' => 'contact/create/contact',
    'login' => 'site/login',
    'students' => 'cart/student',
    'cart' => 'cart/cart',
    'applypromo' => 'cart/applypromo',
    'applygstin' => 'cart/applygstin',
    'register' => 'cart/register',
    'forgot-password' => 'site/forgot',
    'professionals' => 'cart/profesionals',
    'update-profile' => 'cart/profile',
    'change-password'=>'cart/changepassword',
    'past-order'=>'cart/pastorder',
    "choose-payment-gateway" => "cart/gateway",
    "paytm-checkout" => "cart/checkout/paymentGateWay/1",
    "payu-checkout" => "cart/checkout/paymentGateWay/2",
    "success" => "cart/postpayment/status/2",
    "failure" => "cart/postpayment/status/3",
    'institutes' => 'site/page/view/educational_institute',
    'home' => 'home'
);

$urlArray = array_keys($ruleArray);
$finalUrl = array_combine($urlArray,$urlArray)
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <label for="url" class="required">URL <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'url',$finalUrl,array('class'=>'span5','maxlength'=>500,'id'=>"url")); ?>
    <?php echo $form->textAreaRow($model,'meta_tags',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
    <div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
