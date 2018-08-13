<?php
if(isset($_GET['industry_id'])){
    $ind = Industries::model()->findByPk($_GET['industry_id']);
    $this->breadcrumbs=array(
	    'Industries'=>array('industries/admin'),
	    $ind->name=>array('industries/view',"id"=>$_GET['industry_id']),
	    'Projects With Faculty',
    );

    $this->menu=  getMenu();
}


?>

<h1>Projects With Faculties</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'industry-project-with-faculty-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'assignment_title',
		'deliverable_requirement',
		'desired_experience',
		'budget',
		
		'time_scedule',
		array('name'=>'created_by','value'=>'$data->createdBy->fname." ".$data->createdBy->lname'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        
		),
	),
)); ?>
