<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coupon_id')); ?>:</b>
	<?php echo CHtml::encode($data->coupon_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_used')); ?>:</b>
	<?php echo CHtml::encode($data->email_used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_new_id')); ?>:</b>
	<?php echo CHtml::encode($data->users_new_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />


</div>