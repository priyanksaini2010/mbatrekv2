
<?php $this->setPageTitle('Company'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"how_we_are_different"));
    echo $data->data;
?>