<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('What We Do');?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"what_we_do"));
    echo $data->data;
?>