<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Section - Students Matrix View',
);


$this->menu=array(
	array('label'=>'ManageSections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Create Sections','url'=>array('instituteBatchSection/create','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Batch Student Matrix View','url'=>array('instituteBatchSection/matrixview','institute_batch_id'=>$_GET['institute_batch_id'])),
    
);


?>
<?php
$batch  = InstituteBatchSection::model()->findAllByAttributes(array('institute_batch_id'=>$_GET['institute_batch_id']));

$students = Students::model()->findAllByAttributes(array('institute_batch_id'=>$_GET['institute_batch_id']));
?>
<div class="container">
    <form method="post"/>
	<table class="table table-bordered">
	    <thead>
		<tr>
		    <th>
			Students
		    </th>
		    <?php foreach($batch as $bat){?>
		    <th>
			<?php echo $bat->section_name;?>
		    </th>
		    <?php }?>
		</tr>
	    </thead>
		 <tbody>
		<?php foreach ($students as $student){?>
		<tr>
		    <td>
			<?php echo $student->name;?>
		    </td>
		    <?php foreach($batch as $batc){
			$attributes = array(
				"institute_batch_section_id"=>$batc->id,
				'student_id' => $student->id
			    );
			$attributes['student_id'] = $student->id;
			$check = InstituteBatchSectionStudent::model()->findAllByAttributes(array(
				"institute_batch_section_id"=>$batc->id,
				'student_id' => $student->id
			    ));
//			pr($check);
		    ?>
		    <td>
			<input type="checkbox" <?php if(count($check)>0){?>checked="checked"<?php }?> name="student[]" value="<?php echo $student->id;?>-<?php echo $batc->id;?>"/>
		    </td>
		    <?php }?>
		</tr>
		<?php }?>
		 </tbody>
	</table>
	<div class="row">
	    <div class="col-md-6">
		<span class="pull-right">
		    <input type="submit"  value="Submit"/>
		</span>
	    </div>
	</div>
    </form>
</div>