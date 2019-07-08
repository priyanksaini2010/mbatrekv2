<?php
$products = Products::model()->findAll();
$urls = array('home' => 'Home');
foreach ($products as $product){
    $url = str_replace("#","",rtrim($product['title']));
    $url = str_replace(" ","-",$url);
    $url = strtolower($url);
    $urls[$url] = $product['title'];
}
?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'popup-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <label for="Popup_url" class="required">Select  Page<span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'url',$urls,array('class'=>'span5','maxlength'=>255)); ?> <br/>
    <label for="Popup_for_user" class="required">Select Target User <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'for_user',array('Logged In User'=>"Logged In User",'New User'=>"New User"),array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'header_text',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sub_heading_text',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'button_text',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'cancellation_text',array('class'=>'span5','maxlength'=>255)); ?>
    <label for="Popup_for_user" class="required">Status <span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'status',array(0=>"In-Active",1=>"Active"),array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
