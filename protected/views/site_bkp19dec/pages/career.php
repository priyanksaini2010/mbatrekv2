<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Career');?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"career"));
    echo $data->data;
?>