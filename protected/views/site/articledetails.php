<?php
switch($_GET["type"]) {
    case 1:
        $text  ="Article";
        $class = "article_content";
        break;
    case 2 :
        $text  ="Success Story";
        $class = "sucess_story";
        break;
}?>
<section class="banner_area blogdetails">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/articles',array("type"=>1)); ?>">Articles</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);"><?php echo $model->name;?></a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
            <h4><?php echo $text;?></h4> 
        </div>
        <div class="blog_details">
            <div class="blog_heading">
                <h2><?php echo $model->name;?></h2>
                
            </div>
            <div class="blog_header">
                <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/assets/eBrouchers/<?php echo $model->banner_image;;?>"/>
            </div> 
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    
                    <div class="post_information">
                        <?php echo $model->details; ?>
                    </div> 
                    
                </div>
                
            </div>
        </div>
    </div>
</section>