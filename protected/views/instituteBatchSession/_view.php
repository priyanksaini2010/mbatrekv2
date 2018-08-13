<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_batch_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_batch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_id')); ?>:</b>
	<?php echo CHtml::encode($data->module_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_name')); ?>:</b>
	<?php echo CHtml::encode($data->session_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_details')); ?>:</b>
	<?php echo CHtml::encode($data->session_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_date')); ?>:</b>
	<?php echo CHtml::encode($data->session_date); ?>
	<br />


</div>