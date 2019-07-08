<?php
$this->breadcrumbs=array(
    'Campus Ambassadors'=>array('admin'),
    'Import Courses',
);

$this->menu=array(
    array('label'=>'Manage Campus Ambassador','url'=>array('admin')),
);
?>

<h1>Import Campus Ambassador Courses</h1>
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
