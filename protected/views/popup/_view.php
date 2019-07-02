<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('for_user')); ?>:</b>
	<?php echo CHtml::encode($data->for_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('header_text')); ?>:</b>
	<?php echo CHtml::encode($data->header_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_heading_text')); ?>:</b>
	<?php echo CHtml::encode($data->sub_heading_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('button_text')); ?>:</b>
	<?php echo CHtml::encode($data->button_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancellation_text')); ?>:</b>
	<?php echo CHtml::encode($data->cancellation_text); ?>
	<br />


</div>