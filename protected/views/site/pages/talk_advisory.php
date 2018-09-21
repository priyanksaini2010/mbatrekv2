
<?php $this->setPageTitle('Company'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"talk_advisory"));
    echo $data->data;
?>
