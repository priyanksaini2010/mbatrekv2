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
	<li class="active"><a href="javascript:void(0);">Download eBrouchers</a></li>
    </ul>
</div>
<?php $this->setPageTitle('Download eBrouchers'); ?>
<?php 
$categories = EbrouchersCategory::model()->findAll();
?>
<section class="bielf_container download_ebrochers">
    <div class="container">
        <div class="main_heading">
            <h4>Downloads</h4>
            <h3>Download E-Brochures</h3>
        </div>
        <?php foreach($categories as $key=>$value){?>
        <div class="categry_container">
            <div class="main_catgry_hdig">
                <h2><?php echo $value->name;?></h2>
                <a href="<?php echo Yii::app()->createUrl('site/download',array('id'=>null,'category_id'=>$value->id));?>">Download All <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
            </div>
            <?php $eBrouchers = Ebrouchers::model()->findAllByAttributes(array('category_id'=>$value->id));?>
            <div class="row">
                <?php foreach ($eBrouchers as $broucher){?>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="brochers_container">
                        <?php
                        $filename = "assets/eBrouchers/".$broucher->file;
                        $filename2 = "assets/eBrouchers/".$broucher->thumb_file;
                        if(file_exists($filename) && file_exists($filename2) ) {
                        ?>
                        
                        <a class="image thumbnail"  href="<?php if(file_exists($filename)){ echo $filename;}else { echo "assets/eBrouchers/No_image_available_-_museum.svg.jpg";}?>">
                            <span class="roll" ></span>
                            <?php $filename = "assets/eBrouchers/".$broucher->thumb_file?>
                            <img class="img-responsive" src="<?php if(file_exists($filename)){ echo $filename;}else { echo "assets/eBrouchers/No_image_available_-_museum.svg.jpg";}?>"/>									
                        </a>
                        <?php } else {?>
                        <a class="image" onclick="$('#myModalNoImage').modal('show')" href-="javascript:void('0')">
                            <span class="roll" ></span>
                            <img class="img-responsive" src="<?php echo "assets/eBrouchers/No_image_available_-_museum.svg.jpg";?>"/>
                        </a>
                        <?php }?>
                    </div>
                    <?php  if(file_exists($filename) && file_exists($filename2) ) {?>
                    <div class="main_register"><div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/download',array('id'=>$broucher->id,'category_id' => null));?>">Download</a></div></div>
                    <?php } else {?>
                    <div class="main_register"><div class="site_btn"><a onclick="$('#myModalNoImage').modal('show')"  class="raised ripple" href="javascript:void('0')">Download</a></div></div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
        <?php }?>
    </div>
</section>
