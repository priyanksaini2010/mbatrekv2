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
                <li class="active"><a href="javascript:void(0);">Add Document</a></li>
            </ul>
        </div>
        <div class="main_heading edit_hdng">
            
            <h4>Profile</h4>
            
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
                                        'id'=>'filter-form-adddoc',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',
                                        )));?>
                <div class="row">
                    
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input_browse">
						    <label class="prpfile_img">Select Document</label>
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
                    
                   
                    
                    <div class="submit_edit" id="submit_add" style="pointer: cursor;">
                        <div class="site_btn"><a data-toggle="modal" data-target="" class="raised ripple has-ripple" href="javascript:void('0')">Save</a></div>
                    </div>
                </div>
                <?php $this->endWidget();?>         
            </div>
        </div>
    </div>
</section>