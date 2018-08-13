<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry_id')); ?>:</b>
	<?php echo CHtml::encode($data->industry_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assignment_title')); ?>:</b>
	<?php echo CHtml::encode($data->assignment_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliverable_requirement')); ?>:</b>
	<?php echo CHtml::encode($data->deliverable_requirement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desired_experience')); ?>:</b>
	<?php echo CHtml::encode($data->desired_experience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('budget')); ?>:</b>
	<?php echo CHtml::encode($data->budget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_scedule')); ?>:</b>
	<?php echo CHtml::encode($data->time_scedule); ?>
	<br />


</div>