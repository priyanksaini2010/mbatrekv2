<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Term And Conditions'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"terms_conditions"));
    echo $data->data;
?>
