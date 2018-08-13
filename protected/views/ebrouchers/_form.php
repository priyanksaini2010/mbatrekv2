<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'ebrouchers-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <?php   
                /* Retrieve data - select QuarterID, Year, Season; ordered by QuarterID DESC */
                $Qmodels = EbrouchersCategory::model()->findAll();
                $data = array();
                /* Used array to rename the season name to something more clear */
                foreach ($Qmodels as $Qmodel)
                    $data[$Qmodel->id] = $Qmodel->name;   ?>
	<?php echo $form->dropDownList($model,'category_id',$data, array('empty'=>'Select Category')) ;?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->fileFieldRow($model,'file',array('class'=>'span5','maxlength'=>1000)); ?>
        <img src="assets/eBrouchers/<?php echo $model->file; ?>" height="50px" width="100px"/>
	<?php echo $form->fileFieldRow($model,'thumb_file',array('class'=>'span5','maxlength'=>1000)); ?>
        <img src="assets/eBrouchers/<?php echo $model->thumb_file; ?>" height="50px" width="100px"/>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
