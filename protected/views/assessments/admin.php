<?php
$this->breadcrumbs=array(
	'Assessments'=>array('admin'),
	'Manage',
);

$this->menu=array(
    array('label'=>'Manage Assessments','url'=>array('assessments/admin')),
    array('label'=>'Create Assessments','url'=>array('assessments/create')),
);
?>

<h1>Manage Assessments</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'assessments-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'headline',
		'sub_heading_text',
		'price',
        array(
            'header' =>'Category',
            "name"=>'category',
            'value'=>'$data->status == 0?"Career":"Profile"'
        ),
        array(
            'header' =>'User Type',
            "name"=>'user_type',
            'value'=>'$data->status == 0?"Students":"Young Professionals"'
        ),
        array(
            'header' =>'Status',
            "name"=>'status',
            'value'=>'$data->status == 1?"Active":"In-Active"'
        ),
        'date_created',
        'date_updated',
        /*
        'rating',
		'time',
		'questions',
		'degree',
        'small_description',
        'bullet_points',
        'zoho_html_code',
        'zoho_iframe_code',
        'zoho_javascript_code',
        'zoho_popup_html_code',


        */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}'
		),
	),
)); ?>
