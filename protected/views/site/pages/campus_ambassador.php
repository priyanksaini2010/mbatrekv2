<?php $this->setPageTitle('Campus Ambassador'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Campus Ambassador Program</a></li>
    </ul>
</div>
<div class="ambastor_container">
    <section class="amastor_wrap">
        <div class="container">
            <div class="compas_heading">
                <h3>Campus Ambassador Program</h3>
                <h4>Why Should You Join us?</h4>
            </div>
            <div class="amaster_bulid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/learn_skilling.png"/>
                            <h3>Learn <span>Skilling-up</span> and <span>Career Planning</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/bulid_sales.png"/>
                            <h3>Build your <span>Sales and Marketing Capabilities</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/win_prices.png"/>
                            <h3>Win Prizes worth upto <span>₹ 20,000</span> and Chance for <span>PPI</span></h3>
                        </div>
                    </div>
                    <div class="amastor_button">
                        <a href="<?php echo Yii::app()->createUrl('campus-abassador-register'); ?>">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="earn_point">
        <div class="container">
            <div class="compas_heading">
                <h4>Earn Points to Clear Each Level and Get Superb Rewards</h4>
            </div>
            <div class="earn_container">
                <ul>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/newbie_icon.png"/>
                        <span>Newbie</span>
                    </li>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/rokie_icon.png"/>
                        <span>Rookie</span>
                    </li>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/rockstar_icon.png"/>
                        <span>Rockstar</span>
                    </li>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/legends_icon.png"/>
                        <span>Legend</span>
                    </li>
                </ul>
            </div>
        </div>
    </section> 
    <section class="what_do_u_get">
        <div class="container">
            <div class="compas_heading">
                <h4>What Do You Get</h4>
            </div>
            <div class="amaster_bulid">
                <div class="row">
                    <div class="col-md-4 is-animated">
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/amazon_gift_icon.png"/>
                            <h3>Amazon Gift Cards Worth up to <span>₹ 7,000</span></h3>
                        </div>
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/free_mbatrek_icon.png"/>
                            <h3>Free MBAtrek Services  Worth up to <span>₹ 3,500</span></h3>
                        </div>
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/mbatek_goodies.png"/>
                            <h3>MBAtrek Goodies  Worth up to <span>₹ 9,500 </span></h3>
                        </div>
                    </div>
                    <div class="col-md-4  is-animated">
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/certification_of_Appriciation.png"/>
                            <h3><span>Certificate of Appreciation </span> from MBAtrek’s Founders</h3>
                        </div>
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/linkedin_Recom_icon.png"/>
                            <h3><span>LinkedIn Recommendation </span> by MBAtrek’s founders
                            </h3>
                        </div>
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/get_featured_icon.png"/>
                            <h3><span>Get featured</span> on MBAtrek’s Facebook page
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-4 is-animated">
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/preplacement_icon.png"/>
                            <h3>Pre-Placement Interview  <span>(PPI)</span></h3>
                        </div>
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/marketing_icon.png"/>
                            <h3><span>Marketing and Sales </span> Experience</h3>
                        </div>
                        <div class="amaster_repeat">
                            <img src="<?php echo $baseUrl; ?>/images/personal_brand.png"/>
                            <h3>Create your own  <span>Personal Brand</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="what_you_will_Get animated">
        <div class="earn_point">
            <div class="container">
                <div class="compas_heading">
                    <h4>What You Will Do</h4>
                </div>
                <div class="earn_container">
                    <ul>
                        <li class="animated  is-animated ">
                            <img src="<?php echo $baseUrl; ?>/images/some_love.png"/>
                            <span>Spread some Love on Social Media </span>
                        </li>
                        <li class="animated  is-animated">
                            <img src="<?php echo $baseUrl; ?>/images/refer_friend.png"/>
                            <span>Refer Your Friends to use MBAtrek’s products </span>
                        </li>
                        <li class="animated  is-animated">
                            <img src="<?php echo $baseUrl; ?>/images/buliding_workshop.png"/>
                            <span>Facilitate MBAtrek Career Building Workshops on Campus </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
        <div class="amastor_button">
            <a href="<?php echo Yii::app()->createUrl('campus-abassador-register'); ?>">Apply Now</a>
        </div>
    </section> 
    <?php
        
        $FaqType = CaFaqType::model()->findAll();;
        //echo $data->data;
    ?>
    <section class="faq_amastor">
       <div class="faq_new_container">
    <div class="container">
        
<!--        <h3>We at MBAtrek are here to help with all your career development needs Feel Free to Explore.</h3>-->
        <h4>Expand the following drop-downs for answers to frequently asked questions.</h4>
        <div class="faq_Container">
            <div class="tabbable-panel">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs ">
                        <?php
                        $counter = 1;
                        foreach ($FaqType as $faq){?>
                        <!--<li ><a class="active" href="#tab_default_1" data-toggle="tab"> Student </a></li>-->
                        <li><a <?php if($counter == 1){?>class="active"<?php }?> href="#tab_default_<?php echo $faq->id;?>" data-toggle="tab"> <?php echo ucfirst($faq->name);?> </a></li>
                        <!--<li><a href="#tab_default_3" data-toggle="tab"> Industry </a></li>-->
                        <?php $counter++;}?>
                    </ul>
                    <?php foreach ($FaqType as $faq){?>
                    <div class="tab-content">
                        <div id="tab_default_<?php echo $faq->id;?>" class="tab-pane active">
                            <ul id="" class="accordion">
                                <?php 
                                    $dataArray  = CaFaq::model()->findAllByAttributes(array("type" => $faq->id));
                                    foreach ($dataArray as $data){
                                ?>
                                <li>
                                    <div class="link"><?php echo $data->question;?></div>
                                    <div class="submenu">
                                        <p><?php echo $data->answer;?></p>
                                    </div>
                                </li>
                                    <?php }?>
                            </ul>
                        </div>
                        
                    </div>
                      <?php }?>
                </div>
            </div>
            <div class="fq_footer">
			<!--<label>Still stuck with your problem? <span>Contact us at</span> <span class="color_span"> contact@mbatrek.com</span> or Talk to Our <span>Career Advisor at</span> <span class="color_span">+91 98219 48334</span> </label>-->
			<label>Have more doubts? Mail us at <a href="mailto:contact@mbatrek.com">contact@mbatrek.com</a> </label>
			</div>
        </div>
    </div>
</div>

    </section> 
</div>