<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_id')); ?>:</b>
	<?php echo CHtml::encode($data->institute_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_id')); ?>:</b>
	<?php echo CHtml::encode($data->module_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic')); ?>:</b>
	<?php echo CHtml::encode($data->topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stream')); ?>:</b>
	<?php echo CHtml::encode($data->stream); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('venue')); ?>:</b>
	<?php echo CHtml::encode($data->venue); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('agenda')); ?>:</b>
	<?php echo CHtml::encode($data->agenda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_time')); ?>:</b>
	<?php echo CHtml::encode($data->open_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('close_time')); ?>:</b>
	<?php echo CHtml::encode($data->close_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('summary')); ?>:</b>
	<?php echo CHtml::encode($data->summary); ?>
	<br />

	*/ ?>

</div>