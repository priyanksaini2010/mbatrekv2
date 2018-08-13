<?php echo $this->renderPartial('pages/_banner_area'); ?>
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
                        <a class="image thumbnail"  href="assets/eBrouchers/<?php echo $broucher->file;?>">
                            <span class="roll" ></span>
                            <img class="img-responsive" src="assets/eBrouchers/<?php echo $broucher->thumb_file;?>"/>									
                        </a>
                    </div>
                    <div class="main_register"><div class="site_btn"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/download',array('id'=>$broucher->id,'category_id' => null));?>">Download</a></div></div>
                </div>
                <?php }?>
            </div>
        </div>
        <?php }?>
    </div>
</section>
