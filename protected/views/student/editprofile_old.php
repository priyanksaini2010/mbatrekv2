<?php $userData = Users::model()->findByPk(Yii::app()->user->id);?>
<section class="banner_area editprofile">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   
<section class="bielf_container">
    <div class="container">
        <div class="main_heading edit_hdng">
            <h4>Profile</h4>
            <h3>Edit Student Profile</h3>
        </div>
        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-profile',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',


        ))); ?>
        <div class="edit_wrapper">
            <p class="edit_Text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dignissim sapien convallis felis suscipit sagittis. Morbi non dui tempor, suscipit mi a, facilisis neque. Fusce bibendum fringilla erat in volutpat. Nam ligula metus, viverra molestie finibus quis, tempus vitae augue. In tellus augue, auctor placerat dui sed, consectetur efficitur odio. Aliquam  </p> 
            <div class="edit_profile_form">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $userData->fname !=""){?>class="active"<?php }?>>First Name <em>*</em></label>
                            <input type="text" value="<?php echo $userData->fname;?>" class="input_field" id="profile_fname" name="fname">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if ( $userData->lname !=""){?>class="active"<?php }?>>Last Name <em>*</em></label>
                            <input type="text" value="<?php echo $userData->lname;?>" class="input_field" id="profile_lname" name="lname">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input_browse">
                            <div class="form-group">
                                <input type="file" id="profile_img" name="img" class="file">
                                <div class="input-group col-xs-12">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                    <input type="text" class="input_field" disabled placeholder="Upload Image">
                                    <span class="input-group-btn">
                                        <button class="browse" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input_browse">
                            <div class="form-group">
                                <input type="file" id="profile_resume" name="fname" class="fileresume">
                                <div class="input-group col-xs-12">
                                    <span class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                    <input type="text" class="input_field" disabled placeholder="Upload Resume">
                                    <span class="input-group-btn">
                                        <button class="browse" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_fb) && !empty($data['profile_json']->profile_fb)) {?>class="active"<?php }?>>Facebook URL</label>
                            <input type="text" class="input_field" name="profile_fb" value="<?php echo isset($data['profile_json']->profile_fb)?$data['profile_json']->profile_fb:"";?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_linked) && !empty($data['profile_json']->profile_linked)) {?>class="active"<?php }?>>Linkedin URL </label>
                            <input type="text" class="input_field" name="profile_linked" value="<?php echo isset($data['profile_json']->profile_fb)?$data['profile_json']->profile_fb:"";?>">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_industry) && !empty($data['profile_json']->profile_industry)) {?>class="active"<?php }?>>Industry</label>
                            <?php if (isset($data['profile_json']->profile_industry)) {?>
                            <?php foreach ($data['profile_json']->profile_industry as $ind) {?>
                                <input type="text" class="input_field" name="profile_industry[]" value="<?php echo $ind;?>">
                                <a class="add_more_link" id="add_more_link" href="javascript:void(0);">Add More</a>
                            <?php }}else {?>
                            <input type="text" class="input_field" name="profile_industry[]">
                            
                            <a class="add_more_link" id="add_more_link" href="javascript:void(0);">Add More</a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" <?php if (isset($data['profile_json']->profile_companies) && !empty($data['profile_json']->profile_companies)) {?>class="active"<?php }?>>Companies</label>
                            <?php if (isset($data['profile_json']->profile_companies)) {?>
                            <?php foreach ($data['profile_json']->profile_companies as $ind) {?>
                                <input type="text" class="input_field" name="profile_companies[]" value="<?php echo $ind;?>">
                                <a class="add_more_link" id="company_more" href="javascript:void(0);">Add More</a>
                             <?php }}else {?>
                                <input type="text" class="input_field" name="profile_companies[]">
                                <a class="add_more_link" id="company_more" href="javascript:void(0);">Add More</a>
                             <?php }?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname"  <?php if (isset($data['profile_json']->profile_intership) && !empty($data['profile_json']->profile_intership)) {?>class="active"<?php }?>>Internship</label>
                            <?php if (isset($data['profile_json']->profile_intership)) {?>
                            <?php foreach ($data['profile_json']->profile_intership as $ind) {?>
                            <input type="text" class="input_field" name="profile_intership[]" value="<?php echo $ind;?>">
                            <a class="add_more_link" id="internship_link" href="javascript:void(0);">Add More</a>
                             <?php }}else {?>
                            <input type="text" class="input_field" name="profile_intership[]" value="<?php echo $ind;?>">
                            <a class="add_more_link" id="internship_link" href="javascript:void(0);">Add More</a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname"  <?php if (isset($data['profile_json']->profile_liveproject) && !empty($data['profile_json']->profile_liveproject)) {?>class="active"<?php }?>>Live Project</label>
                            <?php if (isset($data['profile_json']->profile_intership)) {?>
                            <?php foreach ($data['profile_json']->profile_intership as $ind) {?>
                            <input type="text" class="input_field" name="profile_liveproject[]" value="<?php echo $ind;?>">
                            <a class="add_more_link" id="live_linkd" href="javascript:void(0);">Add More</a>
                             <?php }}else {?>
                            <input type="text" class="input_field" name="profile_liveproject[]">
                            <a class="add_more_link" id="live_linkd" href="javascript:void(0);">Add More</a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="submit_edit" id="submit_library_profile" style="pointer: cursor;">
                        <div class="site_btn"><a data-toggle="modal" data-target="" class="raised ripple has-ripple" href="javascript:void('0')">Save</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endWidget();?>         
    </div>
</section>