<?php
$this->breadcrumbs=array(
	'Library Books'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Books','url'=>array('libraryBooks/admin')),
	array('label'=>'Add Books','url'=>array('libraryBooks/create')),
);


?>

<h1>Manage Library Books</h1>

<?php
$filter  = CHtml::listData(LibrarySubjects::model()->findAll(), "id", "name");
$users  = CHtml::listData(Users::model()->findAll(), "id", "fname");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'library-books-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
                array(
                        "filter" => $filter,
                        "name" => 'library_subject_id',
                        "value" => '$data->librarySubject->name',
                    ),
		array(
                        "filter" => $users,
                        "name" => 'added_by',
                        "value" => '$data->addedBy->fname',
                    ),
//		'added_by',
		'name',
		'author',
//		'file',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => "{download}{update}{delete}",
                    'buttons'=>array(
                                'download' => array(
                                    'label'=>'<i class="icon-download"></i>',
                                    'options'=>array('title'=>'Download Book'),
//                                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/comment_icon.png',
                                    'url'=>'Yii::app()->createUrl("libraryBooks/download", array("id"=>$data->id))',
                                ),)
		),
	),
)); ?>
