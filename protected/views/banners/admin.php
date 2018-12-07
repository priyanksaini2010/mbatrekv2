<?php
$this->breadcrumbs=array(
	'Coupon Codes'=>array('banners/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Banners','url'=>array('banners/admin')),
	array('label'=>'Create Banners','url'=>array('banners/create')),
);
?>

<h1>Manage Banners</h1>

<p>
<?php 

$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#banners-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#banners-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('banners/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#banners-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);



$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'banners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
         'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		'id',
		'image',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}"
		),
	),
)); ?>
