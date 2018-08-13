<?php $this->setPageTitle('Blogs');?>
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
	<li><a href="<?php echo Yii::app()->createUrl('site/blogs'); ?>">Blog</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);"><?php echo $model->title;?></a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
            <h4>Our Blog</h4> 
        </div>
        <div class="blog_details">
            <div class="blog_heading">
                <h2><?php echo $model->title;?></h2>
                <ul class="list-inline list-unstyled">
                    <li>
                        <span class="posted_by">By: <?php echo $model->author;?></span>
                    </li>
                    <li>
                        <span class="posted_on">On: <?php echo date("d M, Y",  strtotime($model->date_created));?></span>
                    </li>
                </ul>
            </div>
            <div class="blog_header">
                <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/assets/blogs/<?php echo $model->banner_image;;?>"/>
            </div> 
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="share_post">
                        <ul class="list-inline list-unstyled">
                            <li><a href="javascript:void(0);" class="comment_post"><?php echo count($comments);?>Comments</a></li>
                            <li><a href="javascript:void(0);" class="share_post_b" id="share">Share This Post</a></li>
                        </ul>
                    </div>
                    <div class="post_information">
                        <?php echo $model->content; ?>
                    </div> 
                    <?php echo $this->renderPartial("commentform",array(
                'model' => $model,
                'comments' => $comments,
                'latests' => $latests,
            )
                            );?>
                    <?php echo $this->renderPartial("comments",array(
                'model' => $model,
                'comments' => $comments,
                'latests' => $latests,
            ));?>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="categories_container">
                        <div class="block_catry">
                            <h2>Category</h2>
                           
                            <ul class="list-unstyled">
                                <?php 
                                $cats = BlogCategory::model()->findAll();
                                foreach($cats as $cat):?>
                                <li><a href="<?php echo Yii::app()->createUrl("site/blogs",array("cat_id"=>$cat->id));?>">-  <?php echo $cat->name?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="block_catry">
                            <h2>Latest POSTS</h2>
                            <ul class="list-unstyled">
                                <?php foreach ($latests as $latest) {?>
                                <li>
                                    <img src="<?php echo Yii::app()->baseUrl;?>/assets/blogs/<?php echo $latest->background_image?>"/>
                                    <a href="<?php echo Yii::app()->createUrl("site/blogdetails",array("id"=>$latest->id));?>"><?php echo $latest->title?></a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>