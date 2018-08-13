<?php $userData = StudentResume::model()->findByAttributes(array("student_id"=>$data['student_profile']->id));

?>
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
            <h3>Edit Student Resume</h3> 
        </div>
        <div class="resume_profile">
            <div class="resume_blocker">
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-profile-resume',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',
                                        )));?>
                    <div class="phAnimate">
                        <label for="firstname" <?php if ( isset($userData->header) && $userData->header !=""){?>class="active"<?php }?>>Resume Header <em>*</em></label>
                        <input type="text" class="input_field" value="<?php echo isset($userData->header)?$userData->header:"";?>" class="input_field" id="profile_header" name="header">
                    </div> 
                    <div class="phAnimate">
                        <label for="firstname" <?php if ( isset($userData->objective) && $userData->objective !=""){?>class="active"<?php }?>>Objective <em>*</em></label>
                        <input type="text" class="input_field" value="<?php echo isset($userData->objective)?$userData->objective:"";?>" class="input_field" id="objective" name="objective">
                    </div>
                    <div class="additional_qualification">
                        <label>Educational Qualification</label>
                        <div id="wrapper">
                            <table id="customFields" class="table-bordered">
                                <thead>
                                    <tr>
                                        <th>Examination</th>
                                        <th>School / Collage</th>
                                        <th>Board / University</th>
                                        <th>Year of Passing</th>
                                        <th>Perchantage / CGPA</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
				    <?php 
				    $qual = json_decode($userData->educational_qualification);
				    
				    if (isset($qual->exam)) {
					
				    
				    foreach ($qual->exam as $k=>$v) {
				?>
                                    <tr>
                                        <td><input type="text" name="exam[]" value="<?php echo  $v;?>"></td>
                                        <td><input type="text" name="school[]" value="<?php echo  $qual->school[$k];?>"></td>
                                        <td><input type="text" name="board[]" value="<?php echo  $qual->board[$k];?>"></td>
                                        <td><input type="text" name="cgpa[]" value="<?php echo  $qual->cgpa[$k];?>"></td>
                                        <td><input type="text"></td>
					<?php if($k == 0) {?>
                                        <td>
                                            <div class="sibmit_form">
                                                <div class="site_btn">
                                                    <button class="raised ripple has-ripple" id="addCF" type="button">Add Fields</button>
                                                </div>
                                            </div>
                                        </td>
					<?php }else {?>
					<td>
                                            <div class="sibmit_form">
                                                <div class="site_btn">
                                                    <button class="raised ripple has-ripple" id="remCF" type="button">Remove</button>
                                                </div>
                                            </div>
                                        </td>
					<?php }?>
                                    </tr>
				    <?php }
				    
				    } else {?>
				    <tr>
                                        <td><input type="text" name="exam[]"></td>
                                        <td><input type="text" name="school[]"></td>
                                        <td><input type="text" name="board[]"></td>
                                        <td><input type="text" name="cgpa[]"></td>
                                        <td><input type="text"></td>
                                        <td>
                                            <div class="sibmit_form">
                                                <div class="site_btn">
                                                    <button class="raised ripple has-ripple" id="addCF" type="button">Add Fields</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
				    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="phAnimate">
                        <label for="firstname" <?php if ( isset($userData->project_undertaken) && $userData->project_undertaken !=""){?>class="active"<?php }?>>Projects Undertaken <em>*</em></label>
                        <input type="text" class="input_field" value="<?php echo isset($userData->project_undertaken)?$userData->project_undertaken:"";?>" class="input_field" id="project_undertaken" name="project_undertaken">
                    </div>
                    <div class="phAnimate">
                        <label for="firstname" <?php if ( isset($userData->achievement_and_key_skills) && $userData->achievement_and_key_skills !=""){?>class="active"<?php }?>>Achievements and Key Skills <em>*</em></label>
                        <input type="text" class="input_field" value="<?php echo isset($userData->achievement_and_key_skills)?$userData->achievement_and_key_skills:"";?>" class="input_field" id="achievement_and_key_skills" name="achievement_and_key_skills">
                    </div>
                    <div class="phAnimate">
                        <label for="firstname" <?php if ( isset($userData->hobbies) && $userData->hobbies !=""){?>class="active"<?php }?>>Hobbies and Extra Co-Curricular Activities <em>*</em></label>
                        <input type="text" class="input_field" value="<?php echo isset($userData->hobbies)?$userData->hobbies:"";?>" class="input_field" id="hobbies" name="hobbies">
                    </div>
                    <div class="phAnimate">
                        <label for="firstname" <?php if ( isset($userData->personal_details) && $userData->personal_details !=""){?>class="active"<?php }?>>Personal Details <em>*</em></label>
                        <input type="text" class="input_field" value="<?php echo isset($userData->personal_details)?$userData->personal_details:"";?>" class="input_field" id="personal_details" name="personal_details">
                    </div>
                    <div class="sibmit_form final_btn">
                        <div class="site_btn submit_btn">
                            <button class="raised ripple has-ripple "  type="submit">Submit Resume</button>
                        </div>
                        
                        <div class="site_btn">
                            <a href="<?php echo Yii::app()->createUrl("student/portal");?>">Cancel</a>
                        </div>
                        
                    </div>
                <?php $this->endWidget();?>   
            </div>
        </div>
    </div>
</section>
