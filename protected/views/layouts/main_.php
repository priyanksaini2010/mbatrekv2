<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo Yii::app()->name." ";echo isset($this->pageTitle) ? ": ".$this->pageTitle : ""; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="js/jquery.DEPreLoad.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<!--[if lt IE 8]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-----------Preloader JS-------------------->
	<script>
		$(document).ready(function() {
			
			setTimeout(function(){
				$("#depreload .wrapper").animate({ opacity: 1 });
			}, 400);

			setTimeout(function(){
				$("#depreload .logo").animate({ opacity: 1 });
			}, 800);

			var canvas  = $("#depreload .line")[0],
				context = canvas.getContext("2d");

			context.beginPath();
			context.arc(88, 103, 83, Math.PI * 1.5, Math.PI * 1.6);
			context.strokeStyle = '#DABC22';
			context.lineWidth = 5;
			context.stroke();

			var loader = $("body").DEPreLoad({
				OnStep: function(percent) {
					console.log(percent + '%');

					$("#depreload .line").animate({ opacity: 1 });
					$("#depreload .perc").text(percent + "%");

					if (percent > 5) {
						context.clearRect(0, 0, canvas.width, canvas.height);
						context.beginPath();
						context.arc(88, 103, 83, Math.PI * 1.5, Math.PI * (1.5 + percent / 50), false);
						context.stroke();
					}
				},
				OnComplete: function() {
					console.log('Everything loaded!');

					$("body").addClass('remove_overflow');
					$("#depreload").addClass('loaded_dom');
				   // $("#depreload .perc").text("done");
					$("#depreload .loading").animate({ opacity: 0 });
				} 
			});
		}); 
	</script>
<!-----------End Preloader JS-------------------->
</head>
    <?php 
    $controller =  $this->uniqueid;
    $action =  $this->action->Id;
    $view  = isset($_REQUEST['view'])?$_REQUEST['view']:"";
    ?>
