<?php 
Yii::import('ext.krichtexteditor.KRichTextEditor');
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'event-gallery-form',
	'enableAjaxValidation'=>false,
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
	<?php echo $form->hiddenField($model,'event_category_id',array('value'=>1)); ?>
        <?php echo $form->fileFieldRow($model,'image_1',array('class'=>'span5','maxlength'=>1555)); 
        if(!$model->isNewRecord){?>
        <img src="assets/eBrouchers/<?php echo $model->image_1; ?>" height="50px" width="100px"/>
        <?php }?>
        <?php echo $form->fileFieldRow($model,'image_2',array('class'=>'span5','maxlength'=>1555)); 
        if(!$model->isNewRecord){?>
        <img src="assets/eBrouchers/<?php echo $model->image_2; ?>" height="50px" width="100px"/>
        <?php }?>
        <?php echo $form->fileFieldRow($model,'image_3',array('class'=>'span5','maxlength'=>1555)); 
        if(!$model->isNewRecord){?>
        <img src="assets/eBrouchers/<?php echo $model->image_3; ?>" height="50px" width="100px"/>
        <?php }?>
	

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	
        <?php
$this->widget('KRichTextEditor', array(
    'model' => $model,
    'value' => $model->isNewRecord ? '' : $model->description,
    'attribute' => 'description',
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
                    "id"=>"submit-btn",
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btn-primary").click(function(){
            $(this).attr("type","button");
            $("#event-gallery-form").submit();
        })
    });
</script>
<?php $this->endWidget(); ?>
