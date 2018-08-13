<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"student"));
            echo $data->data;
?>