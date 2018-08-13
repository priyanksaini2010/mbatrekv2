<?php
if(isset($_GET['industry_id'])){
    $ind = Industries::model()->findByPk($_GET['industry_id']);
    $this->breadcrumbs=array(
	    'Industries'=>array('industries/admin'),
	    $ind->name=>array('industries/view',"id"=>$_GET['industry_id']),
	    'LIve Projects',
    );


    $this->menu= getMenu();
}



?>

<h1>Live Projects</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'live-projects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'campus',
		'city',
		'company_name',
		'number_of_students',
		
		'project_deliverables',
		'stipend',
		'function',
		'start_date',
		'end_date',
		array('name'=>'created_by','value'=>'$data->createdBy->fname." ".$data->createdBy->lname'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        
		),
		
	),
)); ?>
