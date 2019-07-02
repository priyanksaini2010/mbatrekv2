
<?php $this->setPageTitle('Contact'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"contact"));
    echo $data->data;
?>
