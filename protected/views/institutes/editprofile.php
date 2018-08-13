<?php $industryProfile = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));?>
<section class="banner_area editprofile-industry our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>    
<section class="bielf_container">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">MBAtrek Attendance</a></li>
            </ul>
        </div>
        <div class="main_heading edit_hdng">
            <h4>Profile</h4>
            <h3>Edit Profile</h3> 
        </div>
        <div class="edit_wrapper">
            <p class="edit_Text">You can personalize your profile by filling in the following details-</p>  
            
            <div class="edit_profile_form edit_industry_head">
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-profile-ins',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',
                                        )));?>
                <div class="industry_head">
                    <h3 class="industry_head_h3">Edit Profile</h3>
					<div class="row">
					 <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->designation !=""){?>class="active"<?php }?>>Designation<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->designation;?>" class="input_field" id="designation" name="designation">
                        </div>
                    </div>
					
					 <div class="col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-md-10 col-sm-10 col-xs-9">
								<div class="phAnimate file_industry">
									<label for="firstname" <?php if ( $industryProfile->profile_pic !=""){?>class="active"<?php }?>>Image<em>*</em></label>
									<input type="file" value="<?php echo $industryProfile->profile_pic;?>" class="input_field" id="profile_pic" name="profile_pic">
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-3">
								<div class="profile_idustry">
									<img src="<?php echo Yii::app()->baseUrl;?>/assets/companylogo/<?php echo $industryProfile->profile_pic?>" height="50px" width="50px"/>
								 </div>
							</div>
						</div>
                    </div>
					<div class="clearfix"></div>
					 <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->user->city !=""){?>class="active"<?php }?>>Address<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->user->city;?>" class="input_field" id="city" name="city">
                        </div>
                    </div>
					
					    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->mobile !=""){?>class="active"<?php }?>>Mobile <em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->mobile;?>" class="input_field" id="mobile" name="mobile">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->user->fname !=""){?>class="active"<?php }?>>First Name<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->user->fname;?>" class="input_field" id="fname" name="fname">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->user->lname !=""){?>class="active"<?php }?>>Last Name<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->user->lname;?>" class="input_field" id="lname" name="lname">
                        </div>
                    </div>
					    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->user->phone_number !=""){?>class="active"<?php }?>>Phone</label>
                            <input type="text" value="<?php echo $industryProfile->user->phone_number;?>" class="input_field" id="phone_number" name="phone_number">
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="checkbox_div chec_filed">
                            <label for="firstname" class="active">Program Registered <em>*</em></label>
							<div class="">
								<ul class="list-unstyled list-inline">
									<li>
										<input type="checkbox" value="<?php echo $industryProfile->prog_1 == 1 ? 1 : 0;?>" <?php if($industryProfile->prog_1 == 1){?>checked="checked"<?php }?> class="css-checkbox" id="prog_2" name="prog_1">
										<label for="prog_2" class="css-label">Mbatrek</label>
									</li>
									<li>
										<input type="checkbox" value="<?php echo $industryProfile->prog_1 == 1 ? 1 : 0;?>" <?php if($industryProfile->prog_2 == 1){?>checked="checked"<?php }?>  class="css-checkbox" id="Mtrek" name="prog_21">
										<label for="Mtrek" class="css-label">Mtrek</label>
									</li>
									<li>
										<input type="checkbox" value="<?php echo $industryProfile->prog_1 == 1 ? 1 : 0;?>" <?php if($industryProfile->prog_2 == 1){?>checked="checked"<?php }?>  class="css-checkbox" id="GradXplore" name="prog_3">
										<label for="GradXplore" class="css-label">GradXplore</label>
									</li>
								</ul>
							</div>
                            
							
							
                            
                        </div>
                    </div>
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->live_1 !=""){?>class="active"<?php }?>>Live Project <em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->live_1;?>" class="input_field" id="live_1" name="live_1">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->live_2 !=""){?>class="active"<?php }?>>Live Project <em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->live_2;?>" class="input_field" id="live_2" name="live_2">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->live_3 !=""){?>class="active"<?php }?>>Live Project <em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->live_3;?>" class="input_field" id="live_3" name="live_3">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->int_1 !=""){?>class="active"<?php }?>> Internship<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->int_1;?>" class="input_field" id="int_1" name="int_1">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->int_2 !=""){?>class="active"<?php }?>> Internship<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->int_2;?>" class="input_field" id="int_2" name="int_2">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->int_3 !=""){?>class="active"<?php }?>> Internship<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->int_3;?>" class="input_field" id="int_3" name="int_3">
                        </div>
                    </div>-->
                    
                   
                     
                    
					</div>
                    <div class="submit_edit" id="submit_library_profile_ind" style="pointer: cursor;">
                        <div class="site_btn"><a data-toggle="modal" data-target="" class="raised ripple has-ripple" href="javascript:void('0')">Save</a></div>
                    </div>
                </div>
                <?php $this->endWidget();?>         
            </div>
        </div>
    </div>
</section>