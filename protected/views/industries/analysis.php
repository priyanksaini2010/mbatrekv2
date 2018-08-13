<?php
$this->breadcrumbs=array(
	'Industries'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Industries','url'=>array('industries/admin')),
	array('label'=>'Create Industries','url'=>array('industries/create')),
	array('label'=>'All Industries Analysis','url'=>array('industries/analysis')),
);


?>

<h1>All Industries Analysis</h1>

<table>
    <tr>
	<td>Total Projects</td>
	<td>
	    <?php
		$data = LiveProjects::model()->findAll();
		echo count($data);
	    ?>
	</td>
    </tr>
    <tr>
	<td>Total Jobs</td>
	<td>
	    <?php
		$data = JobPosting::model()->findAll();
		echo count($data);
	    ?>
	</td>
    </tr>
    <tr>
	<td>Total Consulting Projects</td>
	<td>
	    <?php
		$data = IndustryProjectWithFaculty::model()->findAll();
		echo count($data);
	    ?>
	</td>
    </tr>
    <tr>
	<td>Total Internship</td>
	<td>
	     <?php
		$data = IndustryInternship::model()->findAll();
		echo count($data);
	    ?>
	</td>
    </tr>
</table>