<?php
$this->breadcrumbs=array(
	'CA Faqs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage CA Faq','url'=>array('caFaq/admin')),
	array('label'=>'Add CA Faq','url'=>array('caFaq/create')),
);

?>

<h1>Manage CA Faqs</h1>


<?php 

$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#faq-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#faq-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('caFaq/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#faq-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);



$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'faq-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		'question',
		array(
                        'header'=>"Type",
                        "name"=>'type',
                        "value"=>'CaFaqType::model()->findByAttributes(array("id"=>$data->type))->name',
                        'filter'=>CHtml::listData( CaFaqType::model()->findAll(), 'id', 'name'),
                    ),
		'answer',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}"
		),
	),
)); ?>
