<?php $this->setPageTitle('Home'); ?>
<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<div class="home_page_slider" style="z-index: 0">
	<ul class="rslides" id="slider1">
            <?php
            $criteria = new CDbCriteria;
            $criteria->order = "sortOrder asc";
            foreach ( Banners::model()->findAll($criteria)as $banner){
                if(!empty($banner->link)){
                ?>
                    <a href="<?php echo $banner->link?>" target="_blank">
                <?php }?>
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/Banners/<?php echo $banner->image;?>" alt=""></li>
                        <?php if(!empty($banner->link)){
                        ?>
                    </a>
                            <?php }?>
	    <?php }?>
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
                              Begin your #MBAtrek journey
                        </h3>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                        <div class="cta-home-wrap">
                        <a href="<?php echo Yii::app()->createUrl('students'); ?>" class="cta-link1">
                            <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/student_icon.png">
							</span>
                            <span class="cta-title">Student</span>
                        </a>
                        <div class="cta-body">
                            <h4>
                              Enhance your preparation and skill-sets to get the right role and setup for a successful career
                            </h4>
                            <div class="cta-link2">
                              <a href="<?php echo Yii::app()->createUrl('students'); ?>">Start your preparation for Internship / Placement >></a>
                             </div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                            <div class="cta-home-wrap">
                            <a href="<?php echo Yii::app()->createUrl('professionals'); ?>" class="cta-link1">
                                <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/professional_icon.png"></span>
                                <span class="cta-title">Young Professional</span>
                            </a>
                            <div class="cta-body">
                                <h4>
                                Understand how to survive and connect with people in the initial stages of your career
                                </h4>
                                <div class="cta-link2">
                                <a href="<?php echo Yii::app()->createUrl('professionals'); ?>">Kick-Start your first year at the job and your career >></a>
                                </div>
                           </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                            <div class="cta-home-wrap">
                            <a href="<?php echo Yii::app()->createUrl('institutes'); ?>" class="cta-link1">
                                <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/education_institute.png"></span>
                                <span class="cta-title">Educational Institute</span>
                            </a>
                            <div class="cta-body">
                                <h4>
                                Transform your institution from a center of academic learning to career building
                                </h4>
                                <div class="cta-link2">
                                <a href="<?php echo Yii::app()->createUrl('institutes'); ?>">Transform into a career building institution >></a>
                                </div>
                           </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 cta-home">
                            <div class="cta-home-wrap">
                            <a href="<?php echo Yii::app()->createUrl('companies'); ?>" class="cta-link1">
                                <span class="cta-img"><img src="<?php echo $baseUrl; ?>/images/companies_icon.png"></span>
                                 <span class="cta-title">Company</span>
                            </a>
                            <div class="cta-body">
                                <h4>
                                Upskill your young talent and new hires to the demands of today’s corporate world
                                </h4>
                                <div class="cta-link2">
                                <a href="<?php echo Yii::app()->createUrl('companies'); ?>">Accelerate the growth of your next generation workforce >></a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="price_detail_home">
                            <div class="arrow-icon ">
                                <a href="#home_Section" class="scroll_to" ><img src="/v2/themes/cart/images/blue-arrow-down.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
<div class="home_sec_2" id="home_Section" >
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
                                <h3>1,500+ Years of 
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
                    <?php $arr = array(1,2,3,4);
                        foreach ($arr as $a){
                            $products = Products::model()->findAllByAttributes(array("home_page_bucket" => $a));
                    ?>
                    <li>
                        <div class="bulid_button">
                            <a href="">
                            <?php switch($a){
                                case 1:
                                    echo "Build your own Brand";
                                break;
                                case 2:
                                    echo "Company / Industry & Job Fitment";
                                break;
                                case 3:
                                    echo "Preparing For Placements";
                                break;
                                case 4:
                                    echo "Preparing For Internship";
                                break;
                            
                             }?>
                            </a>
                        </div>
                        <div class="categories_container">
                            <?php foreach ($products as $product){
                                $url = str_replace("#","",rtrim($product->title));
                                $url = str_replace(" ","-",$url);
                                $url = strtolower($url);
                            ?>
							<a href="<?php echo Yii::app()->createUrl($url);?>">
								<div class="repeat_categories">
									<div class="repeat_icon">
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/products/<?php echo $product->home_page_icon;?>"/>
									</div>
									<div class="categories-text">
										<span><?php echo $product->title;?></span>
									</div>
									<div class="categories_price">
										<span>Price &#8377;  <?php echo money($product->price);?></span>
										<span class="read_more_span">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</a>
                            <?php }?>
							
                        </div>
                    </li>   
                        <?php }?>
                    
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
                                <h3>MBAtrek on Social Media
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

