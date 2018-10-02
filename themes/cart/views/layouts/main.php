<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<!DOCTYPE html>
<html lang="eng">
<head>
 <?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<title><?php echo Yii::app()->name . " ";
echo isset($this->pageTitle) ? ": " . $this->pageTitle : "";
?></title>      

 <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.head");?>
<link rel="icon" href="<?php echo $baseUrl;?>/images/favicon.ico" type="image/x-icon">
</head>
    <body>
        <div class="page-wrapper">
	 
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.header");?>

<div class="header-bottom">
<?php echo $this->renderPartial("webroot.themes.cart.views.layouts.social");?>                        
                </div> 
            <main>
                <?php echo $content;?>
            </main>
            <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.footer");?>
        </div>
        <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.foot");?>
         <?php echo $this->renderPartial("webroot.themes.cart.views.layouts.validations");?> 

    </body>
</html> 
