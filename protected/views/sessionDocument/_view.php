<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_batch_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_batch_session_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_assigned')); ?>:</b>
	<?php echo CHtml::encode($data->task_assigned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_of_assignment')); ?>:</b>
	<?php echo CHtml::encode($data->link_of_assignment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('your_document')); ?>:</b>
	<?php echo CHtml::encode($data->your_document); ?>
	<br />


</div>