<?php
Yii::import('ext.krichtexteditor.KRichTextEditor');
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'founding-team-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array("enctype" => "multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->fileFieldRow($model,'photo_1',array('class'=>'span5','maxlength'=>255)); ?>
        <?php if (!$model->isNewRecord && $model->photo_1 != null) { ?>
            <img src="assets/team/<?php echo $model->photo_1 ?>" height="50px" width="50px"/>
<!--            <a href="--><?php //echo Yii::app()->createUrl("foundingTeam/deleteimage",array("id"=>$model->id,"image"=>1));?><!--">X</a>-->
        <?php } ?>
	<?php echo $form->fileFieldRow($model,'photo_2',array('class'=>'span5','maxlength'=>255)); ?>
        <?php if (!$model->isNewRecord && $model->photo_2 != null) { ?>
            <img src="assets/team/<?php echo $model->photo_2 ?>" height="50px" width="50px"/>
<!--            <a href="--><?php //echo Yii::app()->createUrl("foundingTeam/deleteimage",array("id"=>$model->id,"image"=>1));?><!--">X</a>-->
        <?php } ?>
	<?php echo $form->textFieldRow($model,'desig',array('class'=>'span5','maxlength'=>255)); ?>



	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'linked_in',array('class'=>'span5','maxlength'=>255)); ?>

<!--	--><?php //echo $form->textFieldRow($model,'type',array('class'=>'span5')); ?>
    <label for="Products_type" class="required">Member's Existence in UI Section <span class="required">*</span></label>
    <?php
    $ar = array(1=>"Our Founding Team",2=>"Our Core Team",3=>"Our Interns");
    echo $form->dropDownList($model, 'type', $ar, array('class' => 'span3','empty'=>'Select an option')); ?>
    <br />

	<?php echo $form->textFieldRow($model,'college',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'batch',array('class'=>'span5')); ?>
<?php //echo $form->textAreaRow($model,'about',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
<label for="Products_sample_3">About Team Member</label>
<?php
$this->widget('KRichTextEditor', array(
    'model' => $model,
    'value' => $model->isNewRecord ? '' : $model->about,
    'attribute' => 'about',
    'options' => array(
        'theme_advanced_resizing' => 'true',
        'theme_advanced_statusbar_location' => 'bottom',
    ),
));
?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
