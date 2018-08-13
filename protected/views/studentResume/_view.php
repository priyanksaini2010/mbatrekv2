<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educational_qualification')); ?>:</b>
	<?php echo CHtml::encode($data->educational_qualification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_undertaken')); ?>:</b>
	<?php echo CHtml::encode($data->project_undertaken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('achievement_and_key_skills')); ?>:</b>
	<?php echo CHtml::encode($data->achievement_and_key_skills); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hobbies')); ?>:</b>
	<?php echo CHtml::encode($data->hobbies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_details')); ?>:</b>
	<?php echo CHtml::encode($data->personal_details); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('header')); ?>:</b>
	<?php echo CHtml::encode($data->header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objective')); ?>:</b>
	<?php echo CHtml::encode($data->objective); ?>
	<br />

	*/ ?>

</div>