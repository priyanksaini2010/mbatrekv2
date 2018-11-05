<?php 
$this->setPageTitle('Campus Ambassador - Registeration'); 
$criteria=new CDbCriteria;
$criteria->order = "sortOrder asc";
$colleges = CHtml::listData(Colleges::model()->findAll($criteria), "id", "name");
$courses = CHtml::listData(Courses::model()->findAll($criteria), "id", "title");
$yog = CHtml::listData(YearOfGraduation::model()->findAll($criteria), "id", "year");
//pr($yog);
//$colleges[0] = "Select College";
//$courses[0] = "Select Course";
//$yog[0] = "Select Year Of Graduation";
?>
<?php $baseUrl = Yii::app()->request->baseUrl; ?>
<div class="ambastor_container regsiter_emastor">
    <section class="amastor_wrap">
        <div class="container">
            <div class="compas_heading">
                <h3>Campus Ambassador Program</h3>
                <h4>All the Best! Game On! </h4>
            </div>
        </div>
    </section> 
    <section class="earn_point">
        <div class="container">
            <div class="compas_heading">
                <h4>How Do We Know You are Right for Us</h4>
            </div>
            <div class="earn_container">
                <ul>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/wow_icon.png"/>
                        <span>Wow us with your answers</span>
                    </li>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/send_video_icon.png"/>
                        <span>Send a video showing your awesomeness</span>
                    </li>
                    <li>
                        <img src="<?php echo $baseUrl; ?>/images/final_interview_icon.png"/>
                        <span>Final interview over skype</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>  
    <section class="register_Form">
        <div class="compas_heading">
            <h4>Here’s Your Chance to Amaze us! </h4>
        </div>
        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                'id'=>'campus-ambassador-form',
                'enableAjaxValidation'=>false,
        )); ?>
        <?php echo $form->errorSummary($model); ?>
        <div class="container">
            <div class="col-md-6">
                <div class="form_amster_field">
<!--                    <label>First Name <Em>*</Em></label>
                    <input type="text"/>-->
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
<!--                    <label>Mobile Number <Em>*</Em></label>
                    <input type="text"/>-->
                    <?php echo $form->textFieldRow($model,'mobile_number',array('class'=>'span5','maxlength'=>255)); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form_amster_field">
<!--                    <label>E-mail ID <Em>*</Em></label>
                    <input type="text"/>-->
                    <?php echo $form->textFieldRow($model,'email_id',array('class'=>'span5','maxlength'=>255)); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form_amster_field">
                    <label>College <Em>*</Em></label>
<!--                    <select>
                        <option>abc</option>
                        <option>abc</option>
                        <option>abc</option>
                        <option>abc</option>
                    </select>-->
                    <?php echo $form->dropDownList($model, 'college_id', $colleges, array('class' => 'span3','empty'=>'Select an option')); ?>
                </div>
            </div>
            <div class="col-md-6" id="name_of_college" style="display:none;">
                <div class="form_amster_field">
<!--                    <label>E-mail ID <Em>*</Em></label>
                    <input type="text"/>-->
                    <?php echo $form->textFieldRow($model,'name_of_college',array('class'=>'span5','maxlength'=>255)); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form_amster_field">
                    <label>Course <Em>*</Em></label>
<!--                    <select>
                        <option>abc</option>
                        <option>abc</option>
                        <option>abc</option>
                        <option>abc</option>
                    </select>-->
                    <?php echo $form->dropDownList($model, 'course_id', $courses, array('class' => 'span3','empty'=>'Select an option')); ?>
                </div>
            </div>
            <div class="col-md-6" id="name_of_course" style="display:none;">
                <div class="form_amster_field">
<!--                    <label>E-mail ID <Em>*</Em></label>
                    <input type="text"/>-->
                    <?php echo $form->textFieldRow($model,'name_of_course',array('class'=>'span5','maxlength'=>255)); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form_amster_field">
                    <label>Year of Graduation <Em>*</Em></label>
<!--                    <select>
                        <option>abc</option>
                        <option>abc</option>
                        <option>abc</option>
                        <option>abc</option>
                    </select>-->
                     <?php echo $form->dropDownList($model, 'year_of_graduation_id', $yog, array('class' => 'span3','empty'=>'Select an option')); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form_amster_field">
<!--                    <label>Why do you want to be a MBAtrek Campus Ambassador? <Em>*</Em></label>
                    <textarea></textarea>-->
                    <?php echo $form->textAreaRow($model,'question_1',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form_amster_field">
<!--                    <label>Suggest two super creative ideas to share the importance of career development  in your college <Em>*</Em></label>
                    <textarea></textarea>-->
                    <?php echo $form->textAreaRow($model,'question_2',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form_amster_field">
                   <?php echo $form->textAreaRow($model,'question_3',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="form_amster_field">
                    <input class="application_submit" type="submit" name="Submit Application" value="Submit Application"/>
                </div>
            </div>
        </div>
        <?php $this->endWidget();?>
    </section>
</div>
<style>
    .required{
        color :red;
        
    }
</style>