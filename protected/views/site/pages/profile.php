
<?php $this->setPageTitle('My Profile'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">My Profile</a></li>
    </ul>
</div>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"profile"));
    echo $data->data;
?>
