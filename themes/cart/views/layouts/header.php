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
               
                </li>
                <li class="about">
                    <a href="#">About us</a></span>
                    <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('our-story'); ?>">Introduction to MBAtrek</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('how-are-we-different'); ?>">How are we different</a></li>
	<!--	<li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_on_the_ground")); ?>">MBAtrek on the ground</a></li>-->

<li><a href="<?php echo Yii::app()->createUrl('abhishek-srivastava'); ?>">Abhishek Srivastava</a></li>
<li><a href="<?php echo Yii::app()->createUrl('alok-srivastava'); ?>">Alok Srivastava</a></li>
                    
                  </ul>
                </li>
                <li class="service">
                  <a href="javascript:void(0);" >Our Products </a>		
                  <ul>
                    <li>
						<a href="<?php echo Yii::app()->createUrl('cart/student'); ?>">Students <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
						<ul>
							<li>
								<a href="#">Offerings <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
                                                                    
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"25")); ?>">Resume / CV Diagnostic</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"24")); ?>">Linkedin Diagnostic</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"30")); ?>">Mock Interview</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"23")); ?>">Interviews Q & A</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"18")); ?>">Industry Analysis</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"21")); ?>">Company Analysis</a></li>
									<!--<li><a href="<?php // echo Yii::app()->createUrl('cart/description', array("id"=>"29")); ?>">Job Fitment Analysis</a></li>-->
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"22")); ?>">Cracking GD</a></li>
									<!--<li><a href="#">InternACE</a></li>
									<li><a href="#">InternPRO</a></li>
									<li><a href="https://mbatrek.com/v/index.php?r=cart/description&id=17">InternARISE</a></li>-->
								</ul>
							</li>     
							<li><a href="#">Packages <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a> 
								<ul>
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"19")); ?>">InternGO</a></li>
<!--<li><a href="https://mbatrek.com/v2/index.php?r=cart/description&id=22">Cracking GD</a></li>-->
                                                                        <li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"28")); ?>">InternACE</a></li>
                                                                        <li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"27")); ?>">InternPRO</a></li>
<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"17")); ?>">InternARISE</a></li>
								
	<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"34")); ?>">Campus2Corporate</a></li>
								</ul>
							</li>     						
						</ul>
					</li>
                    <li>
						<a href="<?php echo Yii::app()->createUrl('cart/profesionals'); ?>">Young Professionals <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
						<ul>
							<li><a href="#" >Offerings <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
									<!--<li class="kopie"><a href="#">#CareerPlanning </a></li>
									 <li class="kopie"><a href="#">#IndustryReady </a></li>
									 <li class="kopie"><a href="#">#InterviewReady </a></li>-->
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"18")); ?>">Industry Analysis</a></li>	
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"21")); ?>">Company Analysis</a></li>
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"29")); ?>">Job Fitment Analysis </a></li>
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"25")); ?>">Resume / CV Diagnostic</a></li>
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"24")); ?>">LinkedIn Diagnostic </a></li>
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"30")); ?>">Mock Interview </a></li>
									<li class="kopie"><a href="#">Interview Q & A</a></li>
								</ul>
							</li>      
							<li><a href="#" >Packages <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
									<!--<li class="kopie"><a href="#">Industry Ana</a></li>
									<li><a href="#">Compus2Corporate</a></li>-->
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"33")); ?>">#CareerPlanning </a></li>
                                                                         <li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"31")); ?>">#IndustryReady </a></li>
                                                                         <li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"32")); ?>">#InterviewReady </a></li>
								</ul>
							</li>     						
						</ul>
					</li>
                  </ul>                
                </li>
                <li>
                  <a href="#">Insights </a>				
                  <ul >
					<li><a href="<?php echo Yii::app()->createUrl('blogs'); ?>">Blogs / Article</a></li>
					<li><a href="javascript:void(0);">Videos</a></li>
					<!--<li><a href="javascript:void(0);">#CareerPrep</a></li>-->

                    
                  </ul>                
                </li>
								<li class="success"><a href="<?php echo Yii::app()->createUrl('our-story'); ?>">Success Stories</a>
								<ul >
										<li><a href="<?php echo Yii::app()->createUrl('cart/story', array("type"=>"2")); ?>">Students </a>
										<!--<ul >
											<li><a href="#">#YouBeTheExecutive </a></li>
											<li><a href="#">#Campus2Corporate</a></li>
										</ul>-->
									</li>
										<li><a href="<?php echo Yii::app()->createUrl('cart/story', array("type"=>"1")); ?>">Placement Coordinator </a>
										<!--<ul >
											<li><a href="#">#YouBeTheExecutive </a></li>
											<li><a href="#">#Campus2Corporate</a></li>
										</ul>-->
									</li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/story', array("type"=>"3")); ?>">Young Professionals </a>
										
										<!--<ul >
											<li><a href="#">#Career Planning</a></li>
											
										</ul>-->
									</li>
									<li><a href="<?php echo Yii::app()->createUrl('mbatrek-on-the-ground'); ?>">MBAtrek on the ground</a></li>
                  </ul>
							</li>
                <li class="faq"><a href="javascript:void(0);">CampusConnect</a>
									<ul >
                    <li><a href="<?php echo Yii::app()->createUrl('campus-abassador'); ?>">Campus Ambassador Program</a></li>
                    <li><a href="#">#InterviewReady Competition</a></li>
                    <li><a href="#">#IndustryReady Competition</a></li>
                  </ul>
				</li>

                <li class="contact"><a href="<?php echo Yii::app()->createUrl('contact-us'); ?>">Contact Us</a></li>
            </ul>
            
            
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
