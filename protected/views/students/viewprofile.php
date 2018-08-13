<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$user = Users::model()->findByPk($model->user_id);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);
if ($int->institute->id == 0) {
    $this->menu = array(
    array('label' =>  $model->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$model->id)),
//    array('label' => 'Assign Intership', 'url' => array('students/internship', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Manage Strong Areas', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,"type"=>2)),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
//    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Student Remarks', 'url' => array('instituteBatchStudentSessionRemark/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
);
}else {
    $this->menu = array(
    array('label' =>  $model->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$model->id)),
    array('label' => 'Assign Intership', 'url' => array('students/internship', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Manage Strong Areas', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,"type"=>2)),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Student Remarks', 'url' => array('instituteBatchStudentSessionRemark/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label'=>'Manage Sessions Documents','url'=>array('sessionDocument/admin','institute_batch_id'=>$_GET['institute_batch_id'],'institute_batch_session_id'=>$_GET['id'],'')),
);
}

?>

<h1><?php echo ucfirst($model->name); ?> Profile</h1>
<?php
$json = json_decode($model->profile_json);
?>
<div class="row show-grid">
    <div class="span4">
        <?php if(isset($json->profile_pic)) {?>
        <img src="<?php echo Yii::app()->baseUrl;?>/assets/resumes/<?php echo $json->profile_pic;?>" height="100px" width="100px"/>
        <?php } ?>
    </div>
</div>

<p>
    <b>Name</b> : <?php echo $model->name; ?>

</p>
<p>
    <b>DOB</b> : <?php echo $model->dob; ?>
</p>
<p>
    <b>Email</b> : <a href="mailto:<?php echo $model->email; ?>"><?php echo $model->email; ?></a>

</p>
<p>
    <b> Phone Number</b> : <?php echo $model->phone_number; ?>
</p>
<p>
    <b>City</b> : <?php echo $model->city; ?>
</p>
<p>
    <b>Program</b> : <?php echo $model->program; ?>
</p>
<p>
    <b>Last Login</b> : <?php echo $model->last_login; ?>
</p>
<p>
    
<?php if($user->subscription != null) {?>
    <b>Subscription</b> :
    <?php 
	switch ($user->subscription ){
	    case 1:
		echo "Free";
		break;
	    case 2:
		echo "Walk";
		break;
	    case 3:
		echo "Jog";
		break;
	    case 4:
		echo "Run";
		break;
	}
    ?>
<?php }?>
</p>
<?php if (isset($json->profile_fb)) { ?>
    <p> 
        <b>Facebook Profile</b> : <a href="<?php echo $json->profile_fb ?>" target="__blank"/><?php echo $json->profile_fb ?></a>
    </p>
<?php } ?>
<?php if (isset($json->profile_linked)) { ?>
    <p> 
        <b> Linkedin Profile</b> : <a href="<?php echo $json->profile_linked ?>" target="__blank"/><?php echo $json->profile_linked ?></a>
    </p>
<?php } ?>
<?php if (isset($json->profile_industry)) { ?>
    <p> 
        <b>Industry</b> : <br />
    <!--<ol>-->
    <?php 
        $studentData  = Students::model()->findByAttributes(array('user_id' => $model->user_id)); 
    ?>
    <ol class="list-unstyled">

            <?php if (isset($studentData->industry1->option_name) && $studentData->industry1->option_name != "") { ?>
                <li>
                    <?php echo isset($studentData->industry1->option_name) ? $studentData->industry1->option_name : ""; ?>
                </li>
            <?php } ?>
            <?php if (isset($studentData->industry2->option_name) && $studentData->industry2->option_name != "") { ?>
                <li>
                    <?php echo isset($studentData->industry2->option_name) ? $studentData->industry2->option_name : ""; ?>
                </li>
            <?php } ?>
            <?php if (isset($studentData->industry3->option_name) && $studentData->industry3->option_name != "") { ?>
                <li>
                    <?php echo isset($studentData->industry3->option_name) ? $studentData->industry3->option_name : ""; ?>
                </li>
            <?php } ?>
            <?php if (isset($studentData->industry4->option_name) && $studentData->industry4->option_name != "") { ?>
                <li>
                    <?php echo isset($studentData->industry4->option_name) ? $studentData->industry4->option_name : ""; ?>
                </li>
            <?php } ?>
            <?php if (isset($studentData->industry5->option_name) && $studentData->industry5->option_name != "") { ?>
                <li>
                    <?php echo isset($studentData->industry5->option_name) ? $studentData->industry5->option_name : ""; ?>
                </li>
            <?php } ?>


        </ol>
    <!--</ol>-->
    </p>
    <?php } ?>
<?php if (isset($json->profile_companies)) { ?>
    <p> 
        <b>Companies</b> : <br />
    <ol>
    <?php foreach ($json->profile_companies as $ind) { ?>
            <li><?php echo $ind ?></li>
        <?php } ?>
    </ol>
    </p>
    <?php } ?>
<?php if (isset($json->profile_intership)) { ?>
    <p> 
        <b>Internship</b> : <br />
    <ol>
    <?php foreach ($json->profile_intership as $ind) { ?>
            <li><?php echo $ind ?></li>
        <?php } ?>
    </ol>
    </p>
    <?php } ?>
<?php if (isset($json->profile_liveproject)) { ?>
    <p> 
        <b>Live Projects</b> : <br />
    <ol>
    <?php foreach ($json->profile_liveproject as $ind) { ?>
            <li><?php echo $ind ?></li>
        <?php } ?>
    </ol>
    </p>
    <?php } ?>
<p> 
        <b>Resume</b> : <br />
<?php
$data = array();
$data['student_profile'] = Students::model()->findByAttributes(array('user_id' => $model->user_id));
$userData = StudentResume::model()->findByAttributes(array("student_id"=>$data['student_profile']->id));?>
    <ul>
        <li>
            Resume Header: <?php echo isset($userData->header)?$userData->header:"";?><br />
        </li>
        <li>
            Objective : <?php echo isset($userData->objective)?$userData->objective:"";?><br />
        </li>
        <li>
            Educational Qualification :
        </li>
        <li>
            <table id="customFields" class="table-bordered">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>School / College</th>
                        <th>Board / University</th>
                        <th>Year of Passing</th>
                        <th>Percentage / CGPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
				    if (isset($userData->educational_qualification)) {
					$qual = json_decode($userData->educational_qualification);
//					pr($qual);
				    }
				    
				    
				    if (isset($qual->exam) ) {
					
				    
				    foreach ($qual->exam as $k=>$v) {
					if(isset($qual->school[$k]) && isset($qual->board[$k]) && isset($qual->year[$k]) && isset($qual->cgpa[$k])) {
				?>
                                    <tr>
                                        <td><?php echo  $v;?></td>
                                        <td><?php echo  $qual->school[$k];?></td>
                                        <td><?php echo  $qual->board[$k];?></td>
                                        <td><?php echo  $qual->year[$k];?></td>
                                        <td><?php echo  $qual->cgpa[$k];?></td>
					
                                    </tr>
                                    <?php } }}?>
                </tbody>
            </table>
        </li>
        <li>
            Projects Undertaken : <?php echo isset($userData->project_undertaken)?$userData->project_undertaken:"";?>
        </li>
        <li>
            Achievements and Key Skills  : <?php echo isset($userData->achievement_and_key_skills)?$userData->achievement_and_key_skills:"";?>
        </li>
        <li>
            Hobbies and Extra Co-Curricular Activities : <?php echo isset($userData->hobbies)?$userData->hobbies:"";?>
        </li>
        <li>
            Personal Details : <?php echo isset($userData->personal_details)?$userData->personal_details:"";?>
        </li>
        <li>
            
        </li>
    </ul>
 
 
