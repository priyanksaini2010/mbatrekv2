<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Our Belief</a></li>
    </ul>
</div>
<?php $this->setPageTitle('Our Belief');?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"our_bielf"));
    echo $data->data;
?>