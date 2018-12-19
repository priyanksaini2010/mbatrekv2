<?php $this->setPageTitle('#industryReady - Registeration'); 
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
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
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
                        'id'=>'industry-ready-form',
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
											<input type="text" placeholder="Name of your Team *"/>
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
													<input type="text" placeholder="First Name *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Last Name *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Email ID *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Mobile No *"/>
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
													<input type="text" placeholder="First Name *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Last Name *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Email ID *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Mobile No *"/>
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
													<input type="text" placeholder="First Name *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Last Name *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Email ID *"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Mobile No *"/>
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
													<select>
														<option>Select Your MBA Batch *</option>
														<option>dummy </option>
														<option>dummy </option>
													</select>
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<select>
														<option>Select Your College / University *</option>
														<option>dummy </option>
														<option>dummy </option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form_amster_field">
													<input type="text" placeholder="Name of your College / University *"/>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form_amster_field">
													<input type="text" placeholder="Name of your Student Placement Coordinator / Student Committee Member *"/>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form_amster_field">
													<input type="text" placeholder="Email of your Student Placement Coordinator / Student Committee Member * "/>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form_amster_field">
													<input type="text" placeholder="Mobile No of your Student Placement Coordinator / Student Committee Member"/>
												</div>
											</div>
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