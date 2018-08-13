<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs = array(
    $int->instituteCourse->institute->name => array('institutes/admin'),
    $int->universityCourseBatch->courser_name . "(" . $int->universityCourseBatch->courser_batch . ")" => array('instituteBatches/view', 'institute_id' => $int->institute_id, 'id' => $int->id),
    "Manage Assignments" => array('moduleAssignment/admin','institute_batch_id' => $_GET['institute_batch_id']),
    'Details',
);
$this->menu = array(
    array('label' => 'Manage Assignment', 'url' => array('moduleAssignment/view', 'institute_batch_id' => $_GET['institute_batch_id'],'id'=>$model->id)),
    array('label' => 'Manage Quiz', 'url' => array('moduleAssigmentQuiz/admin', 'institute_batch_id' => $_GET['institute_batch_id'], 'module_assignment_id' => $model->id)),
    	array('label'=>'Students Analysis','url'=>array('moduleAssignment/student','institute_batch_id'=>$_GET['institute_batch_id'],'id'=>$model->id))
);
?>
<h1>Students Analysis</h1>
<table class="table table-striped">
    <thead>
	<tr>
	    <th>Name</th>
	    <th>Score</th>
	    <th>Status</th>
	    <th>Completion Date</th>
	    <th>Close Date</th>
	</tr>
    </thead>
    <tbody>
	<?php foreach ($students as $student){
	    
	$score = ModuleAssignmentStudentScore::model()->findByAttributes(array("student_id"=>$student->id,"module_assignment_id"=>$model->id));    
	?>
	<tr>
	    <td><?php echo $student->name;?></td>
	    <td><?php echo isset($score->student_score)?$score->student_score:"Not Taken";?></td>
	    <td><?php 
	    if (!empty($score)) {
		switch($score->status) {
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
		echo "Not Taken";
	    }
	    ?></td>
	    <td><?php echo isset($score->complete_date)?$score->complete_date:"Not Taken";?></td>
	    <td><?php echo isset($score->close_date)?$score->close_date:"Not Taken";?></td>
	</tr>
	<?php }?>
</tbody>
</table>