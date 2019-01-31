<?php $this->setPageTitle('Videos');
$blogs =$models;
$typ = $subtype;

?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Student Stories</a></li>
    </ul>
</div>
<div class="blog_new_container video_container student_story">
    <div class="top_header_Text">
        <h2>What Student say about MBAtrek</h2>

    </div>
    <div class="blog_header">
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="header_btn"><a class="<?php echo $typ == 1?"active_high":"";?>" href="<?php echo Yii::app()->createUrl('success/story/you-be-the-executive');?>">#YouBeTheExecutive</a></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="header_btn"><a class="<?php echo $typ == 2?"active_high":"";?>" href="<?php echo Yii::app()->createUrl('success/story/campus-2-corporate');?>">#Campus2Corporate</a></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="header_btn"><a class="<?php echo $typ == 3?"active_high":"";?>"  href="<?php echo Yii::app()->createUrl('success/story/leverage-your-2-year-mba');?>">Leverage Your 2 Year MBA</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog_container">
            <div class="our_blog videos">
                <div class="row">
                    <?php foreach ($blogs as $blog){?>
                        <div class="blog_video_repeat">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="blog_block">
                                    <div class="block_Titke">
                                        <h1>  <?php echo $blog->college_or_company;?>&nbsp;<?php echo $blog->course;?></h1>
                                        <h2 class="sucess_info"><span><?php echo $blog->author;?></span></h2>

                                    </div>
                                    <div class="blog_img ">
                                        <iframe width="560" height="315" src="<?php echo $blog->video_url;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
