<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Login</a></li>
    </ul>
</div>
<div class="login_container">
		<div class="container">
			<div class="row">
				<div class="login_wrapper">
					<h3 class="heading-desc">Log In to Your MBAtrek Account</h3>
					
					<?php
							$form = $this->beginWidget('CActiveForm', array(
								'id' => 'login-form',
								'enableClientValidation' => true,
								'enableAjaxValidation' => true,
								'clientOptions' => array(
									'validateOnSubmit' => true,
									'validateOnChange' => true
								),
								'htmlOptions'=> array(
									"class" => "form-signin mg-btm"
								),
							));
							$pwdErr = $form->error($model, 'password');
							$userErr = $form->error($model, 'username');
						?>
						<div class="main">	
							
							<?php if($model->username != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
							
							<?php echo $form->textField($model, 'username', array('class'=>"form-control","placeholder"=>"Email Id")); ?>
							
							<?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
							
							<?php echo $form->passwordField($model, 'password', array('class'=>"form-control","placeholder"=>"Password")); ?>
							<span class="clearfix"></span>	
						</div>
						
						<div class="login-footer">
							<div class="row">
								<div class="col-xs-12 col-md-12 text-center">
									<?php echo CHtml::submitButton('Login',array('class'=>"btn btn-large btn-danger")); ?>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="left-section">
										<span>Or</span>
										<a href="<?php echo Yii::app()->createUrl("site/forgot");?>">Forgot Password?</a>
									</div>
									<div class="signu_div">
											<span>Don’t have an account ? </span>
                                                                                        <a href="<?php echo Yii::app()->createUrl("cart/register");?>"> Sign up now</a>
									</div>
									 
								</div>
							</div>
						</div>
					 <?php $this->endWidget();?>
				</div>
			</div>
		</div>
	</div>
