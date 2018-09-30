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
                <li class="dropdown  about">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About us</a><span class="icon_nav"></span>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_story")); ?>">Introduction to MBAtrek</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"how_we_are_different")); ?>">How are we different</a></li>
	<!--	<li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_on_the_ground")); ?>">MBAtrek on the ground</a></li>-->

<li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"abhishek")); ?>">Abhishek Srivastava</a></li>
<li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"alok")); ?>">Alok Srivastava</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown service">
                  <a href="#" class="dropdown-toggle" data-toggle=" dropdown">Our Products </a>	<span class="icon_nav"></span>			
                  <ul class="dropdown-menu" role="menu">
                    <li class=" dropdown dropdown-submenu">
						<a class="dropdown-toggle sub_menu" data-toggle="dropdown" href="<?php echo Yii::app()->createUrl('cart/student'); ?>">Students</a>
						<ul class="dropdown-menu">
							<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle sub_menu" data-toggle="dropdown">Offerings</a>
								<ul class="dropdown-menu">
									<li class="kopie"><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=25">Resume / CV Diagnostic</a></li>
									<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=24">Linkedin Diagnostic</a></li>
									<li><a href="#">Mock Interviews</a></li>
									<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=23">Interviews Q & A</a></li>
									<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=18">Industry Analysis</a></li>
									<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=21">Company Analysis</a></li>
									<li><a href="#">Job Fitment Analysis</a></li>
									<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=22">Cracking GD</a></li>
									<!--<li><a href="#">InternACE</a></li>
									<li><a href="#">InternPRO</a></li>
									<li><a href="https://mbatrek.com/v/index.php?r=cart/description&id=17">InternARISE</a></li>-->
								</ul>
							</li>     
							<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle sub_menu" data-toggle="dropdown">Packages</a>
								<ul class="dropdown-menu">
									<li class="kopie"><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=20">InternGO</a></li>
<!--<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=22">Cracking GD</a></li>-->
                                                                        <li><a href="#">InternACE</a></li>
                                                                        <li><a href="#">InternPRO</a></li>
<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=17">InternARISE</a></li>
								
	<li><a href="#">Campus2Corporate</a></li>
								</ul>
							</li>     						
						</ul>
					</li>
                    <li class="dropdown dropdown-submenu">
						<a class="dropdown-toggle sub_menu" data-toggle="dropdown" href="<?php echo Yii::app()->createUrl('cart/profesionals'); ?>">Young Professionals</a>
						<ul class="dropdown-menu">
							<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle sub_menu" data-toggle="dropdown">Offerings</a>
								<ul class="dropdown-menu">
									<!--<li class="kopie"><a href="#">#CareerPlanning </a></li>
									 <li class="kopie"><a href="#">#IndustryReady </a></li>
									 <li class="kopie"><a href="#">#InterviewReady </a></li>-->
									<li class="kopie"><a href="#">Industry Analysis</a></li>	
									<li class="kopie"><a href="#">Company Analysis</a></li>
									<li class="kopie"><a href="#">Job Fitment Analysis </a></li>
									<li class="kopie"><a href="#">Resume / CV Diagnostic</a></li>
									<li class="kopie"><a href="#">LinkedIn Diagnostic </a></li>
									<li class="kopie"><a href="#">Mock Interview </a></li>
									<li class="kopie"><a href="#">Interview Q & A</a></li>
								</ul>
							</li>     
							<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle sub_menu" data-toggle="dropdown">Packages</a>
								<ul class="dropdown-menu">
									<!--<li class="kopie"><a href="#">Industry Ana</a></li>
									<li><a href="#">Compus2Corporate</a></li>-->
									<li class="kopie"><a href="#">#CareerPlanning </a></li>
                                                                         <li class="kopie"><a href="#">#IndustryReady </a></li>
                                                                         <li class="kopie"><a href="#">#InterviewReady </a></li>
								</ul>
							</li>     						
						</ul>
					</li>
                  </ul>                
                </li>
                <li class="dropdown insights">
                  <a href="#" class="dropdown-toggle" data-toggle="
                  dropdown">Insights </a>	<span class="icon_nav"></span>			
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo Yii::app()->createUrl('site/blogs', array("view"=>"blog")); ?>">Blog</a></li>
<li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_on_the_ground")); ?>">MBAtrek on the ground</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>                
                </li>
                <li class="success"><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_story")); ?>">Success Stories</a><span class="icon_nav"></span></li>
                <li class="faq"><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"faq")); ?>">FAQ</a><span class="icon_nav"></span></li>

                <li class="contact"><a href="<?php echo Yii::app()->createUrl('contact/create', array("view"=>"contact")); ?>">Contact Us</a></li>
            </ul>
            
            
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
