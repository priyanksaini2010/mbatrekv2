
<?php $this->setPageTitle('Company'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"educational_institute"));
    echo $data->data;
?>