<body>
	<div id="depreload" style="background-image:url('../images/bgr.jpg');" class="table">
		<div class="table-cell wrapper">
			<div class="circle">
				<canvas class="line" width="178px" height="189px"></canvas>
				<img src="images/preloader.png" class="logo" alt="logo" />
			</div>
			<p class="perc"></p>
			<p class="loading">MBAtrek Loading...</p>
		</div> 
	</div> 
	<div class="full_wrapper ">
	<div class="sticky-container">
		<ul class="sticky">
			<li>
				
				<span>Facebook</span>
				<img width="32" height="32" title="" alt="" src="images/fb1.png" />
			</li>
			<li>
				
				<span>Twitter</span>
				<img width="32" height="32" title="" alt="" src="images/tw1.png" />
			</li>
			<li>
				
				<span>Pinterest</span>
				<img width="32" height="32" title="" alt="" src="images/pin1.png" />
			</li>
			<li>
				
				<span>Linkedin</span>
				<img width="32" height="32" title="" alt="" src="images/li1.png" />
			</li>
			<li>
				
				<span>RSS</span>
				<img width="32" height="32" title="" alt="" src="images/rss1.png" />
			</li>
			<li>
				
				<span>Google+</span>
				<img width="32" height="32" title="" alt="" src="images/google_plus.png" />
			</li>
			
		</ul>
	</div>
	
		<header>
			<nav class="first_header">
				<ul class="first_link list-unstyled list-inline">
					<li><a href="javascript:void(0);">Have any question?</a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i> +91 9821948334 , +91 9821948335</a></li>
					<li><a href="mailto:info@mbatrek.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@mbatrek.com</a></li>
				</ul>
				<!-- Navigation for Desktop-->
				<ul class="second_link list-unstyled list-inline">
                                    <li class="download_brochers <?php if($action == 'download'){echo 'active';}?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/download')?>">	Download E-Brochure</a> </li>
					<!-- <li><a href="signup_student.html">Register</a><span></span></li> -->
                                        <?php if(Yii::app()->user->isGuest){?>
                                    <li class="<?php if($action == 'login'){echo 'active';}?>"><a href="<?php echo Yii::app()->createUrl('site/login')?>">Login</a><span></span></li>
                                        <?php } else {?>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="login.html">
						<div class="profile_imge">
							<img src="images/who_We_1.png">
                                                            <label><?php echo Yii::app()->user->name;?></label>
						</div>
					</a><span></span>
						<ul class="dropdown-menu">
							
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Courses</a></li>
							<li class="last_li"><a href="<?php echo Yii::app()->createUrl('site/logout')?>">Logout</a></li>
						</ul>
					</li>
                                        <?php }?>
					<li class="<?php if($action == 'contact'){echo 'active';}?>"><a href="<?php echo Yii::app()->createUrl('site/contact')?>">Contact Us</a><span></span></li>
					<li class="<?php if($view == 'quick_links'){echo 'active';}?>"><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'quick_links'))?>">Quick Links <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
				</ul>
				<!-- End Navigation for Desktop -->
				<div class="ssm-overlay ssm-toggle-nav"></div>
				<!-- Navigation for mobile Devices -->
				<nav class="menu_list">
					<div class="menu_wrpper">
						<ul class="list-unstyled">
							<li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/download')?>"><i class="fa fa-cloud-download" aria-hidden="true"></i>
							Download E-Brochure
							</a></li>
                                                    <?php if(Yii::app()->user->isGuest){?>
							<li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/login')?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                                                    <?php } else {?>
                                                        
                                                        <li class="dropdown"><a  data-toggle="dropdown" class="dropdown-toggle raised ripple" href="#">
								<div class="profile_imge">
									<img src="images/who_We_1.png">
									<label><?php echo Yii::app()->user->name;?><i class="fa fa-angle-down" aria-hidden="true"></i></label>
								</div>
							</a>
								<ul class="dropdown-menu">
									
									<li><a href="#">My Account</a></li>
									<li><a href="#">My Courses</a></li>
									<li class="last_li"><a href="<?php echo Yii::app()->createUrl('site/logout')?>">Logout</a></li>
								</ul>
							</li>
                                                    <?php }?>
							<!-- <li><a class="raised ripple" href="signup_student.html"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li> -->
                                                        <li class="<?php if($view == 'quick_links'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/contact')?>"><i class="fa fa-mobile" aria-hidden="true"></i> Contact Us</a></li>
							<li class="<?php if($view == 'quick_links'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'quick_links'))?>"><i class="fa fa-link" aria-hidden="true"></i> Quick Links</a></li>
							<div class="spepration_line"></div>
							<li class="<?php if($view == 'who_we_are'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'who_we_are'))?>"><i class="fa fa-users" aria-hidden="true"></i> Who We are</a></li>
							<li class="<?php if($view == 'what_we_do'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'what_we_do'))?>"><i class="fa fa-users" aria-hidden="true"></i> What We Do</a></li>
							<li class="<?php if($view == 'our_bielf'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'our_bielf'))?>"><i class="fa fa-university" aria-hidden="true"></i> Our Belief</a></li>
							<li class="<?php if($view == 'quick_links'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'career'))?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Careers</a></li>
							<li class="<?php if($view == 'career'){echo 'active';}?>"><a class="raised ripple" href="javascript:void(0);"><i class="fa fa-bold" aria-hidden="true"></i> Blog</a></li>
							<li class="<?php if($view == 'quick_lisdsdnks'){echo 'active';}?>"><a class="raised ripple" href="javascript:void(0);"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a></li>
							<li class="<?php if($view == 'quick_lsdsdinks'){echo 'active';}?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'feedback'))?>"><i class="fa fa-pencil" aria-hidden="true"></i> Feedback</a></li>
						</ul>
					</div>
				</nav>
				<!-- End Navigation for mobile Devices -->
			</nav>   
			<nav class="main_navigation">
				<div class="col-md-3 col-sm-5 col-xs-6">
					<div  class="logo_div"><a href="<?php echo Yii::app()->createUrl('site/index');?>"><img class="img-responsive" src="images/logo.png"></a></div>   
				</div>
				<div class="col-md-9 col-sm-7 col-xs-6">
					<div class="menu_responisve">
						<div class="menu_icon">
							<a href="javascript:void(0);" class="ssm-toggle-nav" title="open nav">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
									<g>
										<line fill="none" stroke="#569145" stroke-width="1.7" stroke-miterlimit="10" x1="0" y1="4.8" x2="24" y2="4.8"/>
										<line fill="none" stroke="#569145" stroke-width="1.7" stroke-miterlimit="10" x1="0" y1="12" x2="24" y2="12"/>
										<line fill="none" stroke="#569145" stroke-width="1.7" stroke-miterlimit="10" x1="0" y1="19.2" x2="24" y2="19.2"/>
									</g>
									<rect x="0" y="0" fill="none" width="24" height="24"/>
								</svg>
								<label>Menu</label>
							</a>
						</div>
					</div>
					<div class="navBox">
						<ul>
							<li  class="<?php if($action == 'index'){echo 'active';}?>"> <a href="<?php echo Yii::app()->createUrl('site/index');?>">Home</a></li>
                                                            <li  class="<?php if($view == 'who_we_are'){echo 'active';}?>" > <a class="raised ripple active" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'who_we_are'))?>">Who We Are</a>
							  <!-- <ul class="dropNav">
								<li><a href="#">item2-1</a></li>
								<li><a href="#">item2-2</a></li>
								<li><a href="#">item2-1</a></li>
								<li><a href="#">item2-1</a></li>
								<li><a href="#">item2-1</a></li>
							  </ul>  -->
							</li>
							<li class="<?php if($view == 'what_we_do'){echo 'active';}?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'what_we_do'))?>">What We Do</a></li>
							<li class="<?php if($view == 'our_bielf'){echo 'active';}?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'our_bielf'))?>">Our Belief</a> </li>
							<li class="<?php if($view == 'career'){echo 'active';}?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'career'))?>">Careers</a> </li>
							<li> <a class="raised ripple" href="javascript:void(0);">Blog</a> </li>
							<li> <a  class="raised ripple"href="javascript:void(0);">Support</a> </li>
							<li class="<?php if($view == 'feedback'){echo 'active';}?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'feedback'))?>">Feedback</a> </li>
							
						</ul>
					</div>
				</div> 
			</nav> 
		</header>
	<article>
		<?php echo $content;?>
		</article>
		<footer class="footer_container">
			<div class="container">
				<div class="footer_logo">
					 <img src="images/footer_logo.png">  
				</div>
				<ul class="list-inline list-unstyled">
					<li class="<?php if($view == 'copyright_notice'){echo 'active';}?>" ><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'copyright_notice'))?>">Copyright Notice</a></li>
					<li class="<?php if($view == 'privacy_policy'){echo 'active';}?>" ><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'privacy_policy'))?>"> Privacy Statement</a></li>
					<li class="<?php if($view == 'declimier'){echo 'active';}?>" ><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'declimier'))?>">Disclaimer</a></li>
					<li class="<?php if($view == 'terms_conditions'){echo 'active';}?>" ><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'terms_conditions'))?>">Terms & Conditions</a></li>
					<li class="<?php if($view == 'asasa'){echo 'active';}?>" ><a href="javascript:void(0);">Talk to Career Advisor </a></li>
					<li class="<?php if($view == 'who_fdfdddfwe_are'){echo 'active';}?>" ><a href="javascript:void(0);" data-modal="modal-1" class="raised ripple md-trigger">Sitemap</a></li>
				</ul>
				<div class="line_div"></div>
				<div class="copy_ryt">
					<p>&copy Copyright 2016 MBAtrek <em>TM</em>. All rights reserved.</p>
				</div> 
				<div class="social_media">
					<h4>Connect With Us:</h4>
					<ul class="list-inline list-unstyled">
						<li><a href="javascript:void(0);"><span></span></a></li>
						<li class="linkedin_icon"><a href="javascript:void(0);"><span></span></a></li>
						<li class="twiter_icon"><a href="javascript:void(0);"><span></span></a></li>
						<li class="google"><a href="javascript:void(0);"><span></span></a></li>
						<li class="print"><a href="javascript:void(0);" ><span></span></a></li>
					</ul>
				</div>
			</div>
                    <div class="md-modal md-effect-1" id="modal-1">
                        <div class="md-content">
                            <h3>Message</h3>
                            <div class="error_wrap">
                                <div class="error_container">
                                    <p><i class="fa fa-warning" aria-hidden"true"=""></i>Under Construction</p>
                                </div>
                                <!-- <button class="md-close">OK</button> -->
                                <div class="main_register"><div class="site_btn"><a class="raised ripple md-close" href="javascript:void(0);">OK</a></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="md-overlay"></div>
		</footer> 
	</div>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.materialripple.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/jquery.goup.js"></script>
	<script src="js/jquery.slideandswipe.js"></script>
	<script src="js/jquery.mCustomScrollbar.js"></script>
	<script src="js/canvasjs.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.viewbox.js"></script>
	<script src="js/modalEffects.js"></script>
	 <script>
		$(document).ready(function() {
			$('.menu_list').slideAndSwipe();
		});
	</script>
</body>
</html>
