<?php $this->setPageTitle('Our Story');?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"mbatrek_story"));
    echo $data->data;
?>
