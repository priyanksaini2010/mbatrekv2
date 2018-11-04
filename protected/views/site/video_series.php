<?php $this->setPageTitle('Videos'); 
$blogs =$models;
$typ = $_GET['type'];

?>
<div class="blog_new_container">
    <div class="blog_header">
        <div class="container">
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 1?"active_high":"";?>" href="<?php echo Yii::app()->createUrl("site/videos",array("type"=>1));?>">#InterviewReady</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 2?"active_high":"";?>" href="<?php echo Yii::app()->createUrl("site/videos",array("type"=>2));?>">#InternGo</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 3?"active_high":"";?>"  href="<?php echo Yii::app()->createUrl("site/videos",array("type"=>3));?>">CXO's Thoughts</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog_container">
            <h3>Helping you make the most of your career</h3>
            <div class="our_blog">
                <div class="row">
                    <?php foreach ($blogs as $blog){?>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="blog_block">
                            <ul class="list-unstyled">
                                <li><span class="date_blog"><?php echo date("d", strtotime($blog->date_created));?></span> <span class="month_blog"><?php echo date("M", strtotime($blog->date_created));?></span></li>
                                <li><img src="images/comment_icon.png" alt="" /> <span class="comment_blog"><?php echo date("y", strtotime($blog->date_created));?></span></li>
                            </ul>
                            <div class="blog_img">
                                <?php echo $blog->youtube_video_link;?>
                            </div>
                            
                        </div>
                    </div>
                    <?php }?>
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>