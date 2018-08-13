<section class="banner_area attendance">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   

<section class="industrial_portal attandance_div">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">MBAtrek Feedback</a></li>
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
                                        <?php foreach ($data['institute']->institute->instituteBatches as $key=>$course){?>
                                        <option <?php if ($data['batch_id'] == $course->id) {?>selected="selected"<?php }?> value="<?php echo $course->id;?>"><?php echo $course->universityCourseBatch->courser_name."(".$course->universityCourseBatch->courser_batch.")";?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    <div class="module_progess">
                        <div class="session_table">
                            <table class="col-md-12 table-bordered table-striped table-condensed cf">
                                <thead class="cf">
                                    <tr>
                                        <th class="first_th">S.No.</th>
                                        <th class="agenda_th" >Module</th>
                                        <th>Session Plan</th>
                                        <th>Attendance % of Institute</th>
                                        <!--<th>% of University</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['sessions'] as $sessionKey=>$sessions) {?>
                                    <tr>
                                        <td class="first_td"><?php echo $sessionKey+1;?></td>
                                        <td><?php echo $sessions->module->name;?></td>
                                        <td>
                                           <?php echo $sessions->session_name;
                                            $filename = "assets/webinar/".$sessions->session_plan_file;
                                             if(file_exists($filename) && $sessions->session_plan_file != "") {
                                           ?>
                                            <a style="color: black;" href="<?php echo Yii::app()->createUrl('site/downloadfiles', array('path' => '/assets/webinar/'.$sessions->session_plan_file,'name'=>$sessions->session_plan_file)) ?>"><span class="glyphicon glyphicon-download"></span></a>
                                            <?php } else {?>
                                             <a style="color: black; cursor: pointer;" onclick="$('#myModalNoPlan').modal('show')" href-="javascript:void('0')"><span class="glyphicon glyphicon-download"></span></a>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php 
                                            $totalStudents = 0;
                                            $totalAttended = 0;
                                            foreach ($sessions->instituteBatchSessionStudentAttendances as $attendanceKey=>$attendance) {
                                                $totalStudents  = $totalStudents + 1;
						if ($attendance->is_present) {
						    $totalAttended  = $totalAttended + 1;
						}
                                                
                                            }
                                            if ($totalStudents != 0) {
                                                echo number_format(($totalAttended/$totalStudents) * 100, 2)."%";
                                            } else {
                                                echo "Attendance Not Available";
                                            }
                                            ?>
                                        </td>
<!--                                        <td>
                                            <?php 
//                                            $totalStudents = 0;
//                                            $totalAttended = 0;
//                                            foreach ($sessions->instituteBatchSessionStudentAttendances as $attendanceKey=>$attendance) {
//                                                $totalStudents  = $totalStudents + 1;
//						if ($attendance->is_present) {
//						    $totalAttended  = $totalAttended + 1;
//						}
//                                            }
//                                            if ($totalStudents != 0) {
//                                                echo number_format(($totalAttended/$totalStudents) * 100, 2)."%";
//                                            } else {
//                                                echo "Attendance Not Available";
//                                            }
                                            ?>
                                        </td>-->
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tower_prgess">
                        <?php echo $this->renderPartial("footergraph");?>
                    </div>
                </div>

            </div> 
        </div>
    </div>
</section>