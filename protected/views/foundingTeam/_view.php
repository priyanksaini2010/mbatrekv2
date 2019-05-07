<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_1')); ?>:</b>
	<?php echo CHtml::encode($data->photo_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_2')); ?>:</b>
	<?php echo CHtml::encode($data->photo_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desig')); ?>:</b>
	<?php echo CHtml::encode($data->desig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linked_in')); ?>:</b>
	<?php echo CHtml::encode($data->linked_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('college')); ?>:</b>
	<?php echo CHtml::encode($data->college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch')); ?>:</b>
	<?php echo CHtml::encode($data->batch); ?>
	<br />

	*/ ?>

</div>