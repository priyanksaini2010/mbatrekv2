<section class="banner_area who_we_are">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   

<section class="industrial_portal intrection_faclty">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">MBAtrek Student Scores</a></li>
            </ul>
        </div>
        <div class="row">
            <?php echo $this->renderPartial("left_menu",array('data'=>$data));?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar ">
                    <div class="new_heading">
                        <h3>Student’s Score As Per Module</h3>
                    </div>
                    <div class="mudle_field">
                        <div class="row">
                            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                            'id'=>'filter-form-attendance',
                            'enableAjaxValidation'=>false,
                            'method' =>'GET',
                            'htmlOptions'=>array(
                                'class'=>'form-horizontal',


                            ))); ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="imnput_module">
                                    <select name="module_id" id="filter-module">
                                        <option value="">Module</option>
                                        <?php foreach ($data['modules'] as $module){?>
                                        <option <?php if ($data['module_id'] == $module->id) {?>selected="selected"<?php }?> value="<?php echo $module->id;?>"><?php echo $module->name;?></option>
                                        <?php }?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="imnput_module">
                                    <select name="batch_id" id="filter-batch">
                                        <?php foreach ($data['institute']->institute->instituteCourses[0]->instituteBatches as $key=>$course){?>
                                        <option <?php if ($data['batch_id'] == $course->id) {?>selected="selected"<?php }?> value="<?php echo $course->id;?>"><?php echo $course->name;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <?php $this->endWidget(); ?>
                        </div>
                    </div>
                    <div class="module_progess">
                        <div class="session_table">
                            <table class="col-md-12 table-bordered table-striped table-condensed cf">
                                <thead class="cf">
                                    <tr>
                                        <th class="first_th">S.No.</th>
                                        <th class="agenda_th" >Agenda</th>
                                        <th>Scores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="first_td"></td>
                                        <td></td>
                                        <td>
                                            <table class="inner_progresss">
                                                <tbody>
                                                    <tr>
                                                        <td class="first_td" >Low</td>
                                                        <td>Medium</td>
                                                        <td>High</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php foreach ($data['assigment'] as $assigmentKey=>$assigment) {   ?>
                                        <tr>
                                            <td class="first_td"><?php echo $assigmentKey+1;?></td>
                                            <td><?php echo $assigment->title;?></td>
                                            <td>
                                                <?php 
                                                    $totalScore = 0;
                                                    $studentScore = 0;+
                                                    $scorePer = 0;
                                                    foreach ($assigment->moduleAssignmentStudentScores as $scoreKey => $score) {
                                                        $totalScore = $totalScore + $score->total_score;
                                                        $studentScore = $studentScore + $score->student_score;
                                                    }
                                                    if ($totalScore != 0) {
                                                        $scorePer = number_format(($studentScore/$totalScore) * 100, 2)."%";
                                                    } else {
//                                                        echo "NA";
                                                    }
                                                    
                                                ?>
                                                
                                                <div class="progress_div">
                                                    <div class="progress_status">
                                                        <?php if ($scorePer >= 80) {?>
                                                        <div class="progress high">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%;">
                                                        <?php } else if($scorePer < 80 &&  $scorePer >= 60) {?>
                                                        <div class="progress medium">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
                                                        <?php } else {?>
                                                        <div class="progress low">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%;">
                                                        <?php }?>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php  }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tower_prgess">
                        <?php echo $this->renderPartial("footergraphscore");?>
                    </div>
                </div>

            </div> 
        </div>
    </div>
</section>