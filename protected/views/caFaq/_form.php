<?php 
Yii::import('ext.krichtexteditor.KRichTextEditor');
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'faq-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'question',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	<?php echo $form->dropDownList($model,'type',CHtml::listData( CaFaqType::model()->findAll(), 'id', 'name'),array('class'=>'span8')); ?>
        <?php $this->widget('KRichTextEditor', array(
                        'model' => $model,
                        'value' => $model->isNewRecord ? '' : $model->answer,
                        'attribute' => 'answer',
                        'options' => array(
                            'theme_advanced_resizing' => 'true',
                            'theme_advanced_statusbar_location' => 'bottom',
                        ),
                    )); ?>
    	<?php // echo $form->textAreaRow($model,'answer',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
