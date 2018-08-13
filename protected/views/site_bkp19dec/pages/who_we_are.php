<?php $this->setPageTitle('Who we are'); ?>
<?php echo $this->renderPartial('pages/_banner_area'); 
    $data  = ContentJson::model()->findByAttributes(array("page"=>"who_we_are"));
    echo $data->data;
?>  
