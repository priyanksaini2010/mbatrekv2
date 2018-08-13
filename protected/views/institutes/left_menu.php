<div class="col-md-3 col-sm-4 col-xs-12 side_bar">
    <div class="left_sidebar institute_pleft">
        <div class="links_container">
            <ul class="list-unstyled">
                <li>
                    <a href="javascript:void(0);">Attendance</a>
                    <div class="srore_students_Detl">
                        <ul class="list-unstyled">
                            <?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
                                <li><a href="<?php echo Yii::app()->createUrl('institutes/attendance', array('batch_id' => $course->id)); ?>"><?php echo $key + 1; ?>) <?php echo $course->universityCourseBatch->courser_name."(".$course->universityCourseBatch->courser_batch.")"; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0);">Scores Of Students</a>
                    <div class="srore_students_Detl">
                        <ul class="list-unstyled">
                            <?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
                                <li><a href="<?php echo Yii::app()->createUrl('institutes/studentscore', array('batch_id' => $course->id)); ?>"><?php echo $key + 1; ?>) <?php echo $course->universityCourseBatch->courser_name."(".$course->universityCourseBatch->courser_batch.")"; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0);">Student’s Rating to MBAtrek’s Module</a>
                    <div class="srore_students_Detl">
                        <ul class="list-unstyled">
                            <?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
                                <li><a href="<?php echo Yii::app()->createUrl('institutes/feedbacktombatrack', array('batch_id' => $course->id)); ?>"><?php echo $key + 1; ?>) <?php echo $course->universityCourseBatch->courser_name."(".$course->universityCourseBatch->courser_batch.")"; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                
                <li>
                    <a href="javascript:void(0);">MBAtrek Feedback To MBA  Students</a>
                    <div class="srore_students_Detl">
                        <ul class="list-unstyled">
                            <?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
                                <li><a href="<?php echo Yii::app()->createUrl('institutes/feedbackfrommbatrack', array('batch_id' => $course->id)); ?>"><?php echo $key + 1; ?>) <?php echo $course->universityCourseBatch->courser_name."(".$course->universityCourseBatch->courser_batch.")"; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo Yii::app()->createUrl("institutes/talktous"); ?>">Talk To Us</a></li>
            </ul>
        </div>  
    </div> 
</div>
