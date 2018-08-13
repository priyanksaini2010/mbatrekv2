<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);

$this->menu = array(
    array('label' =>  $model->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$model->id)),
    array('label' => 'Assign Intership', 'url' => array('students/internship', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Assign Live Projects', 'url' => array('students/projects', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,'type'=>1)),
    array('label' => 'Manage Strong Areas', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id,"type"=>2)),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$model->id)),
);
?>

<h1>Live Projects Assigned To <?php echo ucfirst($model->name); ?></h1>
<?php
$json = json_decode($model->profile_json);
$allInternships = LiveProjects::model()->findAll();
?>
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

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'enableAjaxValidation'=>false,
));

?>
    <h2>Add Live Projects</h2>
    <select name="industry">
	<?php foreach ($allInternships as $intt) {?>
	<option value="<?php echo $intt->id;?>|<?php echo $intt->company_name;?>-<?php echo $intt->function;?>">
	    <?php echo $intt->company_name;?>-<?php echo $intt->function;?>
	</option>
	<?php }?>
    </select>
    <div class="form-actions">
	    <?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Save',
	    )); ?>
    </div>
<?php $this->endWidget(); ?>