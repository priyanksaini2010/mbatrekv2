
<?php $this->setPageTitle('Frequently Asked Questions'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Frequently Asked Questions</a></li>
    </ul>
</div>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"faq"));
    echo $data->data;
?>
