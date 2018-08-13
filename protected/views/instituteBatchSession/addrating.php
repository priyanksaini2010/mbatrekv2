<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);


$this->menu=array(
	array('label'=>'Add Rating','url'=>array('instituteBatchSession/addrating','institute_batch_id'=>$_GET['institute_batch_id'])),
);


?>

<h3>Add Rating</h3>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-session-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        )
)); 
?>
<p>
<select name="module">
    <option value="">Select Module</option>
    <?php foreach($module as $sess){?>
    <option value="<?php echo $sess->id;?>"><?php echo $sess->name?></option>
    <?php }?>
</select>
</p>
<p>
<select name="section">
    <option value="">Select Section</option>
    <?php foreach($section as $sess){?>
    <option value="<?php echo $sess->id;?>"><?php echo $sess->section_name?></option>
    <?php }?>
</select>
</p>
<p>
<select name="rating">
    <option value="">Select Rating</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
</p>
<p>
    <input type="submit" value="Submit"/>
</p>
<?php $this->endWidget(); ?>