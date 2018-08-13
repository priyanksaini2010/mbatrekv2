<?php $this->setPageTitle('Blogs');?>
<section class="banner_area blogs">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Blog</a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
            <h4>Our Blog</h4> 
        </div>
        <div class="our_blog">
            <div class="row">
                <?php foreach($models as $model): ?>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="blog_block">
                        <ul class="list-unstyled">
                            <li>
                                <span class="date_blog"><?php echo date("d",  strtotime($model->date_created));?></span>
                                <span class="month_blog"><?php echo date("M",  strtotime($model->date_created));?></span>
                            </li>
                            <li>
                                <img src="<?php echo Yii::app()->baseUrl;?>/images/comment_icon.png"/>
                                <span class="comment_blog"><?php echo date("y",  strtotime($model->date_created));?></span>
                            </li>

                        </ul>
                        <div class="blog_img">
                            <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/assets/blogs/<?php echo $model->background_image;?>"/>
                        </div>
                        <div class="blog_content">
                            <div class="blog_info">
                                <a href="<?php echo Yii::app()->createUrl("site/blogdetails", array("id"=>$model->id));?>"><?php echo $model->title;?></a>
                                <p><?php echo trim_text($model->content, 80);?> </p>
                                <div class="blog_btn">
                                    <div class="site_btn">
                                        <a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl("site/blogdetails", array("id"=>$model->id));?>">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_pegination">
                         <ul class="list-unstyled list-inline">
                            <li><span><?php // echo "Page ".($pages->currentPage+1)." of " .$pages->pages;?></span></li>
                         </ul>
                        <?php $this->widget('CLinkPager', array(
                            "header" =>"",
                            'pages' => $pages,
                            'firstPageLabel'     => 'First',
                            'nextPageLabel'     => 'Next',
                            'lastPageLabel'     => 'Last',
                            'prevPageLabel'     => 'Previous',
                            'selectedPageCssClass' => 'active',
                            'htmlOptions' =>array(
                                "class" => "list-unstyled list-inline",
                            )
                        )) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>