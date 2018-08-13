<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'product-key-points-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array("enctype" => "multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'product_id',array('value'=>$id)); ?>

	<?php echo $form->textFieldRow($model,'points',array('class'=>'span5','maxlength'=>255)); ?>
        <input type="hidden" name="addmore" value="0" id="add">
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
                <?php if($model->isNewRecord){?>
                <input type="button" value="Create and Add More" id="addmore" class="btn btn-primary"/>
                <?php if($return == 0){?>
                <a href="<?php echo Yii::app()->createUrl("Products/admin");?>" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-forward"></span> Skip
                </a>
                <?php } else{?>
                <a href="<?php echo Yii::app()->createUrl("productKeyPoints/admin",array("product_id"=>$modelProducts->id));?>" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </a>
                <?php }} else {?>
                <a href="<?php echo Yii::app()->createUrl("productKeyPoints/admin",array("product_id"=>$modelProducts->id));?>" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </a>
                <?php }?>
	</div>

<?php $this->endWidget(); ?>
<script>
    $("#addmore").click(function(){
        $("#add").val(1);
        $("#product-key-points-form").submit();
    })
</script>