<?php 

$mont = array("1"=>"Jan",2=>"Feb",3=>"Mar",4=>"Apl",5=>"May",6=>"Jun",7=>"Jul",8=>"Aug",9=>"Sep",10=>"Oct",11=>"Nov",12=>"Dec");
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
        <br />
        <?php echo $form->dropDownList($model,'due_month',$mont, array('empty'=>'Select Due Month')) ;?>          
	<?php 
//        $this->widget(
//            'booster.widgets.TbDatePicker',
//            array(
//                'model' =>$model,
//                'attribute' => 'due_month',
//                'htmlOptions' =>array("placeholder"=>"Due Month")
//            )
//        );
        
//        echo $form->textFieldRow($model,'due_month',array('class'=>'span5','maxlength'=>255)); ?>
        
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
