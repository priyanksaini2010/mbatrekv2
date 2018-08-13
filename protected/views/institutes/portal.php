<!--<section class="banner_area institute_portal">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  -->
<?php // pr($data['institute']->institute->instituteBatches, false);
    $industryProfile = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
?>
<?php echo $this->renderPartial("profile", array('data' => $data)); ?>
<section class="industrial_portal student_portal">

    <div class="container">
        <div class="row">
	    <?php echo $this->renderPartial("left_menu", array('data' => $data)); ?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar institute_ptl_tb">
                    <div class="module_container margin_bottom_45">
                        <div class="session_table">
                            <table class="col-md-12 table-bordered ">
                                <thead class="cf">
                                    <tr>
                                        <th class="first_th">S.No.</th>
                                        <th class="module_text">Performance</th>
                                        <th class="scrose_text">College</th>
                                        <th class="scrose_text">All Colleges</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span class="attendance_span">Attendance</span>
                                            <ul class="attence_ul">
						<?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
    						<li> <?php echo $course->universityCourseBatch->courser_name . "(" . $course->universityCourseBatch->courser_batch . ")"; ?></li>
						<?php } ?>
                                            </ul>
                                        </td>
                                        <td>
					    <?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>

                                                <div class="bar_graph" id="chartContainer<?php echo $batch->id; ?>" style="height: 200px; width: 100%;"></div>



					    <?php } ?>
                                        </td>
                                        <td>
					    <?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>

                                                <div class="bar_graph" id="chartContaineruniv<?php echo $batch->id; ?>" style="height: 200px; width: 100%;"></div>



					    <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <span class="attendance_span">Scores</span>
                                            <ul class="attence_ul">
						<?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
    						<li> <?php echo $course->universityCourseBatch->courser_name . "(" . $course->universityCourseBatch->courser_batch . ")";
						; ?></li>
<?php } ?>
                                            </ul>
                                        </td>
                                        <td>
<?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>



					    <?php } ?>

<?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>

                                                <div class="bar_graph" id="chartContainerscore<?php echo $batch->id; ?>" style="height: 200px; width: 100%;"></div>



<?php } ?>
                                            <div id="graph"></div>
                                        </td>
                                        <td>
<?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>

                                                <div class="bar_graph" id="chartContainerunivscore<?php echo $batch->id; ?>" style="height: 200px; width: 100%;"></div>



<?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <span class="attendance_span">Feedback of MBAtrek to students</span>
                                            <ul class="attence_ul">
						<?php foreach ($data['institute']->institute->instituteBatches as $key => $course) { ?>
    						<li> <?php echo $course->universityCourseBatch->courser_name . "(" . $course->universityCourseBatch->courser_batch . ")"; ?></li>
<?php } ?>
                                            </ul>
                                        </td>
                                        <td>
<?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>


					    <?php } ?>

<?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>

                                                <div class="bar_graph" id="chartContainerfeed<?php echo $batch->id; ?>" style="height: 200px; width: 100%;"></div>



<?php } ?>
                                            <div id="graph"></div>
                                        </td>
                                        <td>
<?php foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) { ?>

                                                <div class="bar_graph" id="chartContainerunivfeed<?php echo $batch->id; ?>" style="height: 200px; width: 100%;"></div>



<?php } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="contact_now">
                            <h2>One Point Contact:</h2>
                            <span class="contact_img"></span>
                            <a href="mailto:<?php echo $data['institute']->institute->support_email;?>"><?php echo $data['institute']->institute->support_email;?></a>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</section> 