<?php
$type = $_REQUEST['type'];
switch ($type){
    case 1:
        $text = "Placement Coordinator";
        $text_bottom = "Want to get these sessions conducted by MBAtrek ‘FREE of COST’";
        $left = "Leverage Your 2 Year MBA";
        $right = "How to Maximize the Opportunity for Placements";
//        $left_second = "Induction Series…";
        $class = "cordinator_page";
    break;
    case 2:
        $text = "Student";
        $text_bottom = "Want to get these awesome career impacting packages ";
        $left = "#YouBeTheExecutive";
        $left_second = " Internship and Placement Series...";
        $right = "#Campus2Corporate";
        $right_Second = "Program Feedback...";
        $class = "";
          $right_2 = "Leverage your 2 Year MBA";
          $right_Second_2 = "Induction Series…";
          
    break;
    case 3:
        $text = "Young Professionals";
        $text_bottom = "Want your career to head in the right direction like these professionals";
        $left = "";
        $right = "";
        $class = "profession_success";
      
    break;
}

$this->setPageTitle( $text." Stories");
$leftContent = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>1));
$rightContent = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>2));
$rightContent_2 = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>3));
if(!empty($leftContent) || !empty($rightContent) || !empty($rightContent_2)) {
?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->createUrl(''); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);"><?php echo  $text." Stories";?></a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="sucess_story_wrap <?php echo $class;?>">
            <h3>What <?php echo $text;?> say about MBAtrek</h3>
            <div class="col-md-4 the_Executive">
               
                <div class="sucess_heading">
                    <?php if($left != ""){?>
                    <h3><?php echo $left;?></h3>
					<h2><?php echo $left_second;?></h2>
                    <?php }?>
                </div>
                
                <?php foreach($leftContent as $content){?>
                <div class="sucess_Repeat">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="video_container">
                                <iframe width="560" height="315" src="<?php echo $content->video_url;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="sucess_info">
                                <label><?php echo $content->college_or_company;?>&nbsp;<?php echo $content->course;?> </label>
                                <Span><?php echo $content->author;?></Span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-md-4 the_Executive">
                <div class="sucess_heading">
                    <?php if($right != ""){?>
                    <h3><?php echo $right;?></h3>
                    <?php }?>
                    <h2><?php echo $right_Second;?></h2>
                </div>
                <?php foreach($rightContent as $content){?>
                <div class="sucess_Repeat">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="video_container">
                                <iframe width="560" height="315" src="<?php echo $content->video_url;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="sucess_info">
                                <label><?php echo $content->college_or_company;?>&nbsp;<?php echo $content->course;?> </label>
                                <Span><?php echo $content->author;?></Span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-md-4">
                <div class="sucess_heading">
                    <?php if($right_2 != ""){?>
                    <h3><?php echo $right_2;?></h3>
                    <?php }?>
                    <h2><?php echo $right_Second_2;?></h2>
                </div>
                <?php foreach($rightContent_2 as $content){?>
                <div class="sucess_Repeat">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="video_container">
                                <iframe width="560" height="315" src="<?php echo $content->video_url;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="sucess_info">
                                <label><?php echo $content->college_or_company;?> <?php echo $content->course;?> </label>
                                <Span><?php echo $content->author;?></Span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="want_to_get">
                <h3><?php echo $text_bottom;?> <a href="<?php echo Yii::app()->createUrl("contact-us");?>">Click Here</a></h3>
            </div>
        </div>
    </div>
</div>
<?php }else {?>
<p>No Records Founf</p>
<?php } ?>
