<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="industrial_portal remarks_student">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Live Projects / Internship</a></li>
            </ul>
        </div>
	<div class="row">
	    <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
		<?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
	    <div class="col-md-9 col-sm-8 col-xs-12">
		<div class="right_sidebar intnerl_block">
<!--		    <div class="function_div">
			<select>
			    <option <?php if ($_REQUEST['type'] == "live"){?>selected=""<?php }?>>Internship</option>
			    <option <?php if ($_REQUEST['type'] == "live"){?>selected=""<?php }?>>Live Projects</option>
			</select>
		    </div>-->
		    <?php if(!empty($data['live'])) {
			foreach($data['live'] as $d) {
		    ?>
		    <div class="internship_intenrnal">
			<ul class="list-unstyled">
			    <?php if ($_REQUEST['type'] == "live"){?>
			    <li><a href="<?php echo Yii::app()->createUrl('site/downloadfiles', array('path' => Yii::app()->baseUrl.'/assets/eBrouchers/'.$d->liveProject->file,'name'=>$d->liveProject->file)) ?>"><i class="fa fa-file-text" aria-hidden="true"></i> <?php echo $d->liveProject->company_name;?> : <?php echo $d->liveProject->function;?></a></li>
			    <?php }else {?>
			    <li><a href="<?php echo Yii::app()->createUrl('site/downloadfiles', array('path' => Yii::app()->baseUrl.'/assets/eBrouchers/'.$d->internship->file,'name'=>$d->internship->file)) ?>"><i class="fa fa-file-text" aria-hidden="true"></i> <?php echo $d->internship->company_name;?> : <?php echo $d->internship->function;?></a></li>
			    <?php }?>
			</ul>
		    </div>
			<?php }}else { echo "No data available";}?>
		</div>
	    </div>
	</div>
</section>