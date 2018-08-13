<?php $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));?>
<section class="contact_point">
    <div class="container">
        <div class="contact_now margin_bottom_45">
            <h2>One Point Contact:</h2>
            <span class="contact_img"></span>
            <a href="mailto:<?php echo $industryProfile->industry->email;?>"><?php echo $industryProfile->industry->email;?></a>
        </div>
    </div>
</section>