<?php $this->setPageTitle('Industry - Post Jobs'); ?>
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
                <li class="active"><a href="javascript:void(0);">Create Jobs</a></li>
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
                    <div class="main_heading">
                        <h4>Jobs</h4>
                        <h3 class="text_right">Post Jobs</h3>
                    </div>
                    <p class="jobs_text">Find ready ‘Industry Ready &amp; Relevant’ Executives who are professionally competent and familiar with corporate structure, systems, business processes and consulting tools. They are well versed with global current practices. You don’t need to train in initial years, except for the domain expertise of your company.</p>
                    <p class="jobs_text">These students will be able to identify problems and provide optimum and more appropriate solutions to day to day business problems. External mentoring for one year from our side is provided to the freshly graduated recruits enabling you to save time and effort on any coaching.</p>
                    <p class="jobs_text">Students have gone thru a specific program CHASE, which aims at building Character, Hope, Attitude, Skill and Enthusiasm. These are the essential characteristics required by an executive in current competing and challenging world</p>
                    <p class="jobs_text">These students will demonstrate high understanding of office culture and business etiquettes. You will get an employee that is motivated and excited, confident and determined, globally competent, dedicated and equipped.</p>
                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'industry-job-form',
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
                                            <label>Company Name </label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->company_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'company_name', $data); ?>
                                            <?php echo $form->textField($model, 'company_name', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Preferred Location For Job <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate two_input">
                                                    <?php if($model->job_location != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                                    	<?php // echo $form->textFieldRow($model,'location',array('class'=>'span5','maxlength'=>255)); ?>
                                                    <?php
                                                    
                                                        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
//                                                            'model'=>$model,
//                                                            'attribute'=>'location',
							    'value' => $model->job_location!=""?$model->job_location:"",
                                                            'id' => 'IndustryInternship_location',
                                                            'name' => 'JobPosting[job_location]',
                                                            'source' => $data_renderer['cities'],
                                                            'options' => array(
                                                                'delay' => 300,
                                                                'minLength' => 1,
                                                                'showAnim' => 'fold',
                                                                'change' => "js:function(event,ui)
                                                                                {
                                                                                if (ui.item==null)
                                                                                    {
                                                                                    $('#Users_city').val('');
                                                                                    $('#Users_city').focus();
                                                                                     $('#myModalCity').modal('show')
                                                                                    }
                                                                                }"
                                                            ),
                                                            'htmlOptions' => array(
                                                                'size' => '40',
                                                                'class' => "input_field"
                                                            ),
                                                        ));
                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Position <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate two_input">
                                                    <?php if($model->position != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                                    <?php echo $form->labelEx($model, 'position', $data); ?>
                                                    <?php echo $form->textField($model, 'position', array('class' => "input_field")); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label class="function_text">Fuctions </br>(Marketing, Sales, Operations etc.) <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->function != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'function', $data); ?>
                                            <?php echo $form->textField($model, 'function', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Number Of Openings <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate mobile_label">
                                            <?php if($model->number_of_opening != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'number_of_opening', $data); ?>
                                            <?php echo $form->dropDownList($model, 'number_of_opening',range(1,100), array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Description Of JOb <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->description_of_job != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'description_of_job', $data); ?>
                                            <?php echo $form->textField($model, 'description_of_job', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Preferred Qualification <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->preferred_qualification != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'preferred_qualification', $data); ?>
                                            <?php echo $form->textField($model, 'preferred_qualification', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Salary <em>*</em>(E.g. 20000 or 20000.00)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->salary != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'salary', $data); ?>
                                            <?php echo $form->textField($model, 'salary', array('class' => "input_field")); ?>
					     <br/>
					        <br/>
					    <?php if ($model->salary_anotation != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname",'class' => 'active_no');
}; ?>
<?php echo $form->labelEx($model, 'salary_anotation', $data); 
$arr = array("Per Month","Per Annum");
?>
					    <br/>
<?php echo $form->dropDownList($model, 'salary_anotation',$arr, array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="btton_field site_btn">
                                    <button type="submit" class="yello_btn raised ripple" >Submit</button>
                                </div>
                                <?php if (isset($model->id)) {?>
                                <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" id="sub-thought" class="raised ripple has-ripple" href="javascript:void('0');" onclick="if(confirm('Are you sure you want to delete this job')){window.location.href='<?php echo Yii::app()->createUrl("industry/deletejob",array("id"=>$model->id)); ?>';}">Delete</a></div>
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
