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
<div class="page-wrapper">

            <div class="ambastor_container regsiter_emastor register_interview">
                <section class="earn_point">
                    <div class="container">
                        <div class="compas_heading">
                            <h4>How Do We Know You are Right for Us</h4>
                        </div>
                        <div class="earn_container">
                            <ul>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/register_entry.png"/>
                                    <span>Wow us with your answers</span>
                                    <img class="arrow_intervew" src="<?php echo $baseUrl;?>/images/industry_Ready/arror_right_interview.png"/>
                                </li>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/upload_documents.png"/>
                                    <span>Send a video showing your awesomeness</span>
                                    <img class="arrow_intervew" src="<?php echo $baseUrl;?>/images/industry_Ready/arror_right_interview.png"/>
                                </li>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/mbatrek_visit_Compas.png"/>
                                    <span>Final interview over skype</span>
                                    <img class="arrow_intervew" src="<?php echo $baseUrl;?>/images/industry_Ready/arror_right_interview.png"/>
                                </li>
                                <li>
                                    <img src="<?php echo $baseUrl;?>/images/industry_Ready/result_declartion_interviw.png"/>
                                    <span>Final interview over skype</span>
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
                            <h4>Fill up the Registration Form to Start your Preparation for Final Placements  </h4>
                    </div>
                    <div class="container">
                        <div class="col-md-6">
                            <div class="form_amster_field">
                                  <?php echo $form->textFieldRow($model,'first_name',array('class'=>'span5','maxlength'=>255)); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form_amster_field">
                                 <?php echo $form->textFieldRow($model,'last_name',array('class'=>'span5','maxlength'=>255)); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form_amster_field">
                                <?php echo $form->textFieldRow($model,'mobile_number',array('class'=>'span5','maxlength'=>255)); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form_amster_field">
                               <?php echo $form->textFieldRow($model,'email_id',array('class'=>'span5','maxlength'=>255)); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form_amster_field">
                                <label>Select Your MBA Batch <Em>*</Em></label>
                                 <?php echo $form->dropDownList($model, 'mba_batch', $yog, array('class' => 'span3','empty'=>'Select an option')); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form_amster_field">
                                <label>Select Your College / University <Em>*</Em></label>
                                <?php echo $form->dropDownList($model, 'college', $colleges, array('class' => 'span3','empty'=>'Select an option')); ?>
                            </div>
                        </div>
                        <div class="col-md-6" id="name_of_college" style="display:none;">
                            <div class="form_amster_field">
                                <?php echo $form->textFieldRow($model,'name_of_college',array('class'=>'span5','maxlength'=>255)); ?>
                            </div>
                        </div>
                        <div class="col-md-12" id="question_1" style="display:none;">
                            <div class="form_amster_field">
<!--                                <label>Name of your Student Placement Coordinator / Student Committee Member  <Em>*</Em></label>
                               <textarea></textarea>-->
  <?php echo $form->textAreaRow($model,'question_1',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                            </div>
                        </div>
                        <div class="col-md-12" id="question_2" style="display:none;">
                            <div class="form_amster_field">
<!--                                <label>Email of your Student Placement Coordinator / Student Committee Member  <Em>*</Em></label>
                                <textarea></textarea>-->
                                      <?php echo $form->textAreaRow($model,'question_2',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                            </div>
                        </div>
                        <div class="col-md-12" id="question_3" style="display:none;">
                            <div class="form_amster_field">
<!--                                <label>Mobile No of your Student Placement Coordinator / Student Committee Member  </label>
                                <textarea></textarea>-->
                                <?php echo $form->textAreaRow($model,'question_3',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                            </div>
                        </div>
                        <?php if (CCaptcha::checkRequirements()): ?>
                            <div class="catcha_Code">
                                <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                <div>
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode'); ?>
                                </div>
                                <div class="hint">Please enter the letters as they are shown in the image above.
                                    <br/>Letters are not case-sensitive.</div>
                                <?php echo $form->error($model, 'verifyCode'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="capcha_div"><img src="images/capcha.png" alt="" />
                        <div class="col-md-12 text-center">
                            <div class="form_amster_field">
                                <input class="application_submit" type="submit" name="Submit Application" value="Submit Application"/>
                            </div>
                        </div>
                    </div>
                </section>
                  <?php $this->endWidget();?>
            </div>
            
        </div>
<style>
    .required{
        color :red;
        
    }
</style>