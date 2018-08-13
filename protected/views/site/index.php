<?php
$dataSite = ContentJson::model()->findByAttributes(array('page'=>'home'));
$dataSite = json_decode($dataSite->data);?>
<section class="slider_div">
    <div class="container">
        <div class="main_heading">
            <h4>JOIN MBAtrek</h4>
            <h3>Give yourself the advantage</h3>
        </div>
        <div class="slider_wrap">
            <p><?php echo isset($dataSite->Give_Yourself_The_Advantage)?$dataSite->Give_Yourself_The_Advantage:"";?></p> 
            <div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'who_we_are'))?>">Read More</a></div>
        </div> 
        <div class="all_students first_stdn_list">
            <div class="students_block first_list">
                <!-- <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="student_icn"></div>
                </div> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_content">
                        <h2>Institute</h2>
                        <p><?php echo isset($dataSite->Institute)?$dataSite->Institute:"";?><!--<a href="javascript:void(0);">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>--></p>
                        <div class="main_register"><div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/registerinstitute')?>">Register</a></div></div>
                    </div>
                </div>
            </div>
            <div class="students_block">
                <!-- <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="student_icn industry_icon"></div>   
                </div> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_content">
                        <h2>Industry</h2>
                        <p><?php echo isset($dataSite->Industry)?$dataSite->Industry:"";?><!--<a href="javascript:void(0);">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>--></p>
                        <div class="main_register"><div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/register')?>">Register</a></div></div>
                    </div>
                </div>
            </div> 
        </div> 
        <div class="all_students seconf_stdn_list">
            <div class="students_block second_list_1">
                <div class="col-md-4 col-sm-4 col-xs-4">
                   <!-- <div class="student_icn mbatrek_icon"></div>-->
				   <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/images/mba_logo.png"/>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="student_content second_link">
                        <h2>MBAtrek <em>TM</em></h2>
                        <span>(MBA students)</span>
                        <p><?php echo isset($dataSite->MBAtrek)?$dataSite->MBAtrek:"";?></p>
                        <!--<a href="javascript:void(0);">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
                    </div>
                </div>
                <div class="main_register"><div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/registerstudent')?>">Register</a></div></div>
            </div> 
            <div class="students_block">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <!--<div class="student_icn mbatrek_icon"></div>-->
					 <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/images/mtrek_logo.png"/>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="student_content second_link">
                        <h2>Mtrek <em>TM</em></h2>
                        <span>(MTech/MS students)</span>
                        <p><?php echo isset($dataSite->Mtrek)?$dataSite->Mtrek:"";?></p>
                       <!-- <a href="javascript:void(0);">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
                    </div>
                </div>
                <div class="main_register"><div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/registerstudentms')?>">Register</a></div></div>
            </div> 
            <div class="students_block">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <!--<div class="student_icn mbatrek_icon"></div>-->
					 <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/images/grade_explore.png"/>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="student_content second_link">
                        <h2>GradXplore <em>TM</em></h2>
                        <span>(Graduate students)</span>
                        <p><?php echo isset($dataSite->GradXplore_)?$dataSite->GradXplore_:"";?></p>
                     <!--   <a href="javascript:void(0);">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
                    </div>
                </div>
                <div class="main_register"><div class="site_btn">
                        <!--<a class="raised ripple" href="<?php // echo Yii::app()->createUrl('site/registerstudentgrand')?>">Register</a>-->
                        <a class="raised ripple" href="javascript:void(0);" onclick="openComingSoon();">Register</a>
                    </div></div>
            </div>   
        </div>
    </div>
</section> 
<section class="course_div">
    <div class="container">
        <div class="yes_heading">
            <?php echo isset($dataSite->Yes_It_FREE)?$dataSite->Yes_It_FREE:"";?>
		</div>
        <div class="course_content view_plans">
				<div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'pricing'))?>">View Plans <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
			</div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="course_repeat">
                <div class="course_img">
                    <!-- <div class="course_icon"></div><div class="clearfix"></div> -->
                    <h3>MBA Student</h3>
                </div>
                <div class="course_content">
                        <!-- <p>Neque porro quisquam est qui dolorem ipsum quia dolor </p> -->
                    <div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'pricing','id'=>1))?>">Subscribe <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="course_repeat">
                <div class="course_img">
                    <!-- <div class="course_icon"></div><div class="clearfix"></div> -->
                    <h3>M.tech/MS Student</h3>
                </div>
                <div class="course_content">
                        <!-- <p>Neque porro quisquam est qui dolorem ipsum quia dolor </p> -->
                    <div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'pricing','id'=>2))?>">Subscribe <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="course_repeat">
                <div class="course_img">
                    <!-- <div class="course_icon"></div><div class="clearfix"></div> -->
                    <h3>B.tech Student</h3>
                </div>
                <div class="course_content">
                        <!-- <p>Neque porro quisquam est qui dolorem ipsum quia dolor </p> -->
                    <div class="site_btn">
                        <!--<a class="raised ripple" href="<?php // echo Yii::app()->createUrl('site/page',array('view'=>'pricing','id'=>3))?>">Register <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
                        <a class="raised ripple" href="javascript:void(0);" onclick="openComingSoon();">Subscribe <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<section class="why_choose">
    <div class="container">
        <div class="main_heading">
            <h4>The Best</h4>
            <h3>What We Bring to You</h3>
        </div> 
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="course_repeat">
                <div class="course_img">
                    <div class="course_icon"></div><div class="clearfix"></div>
                    <h3>Industry</h3>
                </div>
                <div class="course_content">
                    <p><?php echo isset($dataSite->What_We_Bring_To_You_Industry)?$dataSite->What_We_Bring_To_You_Industry:"";?></p>
                    <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'industry'));?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="course_repeat">
                <div class="course_img">
                    <div class="course_icon  choose_insis"></div><div class="clearfix"></div>
                    <h3>Institute</h3>
                </div>
                <div class="course_content">
                    <p><?php echo isset($dataSite->What_We_Bring_To_You_Institute)?$dataSite->What_We_Bring_To_You_Institute:"";?></p>
                    <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'institute'));?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="course_repeat">
                <div class="course_img">
                    <div class="course_icon  students_choose"></div><div class="clearfix"></div>
                    <h3>Student</h3>
                </div>
                <div class="course_content">
                    <p><?php echo isset($dataSite->What_We_Bring_To_You_Student)?$dataSite->What_We_Bring_To_You_Student:"";?></p>
                    <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'student'));?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="your_tube">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-6">
					<div class="block_you">
						<a href="#home_pop" data-toggle="modal" >
							<img src="<?php echo Yii::app()->baseUrl;?>/images/common_page.jpg"/>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="block_you">
						<p class="first_you">MBAtrek transforms students and aids them in becoming “industry ready and relevant”. We ensure that they are ready to “hit the ground running” right from the time they graduate and are from the first day contributing towards the vision, values and growth strategies of the company they become a part of. Complimenting the college/ university curriculum, the MBAtrek program is based on the current, global and best industry practices, making it highly differentiated and unique.</p>
						<p>We empower students to become analytical and critical thinkers, who can apply conceptual learning to everyday industry issues and take quick decisions. Developing Character, Hope, Attitude, Skill and Enthusiasm is of high importance for MBAtrek, thereby enabling students to cope with the increasingly challenging global environment and ethical issues surrounding malpractices. We survive on the intention of creating a win- win situation by bringing synergy between student, institute and industry.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>