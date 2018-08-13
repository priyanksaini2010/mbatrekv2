<?php 
$criteria = new CDbCriteria();
$criteria->addCondition("id != ".$id);
$criteria->addCondition("status = 1");
$criteria->addCondition("product_sub_category_id = ".$modelProducts->product_sub_category_id);
$products = Products::model()->findAll($criteria);
$recom = array();
$recom[0] = "Select Product";

foreach($products as $product){
    $recom[$product->id] = $product->title;
}
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'product-recommended-value-saver-pack-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array("enctype" => "multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'product_id',array('value'=>$id)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'short_description',array('class'=>'span5','maxlength'=>255)); ?>
        <label for="Products_status" class="required">Recommended Product With This Product <span class="required">*</span></label>
        <?php echo $form->dropDownList($model, 'recommended_product_id', $recom, array('class' => 'span3')); ?>
	
        <?php
            if(!$model->isNewRecord) {?>
        <br />
        <img style="background-color: #229897;" src="assets/products/<?php echo $model->icon?>" height="50px" width="50px"/>
        <?php }?>
        <?php echo $form->fileFieldRow($model,'icon',array('class'=>'span5','maxlength'=>255)); ?>
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
                <a href="<?php echo Yii::app()->createUrl("productKeypoints/create",array("id"=>$product_id));?>" class="btn btn-warning btn-lg">
                    <span class="glyphicon glyphicon-forward"></span> Skip
                </a>
                <?php } else{?>
                <a href="<?php echo Yii::app()->createUrl("productRecommendedValueSaverPack/admin",array("product_id"=>$modelProducts->id));?>" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </a>
                <?php }} else {?>
                <a href="<?php echo Yii::app()->createUrl("productRecommendedValueSaverPack/admin",array("product_id"=>$modelProducts->id));?>" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </a>
                <?php }?>
	</div>

<?php $this->endWidget(); ?>
<script>
    $("#addmore").click(function(){
        $("#add").val(1);
        $("#product-recommended-value-saver-pack-form").submit();
    })
</script>