
<?php $this->setPageTitle('MBAtrek on the ground'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"mbatrek_on_the_ground"));
    echo $data->data;
?>
