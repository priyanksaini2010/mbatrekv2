<?php $this->setPageTitle('Mbatrek Story');?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"mbatrek_story"));
    echo $data->data;
?>