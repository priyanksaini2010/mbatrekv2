<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_batch_student_session_remark_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_batch_student_session_remark_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response_given_by')); ?>:</b>
	<?php echo CHtml::encode($data->response_given_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('response')); ?>:</b>
	<?php echo CHtml::encode($data->response); ?>
	<br />


</div>