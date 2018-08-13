<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Copyright'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"copyright_notice"));
    echo $data->data;
?>