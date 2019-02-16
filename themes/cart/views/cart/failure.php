<?php $this->setPageTitle('Payment Failed');
$baseUrl = Yii::app()->request->baseUrl;
$criteria = new CDbCriteria();
$criteria->order = "id desc";
$criteria->limit = 1;
$criteria->addCondition("user_id = ".Yii::app()->user->id);
$recentOrder = CustomerOrder::model()->find($criteria);
$userData = UsersNew::model()->findByPk(Yii::app()->user->id);
?>

<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Payment Failed</a></li>
    </ul>
</div>
<div class="sucess_container failure">
    <div class="container">
        <div class="sucess_block">
			<h2>Oh no, your payment failed for Order #<?php echo $recentOrder->ordfer_hash;?></h2>
			<div class="smile_icon">
				<img src="images/sad_smilie.png"/>
			</div>
			<div class="order_div">
				<h2>If amount is deducted it would be refunded to the respective mode of payment according to the payment gateway policy.</h2>
				<h3 class="one_of">Not to worry one of our Career Advisor will reach you soon via email with a dedicated payment link for you.</h3>
				<h3>Meanwhile check out our dedicated: <br><a href="<?php echo $userData->role==1?"https://www.mbatrek.com/students":"https://www.mbatrek.com/professionals";?>">
				<?php echo $userData->role==1?"Student":"Young Professionals";?> Career Development Solutions </a><br> to accelerate your career and excel in the corporate world! </h3>
			
		<div class="any_query">
			<h3 class="no_italic">Is there something urgent? <br>
Call us at : +91 9821948334, +91 9821948335
			</h3>
		</div>
			</div>
		</div>
    </div>
</div>
