<?php
$this->breadcrumbs=array(
	'Courses'=>array('courses/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Courses','url'=>array('courses/admin')),
	array('label'=>'Create Courses','url'=>array('courses/create')),
);

?>

<h1>Manage Courses</h1>
<button class="btn btn-danger" id="delete-all">Delete All</button>

<?php
$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#courses-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#courses-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('courses/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#courses-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);


$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'courses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		'id',
		'title',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update} {delete}'
		),
	),
)); ?>
<script>
    $("#delete-all").click(function(){
        if(confirm("Are you sure you want to delete all data")){
            window.location = "<?php echo Yii::app()->createUrl("courses/delete");?>"
        }
    });

</script>
