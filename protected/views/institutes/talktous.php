<section class="banner_area who_we_are">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>    
<section class="industrial_portal intrection_faclty">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">MBAtrek Attendance</a></li>
            </ul>
        </div>
        <div class="row">
            <?php echo $this->renderPartial("left_menu",array('data'=>$data));?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar instute_talk_us">
                    <div class="talk_block_bind">
                        <ul class="list-inline list-unstyled">
                           
                                <li class="faclty_talk">
									<div class="full_talk">
										 <a href="<?php echo Yii::app()->createUrl('institutes/interactionlanding',array('type'=>1));?>">
											<img src="<?php echo Yii::app()->baseUrl;?>/images/talk_faclty.png"/>
										
										<img class="corner_fold" src="<?php echo Yii::app()->baseUrl;?>/images/talk_corner.png"/>
										<h2>Faculty</h2>
										 </a>
									</div>
                                </li>
                            
                            
                                <li class="placement_talk">
									<div class="full_talk">
                                    <a href="<?php echo Yii::app()->createUrl('institutes/interactionlanding',array('type'=>2));?>">
                                        <img src="<?php echo Yii::app()->baseUrl;?>/images/talk_placement.png"/>
                                    
                                    <img class="corner_fold" src="<?php echo Yii::app()->baseUrl;?>/images/placement_corner.png"/>
                                    <h2>Placement Cell</h2>
									</a>
									</div>
                                </li>
                            
                            
                                <li class="management_talk margin_li0">
									<div class="full_talk">
                                    <a href="<?php echo Yii::app()->createUrl('institutes/interactionlanding',array('type'=>3));?>">
                                        <img src="<?php echo Yii::app()->baseUrl;?>/images/talk_managment.png"/>
                                   
                                    <img class="corner_fold" src="<?php echo Yii::app()->baseUrl;?>/images/managment_corner.png"/>
                                    <h2>Management</h2>
									</a>
									</div>
                                </li>
                            
                            
                                <li class="live_project margin_li0">
									<div class="full_talk">
                                    <a href="<?php echo Yii::app()->createUrl('institutes/interactionlanding',array('type'=>4));?>">
                                        <img src="<?php echo Yii::app()->baseUrl;?>/images/talk_live_project.png"/>
                                    
                                    <img class="corner_fold" src="images/live_corner.png"/>
                                    <h2>
                                        -  Live Projects</br>
                                        -  Internships</br>
                                        -  Placements
                                    </h2>
									</a>
									</div>
                                </li>
                            
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>