<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="/v3/themes/bootstrap/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
</head>

<body class="adminsection">

<?php
$items = array(
//            array('label'=>'Category Managment', 'url'=>array('/ebrouchersCategory/admin')),
//            array('label'=>'Create Category', 'url'=>array('/ebrouchersCategory/create')),
//            array('label'=>'eBrouchers', 'url'=>array('/ebrouchers/admin')),
//            array('label'=>'Upload eBroucher', 'url'=>array('/ebrouchers/create')),
//            array('label'=>'eBroucher Downloaded', 'url'=>array('/ebroucherDownloadForm/admin')),
        );
$blogMenu = array(
        array('label'=>'Categories Managment', 'url'=>array('/blogCategory/admin')),
        array('label'=>'Blog Managment', 'url'=>array('/blogs/admin')),
);
$siteData = array(
			array('label'=>'Product Managment', 'url'=>array('/products/admin')),
			array('label'=>'Coupon Managment', 'url'=>array('/couponCode/admin')),
            array('label'=>'Content Managment', 'url'=>array('/contentJson/admin')),
     array('label'=>'Banners Managment', 'url'=>array('/banners/admin')),
//            array('label'=>'Feedback Managment', 'url'=>array('/feedback/admin')),
//            array('label'=>'Contact Managment', 'url'=>array('/contact/admin')),
            array('label'=>'FAQ Managment', 'url'=>array('/faq/admin')),
//            array('label'=>'FAQ Analysis', 'url'=>array('/faqAnalysis/admin')),
//            array('label'=>'Talk To Advisory', 'url'=>array('/talkToAdvisory/admin')),
//            array('label'=>'eBroucher Management', 'items'=>$items),
            array('label'=>'Success Story Management', 'url'=>array('/successStory/admin')),
//            array('label'=>'Event Category Management', 'url'=>array('/eventCategory/admin')),
            array('label'=>'Event Management', 'url'=>array('/eventGallery/admin')),
            array('label'=>'Colleges Management', 'url'=>array('/colleges/admin')),
            array('label'=>'Courses Management', 'url'=>array('/courses/admin')),
            array('label'=>'Year Of Graduation Management', 'url'=>array('/yearOfGraduation/admin')),
            array('label'=>'Campus Ambassador Management', 'url'=>array('/campusAmbassador/admin')),
//            array('label'=>'Success Story Management', 'url'=>array('/articles/admin',"type"=>2)),
//            array('label'=>'Success Story Management', 'url'=>array('/articles/admin',"type"=>2)),
//            array('label'=>'Industry Options 1', 'url'=>array('/industryOption/admin',"option_number"=>1)),
//            array('label'=>'Industry Options 2', 'url'=>array('/industryOption/admin',"option_number"=>2)),
//            array('label'=>'Industry Options 3', 'url'=>array('/industryOption/admin',"option_number"=>3)),
//            array('label'=>'Industry Options 4', 'url'=>array('/industryOption/admin',"option_number"=>4)),
//            array('label'=>'Industry Options 5', 'url'=>array('/industryOption/admin',"option_number"=>5)),
//	    array('label'=>'Bulk Upload - Industry', 'url'=>array('/users/uploadindustry',"option_number"=>5)),
//	    array('label'=>'B2C Image PopUp', 'url'=>array('/bbcPopup/admin')),
//	    array('label'=>'Block Email', 'url'=>array('/blockedEmail/admin')),
            
        );
$eduCationManagment = array( 
//            array('label'=>'Modules Managment', 'url'=>array('/module/admin')),
//            array('label'=>'Traits Managment', 'url'=>array('/traits/admin')),
//            array('label'=>'Case Study Functions Managment', 'url'=>array('/casestudyFunctions/admin')),
//            array('label'=>'Universities Managment', 'url'=>array('/universities/admin')),
//            array('label'=>'Institutes Managment', 'url'=>array('/institutes/admin')),
//            array('label'=>'Subjects Managment', 'url'=>array('/librarySubjects/admin')),
//            array('label'=>'Books Managment', 'url'=>array('/libraryBooks/admin')),
//            array('label'=>'Industries Managment', 'url'=>array('/industries/admin')),
//            array('label'=>'All Job Postings', 'url'=>array('/JobPosting/admin')),
//            array('label'=>'All Internship', 'url'=>array('/industryInternship/admin')),
//            array('label'=>'All Consulting Projects', 'url'=>array('/industryProjectWithFaculty/admin')),
//            array('label'=>'All Live Projects', 'url'=>array('/liveProjects/admin')),
//            array('label'=>'All Sessions At Campus', 'url'=>array('/industrySession/admin')),
//            array('label'=>'Add Session Attendance', 'url'=>array('/instituteBatchSessionStudentAttendance/createall')),
    );
 $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>'#'),
                array('label'=>'Users', 'url'=>array('/usersNew/admin',"role"=>1)),
                array('label'=>'Web Data Managment', 'items'=>$siteData),
//                array('label'=>'Educational Data Managment', 'items'=>$eduCationManagment),
//                ,
                array('label'=>'Blog Management', 'items'=>$blogMenu),
                
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
        
    ),
    'collapse'=>true,
    
    'brand' => ''
     
)); ?>

<div class="container" id="page">
        <br/><br/><br/><br/><br/><br/>
    	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
                        'homeLink'=>CHtml::link('Home', array('/usersNew/admin',"role"=>1)),

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
                    src = '/v2/'+src;
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
