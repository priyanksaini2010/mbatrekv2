<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"industry"));
            echo $data->data;
        ?>