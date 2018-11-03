<?php
$this->breadcrumbs=array(
	'Event Galleries'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage EventGallery','url'=>array('eventGallery/admin')),
	array('label'=>'Create EventGallery','url'=>array('eventGallery/create')),
);


?>

<h1>Manage Event Galleries</h1>



<?php
$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#event-gallery-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#event-gallery-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('eventGallery/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#event-gallery-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);


$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'event-gallery-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
     'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		'id',
		'name',
//		'image',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}"
		),
	),
)); ?>
