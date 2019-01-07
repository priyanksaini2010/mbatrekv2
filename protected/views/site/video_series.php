<?php $this->setPageTitle('Videos'); 
$blogs =$models;
$typ = $_GET['type'];

?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
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
                <div class="header_btn"><a class="<?php echo $typ == 1?"active_high":"";?>" href="<?php echo Yii::app()->createUrl('videos/interview-ready');?>">#InterviewReady</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 2?"active_high":"";?>" href="<?php echo Yii::app()->createUrl('videos/interngo');?>">#InternGo</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 3?"active_high":"";?>"  href="<?php echo Yii::app()->createUrl('videos/cxo-thoughts');?>">CXO's Thoughts</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog_container">
            <div class="our_blog videos">
                <div class="row">
                    <?php foreach ($blogs as $blog){?>
                        <div class="blog_video_repeat">
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="blog_block">
                            <div class="block_Titke">
                                <h1>  <?php echo $blog->title;?></h1>
                                <div class="share_post">
                                <ul class="list-inline list-unstyled">
                                    <!--<li><a class="comment_post" href="javascript:void(0);">0Comments</a></li>-->
                                    <li>
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <span class="share_label">Share</span>
                                        <ul>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo Yii::app()->params['url']."videos/";?>&title=<?php echo $blog->title;?>&summary=<?php echo $blog->content;?>&source=<?php echo urlencode($blog->youtube_video_link);?>" class="linked_icon" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i></a></li>
                                            <li><a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $blog->title;?>&amp;p[summary]=<?php echo $blog->content;?>&amp;p[url]=<?php echo Yii::app()->params['url']."videos/";?>&t&amp;&p[images][0]=<?php echo urlencode($blog->youtube_video_link);?>" class="facebook_icon" target="_blank"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a></li>
                                            <li><a href="http://twitter.com/share?text=<?php echo urlencode($blog->title);?>&&url=<?php echo urlencode(Yii::app()->params['url']."videos/");?>" class="twitter_icon" target="_blank"><i class="fa fa-twitter" aria-hidden="true" target="_blank"></i></a></li>
                                            <li><a href="mailto:?subject=<?php echo urlencode($blog->title);?>&body=<?php echo urlencode(Yii::app()->params['url']."videos/");?>" class="quora_icon" target="_blank"><i class="fa fa-at jssocials-share-logo" aria-hidden="true" target="_blank"></i></a></li>
                                        </ul>
                                     </li>
                                </ul>
                           </div>
                                <h2>  <?php echo $blog->content;?></h2>
                            </div>
                            <div class="blog_img ">
                                <?php echo $blog->youtube_video_link;?>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
