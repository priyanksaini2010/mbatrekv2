<?php $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));?>
<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>    
<section class="bielf_container">
    <div class="container">
        <div class="main_heading edit_hdng">
            <h4>Profile</h4>
            <h3>Edit Profile</h3> 
        </div>
        <div class="edit_wrapper">
            <p class="edit_Text">You can personalize your profile by filling in the following details: </p>  
            
            <div class="edit_profile_form edit_industry_head">
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-profile-ind',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',
                                        )));?>
                <div class="industry_head">
                    <h3 class="industry_head_h3">About Me</h3>
					<div class="row">
					 <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->founder_name !=""){?>class="active"<?php }?>>Name<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->industry->founder_name;?>" class="input_field" id="founder_name" name="founder_name">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->designation !=""){?>class="active"<?php }?>> Designation</label>
                            <input type="text" value="<?php echo $industryProfile->industry->designation;?>" class="input_field" id="designation" name="designation">
                        </div>
                    </div>
					 <div class="col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-md-10 col-sm-10 col-xs-12">
								<div class="phAnimate file_industry">
									<label for="firstname" <?php if ( $industryProfile->industry->founder_image !=""){?>class="active"<?php }?>>Image</label>
									<input type="file" value="<?php echo $industryProfile->industry->founder_image;?>" class="input_field" id="founder_image" name="founder_image">
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<div class="profile_idustry">
									<img src="<?php echo Yii::app()->baseUrl;?>/assets/companylogo/<?php echo $industryProfile->industry->founder_image?>" height="50px" width="50px"/>
								 </div>
							</div>
						</div>
                    </div>
					 <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->profile !=""){?>class="active"<?php }?>>Profile</label>
                            <input type="text" value="<?php echo $industryProfile->industry->profile;?>" class="input_field" id="profile" name="profile">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->skills !=""){?>class="active"<?php }?>>Skills</label>
                            <input type="text" value="<?php echo $industryProfile->industry->skills;?>" class="input_field" id="skills" name="skills">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->business_focus !=""){?>class="active"<?php }?>>Business Focus</label>
                            <input type="text" value="<?php echo $industryProfile->industry->business_focus;?>" class="input_field" id="business_focus" name="business_focus">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->experience !=""){?>class="active"<?php }?>>Experience</label>
                            <input type="text" value="<?php echo $industryProfile->industry->experience;?>" class="input_field" id="experience" name="experience">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->name !=""){?>class="active"<?php }?>>Company Name <em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->industry->name;?>" class="input_field" id="name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate office_add_industry">
                            <label for="firstname" <?php if ( $industryProfile->industry->address !=""){?>class="active"<?php }?>>Address</label>
                            <textarea class="input_field" id="address" name="address"><?php echo $industryProfile->industry->address;?></textarea>
                        </div>
                    </div>
                   
                     
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <div class="phAnimate ">
                            <label for="firstname" <?php if ( $industryProfile->industry->office_number !=""){?>class="active"<?php }?>>Office Number</label>
                            <input type="text" value="<?php echo $industryProfile->industry->office_number;?>" class="input_field" id="office_number" name="office_number">
                        </div>
                    </div>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->mobile_number !=""){?>class="active"<?php }?>>Mobile Number</label>
                            <input type="text" value="<?php echo $industryProfile->industry->mobile_number;?>" class="input_field" id="mobile_number" name="mobile_number">
                        </div>
                    </div>
					<div class="area_of_intrest">
					<h3 class="area_text"> Domain preferred </h3>
					<div class="clearfix"></div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->internship !=""){?>class="active"<?php }?>>Internship</label>
                            <input type="text" value="<?php echo $industryProfile->industry->internship;?>" class="input_field" id="internship" name="internship">
                        </div>
                    </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->live_project !=""){?>class="active"<?php }?>>Live Project</label>
                            <input type="text" value="<?php echo $industryProfile->industry->live_project;?>" class="input_field" id="live_project" name="live_project">
                        </div>
                    </div>
					 <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->placement !=""){?>class="active"<?php }?>>Placement</label>
                            <input type="text" value="<?php echo $industryProfile->industry->placement;?>" class="input_field" id="placement" name="placement">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->business_school_prefed !=""){?>class="active"<?php }?>>Business School Preffered</label>
                            <input type="text" value="<?php echo $industryProfile->industry->business_school_prefed;?>" class="input_field" id="business_school_prefed" name="business_school_prefed">
                        </div>
                    </div>
                    
                    
                   
                    
                    </div>
                   
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $industryProfile->industry->email !=""){?>class="active"<?php }?>>Email<em>*</em></label>
                            <input type="text" value="<?php echo $industryProfile->industry->email;?>" class="input_field" id="email" name="email">
                        </div>
                    </div>
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