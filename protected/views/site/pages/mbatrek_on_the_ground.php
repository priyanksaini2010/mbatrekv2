
<?php $this->setPageTitle('MBAtrek on the ground'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">MBAtrek on the ground</a></li>
    </ul>
</div>

<div class="ground_mbatrek">
    <div class="container">
        <h3>MBAtrek On the Ground</h3>
        <?php
        $events = EventGallery::model()->findAll();
        foreach($events as $event){
        ?>
        <div class="event_container">
            <h4><p><?php echo $event->name;?></p></h4>
            <div class="eventbanner">
                <div class="ground_1_pic"><img src="<?php echo Yii::app()->baseUrl;?>/assets/eBrouchers/<?php echo $event->image_1; ?>" alt="" /></div>
                <div class="ground_1_pic"><img src="<?php echo Yii::app()->baseUrl;?>/assets/eBrouchers/<?php echo $event->image_2; ?>" alt="" /></div>
                <div class="ground_1_pic"><img src="<?php echo Yii::app()->baseUrl;?>/assets/eBrouchers/<?php echo $event->image_3; ?>" alt="" /></div>
                
                <p><?php echo $event->description;?></p>
        
                

            </div>
        </div>
        <?php }?>
        <div class="more_about_plan"><label>To know more about our programs, <a href="<?php echo Yii::app()->createUrl("cart/student");?>">Click Here</a> </label></div>
<!--		<div class="more_about_plan"><label>To know more about our programs, <a href="javascript:void(0);">Click Here</a> </label></div>-->
    </div>
</div>
