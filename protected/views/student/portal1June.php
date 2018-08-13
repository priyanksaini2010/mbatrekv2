<section class="banner_area student_portal">
    <div class="container">
	<h2>You are always a student, never a master. You have to keep moving forward</h2>
	<span>- Conrad Hall</span>
    </div>
</section>  
<section class="industrial_portal student_portal">

    <div class="container">
	<div class="row">
	    <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
		<?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
	    </div>
	    <div class="col-md-9 col-sm-8 col-xs-12">
		<div class="right_sidebar">
		    <div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
			    <div class="button_progess">
				<a href="<?php echo Yii::app()->createUrl("student/portal"); ?>">Score</a>
			    </div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
			    <div class="button_progess">
				<a href="<?php echo Yii::app()->createUrl("student/feedbacks"); ?>">Remarks Feedback</a>
			    </div>
			</div>
		    </div>
		    <div class="progress_div">
			<h2>Recent Progress</h2>
			<?php
			$stud = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
			$totalAssignments = ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id));
			$totalCaseStudy = ModuleCasestudy::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id));
			$total = count($totalAssignments) + count($totalCaseStudy);

			$totalAssQuiz = ModuleAssignmentStudentScore::model()->findAllByAttributes(array("student_id" => $stud->id, "status" => 3));
			$totalCaseScore = CasestudyStudentScore::model()->findAllByAttributes(array("student_id" => $stud->id));
			$tot = count($totalAssQuiz) + count($totalCaseScore);
			if($total != 0) {
			    $per = $tot / $total * 100;
			} else {
			    $per = 0;
			}
			
			$per = ceil($per);
			?>
			<div class="progress_status">
			    <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per; ?>%;">
				</div>
			    </div>
			    <span class="progress-completed"><?php echo $per; ?>% Completed</span>
			</div>
		    </div>
		    <div class="module_container">
			<div class="session_table">
			    <table class="col-md-12 table-bordered ">
				<thead class="cf">
				    <tr>
					<th class="first_th">S.No.</th>
					<th class="module_text">Module</th>
					<th colspan="3" class="scrose_text">Score</th>
				    </tr>
				</thead>
				<tbody>
				    <tr class="first_row">
					<td class="main_heading_td"></td>
					<td class="main_heading_td"></td>
					<td class="main_heading_td first">Individual</td>
					<td class="main_heading_td">Relative / College</td>
					<td class="main_heading_td">Relative / University</td>
				    </tr>
				    <?php foreach ($data['modules'] as $counterModule => $module) { 
					$total = 0;
						$indtot = 0;
						$assignments = CHtml::listData(ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id, "module_id" => $module->id)), "id", "id");
						if (!empty($assignments)) {
						    $cri = new CDbCriteria();
						    $cri->addInCondition("module_assignment_id", $assignments);
						    $cri->addCondition("student_id =" . $stud->id);
						    $scoreass = ModuleAssignmentStudentScore::model()->findAll($cri);
						    foreach ($scoreass as $sc) {
							$total = $total + $sc->total_score;
							$indtot = $indtot + $sc->student_score;
						    }
						}
						$assignments = CHtml::listData(ModuleCasestudy::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id, "module_id" => $module->id)), "id", "id");
						if (!empty($assignments)) {
						    $cri = new CDbCriteria();
						    $cri->addInCondition("casestudy_id", $assignments);
						    $cri->addCondition("student_id = " . $stud->id);
						    $scoreass = CasestudyStudentScore::model()->findAll($cri);
						    foreach ($scoreass as $sc) {
							$total = $total + $sc->total_score;
							$indtot = $indtot + $sc->student_score;
						    }
						}
						if ($total != 0) {
						    $per = ceil($indtot / $total * 100) / 10;
						} else {
						    $per = 0;
						}
						if ($per >  0) {
				    ?>
    				    <tr>
    					<td><?php echo $counterModule + 1; ?></td>
    					<td>
    					    <ul class="list-unstyled">
						    <?php echo $module->name; ?>
    					    </ul>
    					</td>
    					<td>
						<?php
						    echo $per;
						?>

    					</td>
    					<td>
						<?php
						$total = 0;
						$indtot = 0;
						$assignments = CHtml::listData(ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id, "module_id" => $module->id)), "id", "id");
						if (!empty($assignments)) {
						    $cri = new CDbCriteria();
						    $cri->addInCondition("module_assignment_id", $assignments);
//                                                                                                            $cri->addCondition("student_id =". $stud->id);
						    $scoreass = ModuleAssignmentStudentScore::model()->findAll($cri);
						    foreach ($scoreass as $sc) {
							$total = $total + $sc->total_score;
							$indtot = $indtot + $sc->student_score;
						    }
						}
						$assignments = CHtml::listData(ModuleCasestudy::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id, "module_id" => $module->id)), "id", "id");
						if (!empty($assignments)) {
						    $cri = new CDbCriteria();
						    $cri->addInCondition("casestudy_id", $assignments);
//                                                                                                            $cri->addCondition("student_id = ". $stud->id);
						    $scoreass = CasestudyStudentScore::model()->findAll($cri);
						    foreach ($scoreass as $sc) {
							$total = $total + $sc->total_score;
							$indtot = $indtot + $sc->student_score;
						    }
						}
						if ($total != 0) {
						    $per = ceil($indtot / $total * 100) / 10;
						} else {
						    $per = 0;
						}

						echo $per;
						?>

    					</td>
    					<td>
						<?php
						$total = 0;
						$indtot = 0;
						$assignments = CHtml::listData(ModuleAssignment::model()->findAllByAttributes(array("module_id" => $module->id)), "id", "id");
						if (!empty($assignments)) {
						    $cri = new CDbCriteria();
						    $cri->addInCondition("module_assignment_id", $assignments);
//                                                                                                            $cri->addCondition("student_id =". $stud->id);
						    $scoreass = ModuleAssignmentStudentScore::model()->findAll($cri);
						    foreach ($scoreass as $sc) {
							$total = $total + $sc->total_score;
							$indtot = $indtot + $sc->student_score;
						    }
						}
						$assignments = CHtml::listData(ModuleCasestudy::model()->findAllByAttributes(array("institute_batch_id" => $stud->institute_batch_id, "module_id" => $module->id)), "id", "id");
						if (!empty($assignments)) {
						    $cri = new CDbCriteria();
						    $cri->addInCondition("casestudy_id", $assignments);
//                                                                                                            $cri->addCondition("student_id = ". $stud->id);
						    $scoreass = CasestudyStudentScore::model()->findAll($cri);
						    foreach ($scoreass as $sc) {
							$total = $total + $sc->total_score;
							$indtot = $indtot + $sc->student_score;
						    }
						}
						if ($total != 0) {
						    $per = ceil($indtot / $total * 100) / 10;
						} else {
						    $per = 0;
						}

						echo $per;
						?>
    					</td>
    				    </tr>
						<?php }} ?>

				</tbody>
			    </table>
			</div>
		    </div>
		    <div class="to_do_container">
			<h3>To - Do List</h3>
			<div class="session_table">
			    <div class="portal_last">
				<table class="col-md-12 table-bordered ">
				    <thead class="cf">
					<tr>
					    <th class="first_th">S.No.</th>
					    <th class="module_text">Module</th>
					    <th class="module_text">Title</th>
					    <th  class="scrose_text">Due Date</th>
					    <th  class="scrose_text">Open</th>
					    <th  class="scrose_text">Close</th>
					    <th  class="scrose_text">Status</th>
					</tr>
				    </thead>
				    <tbody>
					<?php foreach ($data['assigments'] as $counterAssignment => $assignment) { ?>
    					<tr>
    					    <td><?php echo $counterAssignment + 1; ?></td>
    					    <td><p><?php echo $assignment->module->name; ?></p></td>
    					    <td><p><?php echo $assignment->title; ?></p></td>
    					    <td class="date_text"><p><?php echo date("d.m.Y", strtotime($assignment->due_date)); ?></p></td>
    					    <td class="date_text"><?php echo date("d.m.Y", strtotime($assignment->open_date)); ?></td>
    					    <td class="date_text"><?php echo date("d.m.Y", strtotime($assignment->close_date)); ?></td>
					    <td>
                                                <?php
                                                    $attributes = array(
                                                        "student_id" => $data['student_profile']->id ,
                                                        "module_assignment_id" =>$assignment->id,
                                                    );
                                                    $studentScore = ModuleAssignmentStudentScore::model()->findByAttributes($attributes);
                                                    if (!empty($studentScore)) {
                                                        switch($studentScore->status) {
                                                            case 1:
                                                                    echo "Started";
                                                                break;
                                                            case 2:
                                                                    echo "Completed";
                                                                break;
                                                            case 3:
                                                                    echo "Closed";
                                                                break;
                                                        }
                                                    } else {
                                                        echo "Not Started";
                                                    }
                                                ?>
                                            </td>
    					</tr>
					<?php } ?>

				</table>

			    </div>

			</div>
			<div class="view_all_anchr">
			    <a href="<?php echo Yii::app()->createUrl('student/assignments'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i> View All</a>
			</div>
		    </div>
		</div>
	    </div> 
	</div>
    </div>
</section>