<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module_id')); ?>:</b>
	<?php echo CHtml::encode($data->module_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_score')); ?>:</b>
	<?php echo CHtml::encode($data->student_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('college_score')); ?>:</b>
	<?php echo CHtml::encode($data->college_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('university_score')); ?>:</b>
	<?php echo CHtml::encode($data->university_score); ?>
	<br />


</div>