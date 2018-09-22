
<?php $this->setPageTitle('Educational Institute'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"educational_institute"));
    echo $data->data;
?>