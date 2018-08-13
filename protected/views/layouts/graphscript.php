<?php

    $studentsAll = Students::model()->findAll();
    $usersAll = Users::model()->findAllByAttributes(array("role"=>1));
    
    $citiesHigh = array("Bangalore","Mumbai","Hyderabad","Kolkata","Others");
    $cities = array();
    foreach ($usersAll as $us) {
	$highlisght = array();
	if($us->city == 'Bangalore Rural District' || $us->city == 'Bangalore Urban District') {
	    $us->city = "Bangalore";
	}
	if($us->city == 'Mumbai City' || $us->city == 'Mumbai suburban') {
	    $us->city = "Mumbai";
	}
	
        if ($us->city == "") {
            $us->city = "Others";    
        }
	if (!in_array($us->city,$citiesHigh)) {
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
	    $total = count($usersAll);
	    if ($total > 0) {
		$per = $ds / $total * 100;
	    }
            $optcit[] = array("name" => $ks, "y" => ceil($per), "exploded" =>"true");
    }
    //Fuctions Chart
    $funcHigh = array("Finance","IT","Marketing","HR","Operation","Others");
    $func = array();
    foreach ($studentsAll as $us) {
        if ($us->function == "") {
            $us->function = "Others";    
        }
	if (!in_array($us->function,$funcHigh)) {
	    $us->function = "Others";    
	}
        if (!array_key_exists($us->function, $func)) {
            
            $func[$us->function] = 0;
        }
	
        
    }
    foreach ($studentsAll as $uss) {
        $func[$uss->function] = $func[$uss->function]+1;
    }
    $optfunc = array();
    foreach ($func as $ks => $ds) {
        $total = count($studentsAll);
	    if ($total > 0) {
		$per = $ds / $total * 100;
	    }
	$optfunc[] = array("name" => $ks, "y" => ceil($per), "exploded" =>"true");
    }
    
    //Work Ex Hart
    $funcHigh = array("Fresher","Less than 1 year","1-2 Years","2-3 Years","More Than 3 Years");
    $func = array();
    foreach ($studentsAll as $us) {
        if ($us->work_exerience == "") {
            $us->work_exerience = "Fresher";    
        }
	if (!in_array($us->work_exerience,$funcHigh)) {
	    $us->work_exerience = "Fresher";    
	}
        if (!array_key_exists($us->work_exerience, $func)) {
            
            $func[$us->work_exerience] = 0;
        }
	
        
    }
    foreach ($studentsAll as $uss) {
        $func[$uss->work_exerience] = $func[$uss->work_exerience]+1;
    }
    $optwork = array();
    foreach ($func as $ks => $ds) {
        $total = count($studentsAll);
	    if ($total > 0) {
		$per = $ds / $total * 100;
	    }
	$optwork[] = array("name" => $ks, "y" => ceil($per), "exploded" =>"true");
    }
    
    //Accedamic Ex Hart
    $funcHigh = array("B.Com","B.Tech","BBA","BCA","BSC","Others");
    $func = array();
    foreach ($studentsAll as $us) {
        if ($us->academic_background == "") {
            $us->academic_background = "Others";    
        }
	if (!in_array($us->academic_background,$funcHigh)) {
	    $us->academic_background = "Others";    
	}
        if (!array_key_exists($us->academic_background, $func)) {
            
            $func[$us->academic_background] = 0;
        }
	
        
    }
    foreach ($studentsAll as $uss) {
        $func[$uss->academic_background] = $func[$uss->academic_background]+1;
    }
    $optacc = array();
    foreach ($func as $ks => $ds) {
        $total = count($studentsAll);
	    if ($total > 0) {
		$per = $ds / $total * 100;
	    }
	$optacc[] = array("name" => $ks, "y" => ceil($per), "exploded" =>"true");
    }
    
    
    // Industry
    //Accedamic Ex Hart
    $funcHigh = array("FMCG","Banking&Finance","IT&ITES","Consulting","Automobile","Others");
    $func = array();
    foreach ($studentsAll as $us) {
        if ($us->industry_1 == "") {
            $us->industry_1 = "Others";    
        }
        if ($us->industry_2 == "") {
            $us->industry_2 = "Others";    
        }
        if ($us->industry_3 == "") {
            $us->industry_3 = "Others";    
        }
        if ($us->industry_4 == "") {
            $us->industry_4 = "Others";    
        }
        if ($us->industry_5 == "") {
            $us->industry_4 = "Others";    
        }
	if (!in_array($us->industry_1,$funcHigh)) {
	    $us->industry_1 = "Others";    
	}
	if (!in_array($us->industry_2,$funcHigh)) {
	    $us->industry_2 = "Others";    
	}
	if (!in_array($us->industry_3,$funcHigh)) {
	    $us->industry_3 = "Others";    
	}
	if (!in_array($us->industry_4,$funcHigh)) {
	    $us->industry_4 = "Others";    
	}
	if (!in_array($us->industry_5,$funcHigh)) {
	    $us->industry_5 = "Others";    
	}
        if (!array_key_exists($us->industry_1, $func)) {
            
            $func[$us->industry_1] = 0;
        }
        if (!array_key_exists($us->industry_2, $func)) {
            
            $func[$us->industry_2] = 0;
        }
        if (!array_key_exists($us->industry_3, $func)) {
            
            $func[$us->industry_3] = 0;
        }
        if (!array_key_exists($us->industry_4, $func)) {
            
            $func[$us->industry_4] = 0;
        }
        if (!array_key_exists($us->industry_4, $func)) {
            
            $func[$us->industry_5] = 0;
        }
	
        
    }
    foreach ($studentsAll as $uss) {
        $func[$uss->industry_1] = $func[$uss->industry_1]+1;
        $func[$uss->industry_2] = $func[$uss->industry_2]+1;
        $func[$uss->industry_3] = $func[$uss->industry_3]+1;
        $func[$uss->industry_4] = $func[$uss->industry_4]+1;
        $func[$uss->industry_5] = $func[$uss->industry_5]+1;
    }
    $optind = array();
    foreach ($func as $ks => $ds) {
        $total = count($studentsAll);
	    if ($total > 0) {
		$per = $ds / $total * 100;
		if ($per > 100) {
		    $per = 100;
		}
	    }
	$optind[] = array("name" => $ks, "y" => ceil($per), "exploded" =>"true");
    }
    
    $controller = $this->uniqueid;
    $action = $this->action->Id;
    $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : "";?>
<script type="text/javascript">
    window.onload = function() {
	<?php if (($controller == "industry" && $action == "portal")) {?>
	   new CanvasJS.Chart("chartContainer",
		{
			title:{
				//text: "Gaming Consoles Sold in 2012"
			},
					animationEnabled: true,
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			},
			data: [
			{        
				indexLabelFontSize: 13,
				//indexLabelFontFamily: "arial",       
				indexLabelFontColor: "white", 
				indexLabelLineColor: "darkgrey",        
				indexLabelPlacement: "inside",
				type: "pie",       
				showInLegend: false,
				toolTipContent: "{name}: {y}%",
				dataPoints:<?php echo json_encode($optfunc);?>
			}
			]
		}).render();
		
		//City Pie Chart
		new CanvasJS.Chart("city_div_chart",
		{
			title:{
				//text: "Gaming Consoles Sold in 2012"
			},
					animationEnabled: true,
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			},
			data: [
			{        
				indexLabelFontSize: 13,
				//indexLabelFontFamily: "arial",       
				indexLabelFontColor: "white", 
				indexLabelLineColor: "darkgrey",        
				indexLabelPlacement: "inside",
				type: "pie",       
				showInLegend: false,
				toolTipContent: "{name}: {y}%",
				dataPoints:<?php echo json_encode($optcit);?>
			}
			]
		}).render();
		//Work Pie Chart
		new CanvasJS.Chart("work_experiance",
		{
			title:{
				//text: "Gaming Consoles Sold in 2012"
			},
					animationEnabled: true,
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			},
			data: [
			{        
				indexLabelFontSize: 13,
				//indexLabelFontFamily: "arial",       
				indexLabelFontColor: "white", 
				indexLabelLineColor: "darkgrey",        
				indexLabelPlacement: "inside",
				type: "pie",       
				showInLegend: false,
				toolTipContent: "{name}: {y}%",
				dataPoints:<?php echo json_encode($optwork);?>
			}
			]
		}).render();
		//Academic Chart
		new CanvasJS.Chart("Academic_div",
		{
			title:{
				//text: "Gaming Consoles Sold in 2012"
			},
					animationEnabled: true,
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			},
			data: [
			{        
				indexLabelFontSize: 13,
				//indexLabelFontFamily: "arial",       
				indexLabelFontColor: "white", 
				indexLabelLineColor: "darkgrey",        
				indexLabelPlacement: "inside",
				type: "pie",       
				showInLegend: false,
				toolTipContent: "{name}: {y}%",
				dataPoints:<?php echo json_encode($optacc);?>
			}
			]
		}).render();
		
		//Industry Chart
		new CanvasJS.Chart("industry_choice",
		{
			title:{
				//text: "Gaming Consoles Sold in 2012"
			},
					animationEnabled: true,
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			},
			data: [
			{        
				indexLabelFontSize: 13,
				//indexLabelFontFamily: "arial",       
				indexLabelFontColor: "white", 
				indexLabelLineColor: "darkgrey",        
				indexLabelPlacement: "inside",
				type: "pie",       
				showInLegend: false,
				toolTipContent: "{name}: {y}%",
				dataPoints:<?php echo json_encode($optind);?>
			}
			]
		}).render();
	    <?php }?>
		
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
                $modScore[$mo] = $studentScoreModular;
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
	    foreach ($dsUniv as $finalKUniv=>$finalUniv) {
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
    labels: ['a'],
    barRatio: 0.4,
    xLabelAngle: 90,
    hideHover: 'auto'
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