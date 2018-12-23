<!--<section class="banner_area term_conditions">
    <div class="container">
        <h2>If your motives are good, our terms and conditions are easy to comply</h2>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Terms and Condition</a></li>
    </ul>
</div>-->
<?php $this->setPageTitle('Term And Conditions'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->createUrl(''); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Terms and Condition</a></li>
    </ul>
</div>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"terms_conditions"));
    echo $data->data;
?>
