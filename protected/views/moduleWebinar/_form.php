<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-webinar-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array("enctype"=>"multipart/form-data")
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <label for="ModuleWebinar_module_id" class="required">Module <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'module_id',  CHtml::listData(Module::model()->findAll(), "id", "name"),array('empty'=>'Select Module')); ?>

	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>

	<?php echo $form->hiddenField($model,'institute_course_id',array('value'=>$int->institute_course_id)); ?>

	<?php echo $form->hiddenField($model,'type',array('value'=>$_GET["type"])); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->fileFieldRow($model,'file',array('class'=>'span5','maxlength'=>255)); ?>
        <label for="ModuleWebinar_date_time" class="required">Date <span class="required">*</span></label>
        <div id="example10"></div>
        <label for="ModuleWebinar_date_time" class="required">Time <span class="required">*</span></label>
        <select name="hour">
            <option value="">Hours</option>
            <?php for($i=0;$i<24;$i++){?>
                <?php if ($i < 10) {?>
                <option><?php echo "0".$i;?></option>
                <?php } else {?>
                <option><?php echo $i;?></option>
                <?php }?>
            <?php }?>
        </select>
        <select name="minute">
            <option value="">Minute</option>
            <?php for($i=0;$i<60;$i++){?>
                <?php if ($i < 10) {?>
                <option><?php echo "0".$i;?></option>
                <?php } else {?>
                <option><?php echo $i;?></option>
                <?php }?>
            <?php }?>
        </select>
        <?php echo $form->textFieldRow($model,'speaker',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'about_speaker',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
        
        <?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
