<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Change Password'); 
 switch (Yii::app()->user->admin){
     case 1:
	 $text = "MBAtrek Student";
	 $link = Yii::app()->createUrl('student/portal');
	 break;
     case 2:
	 $text = "MBAtrek Institute";
	 $link = Yii::app()->createUrl('institutes/portal');
	 break;
     case 3:
	 $text = "MBAtrek Industry";
	 $link = Yii::app()->createUrl('industry/portal');
	 break;
     
 }
?>

<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
		
                <li><a href="<?php echo $link;?>"><?php echo $text;?></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo $link;?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Change Password</a></li>
            </ul>
        </div> 
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
                        <div id="myTabContent" class="tab-content">
                            <h2>Change Password</h2>
                            <div class="tab-pane active in" id="login">
				<?php
				$form = $this->beginWidget('CActiveForm', array(
				    'id' => 'changepassword-form',
				    'enableClientValidation' => true,
				    'enableAjaxValidation' => true,
				    'clientOptions' => array(
					'validateOnSubmit' => true,
					'validateOnChange' => true
				    ),
				));
				?>
				<div class="phAnimate">
				    
			<label class="required" for="firstname">Current Password <span class="required">*</span></label>                                     <input type="password" id="LoginForm_username" name="current_password" class="input_field" placeholder="">                                        
				</div>
				<div class="phAnimate">
				    
			<label class="required" for="firstname">New Password <span class="required">*</span></label>                                     <input type="password" id="LoginForm_new_username" name="new_password" class="input_field" placeholder="">                                        
				</div>
				<div class="phAnimate">
                                                <label class="required" for="firstname">Confirm Password <span class="required">*</span></label>                        <input type="password" maxlength="255" id="Users_cpassword" name="Users[cpassword]" class="input_field" placeholder="">                        
                    </div>
				<div class="btton_field">
				    <!--<button type="submit" class="yello_btn raised ripple" >LOG IN</button>-->
				    <div class="site_btn">
				    <?php echo CHtml::submitButton('Submit', array('class' => "yello_btn raised ripple")); ?>
				    </div>
				</div>
				
			<?php $this->endWidget(); ?>
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
