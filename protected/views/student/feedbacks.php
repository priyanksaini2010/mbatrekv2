<section class="banner_area">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="industrial_portal remarks_student">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Feedbacks</a></li>
            </ul>
        </div>
	<div class="row">
	    <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
		<?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
	    <div class="col-md-9 col-sm-8 col-xs-12">
		<!--		<div class="main_heading edit_hdng">
					<h4>Feedback</h4>
					<h3>Student Feedback</h3> 
				</div>-->
		<div class="right_sidebar ">
		    <div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
			    <div class="remarks_fields">
				<div class="job_post">
				    <div class="fob_form">
					<div class="row">
					    <div class="from_fill">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="input_label">
							<label>Feedback By </label>
						    </div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						    <div class="populated_fields">
							<label><?php echo isset($data['feedbacks']->feedback_by) ? $data['feedbacks']->feedback_by : ""; ?> </label>
						    </div>
						</div>
					    </div>
					    <div class="from_fill">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="input_label">
							<label>Module</label>
						    </div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						    <div class="phAnimate">
							<?php $module = Module::model()->findAll();
							?>
							<select name="module_id" >
							    <?php foreach ($module as $m) { ?>
    							    <option <?php if (isset($data['feedbacks']->instituteBatchSession->module_id) && $data['feedbacks']->instituteBatchSession->module_id == $m->id) { ?>selected = "selected"<?php } ?>><?php echo $m->name; ?></option>
							    <?php } ?>
							</select>
						    </div>
						</div>
					    </div>
					    <div class="from_fill">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="input_label">
							<label>Session</label>
						    </div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						    <div class="phAnimate">
							<select name="session_id">
							    <?php foreach ($data['sessions'] as $k => $m) { ?>
    							    <option <?php if (isset($data['feedbacks']->instituteBatchSession->module_id) && $data['feedbacks']->instituteBatchSession->id == $k) { ?>selected = "selected"<?php } ?>><?php echo $m; ?></option>
							    <?php } ?>
							</select>
						    </div>
						</div>
					    </div>
					    <div class="from_fill">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="input_label">
							<label class="current_perfomn">Current Performance</label>
						    </div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						    <div class="populated_fields">
							<label><?php echo isset($data['feedbacks']->current_performance) ? $data['feedbacks']->current_performance : ""; ?></label>
						    </div>
						</div>
					    </div>
					    <div class="from_fill">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="input_label">
							<label class="past_perfmn">Past Improvements</label>
						    </div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
						    <div class="populated_fields">
							<label><?php echo isset($data['feedbacks']->past_performance) ? $data['feedbacks']->past_performance : ""; ?></label>
						    </div>
						    <div class="reply_btn">
							<div class="site_btn"><a class="add_zindex raised ripple md-trigger has-ripple" data-toggle="modal" href="#remarks_pop">Reply</a></div>
						    </div>
						    <div id="remarks_pop" class="modal" data-easein="expandIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							    <div class="modal-content">
								<div class="model_content_wrper">
								    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								    <?php
								    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
									'id' => 'filter-form-query',
									'enableAjaxValidation' => false,
									'htmlOptions' => array(
									    'class' => 'form-horizontal',
								    )));
								    ?>
								    <div class="modal-body">
									<div class="modeal_heading">
									    <h2>Reply?</h2>
									    <h3>Have a Question?</h3>
									</div>
									<div class="post_query">
									    <label>Post Query</label>
									    <textarea name="query" placeholder="Write a Query" id="query"></textarea>
									    <div class="reply_btn">
										<div class="site_btn"><a class="raised ripple md-trigger has-ripple"  href="javascript:void(0);" id="sub-query-sub">Submit</a></div>
									    </div>
									</div>
								    </div>
								    <?php $this->endWidget(); ?>
								</div>
							    </div>
							</div>
						    </div>
						</div>
					    </div>
					    <?php if(isset($data['feedbacks']->instituteBatchStudentSessionRemarkResponses)){?>
					    
						
						<?php foreach ($data['feedbacks']->instituteBatchStudentSessionRemarkResponses as $resp) { ?>
						<div class="from_fill">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="input_label">
					<label><?php echo $resp->response_given_by == 1?"Response":"Query";?></label>
						    </div>
						</div>
    						<div class="col-md-9 col-sm-9 col-xs-12">
    						    <div class="populated_fields">
    							<label><?php echo isset($resp->response) ? $resp->response : ""; ?></label>
    						    </div>
    						</div>
						</div>
						
						<?php } ?>
					    
					    <?php }?>

					</div>

				    </div>
				</div>
			    </div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 module_pannel">
			    <div class="old_feedback">
				<div class="feedback_heading">
				    <h2>View Old Feedback</h2>
				</div>
				<ul id="accordion1" class="accordion list-unstyled">
				    <?php foreach ($data['modules'] as $mod) {?>
				    <li>
					<div class="link"><?php echo $mod->name;?><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></div>
					
					<ul class="submenu list-unstyled">
					    <?php
$sessions = instituteBatchSession::model()->findAllByAttributes(array(
								"module_id"=>$mod->id,
							"institute_batch_id"=>$data['student_profile']->institute_batch_id
								    ));
					    ?>
					    <?php foreach ($sessions as $sess) { ?>
					    <li><a href="<?php echo Yii::app()->createUrl("student/feedbacks",array("id"=>$sess->id));?>">- <?php echo $sess->session_name?></a></li>
					    <?php }?>
					</ul>
				    </li>
				    <?php }?>
				</ul>
			    </div>
			</div> 
		    </div>
		</div>
	    </div> 
	</div>
    </div>
</section>