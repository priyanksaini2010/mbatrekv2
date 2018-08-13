<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry_id')); ?>:</b>
	<?php echo CHtml::encode($data->industry_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function')); ?>:</b>
	<?php echo CHtml::encode($data->function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_opening')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_opening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_of_job')); ?>:</b>
	<?php echo CHtml::encode($data->description_of_job); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('preferred_qualification')); ?>:</b>
	<?php echo CHtml::encode($data->preferred_qualification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary')); ?>:</b>
	<?php echo CHtml::encode($data->salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_location')); ?>:</b>
	<?php echo CHtml::encode($data->job_location); ?>
	<br />

	*/ ?>

</div>