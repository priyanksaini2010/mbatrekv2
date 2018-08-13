<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Quick Links'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"quick_links"));
    echo $data->data;
?>