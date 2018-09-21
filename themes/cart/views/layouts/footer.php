<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<footer>
                <div class="container">
                    <div class="footer-wrap">
                            <div class="footer-menu1">
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"copyright_notice")); ?>">Copyright Notice</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"privacy_policy")); ?>">Privacy Statement</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"declimier")); ?>">Disclaimer</a></li>
                                    </ul>
                                </div>
                                <div class="footer-logo-wrapper">
                                    <span class="footer-logo">
                                            <a href="#"><img src="<?php echo $baseUrl; ?>/images/logo.png" alt="MBAtrek" /></a>
                                    </span>
                                    <span class="copyright">© Copyright <?php echo date("Y");?> MBAtrek TM.  All rights reserved</span>
                                </div>
                                <div class="footer-menu2">
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"terms_conditions")); ?>">Terms & Conditions</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"talk_advisory")); ?>">Talk to Career Advisor</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"faq")); ?>">FAQs</a></li>
                                    </ul>
                                </div>
                    </div>
                </div>                
            </footer>
