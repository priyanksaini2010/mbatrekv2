<?php
switch ($data['type']){
    case 1:
        $text =  "Faculty";
    break;
    case 2:
        $text =  "Placement";
    break;
    case 3:
        $text =  "Managment";
    break;
    case 4:
        $text =  "Live Project";
    break;
    case 5:
    break;
}
$interaction = $data['interactions'];
?>
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
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Institute</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/talktous')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/interactionlanding',array('type'=>$data['type'],'module_id'=>$data['interactions']->module->id));?>"><?php echo $data['interactions']->module->name;?></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="<?php echo Yii::app()->createUrl('institutes/interactionlanding',array('type'=>$data['type']));?>">Interaction With <?php echo ucfirst($text);?></a></li>
            </ul>
        </div> 
        <div class="row">
           
                <?php echo $this->renderPartial("left_menu",array('data'=>$data));?>
           
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar talk_placement">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="date_details">
                                <table class="col-md-12 col-sm-12 col-xs-12 table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="heading_text">Date:</td>
                                            <td><?php echo date("d.m.Y", strtotime($interaction->date_time));?></td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Time:</td>
                                            <td><?php echo date("h:i A", strtotime($interaction->date_time));?></td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Topic:</td>
                                            <td><?php echo $interaction->topic;?></td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Stream:</td>
                                            <td><?php echo $interaction->stream;?></td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Venue:</td>
                                            <td><?php echo $interaction->venue;?></td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Duration:</td>
                                            <td><?php echo $interaction->duration;?></td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Agenda:</td>
                                            <td><?php echo $interaction->agenda;?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="one_meeting">
                                <div class="meeting_heading">
                                    <h2>Minutes Of Meeting</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="label_meeting">
                                            <label>Attendance:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="input_meeting">
                                            <input type="text" value="<?php echo $interaction->attendance;?>"/>
                                        </div>
                                    </div>
                                </div> 
                                <div class="name_metng">
                                    <label>Name of <?php echo $data['type'] == 1? "Faculty":"Members"?> Attended:: </label>
                                    <table class="col-md-12 col-sm-12 col-xs-12 table-bordered">
                                        <thead>
                                            <tr><th class="serial_number">S.No</th>
                                                <th>Name Of <?php echo $data['type'] == 1? "Faculty":"Members"?> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($interaction->instituteInteractionWithPlacemnetAttendances as $attendaceKey=>$attendance){?>
                                            <tr>
                                                <td class="heading_text"><?php echo $attendaceKey+1;?></td>
                                                <td>
                                                    <?php echo $attendance->member_name;?>
                                                </td>

                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <div class="field_container">
                                        <div class="row">
                                            <div class="col-md-6 sm-6 xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="label_meeting">
                                                            <label>Open Time:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-8 col-xs-12">
                                                        <div class="input_meeting">
                                                            <input type="text" value="<?php echo date("h:i A", strtotime($interaction->open_time));?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 sm-6 xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="label_meeting">
                                                            <label>Open Time:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-8 col-xs-12">
                                                        <div class="input_meeting">
                                                            <input type="text" value="<?php echo date("h:i A", strtotime($interaction->close_time));?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 sm-12 xs-12 text_ara_mtng">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="label_meeting">
                                                            <label>Summary:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                                        <div class="input_meeting">
                                                            <textarea><?php echo $interaction->summary;?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="agreed_plan">
                                        <div class="meeting_heading">
                                            <h2>Agreed Plan Of Action</h2>
                                        </div>
                                        <table class="col-md-12 table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="serial_number">S.No</th>
                                                    <th class="plan_action">Plan Of Action</th>
                                                    <th>Person Responsible</th>
                                                    <th>Due Date</th>
                                                    <th>Evidence For Competition</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($interaction->instituteInteractionWithPlacemnetPlanOfActions as $attendaceKey=>$attendance){?>
                                                <tr>
                                                    <td class="heading_text"><?php echo $attendaceKey+1;?></td>
                                                    <td><?php echo $attendance->plan_of_action;?></td>
                                                    <td><?php echo $attendance->person_responsible;?></td>
                                                    <td><?php echo date("d/m/Y", strtotime($attendance->due_date));?></td>
                                                    <td class="icon_doc"><a href="<?php echo Yii::app()->createUrl('site/downloadfiles', array('path' =>"/".$attendance->evidence_of_completion,'name'=>$attendance->evidence_of_completion)) ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/doc.png"/></a></td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="data_intraction">
                                        
                                        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                            'id'=>'filter-form-interationlanding-pas',
                                            'enableAjaxValidation'=>false,
                                            'method' =>'GET',
                                            'htmlOptions'=>array(
                                                'class'=>'form-horizontal',


                                        ))); ?>
										<label>Past Interaction</label>
                                        <select name="id" id="id-past">
                                            
											<option value="">View Past Interation</option>
                                            <?php foreach ($data['allinteractions']  as $key=>$value){?>
                                            <option <?php if ($data['id'] == $value->id) {?>selected="selected"<?php }?>value="<?php echo $value->id;?>"><?php echo $value->agenda;?></option>
                                            <?php }?>
										</select>
                                        <input type="hidden" value="<?php echo $data['type'];?>" name="type"/>
                                        <?php $this->endWidget(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
