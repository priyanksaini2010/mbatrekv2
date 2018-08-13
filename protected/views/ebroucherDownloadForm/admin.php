<?php
$this->breadcrumbs=array(
	'Ebroucher Download Forms'=>array('admin'),
	'Manage',
);



?>
<h1>Manage eBbroucher Downloads</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ebroucher-download-form-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'email',
		'first_name',
		'last_name',
		'phone_number',
	
	),
)); ?>
