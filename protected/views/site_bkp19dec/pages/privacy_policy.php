<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Privacy Policy'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"privacy_policy"));
    echo $data->data;
?>