<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'industries-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array(
        'class'=>'form-horizontal',
        'enctype' => 'multipart/form-data',)
                                        
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'founder_name',array('class'=>'span5','maxlength'=>255)); ?>
        
	<?php echo $form->fileFieldRow($model,'founder_image',array('class'=>'span5','maxlength'=>255)); ?>
        <?php
            if(!$model->isNewRecord) {?>
        <img src="assets/companylogo/<?php echo $model->founder_image?>" height="50px" width="50px"/>
        <?php }?>
	<?php echo $form->textFieldRow($model,'business_focus',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'profile',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'experience',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'skills',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'business_school_prefed',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textAreaRow($model,'area_of_interest',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
        <?php echo $form->textAreaRow($model,'placement',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
        <?php echo $form->textAreaRow($model,'live_project',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
        <?php echo $form->textAreaRow($model,'internship',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'mobile_number',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'office_number',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>222)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
