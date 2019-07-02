<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('headline')); ?>:</b>
	<?php echo CHtml::encode($data->headline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_heading_text')); ?>:</b>
	<?php echo CHtml::encode($data->sub_heading_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questions')); ?>:</b>
	<?php echo CHtml::encode($data->questions); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('degree')); ?>:</b>
	<?php echo CHtml::encode($data->degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small_description')); ?>:</b>
	<?php echo CHtml::encode($data->small_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bullet_points')); ?>:</b>
	<?php echo CHtml::encode($data->bullet_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zoho_html_code')); ?>:</b>
	<?php echo CHtml::encode($data->zoho_html_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zoho_iframe_code')); ?>:</b>
	<?php echo CHtml::encode($data->zoho_iframe_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zoho_javascript_code')); ?>:</b>
	<?php echo CHtml::encode($data->zoho_javascript_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zoho_popup_html_code')); ?>:</b>
	<?php echo CHtml::encode($data->zoho_popup_html_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	*/ ?>

</div>