<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_batch_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_batch_session_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_Id')); ?>:</b>
	<?php echo CHtml::encode($data->student_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_performance')); ?>:</b>
	<?php echo CHtml::encode($data->current_performance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('past_performance')); ?>:</b>
	<?php echo CHtml::encode($data->past_performance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response')); ?>:</b>
	<?php echo CHtml::encode($data->response); ?>
	<br />


</div>