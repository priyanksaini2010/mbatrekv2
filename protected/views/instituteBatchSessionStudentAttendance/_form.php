<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-session-student-attendance-form',
	'enableAjaxValidation'=>false,
));

$studs= CHtml::listData(Students::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])), "id", "name");
$filter2 = CHtml::listData(InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])), "id", "section_name");
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<select id="section" name="section_id">
	    <option value="" >Select Option</option>
	    <?php foreach ($filter2 as $k=>$v) {?>
	    <option value="<?php echo $k?>"><?php echo $v;?></option>
	    <?php }?>
	</select>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_batch_session_id',array('value'=>$_GET['institute_batch_session_id'])); ?>
        
        <?php 
//            foreach ($studs as $k=>$stud){?>
        <!--<p><input name="stud[]" type="checkbox" value="<?php  echo $k;?>"/> <?php //  echo  $stud;?></p>-->        
        <?php // }?>
        
	<p id="students"></p>
	<?php // echo $form->textFieldRow($model,'student_id',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'is_present',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'session_date',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
	<script>
	$("#section").change(function(){
	    if ($(this).val() == "") {
		$("#students").html("")
	    } else {
		$.ajax({
		    type: 'post',
		    url : "<?php echo Yii::app()->createUrl("instituteBatchSessionStudentAttendance/students");?>",
		    data : {
			section_id : $(this).val(),
			
		    },
		    success: function(data) {
			$("#students").html(data)

		    }
		});
	    }
	       
	});
	</script>
