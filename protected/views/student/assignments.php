<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="industrial_portal student_portal">

    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Case Studies</a></li>
            </ul>
        </div>  
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar">
                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                            'id'=>'filter-form-assigment',
                            'enableAjaxValidation'=>false,
                            'htmlOptions'=>array(
                                'class'=>'form-horizontal',


                        ))); ?>
                    <div class="function_div">
                        <select id="module-assignments" name="module">
                            <option value="">Module</option>
                            <?php foreach ( $data['modules'] as $module){ ?>
                            <option <?php if ($module->id == $data['module']) {?>selected="selected"<?php }?> value="<?php echo $module->id;?>"><?php echo $module->name;?></option>
                            <?php }?>
                        </select>
                    </div>
                    <?php $this->endWidget();?>
                    <div class="to_do_container to_do_expand">
                        <h3>To - Do List</h3>
                        <div class="session_table">
                            <div class="portal_last">
                                <table class="col-md-12 table-bordered ">
                                    <thead class="cf">
                                        <tr>
                                            <th class="first_th">S.No.</th>
                                            <th class="module_text">Module</th>
                                            <th class="module_text">Title</th>
                                            <th  class="scrose_text">Due Date</th>
                                            <th  class="scrose_text">Open</th>
                                            <th  class="scrose_text">Close</th>
                                            <th  class="scrose_text">Action</th>
                                            <th  class="scrose_text">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['assigments'] as $counterAssignment=>$assignment){
	 $attributes = array(
		"student_id" => $data['student_profile']->id ,
		"module_assignment_id" =>$assignment->id,
	    );
        $studentScore = ModuleAssignmentStudentScore::model()->findByAttributes($attributes);
					    ?>
                                        <tr>
                                            <td><?php echo $counterAssignment+1;?></td>
                                            <td><p><?php echo $assignment->module->name;?></p></td>
                                            <td><p><?php echo $assignment->title;?></p></td>
                                            <td class="date_text"><p><?php echo date("d.m.Y", strtotime($assignment->due_date));?></p></td>
                                            <td class="date_text"><?php echo date("d.m.Y", strtotime($assignment->open_date));?></td>
                                            <td class="date_text"><?php echo date("d.m.Y", strtotime($assignment->close_date));?></td>
                                            
                                            <td>
                                                <?php
                                                    $or = false;
                                                    $id = "nocheck";
						    $title = "";
                                                    if (!empty($studentScore)) {
                                                        switch($studentScore->status) {
                                                            case 1:
                                                                    if(strtotime($assignment->open_date) < strtotime(date("Y-m-d"))){
                                                                        $link = "javascript:void('0');";
                                                                        $text = "Assignment Not Open";
                                                                        $style= "";
                                                                    } else {
                                                                        $link = Yii::app()->createUrl("student/quizstart",array("id"=>$assignment->id));
                                                                        $text = "Continue";
                                                                         $style= "text-decoration: underline;";
                                                                    }
                                                                   
                                                                   
                                                                break;
                                                            case 2:
                                                                    $route = "student/close";
                                                                    $link = Yii::app()->createUrl($route,array("id"=>$studentScore->id));
                                                                    $text = "Close Assigment";
                                                                    $id = "check-close";
								     $title = "Close Assigned before date passed, else marks will not be considered";
                                                                    $or  = true;
								     $style= "text-decoration: underline;";
                                                                break;
                                                            case 3:
                                                                    $link = "javascript::void('0');";
                                                                    $text = "No Action Required";
								    $style= "";
                                                                break;
                                                        }
                                                    } else {
                                                        if (strtotime(date("Y-m-d")) <= strtotime($assignment->close_date) ) {
                                                            if (strtotime(date("Y-m-d")) >= strtotime($assignment->open_date)) {
                                                                $route = "student/quizstart";
                                                                $link = Yii::app()->createUrl($route,array("id"=>$assignment->id));
                                                                $text = "Start Quiz";
                                                                $style= "text-decoration: underline;";
                                                            } else {
                                                               $link = Yii::app()->createUrl("student/quizstart",array("id"=>$assignment->id));
                                                               $text = "Not Open Yet";
                                                               $style= "text-decoration: underline;";
                                                            }
                                                            
                                                        } else {
                                                            $link = "javascript:void('0');";
                                                            $text = "Date Passed";
							    $style= "";
                                                        }
                                                        
                                                    }
                                                ?>
						<span class="glyphicon glyphicon-info-sign" title=" <?php echo $title;?>"></span> <a id="<?php echo $id;?>" style="color:#333333 !important; <?php echo $style;?>" href="<?php echo $link?>"> <?php echo $text;?></a>
                                                <?php if($or){?>
                                                <!--<br />-->
<!--                                                OR
                                                <br/>
                                                <a style="color:#333333 !important;" href="<?php echo Yii::app()->createUrl("student/quizstart",array("id"=>$assignment->id))?>"> Retake Quiz</a>-->
                                                <?php }?>
                                            </td>
					    <td>
                                                <?php
                                                    $attributes = array(
                                                        "student_id" => $data['student_profile']->id ,
                                                        "module_assignment_id" =>$assignment->id,
                                                    );
                                                    $studentScore = ModuleAssignmentStudentScore::model()->findByAttributes($attributes);
                                                    if (!empty($studentScore)) {
                                                        switch($studentScore->status) {
                                                            case 1:
                                                                    echo "Started";
                                                                break;
                                                            case 2:
                                                                    echo "Completed";
                                                                break;
                                                            case 3:
                                                                    echo "Closed";
                                                                break;
                                                        }
                                                    } else {
                                                        echo "Not Started";
                                                    }
                                                ?>
                                            </td>   
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
