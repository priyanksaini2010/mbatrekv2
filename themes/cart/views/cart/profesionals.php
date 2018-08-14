<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<?php
$products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>1,"type"=>1,"status"=>1,"is_saver"=>0));
$category = ProductCategory::model()->findByPk(1);
$category2 = ProductCategory::model()->findByPk(2);
$subs = ProductSubCategory::model()->findAllByAttributes(array("product_category_id"=>2));
$saver = Products::model()->findByAttributes(array("product_sub_category_id"=>1,"type"=>1,"status"=>1,"is_saver" => 1));

$arrProd = array();
$baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart");
?>
<div class="main-helping">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <h2>Helping you unlock your career and #hit the ground 
                        RUNNING</h2>
                    <div class="col-xs-12 col-md-6 col-lg-6 cta-home">
                        <div class="box1">
                            <p>Confused about how to approach your 1St job or 1st year at work?
                                <a href="#">Click Here</a></p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6 cta-home">
                        <div class="box2">
                            <p>Looking for specific help to tell your story and switch jobs?
                                <a>Click Here</a></p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>Your career is both a &apos;Sprint&apos; and a &apos;Marathon&apos;</h4>
                    <div class="spirit col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <h5>Spirit</h5>
                        <img src="<?php echo $baseUrl; ?>/images/spirit.jpg" alt="spirit" class="img-responsive center-block" />
                    </div>
                    <div class="marathon col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <h5><span>Marathon</span></h5>
                        <img src="<?php echo $baseUrl; ?>/images/marathon.jpg" alt="marathon" class="img-responsive center-block" />
                    </div>
                </div>
                <div class="row">
                    <h4>Your 1st year at work could be the hardest year of your career&period;&period;&period;</h4>
                    <div class="months">
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                            <img src="<?php echo $baseUrl; ?>/images/month1.jpg" alt="mont1" class="img-responsive center-block" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                            <img src="<?php echo $baseUrl; ?>/images/month1.jpg" alt="mont1" class="img-responsive center-block" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                            <img src="<?php echo $baseUrl; ?>/images/month1.jpg" alt="mont1" class="img-responsive center-block" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                            <img src="<?php echo $baseUrl; ?>/images/month1.jpg" alt="mont1" class="img-responsive center-block" />
                        </div>
                    </div>
                    <div class="course-steps">
                        <img src="<?php echo $baseUrl; ?>/images/image.png" class="img-resonsive" alt="img" />
                        <!--<ul class="list-inline">
                        <li><img src="<?php echo $baseUrl; ?>/images/graduate.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/angle-right-gray.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/setting.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/angle-right-gray.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/survive.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/angle-right-gray.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/prepare.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/angle-right-gray.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/planning.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/angle-right-gray.jpg" alt="cta3.1" class="img-responsive "/></li>
                        <li><img src="<?php echo $baseUrl; ?>/images/1styear.jpg" alt="cta3.1" class="img-responsive "/></li>
                        </ul>
                        </div>
                        <div class="arrow col-md-6">
                        <img src="<?php echo $baseUrl; ?>/images/journey-1-bg.jpg ">
                        </div>
                        <div class="arrow col-md-6">
                        <img src="<?php echo $baseUrl; ?>/images/journey-1-bg.jpg ">
                        </div>-->


                    </div>
                    <div class="row">
                        <h4>and you will face many obstacles and challenges</h4>
                        <div class="col-md-3 col-sm-3 col-xs-3 green_box">
                            <img src="<?php echo $baseUrl; ?>/images/setting.jpg" class="img-responsive center-block" />
                            <h5 class="text-center">Settling in</h5>
                            <ul>
                                <li><img src="<?php echo $baseUrl; ?>/images/clode_new_one.png">
                                    <label>  Lack of clarity about your role </label> 
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/picture.png">
                                    <label>Expectations not met – salary, role, boss
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/nosuppot.png">
                                    <label>No support and/or training provided
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/lack.png">
                                    <label>Unprepared and lack basic skills needed for work</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3  green_box">
                            <img src="<?php echo $baseUrl; ?>/images/survive.jpg" class="img-responsive center-block" />
                            <h5 class="text-center">Surviving and connecting</h5>
                            <ul>
                                <li><img src="<?php echo $baseUrl; ?>/images/intern.png">
                                    <label>Intense stress and work pressure
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/understand.png">
                                    <label>Can’t really understand the peers and/or seniors
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/tools.png">
                                    <label>Proficiency in tools and systems is limited
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/follow.png">
                                    <label>Don’t know who to follow in the organization
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 dark_green">
                            <img src="<?php echo $baseUrl; ?>/images/prepare_icon.png" class="img-responsive center-block" />
                            <h5 class="text-center">Preparing for 1st Annual Appraisal</h5>
                            <ul>
                                <li><img src="<?php echo $baseUrl; ?>/images/hightdegree.png">
                                    <label>High degree of politics and power play
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/ownstory.png">
                                    <label>Not able to tell your own story
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/stress.png">
                                    <label>Your boss doesn’t see you as a high performer
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/question.png">
                                    <label>How does performance appraisal actually work?
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 dark_green">
                            <img src="<?php echo $baseUrl; ?>/images/planning.png" class="img-responsive center-block" />
                            <h5 class="text-center">Planning for 
                                next year
                            </h5>
                            <ul>
                                <li><img src="<?php echo $baseUrl; ?>/images/next.png">
                                    <label>What’s next? – Role, Project and Priorities
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/might.png">
                                    <label>How my role fits in with the company’s strategy
                                    </label
                                    ></li>
                                <li><img src="<?php echo $baseUrl; ?>/images/happy.png">
                                    <label>You might want to switch jobs or roles
                                    </label>
                                </li>
                                <li><img src="<?php echo $baseUrl; ?>/images/role.png">
                                    <label>You are happy – want to make the next promotion
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
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
                                                Solve for your context, i.e </span>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                                    <div class="">
                                        <a href="educational-institute.html" class="cta-link1">
                                            <span class="cta-img">
                                                <img src="<?php echo $baseUrl; ?>/images/multiple3.png"></span>
                                            <p class="section-pra">Multiple
                                                <span class="hours-title"><i>Cheat
                                                        Sheets</i></span>
                                            </p>
                                            <p>
                                                <span class="cta-solve">A set of reminder sheets for you 
                                                    to take to work everyday</span></p>
                                        </a>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-lg-2 cta-home">
                                    <div class="">
                                        <a href="company.html" class="cta-link1">
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
                                        <a href="company.html" class="cta-link1">
                                            <span class="cta-img">
                                                <img src="<?php echo $baseUrl; ?>/images/linked_icon.png"></span>
                                            <p class="section-pra">LinkedIn
                                                <span class="hours-title"><i>Diagnostic Tool</i></span>

                                                </span>
                                                <span class="cta-solve">
                                                    Provide you with clear guidance and suggestions</span>
                                        </a>


                                    </div>
                                </div>
                                <div class="arrow-icon">
                                    <a href="#"><img src="<?php echo $baseUrl; ?>/images/blue-arrow-down.jpg"></a>
                                </div>
                                <div class="row">
                                </div class="col-md-12">
                                <?php if(!empty($saver)){?>
                                <div class="student-cta1-bottom">
                                    <div class="student-cta1-bottom-inner">
                                        <div class="student-cta1-bottom-title">
                                            <?php echo $saver->title;?>


                                        </div>
                                        <div class="student-cta1-bottom-sub-title">
                                            Price Rs  <?php echo $saver->actuall_price;?>,

                                            <br><span class="new-price">Special Offer: Rs <?php echo $saver->price;?><br>
                                                (Rs <?php echo ceil($saver->actuall_price/12);?> per Month)</span>
                                        </div>
                                        <div class="buy-and-cart">
                                            <a href="<?php echo Yii::app()->createUrl("cart/buynow",array("id"=>$saver->id));?>">buy now</a>
                                            <a href="<?php echo Yii::app()->createUrl("cart/addtocart",array("id"=>$saver->id));?>">add to cart</a>
                                        </div>

                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="arrow-icon">
                                <a href="#"><img src="<?php echo $baseUrl; ?>/images/blue-arrow-down.jpg"></a>
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
                                                    $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>2,"type"=>1,"status"=>1,"is_saver"=>0));
                                                    foreach ($products as $prod){
                                                ?>
                                                        <li>
                                                            <div class="intern-type">
                                                                <div class="top-icon">
                                                                    <a href="#">
                                                                        <img src="assets/products/<?php echo $prod->logo;?>">
                                                                    </a>
                                                                </div>
                                                                <div class="intern-title"><?php echo $prod->title;?></div>
                                                                <div class="intern-body">
                                                                    <?php echo $prod->description1;?>
                                                                </div>
                                                                <div class="intern-read-more">
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$prod->id));?>">read more...</a>
                                                                </div>
                                                                <div class="intern-price">
                                                                    PRICE Rs <?php echo $prod->price;?>
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
                                        <div class="right-choice-inner2">
                                            <div class="right-choice-inner-title">
                                                Let us help you in building your <span class="text-color">own Story....</span>
                                            </div>
                                            <div class="student-cta2">
                                                <div class="student-cta2-inner">
                                                    <ul class="student-cta-listing">
                                                        <?php 
                                                    $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>3,"type"=>1,"status"=>1,"is_saver"=>0));
                                                    foreach ($products as $prod){
                                                ?>
                                                        <li>
                                                            <div class="intern-type">
                                                                <div class="top-icon">
                                                                    <a href="#">
                                                                        <img src="assets/products/<?php echo $prod->logo;?>">
                                                                    </a>
                                                                </div>
                                                                <div class="intern-title"><?php echo $prod->title;?></div>
                                                                <div class="intern-body">
                                                                    <?php echo $prod->description1;?>
                                                                </div>
                                                                <div class="intern-read-more">
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$prod->id));?>">read more...</a>
                                                                </div>
                                                                <div class="intern-price">
                                                                    PRICE Rs <?php echo $prod->price;?>
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
                                        <div class="right-choice-inner2">
                                            <div class="right-choice-inner-title">
                                                Let us help you secure that  <span class="text-color">amazing job offer....</span>
                                            </div>
                                            <div class="student-cta2">
                                                <div class="student-cta2-inner">
                                                    <ul class="student-cta-listing">
                                                         <?php 
                                                    $products = Products::model()->findAllByAttributes(array("product_sub_category_id"=>4,"type"=>1,"status"=>1,"is_saver"=>0));
                                                    foreach ($products as $prod){
                                                ?>
                                                        <li>
                                                            <div class="intern-type">
                                                                <div class="top-icon">
                                                                    <a href="#">
                                                                        <img src="assets/products/<?php echo $prod->logo;?>">
                                                                    </a>
                                                                </div>
                                                                <div class="intern-title"><?php echo $prod->title;?></div>
                                                                <div class="intern-body">
                                                                    <?php echo $prod->description1;?>
                                                                </div>
                                                                <div class="intern-read-more">
                                                                    <a href="<?php echo Yii::app()->createUrl("cart/description",array("id"=>$prod->id));?>">read more...</a>
                                                                </div>
                                                                <div class="intern-price">
                                                                    PRICE Rs <?php echo $prod->price;?>
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