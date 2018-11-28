<?php $this->setPageTitle('Videos'); 
$blogs =$models;
$typ = $_GET['type'];

?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Videos</a></li>
    </ul>
</div>
<div class="blog_new_container video_container">
    <div class="top_header_Text">
        <h2>Here is our ‘FREE’ Video Series to help you get</h2>
        <h2>‘Ready’ & ‘Relevant’ for the Corporate World</h2>
    </div>
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
                        <div class="blog_video_repeat">
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="blog_block">
                            <div class="block_Titke">
                                <h1>  <?php echo $blog->title;?></h1>
                                <h2>  <?php echo $blog->content;?></h2>
                            </div>
                            <div class="blog_img">
                                <?php echo $blog->youtube_video_link;?>
                            </div>
                            <div class="share_post">
                                <ul class="list-inline list-unstyled">
                                    <!--<li><a class="comment_post" href="javascript:void(0);">0Comments</a></li>-->
                                    <li><a href="javascript:void(0);" class="share_post_b jssocials" id="share"> 
                                        <div class="jssocials-shares">&nbsp;</div>
                                        </a> </li>
                                </ul>
                           </div>
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