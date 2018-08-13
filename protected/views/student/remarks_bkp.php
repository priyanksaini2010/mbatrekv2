<section class="banner_area">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 

<section class="industrial_portal student_feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <!-- <div class="main_heading edit_hdng">
                        <h4>Feedback</h4>
                        <h3>Student Feedback</h3> 
                </div> -->
                <div class="right_sidebar remark_righbar">
                    <div class="mudle_field remarks_student">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="imnput_module">
                                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                    'id'=>'filter-form-attendance',
                                    'enableAjaxValidation'=>false,
                                    'method' =>'GET',
                                    'htmlOptions'=>array(
                                        'class'=>'form-horizontal',


                                    ))); ?>
                                <select name="module_id" id="filter-module">
                                        <option value="">Module</option>
                                        <?php foreach ($data['modules'] as $module){?>
                                        <option <?php if ($data['module_id'] == $module->id) {?>selected="selected"<?php }?> value="<?php echo $module->id;?>"><?php echo $module->name;?></option>
                                        <?php }?>
                                        
                                    </select>
                                 <?php $this->endWidget(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module_progess">
                        <div class="session_table">
                            <table class="col-md-12 table-bordered">
                                <thead class="cf">
                                    <tr>
                                        <th>S.No.</th>
                                        <th class="agenda_th" >Session</th>
                                        <th>Criteria</th>
                                        <th class="feedback_th">Not Valuable At All</th>
                                        <th class="feedback_th">Little Valuable</th>
                                        <th class="feedback_th">Moderately Valuable</th>
                                        <th class="feedback_th">Highly Valuable</th>
                                        <th class="feedback_th">Very Highly Valuable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data['sessions'] as $k=>$session) {
                                        $rat = StudentSessionFeedback::model()->findByAttributes(array("student_id"=>$data['student_profile']->id , "session_id"=>$session->id));
                                        ?>
                                        <tr>

                                            <td class="first_td"><?php echo $k+1;?></td>
                                            <td><?php echo $session->session_name;?></td>
                                            <td>Understanding of concepts and its practicle applications</td>
                                            <td>
                                                <div class="readio_btn">
                                                    <label class="main-container__column material-radio-group material-radio-group_primary" for="radio2">
                                    <input type="radio" value="1" <?php if(isset($rat->rating) && $rat->rating == 1){?>checked="checked"<?php }?> alt="<?php echo $session->id;?>" name="radiobox<?php echo $session->id;?>" id="radio2" class="material-radiobox remark"> 
                                                        <span class="material-radio-group__element material-radio-group__check-radio"></span> 
                                                        <span class="material-radio-group__element material-radio-group__caption"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="readio_btn">
                                                    <label class="main-container__column material-radio-group material-radio-group_primary" for="radio3">
                                                        <input type="radio"  value="2"  <?php if(isset($rat->rating) && $rat->rating == 2){?>checked="checked"<?php }?> alt="<?php echo $session->id;?>" name="radiobox<?php echo $session->id;?>" id="radio3" class="material-radiobox remark"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="readio_btn">
                                                    <label class="main-container__column material-radio-group material-radio-group_primary" for="radio4">
                                                        <input type="radio"  <?php if(isset($rat->rating) && $rat->rating == 3){?>checked="checked"<?php }?>  value="3" alt="<?php echo $session->id;?>" name="radiobox<?php echo $session->id;?>" id="radio4" class="material-radiobox remark"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="readio_btn">
                                                    <label class="main-container__column material-radio-group material-radio-group_primary" for="radio5">
                                                        <input type="radio"  <?php if(isset($rat->rating) && $rat->rating == 4){?>checked="checked"<?php }?>  value="4" alt="<?php echo $session->id;?>" name="radiobox<?php echo $session->id;?>" id="radio5" class="material-radiobox remark"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="readio_btn">
                                                    <label class="main-container__column material-radio-group material-radio-group_primary" for="radio6">
                                                        <input type="radio"  <?php if(isset($rat->rating) && $rat->rating == 5){?>checked="checked"<?php }?> value="5" alt="<?php echo $session->id;?>" name="radiobox<?php echo $session->id;?>" id="radio6" class="material-radiobox remark"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>