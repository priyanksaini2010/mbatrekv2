<?php $this->setPageTitle('Industry - Home'); ?>
<?php // echo $this->renderPartial('modules_left_banner',array('data'=>$data));   ?>
<section class="banner_area banner_industry_portal">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="industrial_portal">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <div class="left_sidebar">
                    <div class="left_heading">
                        <h2>Traits Of Our Trekker</h2>
                    </div>
                    <div class="clod_img">
                        <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/images/cloude_img.png"/>
                    </div>
                    <div class="module_div">
                        <div class="left_heading">
                            <h2>MBAtrek Module</h2>
                        </div>
                        <?php echo $this->renderPartial('modules_left_banner', array('data' => $data)); ?>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar">
                    <div class="help_div">
                        <span class="question"></span>
                        <h2>How can we help you? </h2>
                        <div class="site_btn"><a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl("site/page", array("view"=>"support"));?>">Read More</a></div>
                    </div>
                    <div class="repeat_project">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
                                        <div class="post_Text">
                                            <h2>Live Projects</h2>
                                            <h3><span>Post it </span><a href="<?php echo Yii::app()->createUrl("industry/createproject");?>">Here!</a></h3>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3>Suggested Live Projects</h3>
                                        <div id="content-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['projects'] as $key=>$project){?>
                                                <li><?php echo $project->company_name;?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
                                        <div class="post_Text">
                                            <h2>Internship</h2>
                                            <h3><span>Post it </span><a href="<?php echo Yii::app()->createUrl("industry/createintership");?>">Here!</a></h3>
                                        </div>
                                    </div>
                                    <?php if (!empty($data['internships'])) {?>
                                    <div class="post_content">
                                        <h3>Suggested Internship Projects</h3>
                                        <div id="content1-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['internships'] as $key=>$internship){?>
                                                <li><?php echo $internship->company_name;?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
                                        <div class="post_Text">
                                            <h2>Job</h2>
                                            <h3><span>Placements </span><a href="<?php echo Yii::app()->createUrl("industry/createjobs");?>">Here</a></h3>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3>Job Placements</h3>
                                        <div id="content2-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['jobs'] as $key=>$internship){?>
                                                <li><?php echo $internship->company_name;?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
                                        <div class="post_Text">
                                            <h2>Consulting</h2>
                                            <h3><a href="<?php echo Yii::app()->createUrl("industry/createconsultingprojects");?>">Projects</a></h3>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3>Consulting Projects For Faculty</h3>
                                        <div id="content3-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['consulting_projectss'] as $key=>$project){?>
                                                <li><?php echo $project->company_name;?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
                                        <div class="post_Text">
                                            <h2>Sessions At</h2>
                                            <h3>Campus</h3>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3> Coming Soon! </h3>
                                        <div id="content4-1" class="content">
                                            <!--Coming Soon!-->    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $this->renderPartial('industry_analysis'); ?>
<?php echo $this->renderPartial('industry_footer'); ?>