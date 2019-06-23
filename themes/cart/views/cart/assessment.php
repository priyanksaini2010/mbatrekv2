<div class="page-wrapper">
    <div class="assessment_div">

        <div class="header_assement">
            <div class="container">
                <?php
                    $featuredAssessment =  FeaturedAssessment::model()->findByAttributes(array('id'=>1));
                    if (!empty($featuredAssessment)){
                ?>
                <h3>Featured Assessment </h3>
                <div class="sugester_block">
                    <img src="<?php echo Yii::app()->baseUrl.'/assets/assements/'.$featuredAssessment->assessment->image;?>"/>
                    <div class="rating_Block">
                        <h2><?php echo $featuredAssessment->assessment->headline;?></h2>
                        <span class="rating" data-default-rating="<?php echo $featuredAssessment->assessment->rating;?>" disabled></span>
                        <span class="total_rating"><?php echo $featuredAssessment->assessment->rating;?></span>
                        <a href="javascript:void(0);">Know More >></a>
                    </div>
                </div>
                <div class="sugester_desc">
                    <ul>
                        <li><?php echo $featuredAssessment->point_1;?></li>
                        <li><?php echo $featuredAssessment->point_2;?></li>
                    </ul>
                    <ul>
                        <li><?php echo $featuredAssessment->point_3;?></li>
                        <li><?php echo $featuredAssessment->point_4;?></li>
                    </ul>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="container">

            <div class="assesment_block">
                <div class="assesment_left">
                    <h3>CATEGORIES</h3>
                    <ul class="metismenu" id="menu">
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"> Job Roles </a>
                            <ul class="collapse inner-ul">
                                <li>
                                    <a href="javascript:void(0);"> Career  </a>
                                    <ul class="collapse inner-ul">
                                        <li>
                                            <a href="javascript:void(0);">Career</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Profile</a>
                                        </li>

                                    </ul>
                                </li>
<!--                                <li>-->
<!--                                    <a href="javascript:void(0);"> Profile </a>-->
<!--                                    <ul class="collapse inner-ul">-->
<!--                                        <li>-->
<!--                                            <a href="javascript:void(0);">profile1</a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="javascript:void(0);">profile2</a>-->
<!--                                        </li>-->
<!---->
<!--                                    </ul>-->
<!--                                </li>-->

                            </ul>
                        </li>
<!--                        <li>-->
<!--                            <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Personality</a>-->
<!--                        </li>-->

                    </ul>
                </div>
                <div class="assessment_right">
                    <?php $freeAssessments = Assessments::model()->findAllByAttributes(array('price'=>0,'status'=>1));?>
                    <?php if(!empty($freeAssessments)){?>
                    <div class="assessment_wrapper">
                        <h3>Free Assessments</h3>
                        <div class="assessment_content">
                            <?php foreach($freeAssessments as $freeAssessment){?>
                            <div class="sugester_block">
                                <img src="<?php echo Yii::app()->baseUrl.'/assets/assements/'.$freeAssessment->image;?>"/>
                                <h2><?php echo $freeAssessment->headline;?></h2>
                                <div class="rating_Block">
                                    <h4><?php echo $freeAssessment->sub_heading_text;?></h4>
                                    <span class="rating" data-default-rating="<?php echo $freeAssessment->rating;?>" disabled></span>
                                    <span class="total_rating"><?php echo $freeAssessment->rating;?></span>
<!--                                    <a href="javascript:void(0);">Know More >></a>-->
                                </div>
                                <div class="hover_active">
                                    <h3><?php echo $freeAssessment->headline;?> </h3>
                                    <ul>
                                        <li><img src="<?php echo Yii::app()->baseUrl.'/themes/cart/';?>images/wat.png"/> <?php echo $freeAssessment->time;?> minutes</li>
                                        <li># <?php echo $freeAssessment->questions;?> Questions</li>
                                        <li><img src="<?php echo Yii::app()->baseUrl.'/themes/cart/';?>images/user_Ass.png"/> <?php echo $freeAssessment->degree;?> Degrees</li>
                                    </ul>
                                    <p>
                                        <?php echo $freeAssessment->small_description;?>
                                    </p>
<!--                                    <ul class="list-text">-->
<!--                                        <li>-->
<!--                                            Get the Insider's Secret to Running Profitable Ads.-->
<!--                                        </li>-->
<!--                                        <li>In Just 2 Days! Fun, Actionable and Fluff-Free Course</li>-->
<!--                                        <li>In Just 2 Days! Fun, Actionable and Fluff-Free Course</li>-->
<!--                                    </ul>-->
                                    <?php echo $freeAssessment->bullet_points;?>
                                    <div class="assment_btn">
                                        <a class="btn" href="javascript:void(0);">Verify & Start </a>
                                        <a class="free_anchr" href="javascript:void(0);">Free</a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>

                    </div>
                    <?php }?>
                    <?php
                    $criteria = new CDbCriteria();
                    $criteria->condition = 'price <>  0 && status = 1';
                    $freeAssessments = Assessments::model()->findAll($criteria);?>
                    <?php if(!empty($freeAssessments)){?>
                        <div class="assessment_wrapper">
                            <h3>Premium Assessments</h3>
                            <div class="assessment_content">
                                <?php foreach($freeAssessments as $freeAssessment){?>
                                    <div class="sugester_block">
                                        <img src="<?php echo Yii::app()->baseUrl.'/assets/assements/'.$freeAssessment->image;?>"/>
                                        <h2><?php echo $freeAssessment->headline;?></h2>
                                        <div class="rating_Block">
                                            <h4><?php echo $freeAssessment->sub_heading_text;?></h4>
                                            <span class="rating" data-default-rating="<?php echo $freeAssessment->rating;?>" disabled></span>
                                            <span class="total_rating"><?php echo $freeAssessment->rating;?></span>
                                            <!--                                    <a href="javascript:void(0);">Know More >></a>-->
                                        </div>
                                        <div class="hover_active">
                                            <h3><?php echo $freeAssessment->headline;?> </h3>
                                            <ul>
                                                <li><img src="<?php echo Yii::app()->baseUrl.'/themes/cart/';?>images/wat.png"/> <?php echo $freeAssessment->time;?> minutes</li>
                                                <li># <?php echo $freeAssessment->questions;?> Questions</li>
                                                <li><img src="<?php echo Yii::app()->baseUrl.'/themes/cart/';?>images/user_Ass.png"/> <?php echo $freeAssessment->degree;?> Degrees</li>
                                            </ul>
                                            <p>
                                                <?php echo $freeAssessment->small_description;?>
                                            </p>
                                            <!--                                    <ul class="list-text">-->
                                            <!--                                        <li>-->
                                            <!--                                            Get the Insider's Secret to Running Profitable Ads.-->
                                            <!--                                        </li>-->
                                            <!--                                        <li>In Just 2 Days! Fun, Actionable and Fluff-Free Course</li>-->
                                            <!--                                        <li>In Just 2 Days! Fun, Actionable and Fluff-Free Course</li>-->
                                            <!--                                    </ul>-->
                                            <?php echo $freeAssessment->bullet_points;?>
                                            <div class="assment_btn">
                                                <a class="btn" href="javascript:void(0);">Verify & Start </a>
                                                <a class="free_anchr" href="javascript:void(0);">Free</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>

                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>