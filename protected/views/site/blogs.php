<?php $this->setPageTitle('Blogs'); 
$blogs = $models;
$typ = $_GET['type'];
if(!isset($_GET['type'])){
    $typ = 1;
}

?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Blogs</a></li>
    </ul>
</div>
<div class="blog_new_container">
    <div class="blog_header">
        <div class="container">
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 1?"active_high":"";?>" href="<?php echo Yii::app()->createUrl('blogs/career-preparation');?>">Career Preparation</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 2?"active_high":"";?>" href="<?php echo Yii::app()->createUrl('blogs/job-ready');?>">Job Ready</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a class="<?php echo $typ == 3?"active_high":"";?>"  href="<?php echo Yii::app()->createUrl('blogs/cxo-thoughts');?>">CXO's Thoughts</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog_container">
         
            <h3>
                   <?php switch($typ){
                case 1:
                    echo "Helping you make the most of your career";
                    break;
                case 2:
                    echo "Insights to help you get to your desired company";
                    break;
                case 3:
                    echo "Learn from the Industry’s Top Leaders";
                    break;
                
            }
?>
                
            </h3>
            <div class="our_blog">
                <div class="row">
                    <?php foreach ($blogs as $blog){?>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="blog_block">

                            <div class="blog_img"><img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/assets/blogs/<?php echo $blog->background_image;?>" alt="" /></div>
                            <div class="blog_content">
                                <div class="blog_info"><a href="<?php echo Yii::app()->createUrl("blogs/".$blog->id);?>"><?php echo $blog->title;?></a>
                                    <p><?php echo trim_text($blog->content, 80);?>.</p>
                                    <div class="blog_btn">
                                        <div class="site_btn"><a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl("blogs/".$blog->id);?>">Read more</a></div>
                                    </div>
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