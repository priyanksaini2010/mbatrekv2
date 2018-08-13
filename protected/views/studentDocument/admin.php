<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);


$this->menu=array(
	array('label'=>'Manage Batch','url'=>array('instituteBatches/view','institute_id'=>$int->institute_id,'id'=>$int->id)),
	array('label'=>'Manage Student Documents','url'=>array('studentDocument/admin','institute_batch_id'=>$_GET['institute_batch_id'])),

);


?>
<h1>Manage Student Documents</h1>

<?php
$filter = CHtml::listData(Students::model()->findAllByAttributes(array("institute_batch_id" => $_GET['institute_batch_id'])), 'id', 'name');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'student-document-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		array(
                    'name'=>'student_id',
		    'filter' => $filter,
                    'value'=>'$data->student->name'
                ),
		'document',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => "{download}",
                    'buttons'=>array(
                                'download' => array(
                                    'label'=>'<i class="icon-download"></i>',
                                    'options'=>array('title'=>'Download Document'),
//                                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/comment_icon.png',
                                    'url'=>'Yii::app()->createUrl("studentDocument/download", array("id"=>$data->id))',
                                ),)
		),
	),
)); ?>
