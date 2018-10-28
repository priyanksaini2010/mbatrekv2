<?php
  $this->breadcrumbs=array(
	'Products'=>array('products/admin'),
	$modelProducts->title=>array("products/view","id"=>$modelProducts->id),
        'Manage Products Includes',
        
);

$this->menu = productsMenu($modelProducts->id);


?>

<h1>Manage Product Includes</h1>
<a href="<?php echo Yii::app()->createUrl("productInclude/create",array("id"=>$modelProducts->id,"return"=>1))?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add More 
</a>


<?php 
$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#product-include-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#product-include-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('productInclude/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#product-include-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);


$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-include-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		'description',
                array(
                'name'=>'logo', 
                    'type' => 'raw',
                    'filter' => '',
                    'value' => 'CHtml::image(Yii::app()->baseUrl . "/assets/products/" . $data->logo,"", array("width"=>32, "height"=>38,"style"=>"background-color:  #f1aa35;"))',
                 ),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("productInclude/update", array("id"=>$data->id,"product_id"=>$data->product_id,"return"=>1))',
                        
                    ),
	),
)); ?>
