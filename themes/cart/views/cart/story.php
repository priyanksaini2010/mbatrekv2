<?php
$type = $_REQUEST['type'];
switch ($type){
    case 1:
        $text = "Placement Coordinator";
        $text_bottom = "Want to get these sessions conducted by MBAtrek ‘FREE of COST’…";
        $left = "How to Leverage 2 Year MBA Program";
        $right = "How to Maximize the Opportunity for Placements";
        $class = "cordinator_page";
    break;
    case 2:
        $text = "Students";
        $text_bottom = "Want to get these awesome career impacting packages ";
        $left = "#YouBeTheExecutive";
        $right = "#YouBeTheExecutive";
        $class = "";
    break;
    case 3:
        $text = "Young Proffesionals";
        $text_bottom = "Want your career to head in the right direction like these professionals…";
        $left = "";
        $right = "";
        $class = "profession_success";
    break;
}

$this->setPageTitle( $text." Success Story");
$leftContent = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>1));
$rightContent = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>2));
if(!empty($leftContent) || !empty($rightContent)) {
?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);"><?php echo  $text." Success Story";?></a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="sucess_story_wrap <?php echo $class;?>">
            <h3>What <?php echo $text;?> say about MBAtrek…</h3>
            <div class="col-md-6 the_Executive">
               
                <div class="sucess_heading">
                    <?php if($left != ""){?>
                    <h3><?php echo $left;?></h3>
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
                                <label><?php echo $content->course;?> <?php echo $content->college_or_company;?></label>
                                <Span><?php echo $content->author;?></Span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-md-6">
                <div class="sucess_heading">
                    <?php if($right != ""){?>
                    <h3><?php echo $right;?></h3>
                    <?php }?>
                    <!--<h2>Internship Series…</h2>-->
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
                                <label><?php echo $content->course;?> <?php echo $content->college_or_company;?></label>
                                <Span><?php echo $content->author;?></Span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="want_to_get">
                <h3><?php echo $text_bottom;?> <a href="javascript:void(0);">Click Here</a></h3>
            </div>
        </div>
    </div>
</div>
<?php }else {?>
<p>No Records Founf</p>
<?php } ?>
