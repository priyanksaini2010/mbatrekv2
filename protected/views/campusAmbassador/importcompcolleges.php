<?php
$this->breadcrumbs=array(
    'Colleges For Competitions'=>array('collegesCompetition/admin'),
    'Import Competition Colleges',
);

$this->menu=array(
    array('label'=>'Colleges For Competitions','url'=>array('collegesCompetition/admin')),
);
?>

<h1>Import Colleges For Competitions</h1>
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
