<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
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
							
							<?php echo $form->textField($model, 'username', array('class'=>"form-control","placeholder"=>"Mbatrek Id")); ?>
							
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
											<span><a href="#myModal27" role="button" class="btn btn-default" data-toggle="modal">Don’t </a>have an? account </span>
                                                                                        <a href="<?php echo Yii::app()->createUrl("cart/register");?>">Sign up now</a>
									</div>
									 <div id="myModal27" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<!--<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h4 class="modal-title">Modal header</h4>
												</div>-->
													<div class="modal-body">
														<div class="md-content">
															<h3>Error !</h3>
															<div class="error_wrap">
																<div class="error_container">
																	<p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter valid email address!</p>
																</div>
																<!-- <button class="md-close">OK</button> -->
																<div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
															</div>
														</div>
													</div>
													
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					 <?php $this->endWidget();?>
				</div>
			</div>
		</div>
	</div>
