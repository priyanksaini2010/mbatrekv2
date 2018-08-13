<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Login'); ?>
<section class="login_container">
    <div class="container">
        <div class="login_outer">
            <div class="login_login">
                <img src="<?php echo Yii::app()->baseUrl;?>/images/footer_logo.png"/>
                <div class="logo_line"></div>
            </div>
            <div class="" id="loginModal">
                <div class="modal-body">
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a class="raised ripple" href="#login" data-toggle="tab">Industry</a></li>
                            <li><a class="raised ripple" href="#create" data-toggle="tab">Institute</a></li>
                            <li><a class="raised ripple" href="#more" data-toggle="tab">Student</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <h2>Log in</h2>
                            <div class="tab-pane active in" id="login">
                                    <?php
                                    $form = $this->beginWidget('CActiveForm', array(
                                        'id' => 'login-form',
                                        'enableClientValidation' => true,
                                        'enableAjaxValidation' => true,
                                        'clientOptions' => array(
                                            'validateOnSubmit' => true,
                                            'validateOnChange' => true
                                        ),
                                    ));
                                    $pwdErr = $form->error($model, 'password');
                                    $userErr = $form->error($model, 'username');
                                    ?>
                                    <div class="phAnimate">
<!--                                        <label for="firstname">Email <em>*</em></label>-->
<!--                                        <input type="text" class="input_field" id="Email">-->
                                        <?php if($model->username != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'username', $data); ?>
                                        <?php echo $form->textField($model, 'username', array('class'=>"input_field")); ?>
                                        
                                    </div>
                                    <div class="phAnimate">
                                        <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'password',$data); ?>
                                        <?php echo $form->passwordField($model, 'password', array('class'=>"input_field")); ?>
                                        
                                    </div>
                                    <div class="btton_field">
                                        <!--<button type="submit" class="yello_btn raised ripple" >LOG IN</button>-->
										<div class="site_btn">
											<?php echo CHtml::submitButton('LOG IN',array('class'=>"yello_btn raised ripple")); ?>
										</div>
                                    </div>
                                    <div class="checkbox_div chec_filed">
                                        <?php echo $form->checkBox($model, 'rememberMe',array('class' => 'css-checkbox')); ?>
                                        <label for="LoginForm_rememberMe" class="css-label">Remember Me</label>
                                        <a class="forget_pass" href="<?php echo Yii::app()->createUrl("site/forgot");?>">Forgot Password?</a>
                                    </div>
                                <?php $this->endWidget();?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</section>
<style>
    .required{
        color : red;
    }
</style>
