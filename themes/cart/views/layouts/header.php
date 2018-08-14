<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<header>
		<div class="container">
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <div class="logo">
     <a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">
	 <img src="<?php echo $baseUrl; ?>/images/logo.png" alt="MBAtrek" class="img-responsive" />
	 </a>
	 </div>
	 <div class="logo2">
	 <a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">
	 <img src="<?php echo $baseUrl; ?>/images/logo2.png" alt="MBAtrek" class="img-responsive" />
	 </a>
	 </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navi">
                <li class="home"><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a>
                <span class="icon_nav"></span>
                </li>
                <li class="about">
                    <a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"company")); ?>">About us</a><span class="icon_nav"></span>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_story")); ?>">Introduction to MBAtrek</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"how_we_are_different")); ?>">How are we different</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="dropdown service">
                  <a href="#" class="dropdown-toggle" data-toggle="
                  dropdown">Our Products </a>	<span class="icon_nav"></span>			
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo Yii::app()->createUrl('cart/student'); ?>">Students</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('cart/profesionals'); ?>">Young Professionals</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"educational_institute")); ?>">Institutes</a></li>
                    
                    <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"company")); ?>">Companies</a></li>
                  </ul>                
                </li>
                <li class="dropdown insights">
                  <a href="#" class="dropdown-toggle" data-toggle="
                  dropdown">Insights </a>	<span class="icon_nav"></span>			
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>                
                </li>
                <li class="success"><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_story")); ?>">Success Stories</a><span class="icon_nav"></span></li>
                <li class="faq"><a href="#">Faq</a><span class="icon_nav"></span></li>
                <li class="contact"><a href="#">Contact Us</a></li>
            </ul>
            
            
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>