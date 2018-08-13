<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('helpful')); ?>:</b>
	<?php echo CHtml::encode($data->helpful); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('not_helpful')); ?>:</b>
	<?php echo CHtml::encode($data->not_helpful); ?>
	<br />


</div>