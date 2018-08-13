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
<section class="banner_area articles<?php echo $_GET['type'];?> our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);"><?php echo $text;?></a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
            <h4><?php echo $text;?></h4> 
        </div>
        <div class="our_blog <?php echo $class;?>">
            <div class="row">
                <?php foreach($models as $model): ?>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="blog_block">
                        <div class="blog_img">
                            <img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/assets/eBrouchers/<?php echo $model->image;?>"/>
                        </div>
                        <div class="blog_content">
                            <div class="blog_info">
                                <a href="<?php echo Yii::app()->createUrl("site/articledetails", array("id"=>$model->id,"type"=> $model->type));?>"><?php echo trim_text($model->name, 80);?> </p></a>
                                <div class="blog_btn">
                                    <div class="site_btn">
                                        <a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl("site/articledetails", array("id"=>$model->id,"type"=> $model->type));?>">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
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