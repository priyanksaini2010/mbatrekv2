<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
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
                              Enhance your preparation and skill-sets to get the right role and job 
                            </h4>
                            <div class="cta-link2">
                              <a href="<?php echo Yii::app()->createUrl('cart/student'); ?>">Start your preparation for Internship / Final Placement >></a>
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
                                Understand how to survive and connect with people in your initial career
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
                                <a href="<?php echo Yii::app()->createUrl('site/page', array("view"=>"educational_institute")); ?>">Partner with us to transform into a career building institution >></a>
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
                                <a href="<?php echo Yii::app()->createUrl('cart/institutes'); ?>">Develop and accelerate growth of your next generation workforce >></a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                </div>
				</div>