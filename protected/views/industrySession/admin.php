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

<h1>Manage Industry Sessions</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'industry-session-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'thought',
		array('name'=>'created_by','value'=>'$data->createdBy->fname." ".$data->createdBy->lname'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        
		),
	),
)); ?>
