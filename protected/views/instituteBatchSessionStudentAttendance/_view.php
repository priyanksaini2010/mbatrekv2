<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_batch_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_batch_session_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_present')); ?>:</b>
	<?php echo CHtml::encode($data->is_present); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_date')); ?>:</b>
	<?php echo CHtml::encode($data->session_date); ?>
	<br />


</div>