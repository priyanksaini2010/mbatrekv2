<!--<section class="banner_area declimier">
    <div class="container">
        <h2>Our actions are in sync with the intention. If you don’t trust us don’t use our site. </h2>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Disclaimer</a></li>
    </ul>
</div>-->
<?php $this->setPageTitle('Disclaimer'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"declimier"));
    echo $data->data;
?>
