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

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stipend')); ?>:</b>
	<?php echo CHtml::encode($data->stipend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_openings')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_openings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_of_project')); ?>:</b>
	<?php echo CHtml::encode($data->description_of_project); ?>
	<br />

	*/ ?>

</div>