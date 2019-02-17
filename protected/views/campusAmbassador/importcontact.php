<?php
$this->breadcrumbs=array(
    'Manage Contact Company / Institutes'=>array('contactAutofill/admin'),
    'Import  Contact Company / Institutes',
);

$this->menu=array(
    array('label'=>'Manage Contact Company / Institutes','url'=>array('contactAutofill/admin')),
);
?>

<h1>Import Contact Company / Institutes</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'campus-ambassador-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array("enctype" => "multipart/form-data")
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<label for="files">
    <input type="file" id="files" name="files"/>
</label>


<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>$model->isNewRecord ? 'Create' : 'Save',
    )); ?>
</div>

<?php $this->endWidget(); ?>
