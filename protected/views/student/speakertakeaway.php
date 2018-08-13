<section class="banner_area webinar our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   
<section class="industrial_portal student_webinar">	
    <div class="container">
        <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Speaker Takeaway</a></li>
            </ul>
        </div>  
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <?php echo $this->renderPartial('left_menu',array("data"=>$data));?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar">
                    <div class="wbinar_content">
                        <table class="col-md-12 table-bordered ">
                            <tbody>
                                <?php foreach ($data['webinars'] as $counterAssignment=>$assignment){?>
                                <tr>
                                    <td class="time_Frame">
                                        <span class="date_web"><?php echo date('d', strtotime($assignment->date_time));?></span>
                                        <span class="time_web"><?php echo date('M, Y', strtotime($assignment->date_time));?></span>
                                    </td>
                                    <td class="time_text">
                                        <span class="time_td"><?php echo date('H:i', strtotime($assignment->date_time));?></span>
                                        <label><?php echo $assignment->instituteCourse->details;?></label>
                                        <label><?php echo $assignment->module->name;?></label>
                                    </td>
                                    <td class="arrow_height">
                                        <div class="wrap_height">
                                            <label>SPEAKER: <?php echo $assignment->speaker;?></label>
                                            <h3><?php echo $assignment->title;?></h3>
                                            <p>About Speaker - <?php echo $assignment->about_speaker;?></p>
                                            <div class="web_btn">
                                                <div class="site_btn"><a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl('site/downloadfiles', array('path' => Yii::app()->baseUrl.'/assets/webinar/'.$assignment->file,'name'=>$assignment->file)) ?>">Download <i class="fa fa-download" aria-hidden="true"></i> </a></div>
<!--                                                <div class="view_btn site_btn"><a data-toggle="modal" data-target="#myModal1" class="raised ripple has-ripple" href="#myModal1">Preview <i class="fa fa-eye" aria-hidden="true"></i> </a></div>-->
                                            </div>
                                            
                                        </div>
                                        <span class="arrow_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>