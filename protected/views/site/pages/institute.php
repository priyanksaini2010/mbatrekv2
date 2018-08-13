<section class="banner_area institute">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"institute"));
            echo $data->data;
    ?>