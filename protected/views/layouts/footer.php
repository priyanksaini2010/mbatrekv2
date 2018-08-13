<?php
    $controller = $this->uniqueid;
    $action = $this->action->Id;
    $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : "";
    $dataSite = ContentJson::model()->findByAttributes(array('page' => 'home'));
    $dataSite = json_decode($dataSite->data);
    if (isset(Yii::app()->user->id)) {
        $userData = Users::model()->findByPk(Yii::app()->user->id);
        switch ($userData->role) {
            case 1:
                $route = 'student/portal';
                break;
            case 2:
                $route = 'industry/portal';
                break;
            case 3:
                $route = 'institutes/portal';
                break;
            default :
                $route = "";
                break;
        }
    } else {
        $route = "";
    }
    ?>
<div class="container">
                    <div class="footer_logo">
                        <img src="<?php echo Yii::app()->baseUrl;?>/images/footer_logo.png">  
                    </div>
                    <ul class="list-inline list-unstyled">
                        <li class="<?php
if ($view == 'copyright_notice') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('copyright-notice') ?>">Copyright Notice</a></li>
                        <li class="<?php
if ($view == 'privacy_policy') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('privacy-policy') ?>"> Privacy Statement</a></li>
                        <li class="<?php
if ($view == 'declimier') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('disclaimer') ?>">Disclaimer</a></li>
                        <li class="<?php
if ($view == 'terms_conditions') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('terms-and-conditions') ?>">Terms & Conditions</a></li>
                        <li class="<?php
if ($view == 'talk_to_advisory') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('talk-to-our-career-advisor') ?>">Talk to Career Advisor </a></li>
                        <!-- <li class="<?php
if ($view == 'quick_links') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('sitemap') ?>" class="">Sitemap</a></li> -->
                        <li class="<?php
if ($view == 'faq') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('frequently-asked-questions') ?>" class="">FAQ'S</a></li>
                    </ul>
                    <div class="line_div"></div>
                    <div class="copy_ryt">
                        <p>&copy Copyright 2016 MBAtrek <em>TM</em>.&nbsp; All rights reserved.</p>
                    </div> 
                    <div class="social_media">
                        <h4>Connect With Us</h4>
                        <ul class="list-inline list-unstyled">
                            <li><a href="https://www.facebook.com/MBAtrek-1084606068302037/" target="_blank" ><span></span></a></li>
                            <li class="linkedin_icon"><a href="https://twitter.com/MBAtrekIndia" target="_blank" ><span></span></a></li>
                            <li class="twiter_icon"><a href="https://www.linkedin.com/company/mbatrek-prviate-ltd."  target="_blank"><span></span></a></li>
                            <li class="google"><a href="https://plus.google.com/112452237948042979188" target="_blank" ><span></span></a></li>
                            <li class="you_tube"><a href="https://www.youtube.com/channel/UCJg7bO36Hii_AXTDL6TLY4A" target="_blank" ><span></span></a></li>
                            <!--<li class="print"><a href="javascript:void(0);" ><span></span></a></li>-->
                        </ul>
                    </div>
                </div>
