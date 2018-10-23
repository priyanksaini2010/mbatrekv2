<section class="banner_area event_gallery our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Event Gallery</a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
            <h4>Event Gallary</h4>
            <h3>Event Gallary</h3>
        </div>
        <div class="event_gallary">
            <div class="left_filter">
                <ul class="list-unstyled">
                    <li><button class="filter-btn" data-filter="all">All</button></li>
                    <?php 
                    $cats = EventCategory::model()->findAll();
                    $criteria = new CDbCriteria;
                    $criteria->order = 'id DESC';
                    $gallery = EventGallery::model()->findAll($criteria);
                    foreach ($cats as $cat) {
                    ?>
                    <li><button class="filter-btn" data-filter=".<?php echo $cat->name;?>"><?php echo $cat->name;?></button></li>
                    <?php }?>
                    
                </ul>
            </div>
            <div class="right_filter_Result">
                <ul class=" courses list-unstyled list-inline"  id="mix-wrapper">
                    <?php foreach($gallery as $gal) {?>
                    <li class="mix-target <?php echo $gal->eventCategory->name;?>  col-md-3 col-sm-4 col-xs-6"  data-order="5" data-year="4">
                        <div class="portfolio_hold">
                            <img src="assets/eBrouchers/<?php echo $gal->image;?>"/>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>