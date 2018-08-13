<?php $this->setPageTitle('Feedback');

$model = new Feedback();

?>  
<section class="banner_area feedback">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="contact_container">
    <div class="container">
        <div class="main_heading">
            <h4>Feedback</h4>
            <h3>Share Your Feedback</h3>
        </div>
        <div class="contact_form fee_Text">
            <p>Send us any comments, feedback, suggestions or problems you have encountered regarding our services so that we can fix them right away.</p>
        </div>
        <div class="get_in_touch">
            <div class="request_form feedback_form">
                   <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'feedback-form',
                        'enableAjaxValidation'=>false,
                       'action' => Yii::app()->createUrl('feedback/create'),
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                            
                            
                    ))); ?> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->message != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'message', $data); ?>
                            <?php echo $form->textArea($model, 'message', array('class' => "input_field")); ?>
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'email', $data); ?>
                            <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                            
                        </div>
                    </div>
                    <div class="sibmit_form">
						<div class="site_btn">
							<button class="raised ripple" type="submit">Submit</button>
						</div>
                    </div>
                  <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</section>
<style>
    .required{
        color : red;
    }
</style>