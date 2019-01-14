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
<script type="text/javascript">
var domain_name = '<?php echo $_SERVER['HTTP_HOST'].DIREC;?>';
</script>
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
                            <h3 id="pop-notification-type-2">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>Thank you for showing interest in joining the revolution to up-skill your peers.</span>
                                            <br /> <br />
                                            <span>If our team is amazed by your ideas, we will get back to you with the next steps :)</span>
                                            <br /><br />
                                            <span> Stay tuned !!</span>
                                            
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
         <div id="myModal30" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>You have registered successfully to #InterviewReady competition.</span>
                                            <br /> <br />
                                            <span>Further information would be provided to you once we have <span style="text-decoration: underline">20 registrations</span> from your college/university</span>
                                            <br /><br />
                                            <span>For any query write at -</span>
                                            <br /><br />
                                            <span style="text-decoration: underline">contact@mbatrek.com</span><span> or call at &nbsp;&nbsp;&nbsp;<br/>+91-9821948355,+91-9821948354</span>
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
         <div id="myModal34" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Error</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>Kindly try another password!</span>
                                            <br /> <br />
                                            <span>Password length should be 8 characters and it should be alphanumeric can contain  special characters (_, @, ., /, #, &, + and -).</span>
                                            <br /><br />
<!--                                            <span>Remember, Special Characters are not allowed. </span>-->
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
        <div id="myModal40" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <p>
                                        <span id="pop-notification-text">
                                            <span>Thank you for registering with MBAtrek</span>
                                            <br /><br />
                                            <span>Please check your email to verify account.</span>
                                            <br /> <br />
                                           <span>Check your SPAM if you have not recieved the email.</span>
                                            <br /><br />
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
        <div id="myModal50" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <p>
                                        <span id="pop-notification-text">
                                            <span>Thank you for registering with us</span>
                                            <br /><br />
                                            <span>Your account has been verified now.</span>

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
         <div id="myModal35" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Error</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>This Email ID is already registered with us.</span>
                                            <br /> <br />
                                            <span>Kindly Login to access your account.</span>
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
        <div id="myModal-removecart" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>Are you sure you want to remove this item from your cart.</span>
                                        <button type="button" value="Yes" alt="" id="remove-yes">Yes</button>
                                        <button type="button" value="No" id="remove-no">No</button>
                                        </span></p>
                                </div>
                                <!-- <button class="md-close">OK</button> -->
<!--                                <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div id="myModal31" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>You have registered successfully to #IndustryReady competition.</span>
                                            <br /> <br />
                                            <span>Further information would be provided to you once we have <span style="text-decoration: underline">10 teams registrations</span> from your college/university</span>
                                            <br /><br />
                                            <span>For any query write at -</span>
                                            <br /><br />
                                            <span style="text-decoration: underline">contact@mbatrek.com</span><span> or call at <br/>+91-9821948355,+91-9821948354</span>
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
         <div id="myModal32" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><span>Sorry!</span><br /><span>Currently no coupon is applicable on this Email ID</span><br/><span>Try Login with your College Email ID.</span></p>
                                </div>
                                <!-- <button class="md-close">OK</button> -->
                                <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div id="myModal33" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <p><span>Thank You for reaching out to us! </span><br /><span>We will get back to you soon.</span></p>
                                </div>
                                <!-- <button class="md-close">OK</button> -->
                                <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div id="myModal29" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span>Sorry!</span>
                                        <br /><br />
                                        <span>Currently no coupon is applicable on this Email ID</span><br/><br />
                                        <span>Try Login with your College Email ID.</span>
                                    </p>
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
