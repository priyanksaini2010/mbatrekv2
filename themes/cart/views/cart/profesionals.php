<?php $this->setPageTitle('Young Professionals'); ?>
<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<?php
$products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>1,"type"=>1,"status"=>1,"is_saver"=>0));
$category = ProductCategory::model()->findByPk(1);
$category2 = ProductCategory::model()->findByPk(2);
$subs = ProductSubCategory::model()->findAllByAttributes(array("product_category_id"=>2));
$saver = Products::model()->findByAttributes(array("id"=>33));

$arrProd = array();
$baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart");
?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Young Professionals</a></li>
    </ul>
</div>
<div class="main-helping">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <h2>Helping you unlock your career and #hit the ground 
                        RUNNING</h2>
                    <!--<div class="col-xs-12 col-md-6 col-lg-6 cta-home">
                        <div class="box1">
                            <p>Confused about how to approach your 1st job or 1st year at work?
                                <a href="#">Click Here</a></p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6 cta-home">
                        <div class="box2">
                            <p>Looking for specific help to tell your story and switch jobs?
                               <a href="#">Click Here</a></p>
							</div>
                    </div>-->
					<div class="student-top young_top">
						<div class="container">
							<div class="student-internship col-xs-12 col-md-6 col-lg-6">
								<div class="icon-holder">
									<a class="scroll_to" href="#first_year"> 
										<span class="icon yound_need_help"> 
											<img src="https://mbatrek.com/v2/images/young_need_help.png" alt="">
											<!--<span class="icon-title">Internship</span>-->	 
										</span> 
										<span class="icon-text pull-left"> 
											Confused about how to approach your 1st job or 1st year at work?  
											Click Here
										</span> 
									</a>
								</div>
							</div>
							<div class="student-placement col-xs-12 col-md-6 col-lg-6">
								<div class="icon-holder"><a id="tab2" href="#"> <span class="icon icon-holder"> <img src="https://mbatrek.com/v2/images/young_final.png" alt=""> <!--<span class="icon-title">Final Placement</span>--> </span> <span class="icon-text">Looking for specific help to tell your story and switch jobs? <br>Click Here</span> </a></div>
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <h4>Your career is both a &apos;Sprint&apos; and a &apos;Marathon&apos;</h4>
                    <div class="spirit col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <h5>Sprint</h5>
                        <img src="<?php echo $baseUrl; ?>/images/spirit.jpg" alt="spirit" class="img-responsive center-block" />
                    </div>
                    <div class="marathon col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <h5><span>Marathon</span></h5>
                        <img src="<?php echo $baseUrl; ?>/images/marathon.jpg" alt="marathon" class="img-responsive center-block" />
                    </div>
                </div>
                <div class="row first_year">
                    <h4 id="first_year">Your 1st year at work could be the hardest year of your career&period;&period;&period;</h4>
                   
                    <div class="step_professional">
                    <div class="col-md-6">
                        <div class="setp_up_left">
                            <ul>
                                <li><div class="arrow_step"></div><img src="<?php echo $baseUrl; ?>/images/job_fare.png"/><label>Just Graduated</label></li>
                                <li><div class="arrow_step two"></div><img src="<?php echo $baseUrl; ?>/images/setting_in.png"/><label>Setting in</label></li>
                                <li><div class="arrow_step three"></div><img src="<?php echo $baseUrl; ?>/images/surviving_icon.png"/><label>Surviving and connecting</label></li>
                            </ul>
                            <div class="brecket_div">
                                <img src="<?php echo $baseUrl; ?>/images/brecket_left.png"/>
                                <span>Trying to figure everything out</span>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="setp_up_right">
                            <ul>
                                <li><div class="arrow_step four"></div><img src="<?php echo $baseUrl; ?>/images/preparing_For.png"/><label>Preparing for 1st Annual Appraisal</label></li>
                                <li><div class="arrow_step five"></div><img src="<?php echo $baseUrl; ?>/images/planning_for.png"/><label>Planning for next year</label></li>
                                <li><div class="arrow_step six"></div><img src="<?php echo $baseUrl; ?>/images/first_year.png"/><label>1st year of work</label></li>
                            </ul>
                            <div class="brecket_div">
                              <img src="<?php echo $baseUrl; ?>/images/brecket_right.png"/>
                              <span>Positioning yourself in your company</span>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--<div class="row face_many">
                        <h4>and you will face many obstacles and challenges</h4>
                        <div class="col-md-3 col-sm-3 col-xs-3 green_box">
                            <img src="<?php //echo $baseUrl; ?>/images/setting.jpg" class="img-responsive center-block" />
                            <h5 class="text-center">Settling in</h5>
                            <ul>
                               
                                <li><img src="<?php //echo $baseUrl; ?>/images/picture.png">
                                    <label>Salary, role, boss - did i get it right ?
                                    </label>
                                </li>
                                <li><img src="<?php //echo $baseUrl; ?>/images/nosuppot.png">
                                    <label>No support and/or training provided
                                    </label>
                                </li>
                                <li><img src="<?php //echo $baseUrl; ?>/images/lack.png">
                                    <label>Unprepared and lack basic skills needed for work</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3  green_box">
                            <img src="<?php //echo $baseUrl; ?>/images/survive.jpg" class="img-responsive center-block" />
                            <h5 class="text-center">Surviving and connecting</h5>
                            <ul>
                                <li><img src="<?php //echo $baseUrl; ?>/images/intern.png">
                                    <label>Intense stress and work pressure
                                    </label>
                                </li>
                                <li><img src="<?php //echo $baseUrl; ?>/images/understand.png">
                                    <label>Can’t really understand the peers and/or seniors
                                    </label>
                                </li>
                               
                                <li><img src="<?php //echo $baseUrl; ?>/images/follow.png">
                                    <label>Don’t know who to follow in the organization
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 dark_green">
                            <img src="<?php //echo $baseUrl; ?>/images/prepare_icon.png" class="img-responsive center-block" />
                            <h5 class="text-center">Preparing for 1st Annual Appraisal</h5>
                            <ul>
                                <li><img src="<?php //echo $baseUrl; ?>/images/hightdegree.png">
                                    <label>High degree of politics and power play
                                    </label>
                                </li>
                              
                                <li><img src="<?php //echo $baseUrl; ?>/images/stress.png">
                                    <label>Your boss doesn’t see you as a high performer
                                    </label>
                                </li>
                                <li><img src="<?php //echo $baseUrl; ?>/images/question.png">
                                    <label>How does performance appraisal actually work?
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 dark_green">
                            <img src="<?php //echo $baseUrl; ?>/images/planning.png" class="img-responsive center-block" />
                            <h5 class="text-center">Planning for 
                                next year
                            </h5>
                            <ul>
                                <li><img src="<?php //echo $baseUrl; ?>/images/next.png">
                                    <label>What’s next? – Role, Project and Priorities
                                    </label>
                                </li>
                                <li><img src="<?php //echo $baseUrl; ?>/images/might.png">
                                    <label>How my role fits in with the company’s strategy
                                    </label
                                    ></li>
                                <li><img src="<?php //echo $baseUrl; ?>/images/happy.png">
                                    <label>You might want to switch jobs or roles
                                    </label>
                                </li>
                              
                            </ul>
                        </div>
                    </div>-->
                    <div class="row career_planning">
                        <div class="col-me-12">
                            <h4>&period;&period;&period;#CareerPlanning: 1 year enablement program to help you with this transition</h4>

                            <div class="home-cta-wrapper young_profes">
                                <div class="col-xs-12 col-md-6 col-lg-2 cta-home">
                                    <div class="">
                                        <a href="student.html" class="cta-link1">
                                            <span class="cta-img">
                                                <img src="<?php echo $baseUrl; ?>/images/multiple1.png">
                                            </span>
                                            <p class="section-pra">Multiple 
                                                <span class="hours-title"><i>One to One Hours</i>
                                                </span>
                                            </p>
                                            <span class="cta-solve">
                                                Solve for your context, i.e Your Solution </span>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                                    <div class="">
                                        <a href="#" class="cta-link1">
                                            <span class="cta-img">
                                                <img src="<?php echo $baseUrl; ?>/images/multiple2.png">
                                            </span>
                                            <p class="section-pra">Multiple
                                                <span class="hours-title"><i>In-depth Evaluation</i>
                                                </span>

                                            </p>
                                            <span class="cta-solve">Help you understand yourself better from a  career perspective</span>
                                            </span>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                                    <div class="">
                                        <a href="#" class="cta-link1">
                                            <span class="cta-img">
                                                <img src="<?php echo $baseUrl; ?>/images/multiple3.png"></span>
                                            <p class="section-pra">Multiple
                                                <span class="hours-title"><i>Cheat
                                                        Sheets</i></span>
                                            </p>
                                          
                                                <span class="cta-solve">Enable you with a ready set of guides to take to work everyday</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-2 cta-home">
                                    <div class="">
                                        <a href="#" class="cta-link1">
                                            <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/multiple4.png"></span>

                                            <p class="section-pra">On-demand

                                                <span class="hours-title"><i>reviews on CV/Resume</i></span>
                                            </p>

                                            <span class="cta-solve">Provide tips and guidance for different kinds of job profiles</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-2 cta-home">
                                    <div class="">
                                        <a href="#" class="cta-link1">
                                            <span class="cta-img">
                                                <img src="<?php echo $baseUrl; ?>/images/linked_icon.png"></span>
                                            <p class="section-pra">LinkedIn
                                                <span class="hours-title"><i>Diagnostic Tool</i></span>

                                                </p>
                                                <span class="cta-solve">
                                                    Provide you with clear guidance and suggestions</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="arrow-icon ">
                                    <a class="scroll_to" href="#intern_price"><img src="<?php echo $baseUrl; ?>/images/blue-arrow-down.jpg"></a>
                                </div>
                                <div class="row">
                                </div class="col-md-12">
                                <?php if(!empty($saver)){
                                    $url = str_replace("#","",rtrim($saver->title));
                                    $url = str_replace(" ","-",$url);
                                    $url = strtolower($url);
                                ?>
                                <div class="student-cta1-bottom " id="intern_price" >
                                    <div class="student-cta1-bottom-inner ">
                                        <div class="student-cta1-bottom-title">
                                            <?php echo $saver->title;?>


                                        </div>
                                        <div class="student-cta1-bottom-sub-title">
                                            Price &#8377  <span style="text-decoration:line-through;"><?php echo money($saver->actuall_price);?></span>

                                            <span class="new-price">Special Offer: &#8377 <?php echo money($saver->price);?><br>
                                                (&#8377 <?php echo money(ceil($saver->price/12));?> per Month)</span>
                                        </div>
                                        <div class="buy-and-cart">
                                            <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$saver->id));?>">buy now</a>
                                            <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->id));?>">add to cart</a>
                                            <a href="<?php echo Yii::app()->createUrl($url);?>" target="_blank">read more</a>
                                        </div>

                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="arrow-icon icon_2">
                                <a  class="scroll_to" href="#indusctry_ready"><img src="<?php echo $baseUrl; ?>/images/blue-arrow-down.jpg"></a>
                            </div>

                            <div class="studen-wrapper">





                                <div class="right-choice">
                                    <div class="container">
                                        <div class="right-choice-inner1">
                                            <div class="right-choice-inner-title">
                                                Let us help you in making the <span class="text-color">right choice....</span>
                                            </div>
                                            <div class="student-cta2">
                                                <div class="student-cta2-inner">
                                                    <ul class="student-cta-listing">
                                                <?php 
                                                    $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>2,"type"=>1,"status"=>1));
                                                    foreach ($products as $prod){
                                                        $url = str_replace("#","",rtrim($prod->title));
                                                        $url = str_replace(" ","-",$url);
                                                        $url = strtolower($url);
                                                ?>
                                                        <li>
                                                            <div class="intern-type">
                                                                <div class="top-icon">
                                                                    <a href="#">
                                                                        <img src="<?php echo Yii::app()->request->baseUrl;?>/assets/products/<?php echo $prod->logo;?>">
                                                                    </a>
                                                                </div>
                                                                <div class="intern-title"><?php echo $prod->title;?></div>
                                                                <div class="intern-body">
                                                                    <?php echo $prod->description1;?>
                                                                </div>
                                                                <div class="intern-read-more">
                                                                    <a href="<?php echo Yii::app()->createUrl($url);?>" target="_blank">read more >></a>
                                                                </div>
                                                                <div class="intern-price">
                                                                    PRICE &#8377 <?php echo money($prod->price);?>
                                                                </div>
                                                                <div class="intern-link">
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$prod->id));?>">buy now</a>
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$prod->id));?>">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php }?>
                                                    </ul>                                    
                                                </div>
                                            </div>
                                        </div>
                                          <?php  $product = Products::model()->findByAttributes(array("id"=>31));
                                          $url = str_replace("#","",rtrim($product->title));
                                          $url = str_replace(" ","-",$url);
                                          $url = strtolower($url);
                                          ?>
                                        <div class="combo_package">
                                        <div class="student-cta1-bottom ">
                                                <div class="student-cta1-bottom-inner " id="indusctry_ready">
                                                    <div class="student-cta1-bottom-title">
                                                    Industry Ready Combo Package
                                                    <span class="combol_sub_Text">(5 Industry Analyses + 10 Company Analyses + Job Fitment Assessment)</span>
                                                    </div>
                                                    <div class="student-cta1-bottom-sub-title">
                                                        Price ₹  <div class="line_trgh_com"><?php echo money($product->actuall_price);?></div><br>
                                                        <span class="new-price">Special Offer: ₹ <?php echo money($product->price);?>
                                                            </span>
                                                    </div>
                                                    <div class="buy-and-cart">
                                                        <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>31));?>">buy now</a>
                                                        <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>31));?>">add to cart</a>
                                                        <a href="<?php echo Yii::app()->createUrl($url);?>" target="_blank">Read More</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="arrow-icon icon_2">
                                            <a class="scroll_to" href="#interview_ready"><img src="/v2/themes/cart/images/blue-arrow-down.jpg"></a>
                                        </div>
                                        </div>
                                       <?php $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>3,"type"=>1,"status"=>1));?>
                                        <?php if(!empty($products)){?>
                                        <div class="right-choice-inner2">
                                            <div class="right-choice-inner-title">
                                                Let us help you in building your <span class="text-color">own Story....</span>
                                            </div>
                                            <div class="student-cta2">
                                                <div class="student-cta2-inner">
                                                    <ul class="student-cta-listing">
                                                        <?php 
                                                    
                                                    foreach ($products as $prod){
                                                        $url = str_replace("#","",rtrim($prod->title));
                                                        $url = str_replace(" ","-",$url);
                                                        $url = strtolower($url);
                                                ?>
                                                        <li>
                                                            <div class="intern-type">
                                                                <div class="top-icon">
                                                                    <a href="#">
                                                                        <img src="<?php echo Yii::app()->request->baseUrl;?>/assets/products/<?php echo $prod->logo;?>">
                                                                    </a>
                                                                </div>
                                                                <div class="intern-title"><?php echo $prod->title;?></div>
                                                                <div class="intern-body">
                                                                    <?php echo $prod->description1;?>
                                                                </div>
                                                                <div class="intern-read-more">
                                                                    <a href="<?php echo Yii::app()->createUrl($url);?>" target="_blank">read more >></a>
                                                                </div>
                                                                <div class="intern-price">
                                                                    PRICE &#8377 <?php echo money($prod->price);?>
                                                                </div>
                                                                <div class="intern-link">
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$prod->id));?>">buy now</a>
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$prod->id));?>">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php }?>
                                                    </ul>                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="right-choice-inner2">
                                            <div class="right-choice-inner-title">
                                                Let us help you secure that  <span class="text-color">amazing job offer....</span>
                                            </div>
                                            <div class="student-cta2">
                                                <div class="student-cta2-inner">
                                                    <ul class="student-cta-listing">
                                                         <?php 
                                                    $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>4,"status"=>1,"is_saver"=>0));
                                                    foreach ($products as $prod){
                                                        $url = str_replace("#","",rtrim($prod->title));
                                                        $url = str_replace(" ","-",$url);
                                                        $url = strtolower($url);
                                                ?>
                                                        <li>
                                                            <div class="intern-type">
                                                                <div class="top-icon">
                                                                    <a href="#">
                                                                        <img src="<?php echo Yii::app()->request->baseUrl;?>/assets/products/<?php echo $prod->logo;?>">
                                                                    </a>
                                                                </div>
                                                                <div class="intern-title"><?php echo $prod->title;?></div>
                                                                <div class="intern-body">
                                                                    <?php echo $prod->description1;?>
                                                                </div>
                                                                <div class="intern-read-more">
                                                                    <a href="<?php echo Yii::app()->createUrl($url);?>" target="_blank">read more >></a>
                                                                </div>
                                                                <div class="intern-price">
                                                                    PRICE &#8377 <?php echo money($prod->price);?>
                                                                </div>
                                                                <div class="intern-link">
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$prod->id));?>">buy now</a>
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$prod->id));?>">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php }?>
                                                    </ul>                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php  $product = Products::model()->findByAttributes(array("id"=>32));
                                        $url = str_replace("#","",rtrim($product->title));
                                        $url = str_replace(" ","-",$url);
                                        $url = strtolower($url);
                                        ?>
                                        <div class="combo_package">
                                        <div class="student-cta1-bottom ">
                                                <div class="student-cta1-bottom-inner" id="interview_ready" >
                                                    <div class="student-cta1-bottom-title">
                                                        Interview Ready Combo Package
                                                    <span class="combol_sub_Text">(25 Q & A + 1 Mock Interview)</span>
                                                    </div>
                                                    <div class="student-cta1-bottom-sub-title">
                                                        Price ₹  <div class="line_trgh_com"><?php echo money($product->actuall_price);?></div><br>
                                                        <span class="new-price">Special Offer: ₹ <?php echo money($product->price);?>
                                                            </span>
                                                    </div>
                                                    <div class="buy-and-cart">
                                                        <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>32));?>">buy now</a>
                                                        <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>32));?>">add to cart</a>
                                                        <a href="<?php echo Yii::app()->createUrl($url);?>" target="_blank">Read More</a>
                                                    </div>

                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                        </div class="col-md-12">
<!--                                        <div class="student-cta1-bottom">
                                            <div class="student-cta1-bottom-inner">
                                                <div class="student-cta1-bottom-title">
                                                    Interview Ready Combo Package
                                                    <br><span class="font-weight:normal;font-style:italic;">(50 Q & A + 3 Mock Interviews)</span>



                                                </div>
                                                <div class="student-cta1-bottom-sub-title">
                                                    Price Rs 3500,



                                                    <br><span class="new-price">Special Offer: Rs 2750<br>
                                                    </span>
                                                </div>
                                                <div class="buy-and-cart">
                                                    <a href="#">buy now</a>
                                                    <a href="#">add to cart</a>
                                                </div>

                                            </div>
                                        </div>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
