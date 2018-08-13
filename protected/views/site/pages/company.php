
<?php $this->setPageTitle('Company'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"company"));
    echo $data->data;
?>