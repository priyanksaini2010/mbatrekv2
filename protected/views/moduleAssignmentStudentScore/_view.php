<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_assignment_id')); ?>:</b>
	<?php echo CHtml::encode($data->module_assignment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_score')); ?>:</b>
	<?php echo CHtml::encode($data->total_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_score')); ?>:</b>
	<?php echo CHtml::encode($data->student_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('close_date')); ?>:</b>
	<?php echo CHtml::encode($data->close_date); ?>
	<br />


</div>