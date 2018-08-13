<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_interaction_with_placemnet_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_interaction_with_placemnet_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_of_action')); ?>:</b>
	<?php echo CHtml::encode($data->plan_of_action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_responsible')); ?>:</b>
	<?php echo CHtml::encode($data->person_responsible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('due_date')); ?>:</b>
	<?php echo CHtml::encode($data->due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evidence_of_completion')); ?>:</b>
	<?php echo CHtml::encode($data->evidence_of_completion); ?>
	<br />


</div>