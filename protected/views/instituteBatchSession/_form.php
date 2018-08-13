<?php 
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$batch = CHtml::listData(InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])),"id","section_name");
if($int->instituteCourse->institute->id == 0) {
    if(empty($batch)) {
	$batch = CHtml::listData(InstituteBatchSection::model()->findAll(),"id","section_name");
	
	foreach ($batch as $k=>$b) {
	    $bi = $k;
	};
    } else {
	foreach ($batch as $k=>$b) {
	    $bi = $k;
	};
    }
    
}
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-session-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        )
)); 
$times = create_time_range('00:00', '24:00', '1 mins');
$types = array(
	     1=>"Free",
	     2=>"Walk",
	     3=>"Jog",
	     4=>"Run",
	     
	     
    );
//pr($times);
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>

	<label for="ModuleWebinar_module_id" class="required">Module <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'module_id',  CHtml::listData(Module::model()->findAll(), "id", "name"),array('empty'=>'Select Module')); ?>
	<?php 
	    if($int->instituteCourse->institute->id != 0) {?>
	<label for="ModuleWebinar_module_id" class="required">Section <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'institute_batch_section_id',  $batch,array('empty'=>'Select Section')); ?>
	<?php }else{?>
	<?php echo $form->hiddenField($model,'institute_batch_section_id',array('value'=>$bi)); ?>
	<?php }?>


	<?php echo $form->textFieldRow($model,'session_name',array('class'=>'span5','maxlength'=>255)); ?>
	<?php 
	    if($int->instituteCourse->institute->id != 0) {?>
	<?php echo $form->textAreaRow($model,'session_details',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	<?php }?>
	<?php echo $form->fileFieldRow($model,'session_plan_file',array('class'=>'span5','maxlength'=>255)); ?>
	<?php 
	    if($int->instituteCourse->institute->id == 0) {
		echo $form->textAreaRow($model,'video',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); 
		echo $form->textFieldRow($model,'estimated_duration',array('class'=>'span5','maxlength'=>255)); 
		echo "<br />";
		echo "Please enter Course Outline with pipe(|) as seperator eg course 1|course 2";
		echo $form->textAreaRow($model,'course_outline',array('class'=>'span5','maxlength'=>255));
	    
	?>
	<label for="ModuleWebinar_module_id" class="required">Registration Plan <span class="required">*</span></label>  
        <?php
	    echo $form->dropDownList($model,'type',$types,array('class'=>'span5','maxlength'=>255)); 
	    }
	?>
	<?php 
	    if($int->instituteCourse->institute->id != 0) {?>
	<label for="ModuleWebinar_date_time" class="required">Date <span class="required">*</span></label>
        <div id="example111"></div>
	<label for="ModuleWebinar_time" class="required">Time <span class="required">*</span></label>
        <?php echo $form->dropDownList($model,'session_time',$times,array('class'=>'span5','maxlength'=>255)); ?>    
	    <?php }?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
        <?php if ($model->isNewRecord){?>
<script>
    $(document).ready(function() {
                $("#example111").dateDropdowns({
                    submitFieldName: 'example111',
                    required: true
                });})
                </script>
        <?php }else {?>
                <script>
    $(document).ready(function() {
                $("#example111").dateDropdowns({
                    submitFieldName: 'example111',
                    required: true,
                    defaultDate : '<?php echo $model->session_date;?>'
                });})
                </script>
        <?php } ?>

