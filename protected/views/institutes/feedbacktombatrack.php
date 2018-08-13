<section class="banner_area who_we_are">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   

<section class="industrial_portal feedbacktombatrek">
    
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Feedback given by students to MBAtrek</a></li>
            </ul>
        </div>
        <div class="row">
	    <?php echo $this->renderPartial("left_menu", array('data' => $data)); ?>
	    <div class="col-md-9 col-sm-8 col-xs-12">
	    <div class="right_sidebar institue_consoldate">
		<div class="new_heading">
		    <h3>Ratings Given By Students To MBAtrek Modules</h3>
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
			<option <?php if ($_REQUEST['module_id'] == $module->id) {?>selected="selected"<?php }?> value="<?php echo $module->id;?>"><?php echo $module->name;?></option>
			<?php }?>
                    </select>
		    <?php $this->endWidget(); ?>
		</div>
		<?php 
		$perTotal = 0;
		$perConsolidated = 0;
		$counter = 1;
		$to = 0;
		$to2 = 0;
		$to3 = 0;
		$to4 = 0;
		$to5 = 0;
		$given = 0;
		$given2 = 0;
		$given3 = 0;
		$given4 = 0;
		$given5 = 0;
		$given_1_1 = 0;
		$given_1_2 = 0;
		$given_1_3 = 0;
		$given_1_4 = 0;
		$given_1_5 = 0;
		$given_2_1 = 0;
		$given_2_2 = 0;
		$given_2_3 = 0;
		$given_2_4 = 0;
		$given_2_5 = 0;
		$given_3_1 = 0;
		$given_3_2 = 0;
		$given_3_3 = 0;
		$given_3_4 = 0;
		$given_3_5 = 0;
		$given_4_1 = 0;
		$given_4_2 = 0;
		$given_4_3 = 0;
		$given_4_4 = 0;
		$given_4_5 = 0;
		$given_5_1 = 0;
		$given_5_2 = 0;
		$given_5_3 = 0;
		$given_5_4 = 0;
		$given_5_5 = 0;
		$per = 0;
		$per2 = 0;
		$per3 = 0;
		$per4 = 0;
		$per5 = 0;
		$arr = array("institute_batch_id" => $batch_id);
		$all = 0;
		if(isset($_REQUEST['module_id']) && $_REQUEST['module_id'] != "") {
		    $arr['module_id'] = $_REQUEST['module_id'];
		}
		$sessions = InstituteBatchSession::model()->findAllByAttributes($arr);
		foreach ($sessions as $count => $module) {
		    $criteria = new CDbCriteria;


		    $students = array();
		    
		    $batchStudents = Students::model()->findAllByAttributes(array("institute_batch_id" => $batch_id));

		    foreach ($batchStudents as $batchStudent) {
			$students[] = $batchStudent->id;
		    }
		    
		    $criteria->addCondition('session_id = '.$module->id);
		    
		    if (!empty($students)) {
			$criteria->addInCondition('student_id', $students);
		    }
		    $rating = StudentSessionFeedback::model()->findAll($criteria);

		    
		    foreach ($rating as $rats) {
			$to = $to + 5;
			$to2 = $to2 + 5;
			$to3 = $to3 + 5;
			$to4 = $to4 + 5;
			$to5 = $to5 + 5;
			$given = $given + $rats->rating;
			switch ($rats->rating){
			    case 1:
				$given_1_1 =  $given_1_1 +1;
				break;
			    case 2:
				$given_1_2 =  $given_1_2 +1;
				break;
			    case 3:
				$given_1_3 =  $given_1_3 +1;
				break;
			    case 4:
				$given_1_4 =  $given_1_4+1;
				break;
			    case 5:
				$given_1_5 =  $given_1_5 +1;
				break;
			}
			$given2 = $given2 + $rats->rating_2;
			switch ($rats->rating_2){
			    case 1:
				$given_2_1 =  $given_2_1 +1;
				break;
			    case 2:
				$given_2_2 =  $given_2_2 +1;
				break;
			    case 3:
				$given_2_3 =  $given_2_3 +1;
				break;
			    case 4:
				$given_2_4 =  $given_2_4+1;
				break;
			    case 5:
				$given_2_5 =  $given_2_5 +1;
				break;
			}
			$given3 = $given3 + $rats->rating_3;
			switch ($rats->rating_3){
			    case 1:
				$given_3_1 =  $given_3_1 +1;
				break;
			    case 2:
				$given_3_2 =  $given_3_2 +1;
				break;
			    case 3:
				$given_3_3 =  $given_3_3 +1;
				break;
			    case 4:
				$given_3_4 =  $given_3_4+1;
				break;
			    case 5:
				$given_3_5 =  $given_3_5 +1;
				break;
			}
			$given4 = $given4 + $rats->rating_4;
			switch ($rats->rating_4){
			    case 1:
				$given_4_1 =  $given_4_1 +1;
				break;
			    case 2:
				$given_4_2 =  $given_4_2 +1;
				break;
			    case 3:
				$given_4_3 =  $given_4_3 +1;
				break;
			    case 4:
				$given_4_4 =  $given_4_4+1;
				break;
			    case 5:
				$given_4_5 =  $given_4_5 +1;
				break;
			}
			$given5 = $given5 + $rats->rating_5;
			switch ($rats->rating_5){
			    case 1:
				$given_5_1 =  $given_5_1 +1;
				break;
			    case 2:
				$given_5_2 =  $given_5_2 +1;
				break;
			    case 3:
				$given_5_3 =  $given_5_3 +1;
				break;
			    case 4:
				$given_5_4 =  $given_5_4+1;
				break;
			    case 5:
				$given_5_5 =  $given_5_5 +1;
				break;
			}
			
		    }	
		    $all = $all + count($rating);
		}
		
		if ($all != 0) {
		    $given_1_1 = ceil($given_1_1 /$all *100);
		    $given_1_2 = ceil($given_1_2 /$all *100);
		    $given_1_3 = ceil($given_1_3 /$all *100);
		    $given_1_4 = ceil($given_1_4 /$all *100);
		    $given_1_5 = ceil($given_1_5 /$all *100);
		    $given_2_1 = ceil($given_2_1 /$all *100);
		    $given_2_2 = ceil($given_2_2 /$all *100);
		    $given_2_3 = ceil($given_2_3 /$all *100);
		    $given_2_4 = ceil($given_2_4 /$all *100);
		    $given_2_5 = ceil($given_2_5 /$all *100);
		    $given_3_1 = ceil($given_3_1 /$all *100);
		    $given_3_2 = ceil($given_3_2 /$all *100);
		    $given_3_3 = ceil($given_3_3 /$all *100);
		    $given_3_4 = ceil($given_3_4 /$all *100);
		    $given_3_5 = ceil($given_3_5 /$all *100);
		    $given_4_1 = ceil($given_4_1 /$all *100);
		    $given_4_2 = ceil($given_4_2 /$all *100);
		    $given_4_3 = ceil($given_4_3 /$all *100);
		    $given_4_4 = ceil($given_4_4 /$all *100);
		    $given_4_5 = ceil($given_4_5 /$all *100);
		    $given_5_1 = ceil($given_5_1 /$all *100);
		    $given_5_2 = ceil($given_5_2 /$all *100);
		    $given_5_3 = ceil($given_5_3 /$all *100);
		    $given_5_4 = ceil($given_5_4 /$all *100);
		    $given_5_5 = ceil($given_5_5 /$all *100);
		}
		$cnt = count($sessions);
		if ($to != 0) {
			$per = ceil($given / $to * 100);
			if($per >= 90) {
			    $per =  5;
			} else if($per >= 80 && $per < 90) {
			    $per =  4;
			} else if($per >= 70 && $per < 80) {
			    $per =  3;
			} else if($per >= 60 && $per < 70) {
			    $per =  2;
			} else if($per < 60) {
			    $per =  1;
			}
			
		}
		if ($to2 != 0) {
		    $per2 = ceil($given2 / $to2 * 100);
		    if($per2 >= 90) {
			$per2 =  5;
		    } else if($per2 >= 80 && $per2 < 90) {
			$per =  4;
		    } else if($per2 >= 70 && $per2 < 80) {
			$per2 =  3;
		    } else if($per2 >= 60 && $per2 < 70) {
			$per2 =  2;
		    } else if($per2 < 60) {
			$per2 =  1;
		    }
		}
		if ($to3 != 0) {
		    $per3 = ceil($given3 / $to3 * 100);
		    if($per3 >= 90) {
			$per3 =  5;
		    } else if($per3 >= 80 && $per3 < 90) {
			$per =  4;
		    } else if($per3 >= 70 && $per3 < 80) {
			$per3 =  3;
		    } else if($per3 >= 60 && $per3 < 70) {
			$per3 =  2;
		    } else if($per3 < 60) {
			$per3 =  1;
		    }
		}
		if ($to4 != 0) {
		    $per4 = ceil($given4 / $to4 * 100);
		    if($per4 >= 90) {
			$per4 =  5;
		    } else if($per4 >= 80 && $per4 < 90) {
			$per =  4;
		    } else if($per4 >= 70 && $per4 < 80) {
			$per4 =  3;
		    } else if($per4 >= 60 && $per4 < 70) {
			$per4 =  2;
		    } else if($per4 < 60) {
			$per4 =  1;
		    }
		}
		if ($to5 != 0) {
		    $per5 = ceil($given5 / $to5 * 100);
		    if($per5 >= 90) {
			$per5 =  5;
		    } else if($per5 >= 80 && $per5 < 90) {
			$per =  4;
		    } else if($per5 >= 70 && $per5 < 80) {
			$per5 =  3;
		    } else if($per5 >= 60 && $per5 < 70) {
			$per5 =  2;
		    } else if($per5 < 60) {
			$per5 =  1;
		    }
		}
		
		?>
		<div class="module_progess institue_consoldate_mbtreck">
		    <div class="session_table">
			<table class="col-md-12 table-bordered">
			    <thead>
				<tr>
				    <th class="first_th">S.No.</th>
				    <th class="agenda_th">Criterion</th>
				    <th class="score_obtain">Ratings Given By Students To MBAtrek</th>
				</tr>
			    </thead>
			    <tbody>
				<tr>
				    <td class="first_td"></td>
				    <td></td>
				    <td class="inner_value">
					<table class="inner_progresss">
					    <tbody>
						<tr>
						    <td class="first_td Very_low">
							<span class="progess_level">1</span>
							<span class="progess_info">Not Valuable at all<span>
							    </span></span></td>
						    <td class="low_2">
							<span class="progess_level">2</span>
							<span class="progess_info">Little Valuable<span>
							    </span></span></td>
						    <td class="Moderate">
							<span class="progess_level">3</span>
							<span class="progess_info"> Moderately Valuable<span>
							    </span></span></td>
						    <td class="High_4">
							<span class="progess_level">4</span>
							<span class="progess_info"> Highly <br>Valuable<span>
							    </span></span></td>
						    <td class="Very_high">
							<span class="progess_level">5</span>
							<span class="progess_info"> Very Highly Valuable<span>
							    </span></span></td>
						</tr>
					    </tbody>
					</table>
				    </td>
				</tr>
				<tr>
				    <td class="first_td">1</td>
				    <td><span class="scrore_td">Understanding of concepts  and its practical applications</span></td>
				    <td class="inner_value">
					<table class="inner_progresss">
					    <tbody>
						<tr>
						    <td class="first_td <?php if($per == 1){?> Very_low<?php }?>"><?php echo $given_1_1!=0?$given_1_1."%":"";?></td>
						    <td class="<?php if($per == 2){?> low_2<?php }?>" ><?php echo $given_1_2!=0?$given_1_2."%":"";?></td>
						    <td class="<?php if($per == 3){?> Moderate<?php }?>" ><?php echo $given_1_3!=0?$given_1_3."%":"";?></td>
						    <td class="<?php if($per == 4){?> High_4<?php }?>"><?php echo $given_1_4!=0?$given_1_4."%":"";?></td>
						    <td class="<?php if($per == 5){?> Very_high<?php }?>"><?php echo $given_1_5!=0?$given_1_5."%":"";?></td>
						</tr>
					    </tbody>
					</table>
				    </td>
				</tr>
				<tr>
				    <td class="first_td">2</td>
				    <td><span class="scrore_td">Enhancing the classroom learning with global industry related interfaces</span></td>
				    <td class="inner_value">
					<table class="inner_progresss">
					    <tbody>
						<tr>
						    <td class="first_td <?php if($per2 == 1){?> Very_low<?php }?>"><?php echo $given_2_1!=0?$given_2_1."%":"";?></td>
						    <td class="<?php if($per2 == 2){?> low_2<?php }?>" ><?php echo $given_2_2!=0?$given_2_2."%":"";?></td>
						    <td class="<?php if($per2 == 3){?> Moderate<?php }?>" ><?php echo $given_2_3!=0?$given_2_3."%":"";?></td>
						    <td class="<?php if($per2 == 4){?> High_4<?php }?>"><?php echo $given_2_4!=0?$given_2_4."%":"";?></td>
						    <td class="<?php if($per2 == 5){?> Very_high<?php }?>"><?php echo $given_2_5!=0?$given_2_5."%":"";?></td>
						</tr>
					    </tbody>
					</table>
				    </td>
				</tr>
				<tr>
				    <td class="first_td">3</td>
				    <td><span class="scrore_td">Handling of queries by life coach</span></td>
				    <td class="inner_value">
					<table class="inner_progresss">
					    <tbody>
						<tr>
						     <td class="first_td <?php if($per3 == 1){?> Very_low<?php }?>"><?php echo $given_3_1!=0?$given_3_1."%":"";?></td>
						    <td class="<?php if($per3 == 2){?> low_2<?php }?>" ><?php echo $given_3_2!=0?$given_3_2."%":"";?>
						    <td class="<?php if($per3 == 3){?> Moderate<?php }?>" ><?php echo $given_3_3!=0?$given_3_3."%":"";?></td>
						    <td class="<?php if($per3 == 4){?> High_4<?php }?>"><?php echo $given_3_4!=0?$given_3_4."%":"";?></td>
						    <td class="<?php if($per3 == 5){?> Very_high<?php }?>"><?php echo $given_3_5!=0?$given_3_5."%":"";?></td>
						</tr>
					    </tbody>
					</table>
				    </td>
				</tr>
				<tr>
				    <td class="first_td">4</td>
				    <td><span class="scrore_td">Delivery of content by life coach</span></td>
				    <td class="inner_value">
					<table class="inner_progresss">
					    <tbody>
						<tr>
						    <td class="first_td <?php if($per4 == 1){?> Very_low<?php }?>"><?php echo $given_4_1!=0?$given_4_1."%":"";?></td>
						    <td class="<?php if($per4 == 2){?> low_2<?php }?>" ><?php echo $given_4_2!=0?$given_4_2."%":"";?></td>
						    <td class="<?php if($per4 == 3){?> Moderate<?php }?>" ><?php echo $given_4_3!=0?$given_4_3."%":"";?></td>
						    <td class="<?php if($per4 == 4){?> High_4<?php }?>"><?php echo $given_4_4!=0?$given_4_4."%":"";?></td>
						    <td class="<?php if($per4 == 5){?> Very_high<?php }?>"><?php echo $given_4_5!=0?$given_4_5."%":"";?></td>
						</tr>
					    </tbody>
					</table>
				    </td>
				</tr>
				<tr>
				    <td class="first_td">5</td>
				    <td><span class="scrore_td">Content / program material imparted during program</span></td>
				    <td class="inner_value">
					<table class="inner_progresss">
					    <tbody>
						<tr>
						    <td class="first_td <?php if($per5 == 1){?> Very_low<?php }?>"><?php echo $given_5_1!=0?$given_5_1."%":"";?></td>
						    <td class="<?php if($per5 == 2){?> low_2<?php }?>" ><?php echo $given_5_2!=0?$given_5_2."%":"";?></td>
						    <td class="<?php if($per5 == 3){?> Moderate<?php }?>" ><?php echo $given_5_3!=0?$given_5_3."%":"";?></td>
						    <td class="<?php if($per5 == 4){?> High_4<?php }?>"><?php echo $given_5_4!=0?$given_5_4."%":"";?></td>
						    <td class="<?php if($per5 == 5){?> Very_high<?php }?>"><?php echo $given_5_5!=0?$given_5_5."%":"";?></td>
						</tr>
					    </tbody>
					</table>
				    </td>
				</tr>
			    </tbody>
			</table>
		    </div>
		</div>
	    </div>

	</div>
	</section>
						