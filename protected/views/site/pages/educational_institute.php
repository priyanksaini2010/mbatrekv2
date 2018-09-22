
<?php $this->setPageTitle('Educational Institutes'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"educational_institute"));
    echo $data->data;
?>
