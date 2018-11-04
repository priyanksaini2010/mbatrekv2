<?php
Yii::import('ext.krichtexteditor.KRichTextEditor');
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'products-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array("enctype" => "multipart/form-data"),
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 255)); ?>
<br />
<?php if (!$model->isNewRecord) { ?>
    <img src="assets/products/<?php echo $model->logo ?>" height="50px" width="50px"/>
<?php } ?>
<?php echo $form->fileFieldRow($model, 'logo', array('class' => 'span5', 'maxlength' => 255)); ?>
<?php if (!$model->isNewRecord) { ?>
<img src="assets/products/<?php echo $model->home_page_icon ?>" height="50px" width="50px"/>
<?php } ?>
<?php echo $form->fileFieldRow($model, 'home_page_icon', array('class' => 'span5', 'maxlength' => 255)); ?>
<?php echo $form->textFieldRow($model, 'description1', array('class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'actuall_price', array('class' => 'span5')); ?>

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


<?php echo $form->textFieldRow($model, 'price', array('class' => 'span5')); ?>
    <br />
<label for="Products_is_saver" class="required">Is this a saver product in this category<span class="required">*</span>
<?php echo $form->checkBox($model,'is_saver',array('value'=>1,'uncheckValue'=>0,'checked'=>($model->id=="")?true:$model->is_saver)); ?>
</label>

<br />
<label for="Products_type" class="required">Product Type <span class="required">*</span></label>
<?php echo $form->dropDownList($model, 'type', array("Select Product Type", "Student", "Young Proffesional"), array('class' => 'span3')); ?>
<br />
<label for="Products_type" class="required">Home Page Bucket <span class="required">*</span></label>
<?php 
$ar = array(1=>"Build Your Brand",2=>"Company / Industry & Job Fitment",3=>"Preparing For Placements",4=>"Perparing For Internship");
echo $form->dropDownList($model, 'home_page_bucket', $ar, array('class' => 'span3','empty'=>'Select an option')); ?>
<br />
<label for="Products_product_sub_category_id" class="required">Product Category <span class="required">*</span></label>
<?php echo $form->dropDownList($model, 'product_sub_category_id',CHtml::listData(ProductSubCategory::model()->findAll(),"id","description"), array('class' => 'span3',"")); ?>
<br />
<?php if (!$model->isNewRecord) { ?>
    <label for="Products_status" class="required">Product Status <span class="required">*</span></label>
    <?php echo $form->dropDownList($model, 'status', array("In-active", "Active"), array('class' => 'span3')); ?>
    <?php } ?>
<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
    <a href="<?php echo Yii::app()->createUrl("products/admin");?>" class="btn btn-danger btn-lg">
        <span class="glyphicon glyphicon-remove"></span> Cancel
    </a>
</div>

<?php $this->endWidget(); ?>
