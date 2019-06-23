<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'assessments-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array("enctype" => "multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>255)); ?>
    <?php
    if(!$model->isNewRecord) {?>
        <img style='background-color: #f1aa35' src="assets/assements/<?php echo $model->image;?>" height="110px" width="100px"/>
    <?php }?>

	<?php echo $form->textFieldRow($model,'headline',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sub_heading_text',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rating',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'questions',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'degree',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'small_description',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'bullet_points',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'zoho_html_code',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'zoho_iframe_code',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'zoho_javascript_code',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'zoho_popup_html_code',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

    <br />
    <label for="Assessment_category" class="required">Category<span class="required">*</span></label>
<!--    --><?php //echo $form->textFieldRow($model,'category',array('class'=>'span5','maxlength'=>255)); ?>
    <?php echo $form->dropDownList($model,'category',array(0=>"Career",1=>"Profile"),array('class'=>'span5','maxlength'=>255)); ?>
    <br />
    <label for="Assessment_user_type" class="required">User Type <span class="required">*</span></label>
<!--    --><?php //echo $form->textFieldRow($model,'user_type',array('class'=>'span5')); ?>
    <?php echo $form->dropDownList($model,'user_type',array(0=>"Students",1=>"Young Professionals"),array('class'=>'span5','maxlength'=>255)); ?>

    <br />
    <label for="Assessment_status" class="required">Status <span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'status',array(0=>"In-Active",1=>"Active"),array('class'=>'span5','maxlength'=>255)); ?>

    <div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
