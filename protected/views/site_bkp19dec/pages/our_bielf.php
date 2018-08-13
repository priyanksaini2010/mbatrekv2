<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Our Belief');?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"our_bielf"));
    echo $data->data;
?>