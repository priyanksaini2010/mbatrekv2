<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'coupon-code-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <label for="CouponCode_discount_type" class="required">Discount Type<span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'discount_type',array(1=>"Percentage",2=>"Flat"),array('class'=>'span5')); ?>
    <br/>
    <label for="CouponCode_coupon_type" class="required">Coupon Type<span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'coupon_type',array(1=>"Domain Based",2=>"Code Based"),array('class'=>'span5')); ?>
        
	<?php echo $form->textFieldRow($model,'domain',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5','maxlength'=>255)); 
	 echo $form->textFieldRow($model,'min_value',array('class'=>'span5','maxlength'=>255)); 
        ?>
        <br />
        <?php echo $form->dropDownList($model,'is_active',array(1=>"Activate",2=>"Deactivate"),array('class'=>'span5')); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
