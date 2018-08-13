<section class="banner_area mba_signup_student">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<?php $this->setPageTitle('Student6 Register'); ?>
<section class="login_container">
    <div class="container">
        <div class="login_outer">
            <div class="login_login signup">
                <img src="images/footer_logo.png"/>
                <div class="logo_line"></div>
            </div>
            <div class="sign_up_div">
                <h2>MBA Student </br> REGISTER & Verify</h2>
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'mba-student-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                            'action' => Yii::app()->createUrl('site/register')
                            
                    ))); ?>  
                    <div class="phAnimate">
                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'email', $data); ?>
                        <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                      
                    </div>
                    <div class="phAnimate">
                        <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'password', $data); ?>
                        <?php echo $form->passwordField($model, 'password', array('class' => "input_field")); ?>
                      
                    </div>
                    <div class="phAnimate">
                        <?php if($model->fname != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'fname', $data); ?>
                        <?php echo $form->textField($model, 'fname', array('class' => "input_field")); ?>
                      
                    </div>
                    <div class="phAnimate">
                        
                        <?php if($model->lname != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'lname', $data); ?>
                        <?php echo $form->textField($model, 'lname', array('class' => "input_field")); ?>
                       
                    </div>
                    <div class="phAnimate calender">
                        <span>D.O.B- 00/00/0000 <em>*</em></span>
                        <label for="lastname">D.O.B- 00/00/0000 <em>*</em></label>
                        <input type="text" class="input_field date_calender" name="Users[dob]" id="Password">
                    </div>
                    <div class="phAnimate">
                        <?php if($model->institute_email_address != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'institute_email_address',$data); ?>
                        <?php echo $form->textField($model, 'institute_email_address', array('class' => "input_field")); ?>
                       
                    </div>
                    <div class="optional_div">
                        <div class="main_option">
                            <h3>Optional</h3>
                        </div>
                        <div class="phAnimate">
                            <?php if($model->institute != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'institute', $data); ?>
                            <?php echo $form->textField($model, 'institute', array('class' => "input_field")); ?>
                            
                        </div>
                        <div class="phAnimate">
                            <?php if($model->city != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'city', $data); ?>
                            <?php echo $form->textField($model, 'city', array('class' => "input_field")); ?>
                            
                        </div>
                        <div class="phAnimate">
                            <?php if($model->program != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'program', $data); ?>
                            <?php echo $form->textField($model, 'program', array('class' => "input_field")); ?>
                            
                        </div>
                        <div class="phAnimate">
                            <?php if($model->batch != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'batch',$data); ?>
                            <?php echo $form->textField($model, 'batch', array('class' => "input_field")); ?>
                            
                        </div>
                        <div class="btton_field">
							<div class="site_btn">
								<button type="submit" class="yello_btn raised ripple" >REGISTER </button>
							</div>
                        </div>
                    </div>
                <?php $this->endWidget();?>
            </div>
        </div>
    </div>	
</section>
<style>
    .required{
        color : red;
    }
</style>