<?php 
Yii::import('ext.krichtexteditor.KRichTextEditor');
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'topic-index-content-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'content-json-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <?php $this->widget('KRichTextEditor', array(
                        'model' => $model,
                        'value' => $model->isNewRecord ? '' : $model->data,
                        'attribute' => 'data',
                        'options' => array(
                            'theme_advanced_resizing' => 'true',
                            'theme_advanced_statusbar_location' => 'bottom',
                        ),
                    )); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
