<?php $this->setPageTitle('#industryReady - Registration');
$criteria=new CDbCriteria;
$criteria->order = "sortOrder asc";
$colleges = CHtml::listData(CollegesCompetition::model()->findAll($criteria), "id", "name");
$courses = CHtml::listData(Courses::model()->findAll($criteria), "id", "title");
$yog = CHtml::listData(YearOfGraduation::model()->findAll($criteria), "id", "year");
//$colleges[0] = "Select College";
//$courses[0] = "Select Course";
//$yog[0] = "Select Year Of Graduation";
?>
<?php $baseUrl = Yii::app()->request->baseUrl; ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">#IndustryReady Competition</a></li>
    </ul>
</div>
<div class="page-wrapper">

            <div class="ambastor_container regsiter_emastor register_interview">
                <section class="earn_point">
                    <div class="container">
                        <div class="compas_heading">
                            <h4>Become #IndustryREADY</h4>
                        </div>
                        <div class="earn_container">
                            <ul>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/register_you_team.png"/>
                                    <span>Register Your Team</span>
                                    <img class="arrow_intervew" src="<?php echo $baseUrl;?>/images/industry_Ready/arrow_industry.png"/>
                                </li>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/submit_entry.png"/>
                                    <span>Submit Entry</span>
                                    <img class="arrow_intervew" src="<?php echo $baseUrl;?>/images/industry_Ready/arrow_industry.png"/>
                                </li>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/mbatrek_compus_visit.png"/>
                                    <span>MBAtrek Campus Visit</span>
                                    <img class="arrow_intervew" src="<?php echo $baseUrl;?>/images/industry_Ready/arrow_industry.png"/>
                                </li>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/result_Declaration.png"/>
                                    <span>Result Declaration</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                 <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'industry-ready-form-updated',
                        'enableAjaxValidation'=>false,
                )); ?>
                <?php echo $form->errorSummary($model); ?>
                <section class="register_Form">
                    <div class="compas_heading">
                            <h4>Fill up the Registration Form to Start your <br>Preparation for Final Placements  </h4>
                    </div>
                    <div class="container">
                       <div class="indusry_new_form">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-2">
									</div>
									<div class="col-md-10">
										<div class="form_amster_field">
											<div class="label_new">
												<label>Name of Your Team <em>*</em></label>
											</div>
                                            <?php echo $form->textFieldRow($model,'team_name',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("team_name"))); ?>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-2">
										<div class="team_member">
											Details of Team Member 1
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form_amster_field">
												<div class="label_new">
													<label>First Name <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'first_name',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("first_name"))); ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
												<div class="label_new">
													<label>Last Name <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'last_name',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("last_name"))); ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
												<div class="label_new">
													<label>Email Id <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'email_id',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("email_id"))); ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
												<div class="label_new">
													<label>Mobile Number <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'mobile_number',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("mobile_number"))); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-2">
										<div class="team_member">
											Details of Team Member 2
										</div>
									</div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>First Name <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'first_name_1',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("first_name_1"))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>Last Name <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'last_name_1',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("last_name_1"))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>Email Id <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'email_Id_1',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("email_Id_1"))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>Mobile Number <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'mobile_number_1',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("mobile_number_1"))); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="col-md-12">
									<div class="col-md-2">
										<div class="team_member">
											Details of Team Member 3
										</div>
									</div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>First Name <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'first_name_2',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("first_name_2"))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>Last Name <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'last_name_2',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("last_name_2"))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>Email Id <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'email_Id_2',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("email_Id_2"))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_amster_field">
												<div class="label_new">
													<label>Mobile Number <em>*</em></label>
												</div>
                                                    <?php echo $form->textFieldRow($model,'mobile_number_2',array('class'=>'span5','maxlength'=>255,'label'=>false,'placeholder'=>$model->getAttributeLabel("mobile_number_2"))); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="col-md-12">
									<div class="col-md-2"> </div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form_amster_field">
												<div class="label_new">
													<label>Select Your MBA Batch <em>*</em></label>
												</div>
                                                    <?php echo $form->dropDownList($model, 'mba_batch', $yog, array('class' => 'span3','empty'=>'Select Your MBA Batch','label'=>false)); ?>
												</div>
											</div>
											
											<div class="col-md-6 ">
												<div class="form_amster_field">
												<div class="label_new">
													<label>Select College <em>*</em></label>
												</div>
                                                    <?php echo $form->dropDownList($model, 'college', $colleges, array('class' => 'span3','empty'=>'Select Your College / University','label'=>false)); ?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
                                                    <?php echo $form->textFieldRow($model,'name_of_college',array('class'=>'span5','maxlength'=>255,'style'=>"display:none",'label'=>false,'placeholder'=>$model->getAttributeLabel("name_of_college"))); ?>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form_amster_field">
<!--													<input type="text" placeholder="Name of your Student Placement Coordinator / Student Committee Member *"/>-->
                                                    <?php echo $form->textAreaRow($model,'question_1',array("style"=>"display:none",'rows'=>6, 'cols'=>50, 'class'=>'span8','label'=>false,'placeholder'=>$model->getAttributeLabel("question_1"))); ?>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form_amster_field">
<!--													<input type="text" placeholder="Email of your Student Placement Coordinator / Student Committee Member * "/>-->
                                                    <?php echo $form->textAreaRow($model,'question_2',array("style"=>"display:none",'rows'=>6, 'cols'=>50, 'class'=>'span8','label'=>false,'placeholder'=>$model->getAttributeLabel("question_2"))); ?>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form_amster_field">
<!--													<input type="text" placeholder="Mobile No of your Student Placement Coordinator / Student Committee Member"/>-->
                                                    <?php echo $form->textAreaRow($model,'question_3',array("style"=>"display:none",'rows'=>6, 'cols'=>50, 'class'=>'span8','label'=>false,'placeholder'=>$model->getAttributeLabel("question_3"))); ?>
												</div>
											</div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 align_over_txt">
                                                <div class="g-recaptcha form-field" data-sitekey="6LcHG6EUAAAAAERv9LjXHi8OMkiRsmS6ZHdGB0Mj"></div>
                                            </div>
<!--                                            --><?php //if (CCaptcha::checkRequirements()): ?>
<!--                                                <div class="catcha_Code">-->
<!--                                                    --><?php //echo $form->labelEx($model, 'verifyCode'); ?>
<!--                                                    <div>-->
<!--                                                        --><?php //$this->widget('CCaptcha'); ?><!--<br>-->
<!--                                                        --><?php //echo $form->textField($model, 'verifyCode'); ?>
<!--                                                    </div>-->
<!--                                                    <div class="hint">Please enter the characters as they are shown in the image above.-->
<!--                                                        <br/>characters are not case-sensitive.</div>-->
<!--                                                        <br/>Characters are not case-sensitive.</div>-->
<!--                                                    --><?php //echo $form->error($model, 'verifyCode'); ?>
<!--                                                </div>-->
<!--                                            --><?php //endif; ?>
                                            <div class="capcha_div"><img src="images/capcha.png" alt="" />
											 <div class="col-md-12 text-center">
												<div class="form_amster_field">
													<input class="application_submit" type="submit" name="Submit Application" value="Submit Application"/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					   </div>
                  <?php $this->endWidget();?>
            </div>
            
        </div>
<style>
    .required{
        color :red;
        
    }
</style>
