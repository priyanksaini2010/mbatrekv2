<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'banners-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>1555)); ?>
        <span>  Image should be 1900 X 500 px</span>
        <?php if($model->isNewRecord)?>
        <img src="<?php echo Yii::app()->baseUrl;?>/assets/Banners/<?php echo $model->image; ?>" height="500px" width="1000px"/>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
