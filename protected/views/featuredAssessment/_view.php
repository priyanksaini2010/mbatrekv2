<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessment_id')); ?>:</b>
	<?php echo CHtml::encode($data->assessment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_1')); ?>:</b>
	<?php echo CHtml::encode($data->point_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_2')); ?>:</b>
	<?php echo CHtml::encode($data->point_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_3')); ?>:</b>
	<?php echo CHtml::encode($data->point_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_4')); ?>:</b>
	<?php echo CHtml::encode($data->point_4); ?>
	<br />


</div>