<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"institute"));
            echo $data->data;
    ?>