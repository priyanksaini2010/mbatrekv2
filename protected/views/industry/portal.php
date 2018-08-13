<?php $this->setPageTitle('Industry - Home');

?>
<?php $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));?>
<?php // echo $this->renderPartial('modules_left_banner',array('data'=>$data));    ?>
<section class="banner_form">
    <div class="container">
        <div class="row">
            <div class="address_block">
                <div class="address_left">
                    <label><?php echo $industryProfile->industry->name;?></label>
                    <p><?php echo $industryProfile->industry->address;?></p>
                </div>
                <div class="mobile_Adress">
                    <ul class="list-unstyled">
                        <li>
                            <label>Mobile No:</label>
                            <span><?php echo $industryProfile->industry->mobile_number;?></span>
                        </li>
                        <li>
                            <label>Office No:</label>
                            <span><?php echo $industryProfile->industry->office_number;?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="industry_profile">
                <div class="company_uesr_img">
                    <div class="company_img">
                        <?php if ($industryProfile->industry->founder_image != "") {?>
                        
                        <img src="<?php echo Yii::app()->baseUrl;?>/assets/companylogo/<?php echo $industryProfile->industry->founder_image ;?>"/>
                        <?php } else {?>
                        <img src="<?php echo Yii::app()->baseUrl;?>/images/company_user.png"/>
                        <?php }?>
                    </div>
                    <div class="company_ues_name">
                        <label><?php echo $industryProfile->industry->founder_name;?><a href="<?php echo Yii::app()->createUrl("industry/profile");?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></label>
                        <label class="founder_name"><?php echo $industryProfile->industry->designation;?></label>
                    </div>
                </div>
            </div>
            <div class="information_block">
                <div class="user_information">
                    <table class="col-md-12 col-sm-12 col-xs-12 table-bordered">
                        <tbody>
                            <tr>
                                <td class="heading_text">Business Focus:</td>
                                <td><?php echo $industryProfile->industry->business_focus;?></td>
                            </tr>
                            <tr>
                                <td class="heading_text">Profile:</td>
                                <td><?php echo $industryProfile->industry->profile;?></td>
                            </tr>
                            <tr>
                                <td class="heading_text">Experience:</td>
                                <td><?php echo $industryProfile->industry->experience;?></td>
                            </tr>
                            <tr>
                                <td class="heading_text">Skills:</td>
                                <td><?php echo $industryProfile->industry->skills;?></td>
                            </tr>
                            <tr>
                                <td class="heading_text">Business School Preferred:</td>
                                <td><?php echo $industryProfile->industry->business_school_prefed;?></td>
                            </tr>
                            <tr class="post_intrnship">
                                <td class="heading_text">
                                    <span class="area_intrest"> Domain preferred :</span>
                                    <span>a) Live Project:</span>
                                    <span>b) Internship:</span>
                                    <span>c) Placements:</span>
                                </td>
								<td class="post_intrnship_info">
                                    <span class="live_project_span"><?php echo $industryProfile->industry->live_project;?></span>
                                    <span><?php echo $industryProfile->industry->internship;?></span>
                                    <span><?php echo $industryProfile->industry->placement;?></span>
                                </td>
							</tr>
						</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>  
<section class="industrial_portal">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <div class="left_sidebar">
                    <?php echo $this->renderPartial('traits');?>
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
                        <div class="site_btn"><a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl("site/page", array("view" => "faq","open"=>1)); ?>">Read More</a></div>
                    </div>
                    <div class="repeat_project">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
										<a href="<?php echo Yii::app()->createUrl("industry/createproject"); ?>">
											<div class="post_Text">
												<h2>Live Projects</h2>
												<h3><span>Post it </span><span class="here_text">Here !</span></h3>
											</div>
										</a>
                                    </div>
                                    <div class="post_content">
                                        <h3>Suggested Live Projects</h3>
                                        <div id="content-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['projects'] as $key => $project) { ?>
                                                <li><a style="color: black;" href="<?php echo Yii::app()->createUrl("industry/createproject",array("id"=>$project->id)); ?>"><?php echo $project->function; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
										 <a href="<?php echo Yii::app()->createUrl("industry/createintership"); ?>">
											<div class="post_Text">
												<h2>Internship</h2>
												<h3><span>Post it </span><span class="here_text">Here !</span></h3>
											</div>
										</a>
                                    </div>
                                    <?php if (!empty($data['internships'])) { ?>
                                        <div class="post_content">
                                            <h3>Suggested Internship Projects</h3>
                                            <div id="content1-1" class="content">
                                                <ul class="list-unstyled">
                                                    <?php foreach ($data['internships'] as $key => $internship) { ?>
                                                    <li><a style="color: black;" href="<?php echo Yii::app()->createUrl("industry/createintership",array("id"=>$internship->id)); ?>"><?php echo $internship->project_title; ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
										<a href="<?php echo Yii::app()->createUrl("industry/createjobs"); ?>">
											<div class="post_Text">
												<h2>Job</h2>
												<h3><span>Placements</span> <span class="here_text"> Here !</span></h3>
											</div>
										</a>
                                    </div>
                                    <div class="post_content">
                                        <h3>Job Placements</h3>
                                        <div id="content2-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['jobs'] as $key => $internship) { ?>
                                                <li><a style="color: black;" href="<?php echo Yii::app()->createUrl("industry/createjobs",array("id"=>$internship   ->id)); ?>"><?php echo $internship->function; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
										<a href="<?php echo Yii::app()->createUrl("industry/createconsultingprojects"); ?>">
											<div class="post_Text">
												<h2>Consulting</h2>
												<h3><span>Projects</span> <span class="here_text">Here !</span></h3>
											</div>
										</a>
                                    </div>
                                    <div class="post_content">
                                        <h3>Consulting Projects For Faculty</h3>
                                        <div id="content3-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['consulting_projectss'] as $key => $project) { ?>
                                                <li><a style="color: black;" href="<?php echo Yii::app()->createUrl("industry/createconsultingprojects",array("id"=>$project->id)); ?>"><?php echo $project->assignment_title; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="post_project">
                                    <div class="post_wrapper">
										<a href="<?php echo Yii::app()->createUrl("industry/sessionatcampus"); ?>">
											<div class="post_Text">
												<h2>Sessions At</h2>
												<h3><span>Campus</span> <span class="here_text">Here !</span></h3>
											</div>
										</a>
                                    </div>
                                    <div class="post_content">
                                        <h3> Session at campus</h3>
                                        <div id="content3-1" class="content">
                                            <ul class="list-unstyled">
                                                <?php foreach ($data['session'] as $key => $project) { ?>
                                                <li><a style="color: black;" href="<?php echo Yii::app()->createUrl("industry/sessionatcampus",array("id"=>$project->id)); ?>"><?php echo trim_text($project->thought,15); ?></a></li>
                                                <?php } ?>
                                            </ul>
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