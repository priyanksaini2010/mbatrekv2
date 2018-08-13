<?php
$this->breadcrumbs=array(
	'Blog Comments'=>array('admin','blog_id'=>$_GET['blog_id'] ),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Blogs','url'=>array('blogs/admin')),
);


?>

<h1>Manage Blog Comments</h1>


<?php 
$filter = array(0=>"Not Approved / Rejected",1=>"Approved");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blog-comments-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'blog_id',
		'name',
		'email',
		'comment',
                array(
                    "filter" =>$filter,
                    "name" => "is_approved",
                    'value' => '$data->is_approved == 0?"Not Approved/ Rejected":"Approved"'
                ),
		/*
		'reply_to',
		'date_created',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        "template" =>"{approve} {reject}",
                        "buttons" => array (
                            "approve"=> array(
                                "label" => '<i class="icon-ok"></i>',
//                                'click' => "confirm('Do you want to approve this comment?')",
                                'options'=>array('title'=>'Approve Comment'),
                                "url"=>'Yii::app()->createUrl("blogComments/approve", array("blog_id"=>$data->blog->id,"id"=>$data->id))',
                            ),
                            "reject"=> array(
                                "label" => '<i class="icon-remove"></i>',
                                'options'=>array('title'=>'Reject Comment'),
                                "url"=>'Yii::app()->createUrl("blogComments/reject", array("blog_id"=>$data->blog->id,"id"=>$data->id))',
                            )
                        )
		),
	),
)); ?>
