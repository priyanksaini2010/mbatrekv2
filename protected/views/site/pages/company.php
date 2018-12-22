
<?php $this->setPageTitle('Companies'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"company"));
    echo $data->data;
?>