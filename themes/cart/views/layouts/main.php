<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart");
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.seo"); ?>
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
        <!-- DO NOT MODIFY -->
        <!-- Quora Pixel Code (JS Helper) -->
        <script>
            !function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
            qp('init', '502c75240dff49ed874fa846a7f25ac2');
            qp('track', 'ViewContent');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/502c75240dff49ed874fa846a7f25ac2/pixel?tag=ViewContent&noscript=1"/></noscript>
        <!-- End of Quora Pixel Code -->
        <script>qp('track', 'Generic');</script>

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
                                            <br />
                                            <span>If our team is amazed by your ideas, we will get back to you with the next steps :)</span>
                                            <br />
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
                                            <br />
                                            <span>Further information would be provided to you once we have <span style="text-decoration: underline">20 registrations</span> from your college/university</span>
                                            <br />
                                            <span>For any query write at -</span>
                                            <br />
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
                                          <br />
                                            <span>Password length should be 8 characters and it should be alphanumeric can contain  special characters (_, @, ., /, #, &, + and -).</span>
                                           <br />
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
                                            <br />
                                            <span>Please check your email to verify account.</span>
                                            <br />
                                           <span>Check your Spam/Junk/Promotions folder if you have not received the email.</span>

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
                                            <br />
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
                                           <br />
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
                            <h3 id="pop-notification-type-2">Confirm Action</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>Are you sure you want to remove this item from your cart?</span>
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
        <div id="myModal-clearcart" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Confirm Action</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span id="pop-notification-text">
                                            <span>Are you sure you want to remove all products from your cart?</span>
                                        <button type="button" value="Yes" alt="" id="clear-yes">Yes</button>
                                        <button type="button" value="No" id="clear-no">No</button>
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
                                            <br />
                                            <span>Further information would be provided to you once we have <span style="text-decoration: underline">10 teams registrations</span> from your college/university</span>
                                            <br />
                                            <span>For any query write at -</span>
                                            <br />
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
                                        <br />
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
        <div id="CartMin" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Coupon Removed</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span>Applied coupon is removed as it does not meet minimum amount criteria.</span><br/><br />
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
        <div id="CartProd" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2">Coupon Removed</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><!--<i class="fa fa-check" id="pop-notification-class" aria-hidden"true"=""></i>-->
                                        <span>Applied coupon is removed as your cart does not contains applicable products.</span><br/><br />
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
        <div id="dynamicModal" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal header</h4>
                    </div>-->
                    <div class="modal-body">
                        <div class="md-content">
                            <h3 id="pop-notification-type-2" class="d-modal-title">Registration Successful</h3>
                            <div class="error_wrap">
                                <div class="error_container" id="d-modal-content">

                                </div>
                                <!-- <button class="md-close">OK</button> -->
                                <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
            
            $q = $_SERVER['QUERY_STRING'];
            $is_home = false;
            if(DIREC == $_SERVER['REQUEST_URI']) {
                $qExp = array(0=>'home',1=>"home");
                $is_home = true;
            } else {
                $qExp = explode('=', $q);
            }
            if (!empty($qExp) && isset($qExp[1])) {
                $popUp = Popup::model()->findByAttributes(array('url' => $qExp[1],'status' => 1));
                if (!empty($popUp)) {?>
                    <div id="callOutPopUp-<?php echo $popUp->id;?>" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Modal header</h4>
                                </div>-->
                                <div class="modal-body">
                                    <div class="md-content">
                                        <h3 id="pop-notification-type-2" class="d-modal-title"><?php echo $popUp->header_text;?></h3>
                                        <h2 id="pop-notification-type-3" class="d-modal-title"><?php echo $popUp->sub_heading_text;?></h2>
                                        <div class="error_wrap">
                                            <div class="error_container" id="d-modal-content">
                                                    <input class="form-control" placeholder="Name *" id="<?php echo $popUp->id;?>-name"><br/>
                                                    <input class="form-control" placeholder="Email Address *" id="<?php echo $popUp->id;?>-email">
                                            </div>
                                            <!-- <button class="md-close">OK</button> -->
                                                <div class="main_register"><div class="site_btn"><a alt="<?php echo $popUp->id;?>" class="cta-filled" href="javascript:void(0);"><?php echo $popUp->button_text;?></a></div></div>
                                            <a data-dismiss="modal" class="close" href="javascript:void(0);"><?php echo $popUp->cancellation_text;?></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        <?php   }
            }
            if ($is_home) {
                $assessmentPopUp = AssessmentPopup::model()->findByAttributes(array('status'=>1));
                if (!empty($assessmentPopUp)) {?>
                    <div id="assessmentPopup" class="modal pop_design" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!--<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Modal header</h4>
                                </div>-->
                                <div class="modal-body">
                                    <div class="md-content">
<!--                                        <h3 id="pop-notification-type-2">Sample 2</h3>-->
                                        <div class="error_wrap">
                                            <img src="<?php echo Yii::app()->baseUrl;?>/assets/assements/<?php echo $assessmentPopUp->image; ?>"/>
                                            <!-- <button class="md-close">OK</button> -->
                                            <div class="main_register"><div class="site_btn"><a data-dismiss="modal" class="close" href="javascript:void(0);">OK</a></div></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

        <?php   }
            }
        ?>
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.validations"); ?> 
<!--    LinkedIn Tracking-->
    <script type="text/javascript">
        _linkedin_partner_id = "469235";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script><script type="text/javascript">
        (function(){var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=469235&fmt=gif" />
    </noscript>
        <script type="text/javascript">
            $(document).ready(function(){
                $("a").click(function(){
                    if($(this).html() == "Add to Cart"){
                        qp('track', 'Generic');
                    }
                })
            });
        </script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    </body>
</html> 
