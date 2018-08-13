<?php $userData = Users::model()->findByPk(Yii::app()->user->id);?>
<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>    
<section class="bielf_container">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Edit Profile</a></li>
            </ul>
        </div>
        <div class="main_heading edit_hdng">
            
            <h4>Profile</h4>
            <h3>
            <?php if (isset($_REQUEST['display']) && $_REQUEST['display'] == "ind") {
                echo "My Preferred Industries"; 
            } else if(isset($_REQUEST['display']) && $_REQUEST['display'] == "comp"){
                echo "My Preferred Companies"; 
            }
            else if(isset($_REQUEST['display']) && $_REQUEST['display'] == "int") {
                echo "My Preferred  Internship"; 
            }
            else if(isset($_REQUEST['display']) && $_REQUEST['display'] == "live") {
                echo "Live Project"; 
	    } else if(isset($_REQUEST['display']) && $_REQUEST['display'] == "pp"){
		echo "Change Profile Picture"; 
	    } else {
                echo "Edit Student Profile"; 
            }
            ?>
            </h3> 
        </div>
        <div class="edit_wrapper">
            <!--<p class="edit_Text">You must have selected the preferred industry; next step is to select at least 15
companies from the ‘5-selected industry’ in which you want to work.</p>  
<p class="edit_Text">MBAtrek will take all initiatives to make you ‘Ready &amp; Relevant’ for these selected
companies by building skills, arranging live projects, case studies, webinars and
draw industry speakers from these companies.</p>  
            <p class="edit_Text">Selecting right Industry and Company in beginning of your career is crucial
because most of corporate &amp; personal problems arise due to wrong industry and
company selection.</p>  -->
            <div class="edit_profile_form student_edit">
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-profile',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',
                                        )));?>
                <div class="row">
                    
                    <div <?php if(isset($_REQUEST['display'])){?>style="display:none;"<?php }?> class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $userData->fname !=""){?>class="active"<?php }?>>First Name <em>*</em></label>
                            <input type="text" value="<?php echo $userData->fname;?>" class="input_field" id="profile_fname" name="fname">
                        </div>
                    </div>
                    <div <?php if(isset($_REQUEST['display'])){?>style="display:none;"<?php }?> class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $userData->lname !=""){?>class="active"<?php }?>>Last Name <em>*</em></label>
                            <input type="text" value="<?php echo $userData->lname;?>" class="input_field" id="profile_lname" name="lname">
                        </div>
                    </div>
                    <div <?php if(isset($_REQUEST['display']) && $_REQUEST['display']!="pp"){?>style="display:none;"<?php }?> class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input_browse">
							<label class="prpfile_img">Select Profile Image</label>
                            <div class="form-group">
		<input type="file" class="filestyle input_field" placeholder="Upload Resume" name="img" data-buttonName="btn-primary">
                                <!--<input type="file" id="profile_resume" name="img" class="file">
                                <div class="input-group col-xs-12">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                    <input type="text" class="input_field" disabled placeholder="Upload Image">
                                    <span class="input-group-btn">
                                        <button class="browse" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                    </span>
                                </div>-->
                            </div>
                        </div>
                    </div> 
                    <div <?php if(isset($_REQUEST['display'])){?>style="display:none;"<?php }?> class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input_browse">
							<label class="prpfile_img">Select Resume</label>
                            <div class="form-group">
								<input type="file" name="fname" class="filestyle input_field" placeholder="Upload Resume" data-buttonName="btn-primary">
	
                               <!-- <input type="file" id="profile_resume" name="fname" class="file">
                                <div class="input-group col-xs-12">
                                    <span class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                    <input type="text" class="input_field" disabled placeholder="Upload Resume">
                                    <span class="input-group-btn">
                                        <button class="browse" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                    </span>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div <?php if(isset($_REQUEST['display']) ){?>style="display:none;"<?php }?> class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_fb) && !empty($data['profile_json']->profile_fb)) {?>class="active"<?php }?>>Twitter URL</label>
                            <input type="text" class="input_field" name="profile_fb" value="<?php echo isset($data['profile_json']->profile_fb)?$data['profile_json']->profile_fb:"";?>">
                        </div>
                    </div>
                    <div <?php if(isset($_REQUEST['display'])){?>style="display:none;"<?php }?>  class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_linked) && !empty($data['profile_json']->profile_linked)) {?>class="active"<?php }?>>Linkedin URL </label>
                            <input type="text" class="input_field" name="profile_linked" value="<?php echo isset($data['profile_json']->profile_fb)?$data['profile_json']->profile_fb:"";?>">
                        </div>
                    </div> 
                    
                    <div <?php if( (isset($_REQUEST['display']) && $_REQUEST['display'] != "ind")){?>style="display:none;"<?php }?>  class="col-md-12 col-sm-12 col-xs-12 industry_field">
                        
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_industry) && !empty($data['profile_json']->profile_industry)) {?>class="active"<?php }?>>Industry</label>
                            <?php if (isset($data['profile_json']->profile_industry)) {?>
                            <?php foreach ($data['profile_json']->profile_industry as $ke=>$ind) {?>
                            <div class="phAnimate">
                                <input type="text" class="input_field" name="profile_industry[]" value="<?php echo $ind;?>">
                                
                                <?php if($ke == 0){?>
                                <a class="add_more_link" id="add_more_link" href="javascript:void(0);">Add More</a>
                                <?php } else {?>
                                <a class="add_more_link remove_link" href="javascript:void(0);">Remove</a>
                                <?php }?>
                            </div>
                            <?php }}else {?>
                            <div class="phAnimate">
                                <input type="text" class="input_field" name="profile_industry[]">
                                <a class="add_more_link" id="add_more_link" href="javascript:void(0);">Add More</a>
                            </div>
                            <?php }?>
                        
                    </div>
                    <div <?php if( (isset($_REQUEST['display']) && $_REQUEST['display'] != "comp")){?>style="display:none;"<?php }?> class="col-md-12 col-sm-12 col-xs-12 company_filed">
                        
                            <label class="out_active" for="firstname" <?php if (isset($data['profile_json']->profile_companies) && !empty($data['profile_json']->profile_companies)) {?>class="active"<?php }?>>Companies</label>
                            <?php if (isset($data['profile_json']->profile_companies)) {?>
                            <?php foreach ($data['profile_json']->profile_companies as $ke=>$ind) {?>
                            <div class="phAnimate">
                                <input type="text" class="input_field" name="profile_companies[]" value="<?php echo $ind;?>">
                                <?php if($ke == 0){?>
                                <a class="add_more_link" id="company_more" href="javascript:void(0);">Add More</a>
                                <?php } else {?>
                                <a class="add_more_link remove_link" href="javascript:void(0);">Remove</a>
                                <?php }?>
                            </div>
                            <?php }}else {?>
                                <div class="phAnimate">
                                <input type="text" class="input_field" name="profile_companies[]">
                                <a class="add_more_link" id="company_more" href="javascript:void(0);">Add More</a>
                                </div>
                            <?php }?>
                        
                    </div>
                   
                    
                    <div class="submit_edit" id="submit_library_profile" style="pointer: cursor;">
                        <div class="site_btn"><a data-toggle="modal" data-target="" class="raised ripple has-ripple" href="javascript:void('0')">Save</a></div>
                    </div>
                </div>
                <?php $this->endWidget();?>         
            </div>
        </div>
    </div>
</section>