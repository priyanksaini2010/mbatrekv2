<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iframe')); ?>:</b>
	<?php echo CHtml::encode($data->iframe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tag_line')); ?>:</b>
	<?php echo CHtml::encode($data->tag_line); ?>
	<br />


</div>