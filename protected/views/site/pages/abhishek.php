
<?php $this->setPageTitle('Founders'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"abhishek"));
    echo $data->data;
?>
