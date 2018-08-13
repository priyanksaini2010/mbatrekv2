<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry_id')); ?>:</b>
	<?php echo CHtml::encode($data->industry_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campus')); ?>:</b>
	<?php echo CHtml::encode($data->campus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_students')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_students); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_deliverables')); ?>:</b>
	<?php echo CHtml::encode($data->project_deliverables); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stipend')); ?>:</b>
	<?php echo CHtml::encode($data->stipend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('function')); ?>:</b>
	<?php echo CHtml::encode($data->function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	*/ ?>

</div>