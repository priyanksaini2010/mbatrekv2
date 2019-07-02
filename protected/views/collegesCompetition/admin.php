<?php
$this->breadcrumbs=array(
	'Colleges For Competitions'=>array('collegesCompetition/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Colleges For Competitions','url'=>array('collegesCompetition/admin')),
	array('label'=>'Create Colleges For Competitions','url'=>array('collegesCompetition/create')),
);
?>

<h1>Manage Colleges For Competitions</h1>
<button class="btn btn-danger" id="delete-all">Delete All</button>
<?php
$str_js = "
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};
				
		$('#colleges-grid table.items tbody').sortable({
			forcePlaceholderSize: true,
			forceHelperSize: true,
			items: 'tr',
			update : function () {
                        $('.ui-sortable-handle').removeClass('ui-sortable-handle')
				serial = $('#colleges-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
				$.ajax({
					'url': '" . $this->createUrl('collegesCompetition/sort') . "',
					'type': 'post',
					'data': serial,
					'success': function(data){
					},
					'error': function(request, status, error){
						alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
					}
				});
                                $('#colleges-grid table.items tr').addClass('ui-sortable-handle');
			},
			helper: fixHelper
		}).disableSelection();
	";
Yii::app()->clientScript->registerScript('sortable-project', $str_js);

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'colleges-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'rowCssClassExpression'=>'"items[]_{$data->id}"',
	'columns'=>array(
		'id',
		'name',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}'
		),
	),
)); ?>
<script>
    $("#delete-all").click(function(){
        if(confirm("Are you sure you want to delete all data")){
            window.location = "<?php echo Yii::app()->createUrl("collegesCompetition/delete");?>"
        }
    });

</script>
