<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/themes/bootstrap/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
    <?php if(Yii::app()->user->admin == 4){?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <?php }?>
    <style>

        .navbar .nav > li {
            width: 128px;
        }
    </style>
</head>

<body class="adminsection">

<?php

if(!isset(Yii::app()->user->admin) ||  (Yii::app()->user->admin != 0 && Yii::app()->user->admin != 4 && Yii::app()->user->admin != 5)){
    die("Unauthorised Access");
}

$blogMenu = array(
        array('label'=>'Categories Management', 'url'=>array('/blogCategory/admin')),
        array('label'=>'Blog Management', 'url'=>array('/blogs/admin')),
        array('label'=>'Videos Management', 'url'=>array('/videos/admin')),
    );
$orderMenu = array(
        array('label'=>'Successful Orders', 'url'=>array('/customerOrder/admin/status/2')),
        array('label'=>'Failed Orders', 'url'=>array('/customerOrder/admin/status/3')),
        array('label'=>'Coupon Management', 'url'=>array('/couponCode/admin')),

    );
$siteData = array(
			array('label'=>'Product Management', 'url'=>array('/products/admin')),
            array('label'=>'Content Management', 'url'=>array('/contentJson/admin')),
            array('label'=>'Banners Management', 'url'=>array('/banners/admin')),
            array('label'=>'Success Story Management', 'url'=>array('/successStory/admin')),
            array('label'=>'Event Management', 'url'=>array('/eventGallery/admin')),
            array('label'=>'Team Management', 'url'=>array('/foundingTeam/admin')),
);
$csInteractionMenu = array(
    array('label'=>'FAQ Management', 'url'=>array('/faq/admin')),
    array('label'=>'Career Advisory Management', 'url'=>array('/talkToAdvisory/admin')),
    array('label'=>'Contact Management', 'url'=>array('/contact/admin')),
    array('label'=>'Import Contact Company', 'url'=>array('/campusAmbassador/importcontact')),
    array('label'=>'Import Contact Institutes', 'url'=>array('/contactAutofillCompany/importcontact')),
    array('label'=>'Manage Contact Company', 'url'=>array('/contactAutofill/admin')),
    array('label'=>'Manage Contact Institutes', 'url'=>array('/contactAutofillCompany/admin')),
);
$caManagment = array( 
    array('label'=>'Campus Ambassador Management', 'url'=>array('/campusAmbassador/admin')),
    array('label'=>'CA FAQ Management', 'url'=>array('/caFaq/admin')),
    array('label'=>'Colleges Management', 'url'=>array('/colleges/admin')),
    array('label'=>'Courses Management', 'url'=>array('/courses/admin')),
    array('label'=>'Year Of Graduation Management', 'url'=>array('/yearOfGraduation/admin')),
    array('label'=>' Import Colleges', 'url'=>array('/campusAmbassador/importcolleges')),
    array('label'=>' Import Courses', 'url'=>array('/campusAmbassador/import')),
);
$copManagment = array( 
      
            array('label'=>'Interview Management', 'url'=>array('/interviewReadyCompetition/admin')),
            array('label'=>'Industry Management', 'url'=>array('/industryReadyCompetition/admin')),
            array('label'=>'Competition Colleges Management', 'url'=>array('/collegesCompetition/admin')),
            array('label'=>' Import Competition Colleges', 'url'=>array('/campusAmbassador/importcompcolleges')),
);
$usersMenu = array(
    array('label'=>'Registered Users', 'url'=>array('/usersNew/admin',"role"=>1)),
    array('label'=>'Blocked Email', 'url'=>array('/blockedEmail/admin')),
);
if(Yii::app()->user->admin == 0) {
    $widgetItems = array(
        'class'=>'bootstrap.widgets.TbMenu',
        'items'=>array(
            array('label'=>'Home', 'url'=>array('/customerOrder/admin/status/2')),
            array('label'=>'Users', 'items'=>$usersMenu),
            array('label'=>'Orders Management', 'items'=>$orderMenu),
            array('label'=>'Web Data Management', 'items'=>$siteData),
            array('label'=>'Campus Ambassador', 'items'=>$caManagment),
            array('label'=>'Competitions', 'items'=>$copManagment),
            array('label'=>'Blog / Video Management', 'items'=>$blogMenu),
            array('label'=>'Customer Interaction', 'items'=>$csInteractionMenu),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    );
} else{
    $widgetItems = array(
        'class'=>'bootstrap.widgets.TbMenu',
        'items'=>array(
            array('label'=>'Home', 'url'=>array('/customerOrder/admin/status/2')),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    );
}

$this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array($widgetItems),
    'collapse'=>true,
    'brand' => ''
     
));
?>

<div class="container" id="page">
        <br/><br/><br/><br/><br/><br/>
    	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
                        'homeLink'=>CHtml::link('Home', array('/customerOrder/admin/status/2')),

		)); ?><!-- breadcrumbs -->
	<?php endif?>
            
            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block'=>true, // display a larger alert block?
                'fade'=>true, // use transitions?
                'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
                'alerts'=>array( // configurations per alert type
                    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'x'), // success, info, warning, error or danger
                    'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'x'), // success, info, warning, error or danger
                    'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'x'), // success, info, warning, error or danger
                ),
            )); ?>
                
                
        <?php if(isset($this->menu)):?>
		<?php $this->widget('bootstrap.widgets.TbMenu', array(
			'items'=>$this->menu,
                         'type'=>'tabs',
//                        'homeLink'=>CHtml::link('Home', array('/users/admin')),

		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<?php echo $content; ?>

	<div class="clear"></div>



</div><!-- page -->
<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.date-dropdowns.js"></script>
<style>
    .ui-sortable-handle{
        cursor: grab;
    }
</style>
<script>
    $(document).ready(function() {
             $('img').each(function () {
                    var src =  $(this).attr('src');
                    src = '/'+src;
                    $(this).attr('src', src);
                });
                $("#example10").dateDropdowns({
                    submitFieldName: 'example10',
		    minYear : 2016,
                    required: true
                });
                $("#example10_dob").dateDropdowns({
                    submitFieldName: 'example10',
		    
                    required: true
                });
                $("#example11").dateDropdowns({
                    submitFieldName: 'due_date',
		    minYear : 2016,
                    required: true
                });
                $("#example12").dateDropdowns({
                    submitFieldName: 'close_date',
		    minYear : 2016,
                    required: true
                });
                $("#example13").dateDropdowns({
                    submitFieldName: 'open_date',
		    minYear : 2016,
                    required: true
                });
    });
</script>
</body>
</html>
