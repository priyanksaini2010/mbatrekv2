<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
        <title><?php
            echo Yii::app()->name . " ";
            echo isset($this->pageTitle) ? ": " . $this->pageTitle : "";
            ?></title>      

<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.head"); ?>
        <link rel="icon" href="<?php echo $baseUrl; ?>/images/favicon.ico" type="image/x-icon">
    </head>
    <body>
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
        <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.validations"); ?> 
    </body>
</html> 
