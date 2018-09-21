<!--<section class="banner_area copyright_notice">
    <div class="container">
        <h2>You were born an orignal, not downloaded -don't diacopy</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Copyright Notice</a></li>
    </ul>
</div>-->
<?php $this->setPageTitle('Copyright'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"copyright_notice"));
    echo $data->data;
?>
