<?php


    $usersAll = Users::model()->findAllByAttributes(array("role"=>1));
    $cities = array();
    foreach ($usersAll as $us) {
        if ($us->city == "") {
            $us->city = "Others";    
        }
        if (!array_key_exists($us->city, $cities)) {
            
            $cities[$us->city] = 0;
        }
        
    }
    foreach ($usersAll as $uss) {
        $cities[$uss->city] = $cities[$uss->city]+1;
    }
    $optcit = array();
    foreach ($cities as $ks => $ds) {
        
            $optcit[] = array("name" => $ks, "y" => $ds, "exploded" =>"true");
    }
//    pr($optcit);
    $controller = $this->uniqueid;
    $action = $this->action->Id;
    $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : "";?>
<script type="text/javascript">
    window.onload = function() {
<?php
if (($controller == "institutes" && $action == "portal")) {
    $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
    foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) {
        
	//Analysis Institute
	$dataMontl = Presess::model()->findAllByAttributes(array("institute_batch_id" => $batch->id));
        $datPer = array();
        $datPer2 = array();
	
        foreach ($dataMontl as $dataM) {
            $datPer[$dataM->date] = $dataM->total_students;
        }
        $dataAll = PresessAll::model()->findAllByAttributes(array("institute_batch_id" => $batch->id));
        foreach ($dataAll as $dataM) {
            $datPer2[$dataM->date] = $dataM->total_students;
        }
        foreach ($datPer as $kq => $dataM) {
            $datPer[$kq] = $dataM / $datPer2[$kq] * 100;
        }
        $opts = array();
        foreach ($datPer as $k => $d) {
            $opts[] = array("y" => date("M",strtotime($k."-01")), "a" => $d);
        }
	// Analysis University
	
	
	$criteria = new CDbCriteria();
	$criteria->addCondition("university_course_batch_id=".$batch->university_course_batch_id);
//	$criteria->addCondition("id !=".$batch->id);
	$dataUniv = InstituteBatches::model()->findAll($criteria);
	$arrUniv = array();
	$arrIns = array();
        foreach ($dataUniv as $ud) {
	    $arrUniv[] = $ud->id;
	    $arrIns[$ud->id] = $ud->institute_id;
	}
	
	
	$criteria = new CDbCriteria();
	if (!empty($arrUniv)) {
	    $criteria->addInCondition("institute_batch_id", $arrUniv);
	}
	
	$dataMontlUniv = Presess::model()->findAll($criteria);
        $datPerUniv = array();
        $datPer2Univ = array();
        $datTotUniv = array();
//	    [y=>apl,a=>12,b=>12]
        foreach ($dataMontlUniv as $dataMUniv) {
	    
            $datPerUniv[$dataMUniv->date][$arrIns[$dataMUniv->institute_batch_id]] = $dataMUniv->total_students;
        }
        $dataAllUniv = PresessAll::model()->findAll($criteria);
        foreach ($dataAllUniv as $dataMUniv) {
            $datPer2Univ[$dataMUniv->date][$arrIns[$dataMUniv->institute_batch_id]] = $dataMUniv->total_students;
        }
	foreach ($datPerUniv as $kqUniv => $dataMUniv) {
	    foreach ($dataMUniv as $dataMUnivK=>$dataMUnivVal) {
		$datTotUniv[$kqUniv][$dataMUnivK] = $dataMUnivVal / $datPer2Univ[$kqUniv][$dataMUnivK] * 100;
	    }
        }
	$alphabets =	range('a','z');
	$optsUniv = array();
        foreach ($datTotUniv as $kUniv => $dUniv) {
	    $axisUniv = array();
	    $axisUniv["y"] = date("M",strtotime($kUniv."-01"));
	    foreach ($dUniv as $finalKUniv=>$finalUniv) {
		$axisUniv[$alphabets[$finalKUniv]] = $finalUniv;
	    }
            $optsUniv[] = $axisUniv;
        }
	//Analysis Ends
	
	$modules = CHtml::listData(Module::model()->findAll(), "id", "name");
        //Analysis Score
        $modScore = array();
        $modRat = array();
        foreach ($modules as $kmo=>$mo){
            $modScore[$mo] = 0;
            $totalScoreModular = 0;
            $studentScoreModular = 0;
            foreach ($batch->moduleAssignments as $assignmentKey => $assignment) {
                if ($kmo == $assignment->module_id) {
                    foreach ($assignment->moduleAssignmentStudentScores as $scoreKey => $score) {
                        $totalScoreModular = $totalScoreModular + $score->total_score;
                        $studentScoreModular = $studentScoreModular + $score->student_score;
                    }
                }
                
            }
            if ($totalScoreModular != 0) {
                $modScore[$mo] = $studentScoreModular / $totalScoreModular *100;
            } else {
                $modScore[$mo] = 0;
            }
	    
	    
	    //Analysis Feedback Institute
	    $criteria = new CDbCriteria();
	    $studentsAll = CHtml::listData(Students::model()->findAllByAttributes(array("institute_batch_id"=>$batch->id)),"id","id");
	    if (!empty($studentsAll)) {
		$criteria->addInCondition("student_id", $studentsAll);
	    }
	    $criteria->addCondition("module_id=".$kmo);
	    $rating = ModuleStudentRating::model()->findAll($criteria);
	    $totalRat = 0;
	    $studentRat= 0;
            foreach ($rating as $rat) {
		$totalRat = $totalRat + 5;
		$studentRat = $studentRat + $rat->rating;
	    }
	    if ($totalRat != 0) {
                $modRat[$mo] = $studentRat / $totalRat *100;
            } else {
                $modRat[$mo] = 0;
            }
	    // Feedback University
	    $modRatUniv = array();
	    $feedAllInstitutes = InstituteBatches::model()->findAllByAttributes(
						array("university_course_batch_id"=>$batch->university_course_batch_id)
				);
	    $feedInstitutesArray = array();
	    foreach ($feedAllInstitutes as $feedInstituteBatchElementKey=>$feedInstituteBatchElementValue) {
		
		$criteria = new CDbCriteria();
		$studentsInThisBatch = CHtml::listData(Students::model()->findAllByAttributes(
						    array("institute_batch_id"=>$feedInstituteBatchElementValue->id)),"id","id"
						);
		if (!empty($studentsInThisBatch)) {
		    $criteria->addInCondition("student_id", $studentsAll);
		}
		$criteria->addCondition("module_id=".$kmo);
		$ratingGivenByStudentInThisBatchObject = ModuleStudentRating::model()->findAll($criteria);
		$totalOfRating = 0;
		$ratingGivenByStudentNumeric= 0;
		foreach ($ratingGivenByStudentInThisBatchObject as $rat) {
		    $totalOfRating = $totalOfRating + 5;
		    $ratingGivenByStudentNumeric = $ratingGivenByStudentNumeric + $rat->rating;
		}
		
		if ($totalOfRating != 0) {
		    $modRatUniv[$mo][$arrIns[$feedInstituteBatchElementValue->id]] = $ratingGivenByStudentNumeric / $totalOfRating * 100;
		} else {
		    $modRatUniv[$mo][$arrIns[$feedInstituteBatchElementValue->id]] = 0;
		}
	    }
        }
       
        $optrat = array();
        foreach ($modRat as $ks => $ds) {
            $optrat[] = array("y" => $ks, "a" => $ds,"b"=>null);
        }
	
	$optsratUniv = array();
        foreach ($modRatUniv as $ksUniv => $dsUniv) {
	    $axisUniv = array();
	    $axisUniv["y"] = $ks;
	    foreach ($dUniv as $finalKUniv=>$finalUniv) {
		$axisUniv[$alphabets[$finalKUniv]] = $finalUniv;
	    }
            $optsratUniv[] = $axisUniv;
        }   
        $optrat = array();
        foreach ($modRat as $ks => $ds) {
            $optrat[] = array("y" => $ks, "a" => $ds,"b"=>null);
        }
	$optscore = array();

	foreach ($modScore as $ks => $ds) {
	    $optscore[] = array("y" => $ks, "a" => $ds,"b"=>null);
	}

	
	
	
	// Logic for number of bars
	$arrIns = array_unique($arrIns);
	$count = count($arrIns);
	$ykeyatt  = array();
	for($i = 0; $i<$count; $i++) {
	    $ykeyatt[] = "'".$alphabets[$i]."'";
	}
	$ykeyatt = implode(",",$ykeyatt);
        ?>
//Attendance Graph-- Institute                 
Morris.Bar({
  element: "chartContainer" +<?php echo $batch->id ?>,
  data: 
    <?php echo json_encode($opts); ?>
  ,
  resize : false,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['<?php echo $batch->institute->name;?>']
});
//Attendance Graph-- Unniversity
Morris.Bar({
  element: "chartContaineruniv" +<?php echo $batch->id ?>,
  data: 
    <?php echo json_encode($optsUniv); ?>
  ,
  resize : false,
  xkey: 'y',
  ykeys: [<?php echo $ykeyatt;?>],
  labels: ['Series A', 'Series B']
});
//Score Graph -- Innstitute
Morris.Bar({
  element: "chartContainerscore" +<?php echo $batch->id ?>,
  data: 
    <?php echo json_encode($optscore); ?>
  ,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Series A', 'Series B']
});
//Score Graph -- University
 Morris.Bar({
  element: "chartContainerunivscore" +<?php echo $batch->id ?>,
  data: 
    <?php echo json_encode($optscore); ?>
  ,
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
//Feedback Graph -- Innstitute
Morris.Bar({
  element: "chartContainerfeed" +<?php echo $batch->id ?>,
  data: 
    <?php echo json_encode($optrat); ?>
  ,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Series A', 'Series B']
});
//Feedback Graph -- University
 Morris.Bar({
  element: "chartContainerunivfeed" +<?php echo $batch->id ?>,
  data: 
    <?php echo json_encode($optsratUniv); ?>
  ,
  xkey: 'y',
  ykeys: [<?php echo $ykeyatt;?>],
  labels: ['Series A', 'Series B']
});                        
                
    <?php }
    ?>
<?php } ?>
<?php 
if (($controller == "institutes" && $action == "attendance")) {
$data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
    foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) {
        
	//Analysis Institute
	$dataMontl = Presess::model()->findAllByAttributes(array("institute_batch_id" => $batch->id));
        $datPer = array();
        $datPer2 = array();
	
        foreach ($dataMontl as $dataM) {
            $datPer[$dataM->date] = $dataM->total_students;
        }
        $dataAll = PresessAll::model()->findAllByAttributes(array("institute_batch_id" => $batch->id));
        foreach ($dataAll as $dataM) {
            $datPer2[$dataM->date] = $dataM->total_students;
        }
        foreach ($datPer as $kq => $dataM) {
            $datPer[$kq] = $dataM / $datPer2[$kq] * 100;
        }
        $opts = array();
        foreach ($datPer as $k => $d) {
            $opts[] = array("y" => date("M",strtotime($k."-01")), "a" => $d);
        }?>
//Attendance Graph-- Institute                 
Morris.Bar({
  element: "avgattendance1",
  data: 
    <?php echo json_encode($opts); ?>
  ,
  resize : false,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['<?php echo $batch->institute->name;?>']
});
//Attendance Graph-- Institute                 
Morris.Bar({
  element: "avgattendance2",
  data: 
    <?php echo json_encode($opts); ?>
  ,
  resize : false,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['<?php echo $batch->institute->name;?>']
});
                <?php break;}
    ?>
<?php } ?>
<?php 
if (($controller == "institutes" && $action == "studentscore")) {
$optscore = array();
$data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
    foreach ($data['institute']->institute->instituteBatches as $keyBatch => $batch) {
	$modules = CHtml::listData(Module::model()->findAll(), "id", "name");
        //Analysis Score
        $modScore = array();
        $modRat = array();
        foreach ($modules as $kmo=>$mo){
            $modScore[$mo] = 0;
            $totalScoreModular = 0;
            $studentScoreModular = 0;
            foreach ($batch->moduleAssignments as $assignmentKey => $assignment) {
                if ($kmo == $assignment->module_id) {
                    foreach ($assignment->moduleAssignmentStudentScores as $scoreKey => $score) {
                        $totalScoreModular = $totalScoreModular + $score->total_score;
                        $studentScoreModular = $studentScoreModular + $score->student_score;
                    }
                }
                
            }
            if ($totalScoreModular != 0) {
                $modScore[$mo] = $studentScoreModular / $totalScoreModular *100;
            } else {
		$modScore[$mo] = 0;
	    }
	}
	

	foreach ($modScore as $ks => $ds) {
	    $optscore[] = array("y" => $ks, "a" => $ds,"b"=>null);
	}
	
    ?>
//Attendance Graph-- Institute                 
Morris.Bar({
  element: "avgattendance1",
  data: 
    <?php echo json_encode($optscore); ?>
  ,
  resize : false,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['<?php echo $batch->institute->name;?>']
});
//Attendance Graph-- Institute                 
Morris.Bar({
  element: "avgattendance2",
  data: 
    <?php echo json_encode($optscore); ?>
  ,
  resize : false,
  xkey: 'y',
  ykeys: ['a'],
  labels: ['<?php echo $batch->institute->name;?>']
});
                <?php break;}
    ?>
<?php } ?>
}
</script>

<style>
    .morris-hover{
        display: none !important;
    }
</style>