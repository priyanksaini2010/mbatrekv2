
<?php $this->setPageTitle('Blogs'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"blog"));
    echo $data->data;
?>
