
<?php $this->setPageTitle('Blog'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"blog"));
    echo $data->data;
?>
