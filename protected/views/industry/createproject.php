<?php $this->setPageTitle('Industry - Post Projects');

?>
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
                <li class="active"><a href="javascript:void(0);">Create Projects</a></li>
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
                        <h4>Projects</h4>
                        <h3 class="text_right">Live Projects</h3>
                    </div>
                    <p class="jobs_text">Students &amp; MBAtrek will assist you to scope out your problem statement as a Live Project, for students to undertake it as Live project and provide solution. </p>
					 <p class="jobs_text">You will have a choice to lay down your requirement of resources, background of the students who you will select for the Live Project. These students have the right ‘industry mind set’ and don’t require much of hand holding to undertake these assignments. MBAtrek provides these students, ‘end-to- end’ support for the full term of the live project, ensuring that you minimize involvement of your management time.</p>
					 <p class="jobs_text">Students will ensure that the time lines, deliverables and milestones are met, as per your schedule.</p>
					 <p class="jobs_text">There is a suggested list of Live Projects which MBAtrek provides for various functional areas, specific to industry segments. This will be shared on your portal page.</p>
		    <?php
		    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id' => 'industry-project-form',
			'enableAjaxValidation' => false,
			'htmlOptions' => array(
			    'class' => 'form-horizontal',
		    )));
		    ?>
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
					    <?php if ($model->company_name != '') {
						$data = array('for' => "firstname", 'class' => 'active');
					    } else {
						$data = array('for' => "firstname");
					    }; ?>
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
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="phAnimate two_input">
<?php if ($model->campus != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname");
}; ?>
						    <?php echo $form->labelEx($model, 'campus', $data); ?>
						    <?php echo $form->textField($model, 'campus', array('class' => "input_field")); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="phAnimate two_input">
						    <label for="firstname" class="<?php if($model->city !=""){?>active<?php }?>">City </label>
						    <?php
						    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
//                                                            'model'=>$model,
//                                                            'attribute'=>'location',
							'value' => $model->city!=""?$model->city:"",
							'id' => 'IndustryInternship_location',
							'name' => 'LiveProjects[city]',
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
<?php if ($model->function != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname");
}; ?>
<?php echo $form->labelEx($model, 'function', $data); ?>
<?php echo $form->textField($model, 'function', array('class' => "input_field")); ?>
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
                                                    <span class="start_date">Start Date</span>
                                                    <label for="firstname">End Date </label>
                                                    <div id="example10_proj"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="phAnimate  calender">
                                                    <span class="start_date">End Date</span>
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
                                            <label class="">Number Of Students Required <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate mobile_label">
					    <?php if ($model->number_of_students != '') {
						$data = array('for' => "firstname", 'class' => 'active');
					    } else {
						$data = array('for' => "firstname");
					    }; ?>
<?php echo $form->labelEx($model, 'number_of_students', $data); ?>
<?php echo $form->dropDownList($model, 'number_of_students',range(1,100), array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label">
                                            <label>Project Deliverables <em>*</em></label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
<?php if ($model->project_deliverables != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname");
}; ?>
<?php echo $form->labelEx($model, 'project_deliverables', $data); ?>
				<?php echo $form->textField($model, 'project_deliverables', array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="from_fill">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="input_label ">
                                            <label >Stipend <em>*</em><b/>(E.g. 20000 or 2000.00)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="phAnimate">
<?php if ($model->stipend != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname");
}; ?>
<?php echo $form->labelEx($model, 'stipend', $data); ?>
<?php echo $form->textField($model, 'stipend', array('class' => "input_field")); ?>
					      <br/>
					        <br/>
					    <?php if ($model->stipent_anotation != '') {
    $data = array('for' => "firstname", 'class' => 'active');
} else {
    $data = array('for' => "firstname", 'class' => 'active_no');
}; ?>
<?php echo $form->labelEx($model, 'stipent_anotation', $data); 
$arr = array("Per Day","Per Week","Per Month","Per Annum");
?>
					    <br/>
<?php echo $form->dropDownList($model, 'stipent_anotation',$arr, array('class' => "input_field")); ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="clearfix"></div>
                                <div class="btton_field site_btn">
                                    <button type="submit" class="yello_btn raised ripple dateValidate" >Submit</button>
                                </div>
<?php if (isset($model->id)) { ?>
                                    <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" id="sub-thought" class="raised ripple has-ripple" href="javascript:void('0');" onclick="if (confirm('Are you sure you want to delete this project')) {
                                                window.location.href = '<?php echo Yii::app()->createUrl("industry/deleteproject", array("id" => $model->id)); ?>';
                                            }">Delete</a></div>
<?php } ?>
                            </div>
                        </div>
                    </div>
<?php $this->endWidget(); ?>
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
<script type="text/javascript">
	$(document).ready(function(){
		var start_date, start_day, start_month, start_year, end_date, end_day, end_month, end_year;
		$("#example10_proj").on("change", ".day", function(){
			
			if($(this).val() != "")
				start_day = $(this).val();
			else
				start_day = undefined;
		});
		$("#example10_proj").on("change", ".month", function(){
			if($(this).val() != "")
				start_month = $(this).val();
			else
				start_month = undefined;
		});
		$("#example10_proj").on("change", ".year", function(){
			if($(this).val() != "") 
				start_year = $(this).val();
			else
				start_year = undefined;
		});
		$("#example11_proj").on("change",".day", function(){
			if($(this).val() != "") 
				end_day = $(this).val();
			else
				end_day = undefined;
			
		});
		$("#example11_proj").on("change", ".month", function(){
			if($(this).val() != "")
				end_month = $(this).val();
			else
				end_month = undefined;
		});
		$("#example11_proj").on("change", ".year", function(){
			if($(this).val() != "")
				end_year = $(this).val();
			else
				end_year = undefined;
		});
		$(".dateValidate").click(function(){
			if(start_day != undefined && start_month != undefined && start_year != undefined) {
				start_date = start_day + "/" + start_month + "/" + start_year;
			}
			else {
				start_date = undefined;
			}
			if(end_day != undefined && end_month != undefined && end_year != undefined) {
				end_date = end_day + "/" + end_month + "/" + end_year;
			}
			else {
				end_date = undefined;
			}
			if(start_date != undefined && end_date != undefined) {
				console.log("Start date : " + start_date);
				console.log("End date : " + end_date);
				if(Date.parse(start_date) > Date.parse(end_date)){
				   alert("Invalid Date Range");
				}
				//else{
				  // alert("Valid date Range");
				//}
			}
			else{
				   alert("Invalid Date Range");
				}
		});

	})
</script>