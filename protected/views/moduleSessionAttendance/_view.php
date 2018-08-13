<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->module_session_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_students')); ?>:</b>
	<?php echo CHtml::encode($data->total_students); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_attended')); ?>:</b>
	<?php echo CHtml::encode($data->total_attended); ?>
	<br />


</div>