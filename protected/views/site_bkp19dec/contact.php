<?php $this->setPageTitle('Contact Us'); ?>
<?php echo $this->renderPartial('pages/_banner_area'); ?>  
<section class="contact_container">
    <div class="container">
       <?php $data  = ContentJson::model()->findByAttributes(array("page"=>"contact"));
            echo $data->data;
            $model = new Contact();
        ?>
        <div class="get_in_touch">
            <div class="main_heading">
                <h4>Get In Touch</h4>
                <h3>Request A Call Back</h3>
            </div>
            <div class="request_form">
                  <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'contact-form',
                        'enableAjaxValidation'=>false,
                       'action' => Yii::app()->createUrl('contact/create'),
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                            
                            
                    ))); ?> 
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'name', $data); ?>
                            <?php echo $form->textField($model, 'name', array('class' => "input_field")); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->phone != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'phone', $data); ?>
                            <?php echo $form->textField($model, 'phone', array('class' => "input_field")); ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'email', $data); ?>
                            <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->subject != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'subject', $data); ?>
                            <?php echo $form->textField($model, 'subject', array('class' => "input_field")); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline list-unstyled chec_filed">
                            <li>
                                <input type="checkbox" name="Contact[type]" value="1" id="Industry" class="css-checkbox" />
                                <label for="Industry" class="css-label">Industry</label>
                            </li>
                            <li>
                                <input type="checkbox" name="Contact[type]" value="2" id="Institute" class="css-checkbox" />
                                <label for="Institute" class="css-label">Institute</label>
                            </li>
                            <li>
                                <input type="checkbox" name="Contact[type]" value="3" id="Student" class="css-checkbox" />
                                <label for="Student" class="css-label">Student</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <?php if($model->message != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'message', $data); ?>
                            <?php echo $form->textArea($model, 'message', array('class' => "input_field")); ?>
                        </div>
                    </div>
                    <div class="sibmit_form">
						<div class="site_btn">
							<button class=" raised ripple" type="submit"><span>Submit</span></button>
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