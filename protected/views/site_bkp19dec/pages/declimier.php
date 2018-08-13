<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Disclaimer'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"declimier"));
    echo $data->data;
?>