
<?php $this->setPageTitle('Frequently Asked Questions'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"faq"));
    echo $data->data;
?>
