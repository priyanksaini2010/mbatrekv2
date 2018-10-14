<?php
$type = $_REQUEST['type'];
switch ($type){
    case 1:
        $text = "Placement Coordinator";
        $left = "How to Leverage 2 Year MBA Program";
        $right = "How to Maximize the Opportunity for Placements";
    break;
    case 2:
        $text = "Students";
        $left = "#YouBeTheExecutive";
        $right = "#YouBeTheExecutive";
    break;
    case 3:
        $text = "Young Proffesionals";
        $left = "";
        $right = "";
    break;
}

$leftContent = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>1));
$rightContent = SuccessStory::model()->findAllByAttributes(array("type"=>$type,"sub_type"=>2));
if(!empty($leftContent) || !empty($rightContent)) {
?>
<div class="container">
    <div class="row">
        <div class="sucess_story_wrap">
            <h3>What <?php echo $text;?> say about MBAtrek…</h3>
            <div class="col-md-6 the_Executive">
               
                <div class="sucess_heading">
                    <h3><?php echo $left;?></h3>
                    
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
                    <h3><?php echo $right;?></h3>
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
                <h3>Want to get these awesome career impacting packages <a href="javascript:void(0);">Click Here</a></h3>
            </div>
        </div>
    </div>
</div>
<?php }else {?>
<p>No Records Founf</p>
<?php } ?>
