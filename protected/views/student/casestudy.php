<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   
<section class="industrial_portal student_portal">
    <div class="container">
        <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Case Studies</a></li>
            </ul>
        </div>  
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <?php echo $this->renderPartial("left_menu",array("data"=>$data));?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar case_study">
                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                            'id'=>'filter-form-casestudy',
                            'enableAjaxValidation'=>false,
                            'htmlOptions'=>array(
                                'class'=>'form-horizontal',


                        ))); ?>
                    <div class="function_div">
                        <select id="functions-casestudy" name="function">
                            <option value="">Function</option>
                            <?php foreach ($data['casestudiesFunctions'] as $functions){ ?>
                            <option <?php if ($functions->id == $data['function']) {?>selected="selected"<?php }?> value="<?php echo $functions->id;?>"><?php echo $functions->name;?></option>
                            <?php }?>
                        </select>
                    </div>
                    <?php $this->endWidget();?>
                    <div class="case_stdy_block">
                        <?php foreach ($data['casestudies'] as $casestudy){?>
                        <div class="case_stdy_repeat">
							<img src="<?php echo Yii::app()->baseUrl;?>/assets/casestudy/<?php echo $casestudy->background_image;?>"/>
							<div class="case_content">
								<h2><?php echo $casestudy->title;?></h2>
								<div class="clearfix"></div>
								<div class="site_btn">
									<a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl('student/casestudeydetail',array('id' => $casestudy->id))?>">
										View
									</a>
								</div>
							</div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>