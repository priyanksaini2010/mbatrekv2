<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'event-gallery-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <?php   
                /* Retrieve data - select QuarterID, Year, Season; ordered by QuarterID DESC */
                $Qmodels = EventCategory::model()->findAll();
                $data = array();
                /* Used array to rename the season name to something more clear */
                foreach ($Qmodels as $Qmodel)
                    $data[$Qmodel->id] = $Qmodel->name;   ?>
	<?php echo $form->dropDownList($model,'event_category_id',$data, array('empty'=>'Select Category')) ;?>
	<?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>1555)); ?>
        <img src="assets/eBrouchers/<?php echo $model->image; ?>" height="50px" width="100px"/>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
