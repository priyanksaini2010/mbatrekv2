    <?php
$this->breadcrumbs=array(
	'Add Attendance'=>array('instituteBatchSessionStudentAttendance/createall'),
);
$this->menu=array(
	array('label'=>'Add Attendance','url'=>array('instituteBatchSessionStudentAttendance/createall')),
	
);
?>

<h1>Add Session Attendance</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-session-student-attendance-form',
	'enableAjaxValidation'=>false,
));


$filter2 = CHtml::listData(Institutes::model()->findAll(), "id", "name");
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<select id="institute" name="institute_id">
	    <option value="" >Select Institute</option>
	    <?php foreach ($filter2 as $k=>$v) {?>
	    <option value="<?php echo $k?>"><?php echo $v;?></option>
	    <?php }?>
	</select>
	<br />
	<select id="institute_batch" name="institute_batch_id">
	    <option value="" >Select Batch</option>
	</select><br />
	<select id="section" name="section_id">
	    <option value="" >Select Section</option>
	</select><br />
	<select id="session" name="institute_batch_session_id">
	    <option value="" >Select Session</option>
	</select><br />

	<?php echo $form->errorSummary($model); ?>

	<?php // echo $form->hiddenField($model,'institute_batch_session_id',array('value'=>$_GET['institute_batch_session_id'])); ?>
        
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
	$("#institute").change(function(){
	    $("#institute_batch").html("");
		$("#students").html("");
		$("#session").html("");
		$("#section").html("");
	    if ($(this).val() == "") {
		$("#institute_batch").html("");
		$("#students").html("");
		$("#session").html("");
		$("#section").html("");
	    } else {
		$.ajax({
		    type: 'post',
		    url : "<?php echo Yii::app()->createUrl("instituteBatchSessionStudentAttendance/institutebatch");?>",
		    data : {
			institute : $(this).val(),
			
		    },
		    success: function(data) {
			$("#institute_batch").html(data)

		    }
		});
	    }
	       
	});
	$("#institute_batch").change(function(){
	    if ($(this).val() == "") {
		$("#institute_batch").html("")
	    } else {
		$.ajax({
		    type: 'post',
		    url : "<?php echo Yii::app()->createUrl("instituteBatchSessionStudentAttendance/institutebatchsection");?>",
		    data : {
			institute_batch_id : $(this).val(),
			
		    },
		    success: function(data) {
			$("#section").html(data)

		    }
		});
		$.ajax({
		    type: 'post',
		    url : "<?php echo Yii::app()->createUrl("instituteBatchSessionStudentAttendance/institutebatchsession");?>",
		    data : {
			institute_batch_id : $(this).val(),
			
		    },
		    success: function(data) {
			$("#session").html(data)

		    }
		});
	    }
	       
	});
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
	$("#session").change(function(){
	    if ($(this).val() == "") {
		$("#students").html("")
	    } else {
		$.ajax({
		    type: 'post',
		    url : "<?php echo Yii::app()->createUrl("instituteBatchSessionStudentAttendance/sessionstudent");?>",
		    data : {
			section_id : $("#section").val(),
			session_id : $(this).val(),
			
		    },
		    success: function(data) {
			$("#students").html(data)

		    }
		});
	    }
	       
	});
	</script>
