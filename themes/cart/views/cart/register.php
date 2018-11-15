<div class="login_container">
    <div class="container">
        <div class="row">
            <div class="login_wrapper">
                <h3 class="heading-desc">Sign Up and Start Your Journey</h3>
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'register-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-signin mg-btm',
                            'action' => Yii::app()->createUrl('site/register')
                            
                    ))); ?> 
                    <div class="main">	
                        <?php if($model->full_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'full_name', array('class' => "form-control","placeholder"=>"Full Name","autofocus"=>"autofocus")); ?>
                        
                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'email', array('class' => "form-control","placeholder"=>"Email")); ?>
                        
                        <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->passwordField($model, 'password', array('class' => "form-control","placeholder"=>"Password")); ?>
                        <input type="password" class="form-control" placeholder="Confirm Password" id="UsersNew_cpassword"> 
                        <label for="checkboxG1" class="css-label">
                            Are You?
                        </label>
                        <input type="radio" name="UsersNew[role]" checked="checked" value="1" id="checkboxG1_radio1" class="css-checkbox" />College Student 
                        <input type="radio" name="UsersNew[role]" value="2" id="checkboxG1_radio2" class="css-checkbox" />Young Professional
                        <span class="clearfix"></span>	
                    </div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="check_box">
                                <input type="checkbox" name="UsersNew[update_subscription]" value="1" id="checkboxG1" class="css-checkbox" />
                                <label for="checkboxG1" class="css-label">Send me updates for new products and future promotional and discount offers</label>
                            </div>
                            <div class="col-xs-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-large btn-danger">Sign Up</button>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="left-section">


                                </div>
                                <div class="signu_div">
                                    <span>Already have an account ?</span>
                                    <a href="<?php echo Yii::app()->createUrl("site/login");?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $this->endWidget();?>
            </div>
        </div>
    </div>
</div>