<?php
$this->breadcrumbs=array(
	'Products'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Products','url'=>array('products/admin')),
	array('label'=>'Create Products','url'=>array('products/create')),
);
?>

<h1>Manage Products</h1>
<?php
$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#products-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#products-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('products/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#product-key-outcome-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);



$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
      'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		
		'title',
		array(
                        'header'=>"Category",
                        "name"=>'product_sub_category_id',
                        "value"=>'ProductCategory::model()->findByAttributes(array("id"=>$data->product_sub_category_id))->category',
                        'filter'=>CHtml::listData( ProductCategory::model()->findAll(), 'id', 'category'),
                    ),
		'actuall_price',
		'price',
		/*
		'type',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
