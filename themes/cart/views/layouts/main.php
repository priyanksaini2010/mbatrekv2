<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
        <title><?php
            echo Yii::app()->name . " ";
            echo isset($this->pageTitle) ? ": " . $this->pageTitle : "";
            ?></title>      

        <?php 
        $controller = $this->uniqueid;
    $action = $this->action->Id;
        echo $this->renderPartial("webroot.themes.cart.views.layouts.head"); ?>
        <link rel="icon" href="<?php echo $baseUrl; ?>/images/favicon.ico" type="image/x-icon">
        
    </head>
    <body <?php if($controller == "cart" && $action == "index"){?>class="only-home-class"<?php }?>>
        <div id="fb-root"></div>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
        <div class="page-wrapper">

                <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.header"); ?>

            <div class="header-bottom">
                <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.social"); ?>                        
            </div> 
            <main>
            <?php echo $content; ?>
            </main>
        <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.footer"); ?>
        </div>
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.foot"); ?>

        <div id="myModal27" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type"></h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><i class="fa " id="pop-notification-class" aria-hidden"true"=""></i> <span id="pop-notification-text">Please enter valid email address!</span></p>
                                </div>
                                <!-- <button class="md-close">OK</button> -->
                                <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div id="myModal28" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Thanks</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>
                                        <span id="pop-notification-text">
                                            <span>Thanks for showing interest in  joining revolution to up-skill your peers.</span>
                                            <br /> <br />
                                            <span>If our team is amazed by your idea we will get back to you with next step.</span>
                                            <br /><br />
                                            <span> Stay tuned.</span>
                                            
                                        </span></p>
                                </div>
                                <!-- <button class="md-close">OK</button> -->
                                <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.validations"); ?> 
 <script>
   /*   
    $(".show_content_alok").hover(
	
        function () {
        $(".alok_info").addClass("display_information_alok");
        },
        function () {
        $(".alok_info").removeClass("display_information_alok");
        }
    );
    $(".show_content_abhishek").hover(
        function () {
        $(".abhishek_info").addClass("display_information_alok");
        },
        function () {
        $(".abhishek_info").removeClass("display_information_alok");
        }
    );
    $(".ayushi_info").hover(
        function () {
        $(".show_ayushi_info").addClass("display_information_alok");
        },
        function () {
        $(".show_ayushi_info").removeClass("display_information_alok");
        }
    );
    $(".rahul_info").hover(
        function () {
        $(".show_rahul_info").addClass("display_information_alok");
        },
        function () {
        $(".show_rahul_info").removeClass("display_information_alok");
        }
    ); */
    </script>
    </body>
</html> 
