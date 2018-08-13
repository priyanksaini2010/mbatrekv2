<?php $this->setPageTitle('Industry - Post Internship'); ?>
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
                <li class="active"><a href="javascript:void(0);">Post Internship</a></li>
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
                        <h4>Internship</h4>
                        <h3 class="text_right">Post Internship</h3>
                    </div>
                    <p class="jobs_text">Running a successful Internship program is the best way to find future employees. Intern is an in expensive resource with no obligation, willing to put his/her best to prove his capabilities and intent. This gives an opportunity to you to test drive the talent. You will have an opportunity to test candidate’s capabilities and personality in real time situation in the environment where he/she is going to work in future. For short term projects, which require quick support and large resource at low cost, Internship is a great option.</p>
                    <p class="jobs_text">Internships are typically of 6 -8 weeks’ duration. MBAtrek has three programs to develop the industry ‘mind-set’ of these students.</p>
					<ul class="list_internshipv list-unstyled">
						<li><strong>InternACE:</strong> Before starting the internship, student goes thru InternACE program, which prepares the student to select the industry/companies so that only those candidates who show keen desire to work in a specific company are provided internship in those industries/companies.</li>
						<li><strong>IInternPRO:</strong> During the internship period, MBAtrek supports the students thru active mentoring to ensure delivery of results, meeting timelines and milestone set by the companies.</li>
						<li><strong>InternARISE:</strong> Once, the students are back from the internship, each student goes thru a group/one-to- one debriefing session so that the experiences become part of the learning for all students and they can understand the reasons for the level of performance.</li>
					</ul>
                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'industry-internship-form',
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
                                            <label>Company Name</label>
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
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="input_label">
                                            <label>Project Title <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->project_title != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'project_title', $data); ?>
                                            <?php echo $form->textField($model, 'project_title', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>City <em>*</em></label>
                                        </div>
										
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate two_input">
                                                    <?php if($model->location != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                                    	<?php // echo $form->textFieldRow($model,'location',array('class'=>'span5','maxlength'=>255)); ?>
                                                    <?php
                                                    
                                                        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
//                                                            'model'=>$model,
//                                                            'attribute'=>'location',
							    'value' => $model->location != '' ?$model->location:"",
                                                            'id' => 'IndustryInternship_location',
                                                            'name' => 'IndustryInternship[location]',
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
                                            <label class="function_text">Functions </br>(Marketing, Sales, Operations etc.) <em>*</em></label>
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
                                            <?php if($model->number_of_openings != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'number_of_openings', $data); ?>
                                            <?php echo $form->dropDownList($model, 'number_of_openings',range(1,100), array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Date <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate  calender">
                                                    <span class="intern_lable">  Start Date</span>
                                                     <div id="example10_proj"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate  calender">
                                                    <span class="intern_lable">End Date</span>
                                                    <label for="firstname">End Date </label>
                                                     <div id="example11_proj"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Description Of Project <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->description_of_project != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'description_of_project', $data); ?>
                                            <?php echo $form->textField($model, 'description_of_project', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Stipend <em>*</em><b/>(E.g. 20000 or 2000.00)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
                                            <?php if($model->stipend != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                            <?php echo $form->labelEx($model, 'stipend', $data); ?>
                                            <?php echo $form->textField($model, 'stipend', array('class' => "input_field")); ?>
					    <br/>
					        <br/>
					    <?php if ($model->stipend_anotation != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname", 'class' => 'active_no');
}; ?>
<?php echo $form->labelEx($model, 'stipend_anotation', $data); 
$arr = array("Per Month","Per Annum");
?>
					    <br/>
<?php echo $form->dropDownList($model, 'stipend_anotation',$arr, array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="btton_field site_btn">
                                    <button type="submit" class="yello_btn raised ripple" >Submit</button>
                                </div>  
                                <?php if (isset($model->id)) {?>
                                <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" id="sub-thought" class="raised ripple has-ripple" href="javascript:void('0');" onclick="if(confirm('Are you sure you want to delete this internship')){window.location.href='<?php echo Yii::app()->createUrl("industry/deleteinternship",array("id"=>$model->id)); ?>';}">Delete</a></div>
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
<script>
    <?php if ($model->start_date != "") {?>
    $(document).ready(function () {
        $("#example10_proj").dateDropdowns({
            submitFieldName: 'example10',
            required: true,
            defaultDate: '<?php echo $model->start_date;?>'
        });
        $("#example11_proj").dateDropdowns({
            submitFieldName: 'example11',
            required: true,
            defaultDate: '<?php echo $model->end_date;?>'
        });
    })
    <?php }?>
</script>