<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_batch_notification_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_batch_notification_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_shown')); ?>:</b>
	<?php echo CHtml::encode($data->is_shown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mentor')); ?>:</b>
	<?php echo CHtml::encode($data->mentor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Agreement_with_session_and_mentor')); ?>:</b>
	<?php echo CHtml::encode($data->Agreement_with_session_and_mentor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Expectations_met')); ?>:</b>
	<?php echo CHtml::encode($data->Expectations_met); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Learning_from_colleagues')); ?>:</b>
	<?php echo CHtml::encode($data->Learning_from_colleagues); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Real_situation_applicability')); ?>:</b>
	<?php echo CHtml::encode($data->Real_situation_applicability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	*/ ?>

</div>