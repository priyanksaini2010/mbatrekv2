<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'content-json-form',
	'enableAjaxValidation'=>false,
)); 

$dataSite = ContentJson::model()->findByAttributes(array('page'=>'home'));
$dataSite = json_decode($dataSite->data);


?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <label>
            Give Yourself The Advantage
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="Give_Yourself_The_Advantage" id="ContentJson_page" >
            <?php echo $dataSite->Give_Yourself_The_Advantage;?>
        </textarea>
        <label>
            Institute
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="Institute" id="ContentJson_page">
            <?php echo $dataSite->Institute;?>
        </textarea>
        <label>
            Industry
        </label>
        
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="Industry" id="ContentJson_page">
            <?php echo $dataSite->Industry;?>
        </textarea>
        <label>
            MBAtrek 
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="MBAtrek" id="ContentJson_page">
            <?php echo $dataSite->MBAtrek;?>
        </textarea>
        <label>
            Mtrek 
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="Mtrek" id="ContentJson_page">
            <?php echo $dataSite->Mtrek;?>
        </textarea>
        <label>
            GradXplore  
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="GradXplore_" id="ContentJson_page">
            <?php echo $dataSite->GradXplore_;?>
        </textarea>
        <label>
            What We Bring To You - Industry
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="What_We_Bring_To_You_Industry" id="ContentJson_page" >
            <?php echo $dataSite->What_We_Bring_To_You_Industry;?>
        </textarea>
        <label>
            What We Bring To You - Institute
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="What_We_Bring_To_You_Institute" id="ContentJson_page" >
            <?php echo $dataSite->What_We_Bring_To_You_Institute;?>
        </textarea>
        <label>
            What We Bring To You - Student
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="What_We_Bring_To_You_Student" id="ContentJson_page">
            <?php echo $dataSite->What_We_Bring_To_You_Student;?>
        </textarea>
        <label>
            Yes!! It's FREE
        </label>
        <textarea style="margin: 0px 0px 10px; height: 130px; width: 460px;" name="Yes_It_FREE"><?php echo $dataSite->Yes_It_FREE;?></textarea>
        
        <label>
           Email
        </label>
        <textarea name="Email" id="ContentJson_page">
            <?php echo isset($dataSite->Email)?$dataSite->Email:'';?>
        </textarea>
        <label>
            Phone 1
        </label>
        <input value="<?php echo isset($dataSite->Phone_1)?$dataSite->Phone_1:'';?>" class="span5" maxlength="255" name="Phone_1" id="ContentJson_page" type="text" >
        <label>
            Phone 2
        </label>
        <input value="<?php echo isset($dataSite->Phone_2)?$dataSite->Phone_2:'';?>" class="span5" maxlength="255" name="Phone_2" id="ContentJson_page" type="text" >
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
