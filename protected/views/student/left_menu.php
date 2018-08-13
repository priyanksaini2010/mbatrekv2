<?php 
$months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');
$year = isset($_GET['year'])?$_GET['year']:date("Y");
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="left_sidebar">
    <?php if($data['student_profile']->instituteBatch->institute->id != 0){?>
    <div class="left_heading">
        <h2>Course Schedule</h2>
    </div>
    <div class="calender_div">
		<div class="calender_block">
			<table class="col-md-12 col-sm-12 col-xs-12 table-bordered table-striped table-condensed cf">
				<tbody>
					<tr>
						<td class="first_year" colspan="4">
							<a class="left_year" href="javascript:void('0')"><i class="fa fa-angle-left" aria-hidden="true"></i></a><span class="year_span"><?php echo date("Y");?></span><a class="right_year" href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</td>
					</tr>
					<tr>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"01","year"=>$year));?>">Jan</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"02","year"=>$year));?>">feb</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"33","year"=>$year));?>">mar</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"04","year"=>$year));?>">apr</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"05","year"=>$year));?>">may</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"06","year"=>$year));?>">Jun</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"07","year"=>$year));?>">Jul</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"08","year"=>$year));?>">Aug</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"09","year"=>$year));?>">sep</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"10","year"=>$year));?>">oct</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"11","year"=>$year));?>">nov</a></td>
						<td><a href="<?php echo Yii::app()->createUrl("student/sessions",array("month"=>"12","year"=>$year));?>">Dec</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		 
    </div>
    <?php } else {
    $b2cPop = BbcPopup::model()->findByPk(1);
    ?>
    <div class="left_heading">
        <h2 style="cursor: pointer" onclick="$('#myModalImage').modal('show')">Course Schedule</h2>
    </div>
    <div class="calender_div">
	<img style="cursor: pointer" onclick="$('#myModalImage').modal('show')" src="<?php echo Yii::app()->baseUrl;?>/images/common_page.jpg" class="img-responsive">
    </div>
    <div id="myModalImage" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content row">
		<div class="modal-body">
		    <div class="md-content">
			<div class="error_wrap">
			    <div class="error_container">
				<p><img src="<?php echo Yii::app()->baseUrl."/assets/eBrouchers/".$b2cPop->image;?>"/ ></p>
			    </div>
			    <!-- <button class="md-close">OK</button> -->
			    <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>
    <?php }?>
<!--    <div class="left_heading">
        <h2>Course Schedule</h2>
    </div>-->
<!--    <div class="strenth_container">
        <div class="post_content">
            <div id="content2-1" class="content">
                <ul class="list-unstyled">
                    <?php // foreach ($data['courseSchedules'] as $schedule) { ?>
                        <li><?php // echo $schedule->details; ?></li>

                    <?php // } ?>
                </ul>
            </div>
        </div>
    </div>-->
 
    <div class="left_heading">
        <h2>Area Of Improvements</h2>
    </div>
    <div class="imporvment_Container">
        <div class="post_content">
            <div id="content3-1" class="content">
                <ul class="list-unstyled">
                    <?php foreach ($data['areaOfImprovements'] as $schedule) { ?>
                    <?php if($schedule->type == 1) {?>
                        <li><?php echo $schedule->notes; ?></li>

                    <?php }} ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="left_heading">
        <h2>Strong Areas</h2>
    </div>
    <div class="imporvment_Container">
        <div class="post_content">
            <div id="content3-1" class="content">
                <ul class="list-unstyled">
                    <?php foreach ($data['areaOfImprovements'] as $schedule) {?>
                        <?php if($schedule->type == 2){?>
                        <li><?php echo $schedule->notes; ?></li>
                        
                        <?php }} ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="links_container">
        <ul class="list-unstyled">
            <li><a href="<?php echo Yii::app()->createUrl('student/casestudy'); ?>">Case Studies</a></li>
	     <?php if($data['student_profile']->instituteBatch->institute->id == 0){?>
            <li><a href="<?php echo Yii::app()->createUrl('student/casestudy'); ?>">Assignments</a></li>
	     <?php }?>
            <li><a href="<?php echo Yii::app()->createUrl('student/webinars'); ?>">Webinar</a></li>
	     <?php if($data['student_profile']->instituteBatch->institute->id != 0){?>
            <li><a href="<?php echo Yii::app()->createUrl('student/speakertakeaway'); ?>">Speaker’s Take Away</a></li>
	     <?php }?>
            <li><a href="<?php echo Yii::app()->createUrl('student/library'); ?>">Library</a></li>
	     <?php if($data['student_profile']->instituteBatch->institute->id != 0){?>
            <li><a href="<?php echo Yii::app()->createUrl('student/remarks'); ?>">Feedback to MBAtrek</a></li>
	     <?php }?>
	     <?php if($data['student_profile']->instituteBatch->institute->id != 0){?>
            <li><a href="<?php echo Yii::app()->createUrl('student/documents'); ?>">My Documents</a></li>
            
	     <?php }?>
        </ul>
    </div>
</div> 
