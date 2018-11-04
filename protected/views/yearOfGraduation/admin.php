<?php
$this->breadcrumbs=array(
	'Year Of Graduations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Year Of Graduation','url'=>array('yearOfGraduation/admin')),
	array('label'=>'Create Year Of Graduation','url'=>array('yearOfGraduation/create')),
);


?>

<h1>Manage Year Of Graduations</h1>


<?php 
$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#year-of-graduation-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#year-of-graduation-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('yearOfGraduation/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#year-of-graduation-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'year-of-graduation-grid',
	'dataProvider'=>$model->search(),
    'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'filter'=>$model,
	'columns'=>array(
		'id',
		'year',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}'
		),
	),
)); ?>
