<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_number')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_id')); ?>:</b>
	<?php echo CHtml::encode($data->email_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mba_batch')); ?>:</b>
	<?php echo CHtml::encode($data->mba_batch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('college')); ?>:</b>
	<?php echo CHtml::encode($data->college); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_college')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_1')); ?>:</b>
	<?php echo CHtml::encode($data->question_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_2')); ?>:</b>
	<?php echo CHtml::encode($data->question_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_3')); ?>:</b>
	<?php echo CHtml::encode($data->question_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registeration_date')); ?>:</b>
	<?php echo CHtml::encode($data->registeration_date); ?>
	<br />

	*/ ?>

</div>