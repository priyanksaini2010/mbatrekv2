<?php 
Yii::import('ext.krichtexteditor.KRichTextEditor');
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'blogs-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array("enctype" =>"multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <label for="Blogs_blog_category_id" class="required">Blog Category <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'blog_category_id',CHtml::listData(BlogCategory::model()->findAll(), "id", "name"),array('empty'=>'Select Category', "class"=>"span5")); ?>
        <label for="Blogs_type" class="required">Blog Type <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'type',array(1=>"Career Preparation",2=>"Job Ready",3=>"CXO's Speak"),array('empty'=>'Select Type', "class"=>"span5")); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->fileFieldRow($model,'background_image',array('class'=>'span5','maxlength'=>255)); ?>
	
        <?php
            if(!$model->isNewRecord) {?>
        <img src="assets/blogs/<?php echo $model->background_image?>" height="50px" width="50px"/>
        <?php }?>
        <?php echo $form->fileFieldRow($model,'banner_image',array('class'=>'span5','maxlength'=>255)); ?>
         <?php
            if(!$model->isNewRecord) {?>
        <img src="assets/blogs/<?php echo $model->banner_image?>" height="50px" width="50px"/>
        <?php }?>
        <?php $this->widget('KRichTextEditor', array(
                        'model' => $model,
                        'value' => $model->isNewRecord ? '' : $model->content,
                        'attribute' => 'content',
                        'options' => array(
                            'theme_advanced_resizing' => 'true',
                            'theme_advanced_statusbar_location' => 'bottom',
                        ),
                    )); ?>
    <?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5','maxlength'=>255)); ?>
    <span>
        Please Enter Date in Y-m-d h:i:s format e.g. <?php echo date("Y-m-d h:i:s");?>
    </span>
	<?php
//            if($model->isNewRecord) {
//                echo $form->hiddenField($model,'date_created',array('value'=>date("Y-m-d h:i:s")));
//            } else {
//                echo $form->hiddenField($model,'date_created',array('value'=>$model->date_created));
//            }
        ?>
	<?php echo $form->hiddenField($model,'date_updated',array('value'=>date("Y-m-d h:i:s"))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
