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
                  <a id="our-services" href="javascript:void(0);" >Our Services </a>		
                  <ul>
                    <li>
						<a id="students" href="<?php echo Yii::app()->createUrl('students'); ?>">Students <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
						<ul>
							<li>
								<a  id="students-offerings" href="#">Offerings <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								

                                    <ul>
                                        <li ><a id="resume-diagnostic" href="<?php echo Yii::app()->createUrl('resume-diagnostic'); ?>">Resume / CV Diagnostic</a></li>
                                        <li><a id="linkedin-diagnostic" href="<?php echo Yii::app()->createUrl('linkedin-diagnostic'); ?>">Linkedin Diagnostic</a></li>
                                        <li><a id="mock-interview"  href="<?php echo Yii::app()->createUrl('mock-interview'); ?>">Mock Interview</a></li>
                                        <li><a id="interview-q&a" href="<?php echo Yii::app()->createUrl('interview-q&a'); ?>">Interview Q & A</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('industry-analysis'); ?>">Industry Analysis</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('company-analysis'); ?>">Company Analysis</a></li>
                                        <li><a href="<?php echo Yii::app()->createUrl('cracking-the-gd'); ?>">Cracking the GD</a></li>
                                    </ul>
								
							</li>     
							<li><a href="#">Packages <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a> 
								<ul>
                                    <li><a id="intern-go" href="<?php echo Yii::app()->createUrl('intern-go'); ?>">InternGO</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('intern-ace'); ?>">InternACE</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('intern-pro'); ?>">InternPRO</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('intern-arise'); ?>">InternARISE</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('campus-2-corporate'); ?>">Campus2Corporate</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('industry-ready'); ?>">#IndustryReady</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('interview-ready'); ?>">#InterviewReady</a></li>
								</ul>
							</li>     						
						</ul>
					</li>
                    <li>
						<a href="<?php echo Yii::app()->createUrl('professionals'); ?>">Young Professionals <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
						<ul>
							<li><a href="#" >Offerings <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('industry-analysis'); ?>">Industry Analysis</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('company-analysis'); ?>">Company Analysis</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('resume-diagnostic'); ?>">Resume / CV Diagnostic</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('linkedin-diagnostic'); ?>">LinkedIn Diagnostic</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('mock-interview'); ?>">Mock Interview</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('interview-q&a'); ?>">Interview Q & A</a></li>
								</ul>
							</li>      
							<li><a href="#" >Packages <i class="pull-right fa fa-angle-double-right" aria-hidden="true"></i></a>
								<ul>
									<!--<li class="kopie"><a href="#">Industry Ana</a></li>
									<li ><a href="#">Compus2Corporate</a></li>-->
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('career-planning'); ?>">#CareerPlanning</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('industry-ready'); ?>">#IndustryReady</a></li>
                                    <li class="kopie"><a href="<?php echo Yii::app()->createUrl('interview-ready'); ?>">#InterviewReady</a></li>
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
                    <li><a href="<?php echo Yii::app()->createUrl('campus-ambassador'); ?>">Campus Ambassador Program</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('interview-ready-competition'); ?>">#InterviewReady Competition</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('industry-ready-competition'); ?>">#IndustryReady Competition</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('mbatrek-campus'); ?>">MBAtrek@Campus</a></li>
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
							<li><a href="/">Home</a></li>
							<li><span>About us</span>
								<ul>
									<li><a href="<?php echo Yii::app()->createUrl('our-story'); ?>">Introduction to MBAtrek</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('how-are-we-different'); ?>">How are we different</a></li>
									<li><a href="<?php echo Yii::app()->createUrl("our-team"); ?>">Our Team</a></li>
								</ul>
							</li>
							<li><span>Our Services </span>
								<ul>
									<li><span>Students</span>
										<ul>
											<li><span>Offerings</span>
												<ul>
													<li><a href="<?php echo Yii::app()->createUrl('resume-diagnostic'); ?>">Resume / CV Diagnostic</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('linkedin-diagnostic'); ?>">Linkedin Diagnostic</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('mock-interview'); ?>">Mock Interview</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('interview-q&a'); ?>">Interview Q & A</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('industry-analysis'); ?>">Industry Analysis</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('company-analysis'); ?>">Company Analysis</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('cracking-the-gd'); ?>">Cracking the GD</a></li>
												</ul>
											</li>
											<li><span>Packages</span>
												<ul>
													<li><a href="<?php echo Yii::app()->createUrl('intern-go'); ?>">InternGO</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('intern-ace'); ?>">InternACE</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('intern-pro'); ?>">InternPRO</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('intern-arise'); ?>">InternARISE</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('campus-2-corporate'); ?>">Campus2Corporate</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('industry-ready'); ?>">#IndustryReady</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('interview-ready'); ?>">#InterviewReady</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><span>Young Professionals</span>
										<ul>
											<li><span>Offerings</span>
												<ul>
													<li><a href="<?php echo Yii::app()->createUrl('industry-analysis'); ?>">Industry Analysis</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('company-analysis'); ?>">Company Analysis</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('resume-diagnostic'); ?>">Resume / CV Diagnostic</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('linkedin-diagnostic'); ?>">LinkedIn Diagnostic</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('mock-interview'); ?>">Mock Interview</a></li>
													<li><a href="javascript:void(0);">Interview Q & A</a></li>
												</ul>
											</li>
											<li><span>Packages</span>
												<ul>
													<li><a href="<?php echo Yii::app()->createUrl('career-planning'); ?>">#CareerPlanning</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('industry-ready'); ?>">#IndustryReady</a></li>
													<li><a href="<?php echo Yii::app()->createUrl('interview-ready'); ?>">#InterviewReady</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="<?php echo Yii::app()->createUrl('institutes'); ?>">Educational Institutes</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('companies'); ?>">Companies</a></li>
								</ul>
							</li>
							<li><span>Insights</span>
								<ul>
									<li><a href="<?php echo Yii::app()->createUrl('blogs'); ?>">Blogs / Article</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('videos'); ?>">Videos</a></li>
								</ul>
							</li>
							<li><span>Success Stories</span>
								<ul>
									<li><a href="<?php echo Yii::app()->createUrl('success/students'); ?>">Students</a></li>
								</ul>
							</li>
							<li><span>Campus Connect</span>
								<ul>
									<li><a href="<?php echo Yii::app()->createUrl('campus-abassador'); ?>">Campus Ambassador Program</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('interview-ready-competition'); ?>">#InterviewReady Competition</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('industry-ready-competition'); ?>">#IndustryReady Competition</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('mbatrek-on-the-ground'); ?>">MBAtrek@Campus</a></li>
								</ul>
							</li>
							<li class="contact"><a href="<?php echo Yii::app()->createUrl('contact'); ?>">Contact Us</a></li>
						</ul>
					</nav>
				</div>
            
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
