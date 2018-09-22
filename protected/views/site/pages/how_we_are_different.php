
<?php $this->setPageTitle('How are we different'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"how_we_are_different"));
    echo $data->data;
?>
