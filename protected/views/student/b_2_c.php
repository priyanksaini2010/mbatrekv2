
<div class="right_sidebar b2c_portal">
    <div class="to_do_container">
	<div class="session_table">
	    <div class="portal_last">
		<table class="col-md-12 table-bordered ">
		    <thead class="cf">
			<tr>
			    <th class="first_th">S.No.</th>
			    <th class="module_text">Module</th>	
			    <th  class="free_text">Free</th>
			    <th  class="scrose_text">Walk</th>
			    <th  class="scrose_text">Jog</th>
			    <th  class="scrose_text">Run</th>
			</tr>
		    </thead>
		    <tbody>
			<?php
			$subs = $data['userData']->subscription;
			
			foreach ($data['modules'] as $counterModule => $module) {
			    $arr = array(
				"institute_batch_id" => $data['student_profile']->institute_batch_id,
				'type' => 1,
				"module_id" => $module->id
			    );
			    $free = InstituteBatchSession::model()->findAllByAttributes($arr);
			    $arr["type"] = 2;
			    $walk = InstituteBatchSession::model()->findAllByAttributes($arr);
			    $arr["type"] = 3;
			    $jog = InstituteBatchSession::model()->findAllByAttributes($arr);
			    $arr["type"] = 4;
			    $run = InstituteBatchSession::model()->findAllByAttributes($arr);
			    if (!empty($free) || !empty($walk) || !empty($jog) || !empty($jog)) {
				?>
				<tr>
				    <td><?php echo $counterModule + 1; ?></td>
				    <td><strong><?php echo $module->name; ?></strong></td>
				    <td>
					<ul class="list-unstyled">
					    <?php foreach ($free as $sess) { ?>
	    				    <li><a href="<?php echo Yii::app()->createUrl("student/bbc",array("id"=>$sess->id));?>"> <?php echo $sess->session_name; ?></a></li>
					    <?php } ?>
					</ul>
				    </td>
				    <td>
					<ul class="list-unstyled">
					    <?php foreach ($walk as $sess) {
	if($subs >= 2){$link = Yii::app()->createUrl("student/bbc",array("id"=>$sess->id));$onclick = "#";}else{$link = "javascript:void('0')";$onclick = " $('#myModalSubs').modal('show');";}
						
						?>
		<li><a href="<?php echo $link?>" onclick="<?php echo $onclick?>"> <?php echo $sess->session_name; ?></a></li>
					    <?php } ?>
					</ul>
				    </td>
				    <td>
					<ul class="list-unstyled">
					    <?php foreach ($jog as $sess) { 
		    if($subs >= 3){$link = Yii::app()->createUrl("student/bbc",array("id"=>$sess->id));$onclick = "#";}else{$link = "javascript:void('0')";$onclick = " $('#myModalSubs').modal('show');";}
						
						?>
		<li><a href="<?php echo $link?>" onclick="<?php echo $onclick?>"> <?php echo $sess->session_name; ?></a></li>
					    <?php } ?>
					</ul>
				    </td>
				    <td>
					<ul class="list-unstyled">
					    <?php foreach ($run as $sess) { 
		if($subs >= 4){$link = Yii::app()->createUrl("student/bbc",array("id"=>$sess->id));$onclick = "#";}else{$link = "javascript:void('0')";$onclick = " $('#myModalSubs').modal('show');";}
						
						?>
		<li><a href="<?php echo $link?>" onclick="<?php echo $onclick?>"> <?php echo $sess->session_name; ?></a></li>
					    <?php } ?>
					</ul>
				    </td>
				</tr>
			    <?php }
			}
			?>
		    </tbody>
		</table>
	    </div>
	</div>
	<div class="module_container">
	    <div class="session_table">
		<table class="col-md-12 table-bordered ">
		    <thead class="cf">
			<tr>
			    <th class="first_th">S.No.</th>
			    <th class="module_text module_size">Module</th>
			    <th class="scrose_text" colspan="3">Score</th>
			</tr>
		    </thead>
		    <tbody>
			<tr class="first_row">
			    <td></td>
			    <td></td>
			    <td class="main_heading_td first">Individual</td>
			    <td class="main_heading_td">Relative</td>
			</tr>
			<tr>
			    <td class="module_inner"></td>
			    <td class="module_inner">
				<ul class="list-unstyled">

				</ul>
			    </td>
			    <td class="multi_table">
				<table class="col-md-12 table-bordered ">
				    <thead>
					<tr>
					    <th>Case Study</th>
					    <th>Assignment</th>
					</tr>
				    </thead>

				</table>
			    </td>
			    <td class="multi_table">
				<table class="col-md-12 table-bordered ">
				    <thead>
					<tr>
					    <th>Case Study</th>
					    <th>Assignment</th>
					</tr>
				    </thead>

				</table>
			    </td>

			</tr>
			<?php 
				$stud = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
				    $ct = 1;foreach ($data['modules'] as $counterModule => $module) { 
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
						$assignTotScore = $total;
						$assignIndScore = $indtot;
						
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
						
						$case = $assignments;
						$caseTotScore = $total -  $assignTotScore;
						$caseIndScore = $indtot - $assignIndScore;
						$caseper = 0;
						$assignper = 0;
						if ($total != 0) {
						    $per = ceil($indtot / $total * 100) / 10;
						} else {
						    $per = 0;
						}
						if ($assignTotScore != 0) {
						    $assignper = ceil($assignIndScore / $assignTotScore * 100) / 10;
						} else {
						    $assignper = 0;
						}
						if ($caseTotScore != 0) {
						    $caseper = ceil($caseIndScore / $caseTotScore * 100) / 10;
						} else {
						    $caseper = 0;
						}
						if (count($case) > 0 || count($assignments) > 0) {
				    ?>
			<tr>
			    <td><?php echo $ct; $ct++ ?></td>
			    <td>
				<ul class="list-unstyled">
				    <?php echo $module->name; ?>
				</ul>
			    </td>
			    <td class="multi_table">
				<table class="col-md-12 table-bordered ">

				    <tbody>
					<tr>
					    <td><?php echo $caseper;?></td>
					    <td><?php echo $assignper?></td>
					</tr>
				    </tbody>
				</table>
			    </td>
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
						$assignTotScore = $total;
						$assignIndScore = $indtot;
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
						$caseTotScore = $total -  $assignTotScore;
						$caseIndScore = $indtot - $assignIndScore;
						$caseper = 0;
						$assignper = 0;
						if ($total != 0) {
						    $per = ceil($indtot / $total * 100) / 10;
						} else {
						    $per = 0;
						}
						if ($assignTotScore != 0) {
						    $assignper = ceil($assignIndScore / $assignTotScore * 100) / 10;
						} else {
						    $assignper = 0;
						}
						if ($caseTotScore != 0) {
						    $caseper = ceil($caseIndScore / $caseTotScore * 100) / 10;
						} else {
						    $caseper = 0;
						}
						
						   
						
						?>


			    <td class="multi_table">
				<table class="col-md-12 table-bordered ">

				    <tbody>
					<tr>
					    <td><?php echo $caseper;?></td>
					    <td><?php echo $assignper?></td>
					</tr>
				    </tbody>
				</table>
			    </td>

			</tr>
			<?php }} ?>
		    </tbody>

		</table>
	    </div>
	    
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 b2c_bton">
		<div class="site_btn">
		    <a href="<?php echo Yii::app()->createUrl("student/feedbacks"); ?>">Remarks Feedback</a>
		</div>
	</div>
    </div>
</div> 
<div id="myModalSubs" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <div class="modal-body">
                <div class="md-content">
                    <h3>Error !</h3>
                    <div class="error_wrap">
                        <div class="error_container">
                      <p><i class="fa fa-warning" aria-hidden"true"=""></i>Sorry, you are not subscribed for this session..</p>
                        </div>
                        <!-- <button class="md-close">OK</button> -->
                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>