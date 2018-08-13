<?php
if(isset($_GET['industry_id'])){
    $ind = Industries::model()->findByPk($_GET['industry_id']);
    $this->breadcrumbs=array(
	    'Industries'=>array('industries/admin'),
	    $ind->name=>array('industries/view',"id"=>$_GET['industry_id']),
	    'Job Postings',
    );
    $this->menu = getMenu();
}

?>



<h1>Manage Job Postings</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'job-posting-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'company_name',
		'function',
		'position',
		'number_of_opening',
		'description_of_job',
		'preferred_qualification',
		'salary',
		'job_location',
		array('name'=>'created_by','value'=>'$data->createdBy->fname." ".$data->createdBy->lname'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{delete}",
                        
		),
		
		
	),
)); ?>
