<section class="banner_area banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Videos</a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
            <h4>Videos</h4> 
        </div>
        <div class="our_blog video_post">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <?php foreach($models as $model): ?>
                    <div class="blog_block">
                        <?php echo $model->iframe;?> 
                        <h2><?php echo trim_text($model->tag_line, 80);?> </h2>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_pegination">
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