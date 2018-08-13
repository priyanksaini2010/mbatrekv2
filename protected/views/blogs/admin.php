<?php
$this->breadcrumbs=array(
	'Blogs'=>array("admin"),
	'Manage',
);

$this->menu=array(
        array('label'=>'Manage Blogs','url'=>array('blogs/admin')),
	array('label'=>'Create Blogs','url'=>array('blogs/create')),
);


?>

<h1>Manage Blogs</h1>

<?php
$filter = CHtml::listData(BlogCategory::model()->findAll(), "id", "name");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blogs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array("filter"=>$filter,"name"=>"blog_category_id","value"=>'$data->blogCategory->name'),
		'title',
		'author',
		'date_created',
		'date_updated',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{comments}{update}",
                        'buttons'=>array(
                                'comments' => array(
                                    'label'=>'<i class="icon-comment"></i>',
                                    'options'=>array('title'=>'View Comments'),
//                                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/comment_icon.png',
                                    'url'=>'Yii::app()->createUrl("blogComments/admin", array("blog_id"=>$data->id))',
                                ),)
                ),      
	),
)); ?>
