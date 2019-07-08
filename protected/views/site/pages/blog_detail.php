
<?php $this->setPageTitle('Blog Detail'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"blog_detail"));
    echo $data->data;
?>
