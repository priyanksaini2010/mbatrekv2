<?php $userData = Users::model()->findByPk(Yii::app()->user->id);

?>
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
                <li class="active"><a href="javascript:void(0);">My Preferred Industries</a></li>
            </ul>
        </div>
        <div class="main_heading edit_hdng">
            
            <h4>Profile</h4>
            <h3>My Preferred Industries</h3>
        </div>
        <div class="edit_wrapper">
            <p class="edit_Text">You have a choice to pick your preferred Industry based on your background and
					area of interest. Remember it is important for you to have a right ‘industry
					mindset’ for this MBAtrek will first run industry analysis module, to give you an
					idea of your preferred industry.</p>  
					 <p class="edit_Text">We will help you identify top 5 industry for your career ahead and after this, all
further steps will be inclined towards these selected industries.</p>  
<p class="edit_Text">Selecting right Industry and Company in beginning of your career is crucial
because most of the corporate &amp; personal problems arise due to wrong industry
and company selection.</p> 
            
            <div class="edit_profile_form edit_form_industry">
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-industry',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',
                                        )));?>
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" class="active" >Preferred Industry 1<em>*</em></label>
                            <select name="industry_1" class="input_field">
				<?php
				    $dataIn = IndustryOption::model()->findAllByAttributes(array("option_number"=>1));
				    foreach ($dataIn as $datav) {
				?>
				<option <?php if($data['student_profile']->industry_1 == $datav->id){?>selected="selected"<?php }?> value="<?php echo $datav->id;?>"><?php echo $datav->option_name;?></option>
				    <?php }?>
			    </select>
                        </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" class="active">Preferred Industry 2<em>*</em></label>
                            <select name="industry_2" class="input_field">
				<?php
				    $dataIn = IndustryOption::model()->findAllByAttributes(array("option_number"=>2));
				    foreach ($dataIn as $datav) {
				?>
				<option <?php if($data['student_profile']->industry_2 == $datav->id){?>selected="selected"<?php }?> value="<?php echo $datav->id;?>"><?php echo $datav->option_name;?></option>
				    <?php }?>
			    </select>
                        </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" class="active">Preferred Industry 3<em>*</em></label> 
                            <select name="industry_3" class="input_field">
				<?php
				    $dataIn = IndustryOption::model()->findAllByAttributes(array("option_number"=>3));
				    foreach ($dataIn as $datav) {
				?>
				<option <?php if($data['student_profile']->industry_3 == $datav->id){?>selected="selected"<?php }?> value="<?php echo $datav->id;?>"><?php echo $datav->option_name;?></option>
				    <?php }?>
			    </select>
                        </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" class="active">Preferred Industry 4<em>*</em></label>
                            <select name="industry_4" class="input_field">
				<?php
				    $dataIn = IndustryOption::model()->findAllByAttributes(array("option_number"=>4));
				    foreach ($dataIn as $datav) {
				?>
				<option <?php if($data['student_profile']->industry_4 == $datav->id){?>selected="selected"<?php }?> value="<?php echo $datav->id;?>"><?php echo $datav->option_name;?></option>
				    <?php }?>
			    </select>
                        </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phAnimate">
                            <label for="firstname" class="active">Preferred Industry 5<em>*</em></label>
                            <select name="industry_5" class="input_field">
				<?php
				    $dataIn = IndustryOption::model()->findAllByAttributes(array("option_number"=>5));
				    foreach ($dataIn as $datav) {
				?>
				<option <?php if($data['student_profile']->industry_5 == $datav->id){?>selected="selected"<?php }?> value="<?php echo $datav->id;?>"><?php echo $datav->option_name;?></option>
				    <?php }?>
			    </select>

                        </div>
						</div>
                    </div>
                    
                        
                    </div> 
                    <div class="submit_edit" id="submit_library_profile" style="pointer: cursor;">
                        <div class="site_btn"><a data-toggle="modal" data-target="" onclick="$('#filter-form-industry').submit();" class="raised ripple has-ripple" href="javascript:void('0')">Save</a></div>
                    </div>
                </div>
                <?php $this->endWidget();?>         
            </div>
        </div>
    </div>
</section>