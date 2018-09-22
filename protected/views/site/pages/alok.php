
<?php $this->setPageTitle('Founders'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"alok"));
    echo $data->data;
?>
