<?php $this->setPageTitle('Industry - Create Consulting Project'); ?>
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
                <li class="active"><a href="javascript:void(0);">Project With Faculty</a></li>
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
                        <?php echo $this->renderPartial('modules_left_banner', array('data' => $data_renderer)); ?>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar create_project">
                    <div class="main_heading project_faclty">
                        <h4>Jobs</h4>
                        <h3 class="text_right">Project for Faculty</h3>
                    </div>
                    <p class="jobs_text">Use academic experience to unfold your thought process for mid-long term strategic/ functional issues.</p>
                    <p class="jobs_text">It makes huge sense to hire B school/University professors as consultant to evaluate those business challenges which require ‘out of the box’ thinking.</p>
                    <p class="jobs_text">How do you get the best out of this partnership with faculty:</p>
					<ol>
						<li>Set objectives &amp; clear deliverables. Scope of the project, resources, timelines, milestones etc.</li>
						<li>Explain the mutual benefit. How real industry learning will improve faculty’s delivery at the campus.</li>
						<li>Build long term relationship with select B Schools/Universities, investing in those projects, where mutual strength of the University/B School and Industry could produce results.</li>
						<li>Work as one team, seamlessly communicating and bringing in course correction, wherever required.</li>
						<li>Leverage the lessons learnt out of any project over other projects.</li>
					</ol>
					<p class="jobs_text">MBAtrek will assist you to provide educational background, research experiences of the Professors who qualify to be invited for consulting projects in industry.</p>
                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'industry-consulting-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                    ))); ?>
                    <div class="job_post">
                        <div class="fob_form">
                            <div class="row">
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="input_label">
                                            <label>Assignment Title <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->assignment_title != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'assignment_title', $data); ?>
                                            <?php echo $form->textField($model, 'assignment_title', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Deliverables Required <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate two_input">
                                                    <?php if($model->deliverable_requirement != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                                    <?php echo $form->labelEx($model, 'deliverable_requirement', $data); ?>
                                                    <?php echo $form->textField($model, 'deliverable_requirement', array('class' => "input_field")); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label class="function_text">Desired Experience & Exposure of Faculty<em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->desired_experience != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'desired_experience', $data); ?>
                                            <?php echo $form->textField($model, 'desired_experience', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Budget<em>*</em>(E.g. 20000 or 20000.00)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->budget != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'budget', $data); ?>
                                            <?php echo $form->textField($model, 'budget', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Time Schedule<em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->time_scedule != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'time_scedule', $data); ?>
                                            <?php echo $form->textField($model, 'time_scedule', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="btton_field site_btn">
                                    <button type="submit" class="yello_btn raised ripple" >Submit</button>
                                </div>
                                <?php if (isset($model->id)) {?>
                                <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" id="sub-thought" class="raised ripple has-ripple" href="javascript:void('0');" onclick="if(confirm('Are you sure you want to delete this project')){window.location.href='<?php echo Yii::app()->createUrl("industry/deleteconsulting",array("id"=>$model->id)); ?>';}">Delete</a></div>
                                <?php }?>

                            </div>
                        </div>
                    </div>
                    <?php $this->endWidget();?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $this->renderPartial('industry_analysis'); ?>
<?php echo $this->renderPartial('industry_footer'); ?>
<style>
    .required{
        color : red;
    }
</style>
