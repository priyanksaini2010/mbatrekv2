<?php $this->setPageTitle( "Sign Up");?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Sign Up</a></li>
    </ul>
</div>
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
						<div class="label_new">
							<label>Full Name <em>*</em></label>
						</div>
                        <?php if($model->full_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'full_name', array('class' => "form-control","placeholder"=>"Full Name*","autofocus"=>"autofocus")); ?>
                        <div class="label_new">
							<label>Email <em>*</em></label>
						</div>
                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->textField($model, 'email', array('class' => "form-control email_rule_input","placeholder"=>"Email*")); ?>
                         <span class="email_rule">(Kindly register with your Institutional Email ID to avail additional offers)</span>
                        <div class="label_new">
							<label>Password <em>*</em></label>
						</div>
					   <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->passwordField($model, 'password', array('class' => "form-control","placeholder"=>"Password*")); ?>
                      <div class="label_new">
							<label>Confirm Password <em>*</em></label>
						</div>
					  <input type="password" class="form-control" placeholder="Confirm Password*" id="UsersNew_cpassword"> 
                        <span class="password_rule">(Should be 8 character long and alphanumeric)</span>
                        <?php if($model->mobile_number != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
						<div class="label_new">
							<label>Mobile Number <em>*</em></label>
						</div>
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
<!--										<input name="UsersNew[name_of_college]" class="form-control" placeholder="Name of your college*" id="name_of_college"  type="text" >-->
                                                            <select class="form-control select2class" name="UsersNew[name_of_college]" id="name_of_college">
                                                                <option value="">Select Your College</option>
                                                                <?php
                                                                $autofill = ContactAutofillCompany::model()->findAll();
                                                                $tags = array();
                                                                foreach ($autofill as $item){?>
                                                                    <option><?php echo $item->name;?></option>
                                                                <?php }?>
                                                            </select>
                                                                                
									</div>
									<div id="2" class="desc" <?php if(isset($model->role) && $model->role ==2){?>style="display :block !important;"<?php }?>>
<!--										<input name="UsersNew[name_of_company]" class="form-control" placeholder="Name of your company*"  type="text" id="name_of_company">-->
                                        <select class="form-control select2class" name="UsersNew[name_of_company]" id="name_of_company">
                                            <option value="">Select Your Company</option>
                                            <?php
                                            $autofill = ContactAutofill::model()->findAll();
                                            $tags = array();
                                            foreach ($autofill as $item){?>
                                                <option><?php echo $item->name;?></option>
                                            <?php }?>
                                        </select>
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
                            <div class="g-recaptcha form-field" data-sitekey="6LcHG6EUAAAAAERv9LjXHi8OMkiRsmS6ZHdGB0Mj"></div>
<!--                            --><?php //if (CCaptcha::checkRequirements()): ?>
<!--                            <div class="catcha_Code">-->
<!--                                    --><?php //echo $form->labelEx($model, 'verifyCode'); ?>
<!--                                    <div>-->
<!--                                        --><?php //$this->widget('CCaptcha'); ?>
<!--                                        --><?php //echo $form->textField($model, 'verifyCode'); ?>
<!--                                    </div>-->
<!--                                    <div class="hint">Please enter the characters as they are shown in the image above.-->
<!--                                        <br/>Characters are not case-sensitive.</div>-->
<!--                                    --><?php //echo $form->error($model, 'verifyCode'); ?>
<!--                                </div>-->
<!--                            --><?php //endif; ?>
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
    <style>
        .select2-container{
            width: 340px !important;
            height: 42px !important;
        }
    </style>
