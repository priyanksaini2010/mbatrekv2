<?php $this->setPageTitle('Industry - Session At Campus'); ?>
<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="industrial_portal">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('industry/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('industry/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Thoughts and Experiences</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <div class="left_sidebar">
                     <?php echo $this->renderPartial('traits');?>
                    <div class="module_div">
                        <div class="left_heading">
                            <h2>MBAtrek Module</h2>
                        </div>
                        <?php echo $this->renderPartial('modules_left_banner', array('data' => $data)); ?>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar">
                    <div class="main_heading">
                        <h4>Experience</h4>
                        <h3 class="text_right">Thoughts And Experiences</h3>
                    </div>
                    <p class="jobs_text">I would like to share my thoughts and experiences with the MBA students. </p>
                    <div class="session_table thoughts_content">
                        <table class="col-md-12 table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                                <tr>
                                    <th class="first_th">S.No.</th>
                                    <th>Thoughts & Experiences</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $coun = 1;
                                foreach($data['session'] as $session){?>
                                <tr>
                                    <td class="first_td"  data-title="S.No." class="heading_text"><?php echo $coun;?>.</td>
                                    <td  data-title="Thoughts & Experiences">
                                        <p><?php echo $session->thought;?></p>
                                    </td>
                                    <td  data-title="Thoughts & Experiences">
                                        <ul class="edit_thought list-inline list-unstyled">
                                            <li><a href="<?php echo Yii::app()->createUrl("industry/sessionatcampus",array("id"=>$session->id)); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                                            <li><a href="javascript:void('0');" onclick="if(confirm('Are you sure you want to delete this session')){window.location.href='<?php echo Yii::app()->createUrl("industry/deletecampus",array("id"=>$session->id)); ?>';}"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php $coun++;}?>
                                <tr>
                                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'industry-session-form',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                    ))); ?>
                                    <td class="first_td"  data-title="S.No." class="heading_text"><?php echo $coun;?>.</td>
                                    <td  data-title="Thoughts & Experiences">
                                        <div class="phAnimate">
                                            <?php if (isset($model->thought)) {?>
                                            <input type="text" class="input_field" id="Email" name="thought" value="<?php echo $model->thought;?>">
                                            <?php } else {?>
                                            <input type="text" class="input_field" id="Email" name="thought">
                                            <?php }?>
                                        </div>
                                    </td>
                                    <td  data-title="Thoughts & Experiences">
                                        <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" id="sub-thought" class="raised ripple has-ripple" href="#myModal1">Submit</a></div>
                                    </td>
                                    <?php $this->endWidget();?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $this->renderPartial('industry_analysis'); ?>
<?php echo $this->renderPartial('industry_footer'); ?>