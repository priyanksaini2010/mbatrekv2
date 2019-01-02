<?php $this->setPageTitle('Forgot Password'); ?>

<style>
    .required{
        color : red;
    }
</style>
<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<div class="login_container">
		<div class="container">
			<div class="row">
				<div class="login_wrapper">
					<h3 class="heading-desc">MBAtrek Account Recovery</h3>
					
					<?php
							$form = $this->beginWidget('CActiveForm', array(
								'id' => 'retrieve-form',
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
						<!--<div class="phAnimate"><label for="lastname">First Name <em>*</em></label> <input id="name" class="input_field" type="text" name="name" /></div>-->

                            <div class="phAnimate"><label for="lastname" class="">New Password <em>*</em></label>
                                <input class="input_field" name="UsersNew[password]" id="UsersNew_password" type="password" maxlength="255" placeholder="" autocomplete="none">
                            </div>
                            <div class="phAnimate"><label for="lastname" class="">Confirm Password <em>*</em></label>
                                <input class="input_field" name="UsersNew[cpassword]" id="UsersNew_cpassword" type="password" maxlength="255" placeholder="">
                            </div>
                            <span class="clearfix"></span>
						</div>
						
						<div class="login-footer">
							<div class="row">
								<div class="col-xs-12 col-md-12 text-center">
									<?php echo CHtml::submitButton('Submit',array('class'=>"btn btn-large btn-danger")); ?>
								</div>
								
							</div>
						</div>
					 <?php $this->endWidget();?>
				</div>
			</div>
		</div>
	</div>
