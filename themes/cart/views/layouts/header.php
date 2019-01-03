<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<header>
		<div class="container">
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>-->
	  <div class="logo">
     <a href="<?php echo Yii::app()->getHomeUrl(); ?>">
	 <img src="<?php echo $baseUrl; ?>/images/logo.png" alt="MBAtrek" class="img-responsive" />
	 </a>
	 </div>
	 <div class="logo2">
	 <a href="<?php echo Yii::app()->getHomeUrl(); ?>">
	 <img src="<?php echo $baseUrl; ?>/images/logo2.png" alt="MBAtrek" class="img-responsive" />
	 </a>
	 </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navigate">
            <ul class="nav navbar-nav navi">
                
               
                </li>
                <li class="about">
                    <a href="#">About us</a></span>
                    <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('our-story'); ?>">Introduction to MBAtrek</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('how-are-we-different'); ?>">How are we different</a></li>
	<!--	<li><a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"mbatrek_on_the_ground")); ?>">MBAtrek on the ground</a></li>-->
	
<!--<li><a href="<?php // echo Yii::app()->createUrl('company'); ?>">Company</a></li>-->
<li><a href="<?php echo Yii::app()->createUrl("our-team"); ?>">Our Team</a></li>
<!--<li><a href="<?php // echo Yii::app()->createUrl('abhishek-srivastava'); ?>">Abhishek Srivastava</a></li>-->
<!--<li><a href="<?php // echo Yii::app()->createUrl('alok-srivastava'); ?>">Alok Srivastava</a></li>-->
                    
                  </ul>
                </li>
                <li class="service">
                  <a href="javascript:void(0);" >Our Services </a>		
                  <ul>
                    <li>
						<a href="<?php echo Yii::app()->createUrl('students'); ?>">Students <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
						<ul>
							<li>
								<a href="#">Offerings <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
                                                                    
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"25")); ?>">Resume / CV Diagnostic</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"24")); ?>">Linkedin Diagnostic</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"30")); ?>">Mock Interview</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"23")); ?>">Interview Q & A</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"18")); ?>">Industry Analysis</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"21")); ?>">Company Analysis</a></li>
									<!--<li><a href="<?php // echo Yii::app()->createUrl('cart/description', array("id"=>"29")); ?>">Job Fitment Analysis</a></li>-->
									<li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"22")); ?>">Cracking the GD</a></li>
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
        <li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"31")); ?>">#IndustryReady </a></li>
    <li><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"32")); ?>">#InterviewReady </a></li>
								</ul>
							</li>     						
						</ul>
					</li>
                    <li>
						<a href="<?php echo Yii::app()->createUrl('professionals'); ?>">Young Professionals <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
						<ul>
							<li><a href="#" >Offerings <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
									<!--<li class="kopie"><a href="#">#CareerPlanning </a></li>
									 <li class="kopie"><a href="#">#IndustryReady </a></li>
									 <li class="kopie"><a href="#">#InterviewReady </a></li>-->
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"18")); ?>">Industry Analysis</a></li>	
									<li class="kopie"><a href="<?php echo Yii::app()->createUrl('cart/description', array("id"=>"21")); ?>">Company Analysis</a></li>
									<!--<li class="kopie"><a href="<?php // echo Yii::app()->createUrl('cart/description', array("id"=>"29")); ?>">Job Fitment Analysis </a></li>-->
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
                                        <li>
                                            <a href="<?php echo Yii::app()->createUrl('institutes'); ?>">Educational Institutes</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo Yii::app()->createUrl('companies'); ?>">Companies</a>
                                        </li>
                  </ul>                
                </li>
                <li>
                  <a href="#">Insights </a>				
                  <ul >
					<li><a href="<?php echo Yii::app()->createUrl('blogs'); ?>">Blogs / Article</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('videos'); ?>">Videos</a></li>
					<!--<li><a href="javascript:void(0);">#CareerPrep</a></li>-->

                    
                  </ul>                
                </li>
								<li class="success"><a href="#<?php // echo Yii::app()->createUrl('our-story'); ?>">Success Stories</a>
								<ul >
										<li><a href="<?php echo Yii::app()->createUrl('success/students'); ?>">Students </a>
										<!--<ul >
											<li><a href="#">#YouBeTheExecutive </a></li>
											<li><a href="#">#Campus2Corporate</a></li>
										</ul>-->
									</li>
<!--										<li><a href="<?php // echo Yii::app()->createUrl('cart/story', array("type"=>"1")); ?>">Placement Coordinator </a>
										<ul >
											<li><a href="#">#YouBeTheExecutive </a></li>
											<li><a href="#">#Campus2Corporate</a></li>
										</ul>
									</li>-->
									<!--<li><a href="<?php // echo Yii::app()->createUrl('cart/story', array("type"=>"3")); ?>">Young Professionals </a>-->
										
										<!--<ul >
											<li><a href="#">#Career Planning</a></li>
											
										</ul>-->
									</li>
									
                  </ul>
							</li>
                <li class="faq"><a href="javascript:void(0);">Campus Connect</a>
									<ul >
                    <li><a href="<?php echo Yii::app()->createUrl('campus-abassador'); ?>">Campus Ambassador Program</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('interview-ready-competition'); ?>">#InterviewReady Competition</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('industry-ready-competition'); ?>">#IndustryReady Competition</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('mbatrek-on-the-ground'); ?>">MBAtrek@Campus</a></li>
                  </ul>
				</li>

                <li class="contact"><a href="<?php echo Yii::app()->createUrl('contact'); ?>">Contact Us</a></li>
				
            </ul>
            <div class="mobile_menu">
					<div class="menu-text"> 
						<a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i><span class="menu_open">Menu</span><!--<i class="fa fa-times" aria-hidden="true"></i><span class="menu_cancle">Close</span>--></a>  
					</div>
					<nav id="menu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><span>About us</span>
								<ul>
									<li><a href="#about/history">Introduction to MBAtrek</a></li>
									<li><a href="#about/history">How are we different</a></li>
									<li><a href="#about/history">Our Team</a></li>
								</ul>
							</li>
							<li><span>Our Services </span>
								<ul>
									<li><span>Students</span>
										<ul>
											<li><span>Offerings</span>
												<ul>
													<li><a href="#about/team/management">Resume / CV Diagnostic</a></li>
													<li><a href="#about/team/sales">Linkedin Diagnostic</a></li>
													<li><a href="#about/team/sales">Mock Interview</a></li>
													<li><a href="#about/team/sales">Interview Q & A</a></li>
													<li><a href="#about/team/sales">Industry Analysis</a></li>
													<li><a href="#about/team/sales">Company Analysis</a></li>
													<li><a href="#about/team/sales">Cracking the GD</a></li>
												</ul>
											</li>
											<li><a href="#about/team/sales">Packages</a></li>
										</ul>
									</li>
									<li><a href="#about/history">Young Professionals </a></li>
									<li><a href="#about/history">Educational Institutes</a></li>
									<li><a href="#about/history">Companies</a></li>
									
									
								</ul>
							</li>
							<li><a href="#contact">Contact</a></li>

						</ul>
					</nav>
				</div>
            
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
