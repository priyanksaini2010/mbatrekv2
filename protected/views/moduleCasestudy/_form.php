<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-casestudy-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <label for="ModuleCasestudy_module_id" class="required">Module <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'module_id',CHtml::listData(Module::model()->findAll(), 'id', 'name'), array('empty'=>'Select Module')); ?>

	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>
        <label for="ModuleCasestudy_function_id" class="required">Function <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'function_id',CHtml::listData(CasestudyFunctions::model()->findAll(), 'id', 'name'), array('empty'=>'Select Function')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->fileFieldRow($model,'background_image',array('class'=>'span5','maxlength'=>255)); ?>
        <?php if (isset($model->background_image) && $model->background_image !="") {?>
        <img src="assets/casestudy/<?php echo $model->background_image; ?>" height="50px" width="100px"/>
        <?php }?>
	<?php echo $form->fileFieldRow($model,'file',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
