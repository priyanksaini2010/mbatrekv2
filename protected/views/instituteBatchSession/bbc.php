<article>
<section class="banner_area casestudy">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   
    <section class="industrial_portal student_portal">
	<div class="container">
	    <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Session</a></li>
            </ul>
        </div>    
	    <?php 
	    $subs = $data['userData']->subscription;
	    $sessionDetails = InstituteBatchSession::model()->findByPk($data['id']);
	    $arr = array(
		"institute_batch_id" => $data['student_profile']->institute_batch_id,
		'type' => $subs,
		"module_id" => $sessionDetails->module_id
	    );
	    $allSessions  = InstituteBatchSession::model()->findAllByAttributes($arr);;

	    ?>
	    <div class="progress_b2c">
		<ul class="list-inline list-unstyled">
		    <li>
			<a href="javascript:void(0);">
			    <span class="icon_round">
				<i class="fa fa-play" aria-hidden="true"></i>
			    </span>
			    <span class="text_click">Start</span>
			</a>
			<span class="line_draw"></span>
		    </li>
		    <?php foreach ($allSessions as $key=>$sess) {
			if ($sess->id == $data['id']) {
			    $next  = $key+1;
			    $class="disabled_class";
			    $icon = '<i  class="fa fa-unlock-alt padding_i" aria-hidden="true"></i>';
			} else {
			    $class="";
			    $icon = '<i class="fa fa-pencil" aria-hidden="true"></i>';
			}
			
		    ?>
		    <li class="<?php echo  $class;?>">
			<a href="javascript:void(0);">
			    <span class="icon_round">
				<?php echo $icon;?>
			    </span>
			    <span class="text_click"><?php echo $sess->session_name;?></span>
			</a>
			<span class="line_draw"></span>
		    </li>
		    <?php }?>
		    
		    <li>
			<a href="javascript:void(0);">
			    <span class="icon_round">
				<i class="fa fa-stop padding_i" aria-hidden="true"></i>
			    </span>
			    <span class="text_click">End</span>
			</a>
			<span class="line_draw"></span>
		    </li>
		</ul>
	    </div> 
	    <div class="col-md-12">
		<div class="left_b2c_side">
		    <div class="job_post">
			<div class="fob_form">
			    <div class="row">
				<div class="from_fill">
				    <div class="col-md-4 col-sm-5 col-xs-12">
					<div class="input_label">
					    <label>Estimated Duration </label>
					</div>
				    </div>
				    <div class="col-md-8 col-sm-8 col-xs-12">
					<div class="phAnimate">
					    <label for="firstname">Company Name <em>*</em></label>
					    <input type="text" class="input_field" id="Email" value="<?php echo $sessionDetails->estimated_duration;?>">
					</div>
				    </div>
				</div>
				<div class="from_fill">
				    <div class="col-md-4 col-sm-4 col-xs-12">
					<div class="input_label">
					    <label>Course Outline </label>
					</div>
				    </div>
				    <div class="col-md-8 col-sm-8 col-xs-12">
					<div class="row">
					    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="outlines_div">
						    <ul class="list-unstyled">
							<?php $dt = explode("|",$sessionDetails->course_outline  );?>
							<?php foreach($dt as $d){?>
							<li><span>- <?php echo $d?></span></li>
							<?php }?>
						    </ul>
						</div>
					    </div>
					    <div class="b2c_video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/afr9yVTGK-0" frameborder="0" allowfullscreen></iframe>
					    </div>
					</div>
				    </div>
				</div>

				<div class="clearfix"></div>
				<div class="site_btn bbc_btn">
				    <button type="submit" class="yello_btn raised ripple" >Submit</button>
				</div>
			    </div>
			</div>
		    </div>
		</div>
		<div class="reply_back">
		    <a class="back_to" href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-reply" aria-hidden="true"></i> Back to Portal</a>
		    <?php if(isset($allSessions[$next])) {?>
		    <a class="forward_to" href="<?php echo Yii::app()->createUrl('student/bbc',array('id'=>$allSessions[$next]->id));?>"><i class="fa fa-share" aria-hidden="true"></i> Next Session</a>
		    <?php }?>
		</div>
	    </div>
	</div>
    </section>
</article>