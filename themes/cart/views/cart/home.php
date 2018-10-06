<?php $this->setPageTitle('Home'); ?>
<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<div class="home_page_slider">
	<ul class="rslides" id="slider1">
		<li><img src="<?php echo $baseUrl; ?>/images/1.jpg" alt=""></li>
		<li><img src="<?php echo $baseUrl; ?>/images/2.jpg" alt=""></li>
		<li><img src="<?php echo $baseUrl; ?>/images/3.jpg" alt=""></li>
	</ul>
</div>
<div class="container">
				<div class="row">
				
                    <div class="home-cta-wrapper">
                    <div class="home_mainheading">
                        <h2>
                             End-to-End Solutions to develop ‘Ready’ and ‘Relevant’ corporate executives
                        </h2>
                        <h3>
                              Begin your #MBAtrek journey as…
                        </h3>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                        <div class="cta-home-wrap">
                        <a href="<?php echo Yii::app()->createUrl('cart/student'); ?>" class="cta-link1">
                            <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/student_icon.png">
							</span>
                            <span class="cta-title">Students</span>
                        </a>
                        <div class="cta-body">
                            <h4>
                              Enhance your preparation and skill-sets to get the right role and setup for a successful career
                            </h4>
                            <div class="cta-link2">
                              <a href="<?php echo Yii::app()->createUrl('cart/student'); ?>">Start your preparation for Internship / Placement >></a>
                             </div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                            <div class="cta-home-wrap">
                            <a href="<?php echo Yii::app()->createUrl('cart/profesionals'); ?>" class="cta-link1">
                                <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/professional_icon.png"></span>
                                <span class="cta-title">Young Professionals</span>
                            </a>
                            <div class="cta-body">
                                <h4>
                                Understand how to survive and connect with people in the initial stages of your career
                                </h4>
                                <div class="cta-link2">
                                <a href="<?php echo Yii::app()->createUrl('cart/profesionals'); ?>">Kick-Start your first year at the job and your career >></a>
                                </div>
                           </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                            <div class="cta-home-wrap">
                            <a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"educational_institute")); ?>" class="cta-link1">
                                <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/education_institute.png"></span>
                                <span class="cta-title">Educational Institutes</span>
                            </a>
                            <div class="cta-body">
                                <h4>
                                Transform your institution from a center of academic learning to career building
                                </h4>
                                <div class="cta-link2">
                                <a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"educational_institute")); ?>">Transform into a career building institution >></a>
                                </div>
                           </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                            <div class="cta-home-wrap">
                            <a href="<?php echo Yii::app()->createUrl('cart/institutes'); ?>" class="cta-link1">
                                <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/companies_icon.png"></span>
                                 <span class="cta-title">Companies</span>
                            </a>
                            <div class="cta-body">
                                <h4>
                                Upskill your young talent and new hires to the demands of today’s corporate world
                                </h4>
                                <div class="cta-link2">
                                <a href="<?php echo Yii::app()->createUrl('cart/institutes'); ?>">Accelerate the growth of your next generation workforce >></a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="price_detail_home">
                            <div class="arrow-icon ">
                                <a href="#"><img src="/v2/themes/cart/images/blue-arrow-down.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
<div class="home_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="global_experiance"> 
                    <ul>
                        <li>
                            <div class="global_img">
                                <img src="<?php echo $baseUrl; ?>/images/global.png"/>
                            </div>
                            <div class="global_text">
                                <h3>1500+ Years of 
                                Global Experience from our core team & industry experts
                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="global_img">
                                <img src="<?php echo $baseUrl; ?>/images/personalize.png"/>
                            </div>
                            <div class="global_text">
                                <h3>Personalized One –To - One Sessions

                                </h3>
                            </div>
                        </li>
                        <li>
                            <div class="global_img">
                                <img src="<?php echo $baseUrl; ?>/images/support.png"/>
                            </div>
                            <div class="global_text">
                                <h3>Continuous support via Email / WhatsApp
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bulid_categories">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <div class="bulid_button">
                            <a href="">Build your own Brand</a>
                        </div>
                        <div class="categories_container">
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/resume_diagonisted_icon.png"/>
									</div>
									<div class="categories-text">
										Resume Diagnostic
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/linked_in_diagnosit.png"/>
									</div>
									<div class="categories-text">
									LinkedIn Diagnostic
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/personal_branding.png"/>
									</div>
									<div class="categories-text">
									Personal Branding
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
                        </div>
                    </li>   
                    <li>
                        <div class="bulid_button">
                            <a href="">Company / Industry & Job Fitment</a>
                        </div>
                        <div class="categories_container">
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/industry_analyis_icon.png"/>
									</div>
									<div class="categories-text">
									Industry Analysis
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/company_analysis_icon.png"/>
									</div>
									<div class="categories-text">
									Company Analysis
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/job_fitment_icon.png"/>
									</div>
									<div class="categories-text">
									Job Fitment Analysis
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
                        </div>
                    </li>  
                    <li>
                        <div class="bulid_button">
                            <a href="">Preparing for Placements</a>
                        </div>
                        <div class="categories_container">
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/mockup_interview_icon.png"/>
									</div>
									<div class="categories-text">
									Mock Interview
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/interview_q_a.png"/>
									</div>
									<div class="categories-text">
									Interview    Q & A
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/cracing_gd.png"/>
									</div>
									<div class="categories-text custome_padding">
									Cracking GD
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
                        </div>
                    </li>  
                    <li>
                        <div class="bulid_button">
                            <a href="">Preparing for Internship</a>
                        </div>
                        <div class="categories_container">
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/interAce_icon.png"/>
									</div>
									<div class="categories-text custome_padding">
									InternACE
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/interPro_icon.png"/>
									</div>
									<div class="categories-text custome_padding">
									InternPRO
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
							<a href="javascript:void(0);">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo $baseUrl; ?>/images/interArise_icon.png"/>
									</div>
									<div class="categories-text custome_padding">
									InternARISE
									</div>
									<div class="categories_price">
										<span>Price &#8377;  800</span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
                        </div>
                    </li>  
            </div> 
                </ul>
            </div>
        </div>
    </div>
<div class="home_sec_2 social_media">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="global_experiance"> 
                    <ul>
                        <li>
                            <div class="global_img">
                                <img src="<?php echo $baseUrl; ?>/images/social_media_on.png"/>
                            </div>
                            <div class="global_text">
                                <h3>MBAtrek on Social Media...
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->renderPartial("webroot.themes.cart.views.cart.socialwidgets"); ?> 
</div>

