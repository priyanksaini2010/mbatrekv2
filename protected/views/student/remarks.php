<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 

<section class="industrial_portal student_feedback">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Feedback to MBAtrek</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
		<?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <!-- <div class="main_heading edit_hdng">
                        <h4>Feedback</h4>
                        <h3>Student Feedback</h3> 
                </div> -->
                <div class="right_sidebar student_remarks_div">
                    <div class="mudle_field remarks_student">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="imnput_module">
				    <?php
				    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
					'id' => 'filter-form-attendance',
					'enableAjaxValidation' => false,
					'method' => 'GET',
					'htmlOptions' => array(
					    'class' => 'form-horizontal',
				    )));
				    ?>
				    <select name="module_id" id="filter-module">
                                        <option value="">Module</option>
					<?php foreach ($data['modules'] as $module) { ?>
    					<option <?php if ($data['module_id'] == $module->id) { ?>selected="selected"<?php } ?> value="<?php echo $module->id; ?>"><?php echo $module->name; ?></option>
					<?php } ?>

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
					<th class="agenda_th">Session</th>
					<th>Criteria</th>
					<th class="feedback_th">Not Valuable At All</th>
					<th class="feedback_th">Little Valuable</th>
					<th class="feedback_th">Moderately Valuable</th>
					<th class="feedback_th">Highly Valuable</th>
					<th class="feedback_th">Very Highly Valuable</th>
				    </tr>
				</thead>
				<tbody>
				    
<?php
foreach ($data['sessions'] as $k => $session) {
    $rat = StudentSessionFeedback::model()->findByAttributes(array("student_id" => $data['student_profile']->id, "session_id" => $session->id));
   
    ?>
<?php if (!empty($rat) && ($rat->rating != 0 && $rat->rating_2 != 0  && $rat->rating_3 != 0  && $rat->rating_4 != 0  && $rat->rating_5 != 0 )) {?>
					<tr class="already_given">
					    <td><?php echo $k+1;?></td>
					    <td><?php echo $session->session_name; ?></td>
					    <td colspan="6">Feedback already given for this session.</td>
					</tr>
				    
				    <?php } else {?>


    				    <tr>
					
					
    					<td  rowspan="6"  class="first_td"><?php echo $k+1;?>.</td>
    					<td rowspan="6"><?php echo $session->session_name;?></td>
					
    					<td>
    					    Understanding of concepts and its practicle applications
    					</td>
    					<td>
    					    <div class="readio_btn">
			    <label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating) && $rat->rating == 1) { ?>checked="checked"<?php } ?>  type="radio" value="1" alt="<?php echo $session->id; ?>" name="radiobo<?php echo $session->id; ?>" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating"> 
					    <span class="material-radio-group__element material-radio-group__check-radio"></span> 
					    <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating) && $rat->rating == 2) { ?>checked="checked"<?php } ?>  type="radio" value="2" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating"> 
    						    <span class="material-radio-group__element material-radio-group__check-radio"></span>
    						    <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating) && $rat->rating == 3) { ?>checked="checked"<?php } ?>  type="radio" value="3" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating"> 
    						    <span class="material-radio-group__element material-radio-group__check-radio"></span> 
    						    <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating) && $rat->rating == 4) { ?>checked="checked"<?php } ?>  type="radio" value="4" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating">  
    						    <span class="material-radio-group__element material-radio-group__check-radio"></span> 
    						    <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating) && $rat->rating == 5) { ?>checked="checked"<?php } ?>  type="radio" value="5" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating">  
    						    <span class="material-radio-group__element material-radio-group__check-radio"></span> 
    						    <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    				    </tr>
				    <tr>
    					<td>Enhancing the classroom learning with global industry related interfaces</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_2) && $rat->rating_2 == 1) { ?>checked="checked"<?php } ?>  type="radio" value="1" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_2" id="radio<?php echo $str; ?>"  class="material-radiobox remark" rating_type="rating_2">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_2) && $rat->rating_2 == 2) { ?>checked="checked"<?php } ?>  type="radio" value="2" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_2" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_2">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_2) && $rat->rating_2 == 3) { ?>checked="checked"<?php } ?>  type="radio" value="3" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_2" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_2">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_2) && $rat->rating_2 == 4) { ?>checked="checked"<?php } ?>  type="radio" value="4" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_2" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_2">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_2) && $rat->rating_2 == 5) { ?>checked="checked"<?php } ?>  type="radio" value="5" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_2" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_2">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    				    </tr>
				    <tr>
    					<td>Handling of queries by life coach</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_3) && $rat->rating_3 == 1) { ?>checked="checked"<?php } ?>  type="radio" value="1" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_3" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_3"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_3) && $rat->rating_3 == 2) { ?>checked="checked"<?php } ?> type="radio" value="2" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_3" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_3"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_3) && $rat->rating_3 == 3) { ?>checked="checked"<?php } ?> type="radio" value="3" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_3" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_3"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_3) && $rat->rating_3 == 4) { ?>checked="checked"<?php } ?> type="radio" value="4" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_3" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_3"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_3) && $rat->rating_3 == 5) { ?>checked="checked"<?php } ?> type="radio" value="5" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_3" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_3"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    				    </tr>
				    <tr>
    					<td>Delivery of content by life coach</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_4) && $rat->rating_4 == 1) { ?>checked="checked"<?php } ?> type="radio" value="1" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_4" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_4"> <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_4) && $rat->rating_4 == 2) { ?>checked="checked"<?php } ?> type="radio" value="2" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_4" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_4">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_4) && $rat->rating_4 == 3) { ?>checked="checked"<?php } ?> type="radio" value="3" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_4" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_4">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_4) && $rat->rating_4 == 4) { ?>checked="checked"<?php } ?> type="radio" value="4" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_4" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_4">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_4) && $rat->rating_4 == 5) { ?>checked="checked"<?php } ?> type="radio" value="5" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_4" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_4">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    				    </tr>
				    <tr>
    					<td>Content / program material imparted during program</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_5) && $rat->rating_5 == 1) { ?>checked="checked"<?php } ?> type="radio" value="1" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_5" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_5">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_5) && $rat->rating_5 == 2) { ?>checked="checked"<?php } ?> type="radio" value="2" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_5" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_5">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_5) && $rat->rating_5 == 3) { ?>checked="checked"<?php } ?> type="radio" value="3" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_5" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_5">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_5) && $rat->rating_5 == 4) { ?>checked="checked"<?php } ?> type="radio" value="4" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_5" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_5">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    					<td>
    					    <div class="readio_btn">
    						<label class="main-container__column material-radio-group material-radio-group_primary" for="radio<?php
							   $str = generateRandomString(10);
							   echo $str;
							   ?>">
<input <?php if (isset($rat->rating_5) && $rat->rating_5 == 5) { ?>checked="checked"<?php } ?> type="radio" value="5" alt="<?php echo $session->id; ?>" name="radiobox<?php echo $session->id; ?>_5" id="radio<?php echo $str; ?>" class="material-radiobox remark" rating_type="rating_5">  <span class="material-radio-group__element material-radio-group__check-radio"></span> <span class="material-radio-group__element material-radio-group__caption"></span>
    						</label>
    					    </div>
    					</td>
    				    </tr>



				    <?php break;}} ?>
				</tbody>
			    </table>
			</div>
		    </div>
                </div>
            </div> 
        </div>
    </div>
</section>