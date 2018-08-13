<?php
if(isset($_GET['industry_id'])){
    $ind = Industries::model()->findByPk($_GET['industry_id']);
    $this->breadcrumbs=array(
		'Industries'=>array('industries/admin'),
		$ind->name=>array('industries/view',"id"=>$_GET['industry_id']),
		'Internships',
	);

    $this->menu = getMenu();
}

?>


<h1> Industry Internships</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'industry-internship-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'company_name',
		'function',
		'start_date',
		'end_date',
		
		'location',
		'stipend',
		'number_of_openings',
		'description_of_project',
		array('name'=>'created_by','value'=>'$data->createdBy->fname." ".$data->createdBy->lname'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        
		),
		
	),
)); ?>
