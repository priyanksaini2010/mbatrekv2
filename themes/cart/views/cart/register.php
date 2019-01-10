<?php $this->setPageTitle( "Sign Up");?>
<div class="login_container">
    <div class="container">
        <div class="row">
            <div class="login_wrapper register">
                <h3 class="heading-desc">Sign Up and Start Your Journey</h3>
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'register-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-signin mg-btm',
//                            'action' => Yii::app()->createUrl('site/register')
                            
                    ))); ?> 
                    <div class="main">	
                        <?php if($model->full_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'full_name', array('class' => "form-control","placeholder"=>"Full Name*","autofocus"=>"autofocus")); ?>
                        
                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'email', array('class' => "form-control email_rule_input","placeholder"=>"Email*")); ?>
                         <span class="email_rule">(Kindly register with your Institutional Email ID to avail additional offers.)</span>
                        <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->passwordField($model, 'password', array('class' => "form-control","placeholder"=>"Password*")); ?>
                        <input type="password" class="form-control" placeholder="Confirm Password*" id="UsersNew_cpassword"> 
                        <span class="password_rule">(Should be 8 character long and alphanumeric, special characters are not allowed)</span>
                        <?php if($model->mobile_number != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'mobile_number', array('class' => "form-control","placeholder"=>"Mobile Number*")); ?>
                        <!--
                        <input type="radio" name="UsersNew[role]" checked="checked" value="1" id="checkboxG1_radio1" class="css-checkbox" />College Student 
                        <input type="radio" name="UsersNew[role]" value="2" id="checkboxG1_radio2" class="css-checkbox" />Young Professional-->
						<div class="are_yu"><label>Are You?</label>
                                <ul class="register_input">
                                    <li>
                                        <input type="radio" <?php if(isset($model->role) && $model->role ==1){?>checked="checked"<?php }?> value="1"  name="UsersNew[role]"   id="radio2" class="css-checkbox "/>
                                        <label for="radio2" class="css-label radGroup1">College Student </label>                                                    
                                    </li>
                                    <li>
                                        <input type="radio" <?php if(isset($model->role) && $model->role ==2){?>checked="checked"<?php }?> value="2" name="UsersNew[role]" id="radio3" class="css-checkbox" />
                                        <label for="radio3" class="css-label radGroup1">Young Professional</label>
                                    </li>
								</ul>
								<div class="other_fields">
                                                                    
                                                                    <div id="1" class="desc"  <?php if(isset($model->role) && $model->role ==1){?>style="display :block !important;"<?php }?>>
										<input name="UsersNew[name_of_college]" class="form-control" placeholder="Name of your college*" id="name_of_college"  type="text" >
                                                                                
									</div>
									<div id="2" class="desc" <?php if(isset($model->role) && $model->role ==2){?>style="display :block !important;"<?php }?>>
										<input name="UsersNew[name_of_company]" class="form-control" placeholder="Name of your company*"  type="text" id="name_of_company">
									</div>
								</div>
                            </div>
					</div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="check_box">
                                <input type="checkbox" name="UsersNew[update_subscription]" value="1" id="checkboxG1" class="css-checkbox" />
                                <label for="checkboxG1" class="css-label">Send me updates for new products and future promotional and discount offers</label>
                            </div>
                            <?php if (CCaptcha::checkRequirements()): ?>
                            <div class="catcha_Code">
                                    <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                    <div>
                                        <?php $this->widget('CCaptcha'); ?>
                                        <?php echo $form->textField($model, 'verifyCode'); ?>
                                    </div>
                                    <div class="hint">Please enter the letters as they are shown in the image above.
                                        <br/>Letters are not case-sensitive.</div>
                                    <?php echo $form->error($model, 'verifyCode'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="capcha_div"><div><img src="images/capcha.png" alt="" /></div>
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