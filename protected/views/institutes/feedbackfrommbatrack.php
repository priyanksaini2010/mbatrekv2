
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
                <li class="active"><a href="javascript:void(0);">MBAtrek Feedback</a></li>
            </ul>
        </div>  
        <div class="row">
            <?php echo $this->renderPartial("left_menu",array('data'=>$data));?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar mbatrek_to_student">
                    <div class="module_wrpper">
                        <div class="module_progess">
                            <div class="new_heading">
                                <h3>Feedback Given By MBAtrek To Students </h3>
                                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                    'id'=>'filter-form-attendance',
                                    'enableAjaxValidation'=>false,
                                    'method' =>'GET',
                                    'htmlOptions'=>array(
                                        'class'=>'form-horizontal',


                                    ))); ?>
                                <select name="module_id" class="module_select" id="filter-module">
                                        <option value="">Module</option>
                                        <?php foreach ($data['modules'] as $module){?>
                                        <option <?php if ($data['module_id'] == $module->id) {?>selected="selected"<?php }?> value="<?php echo $module->id;?>"><?php echo $module->name;?></option>
                                        <?php }?>
                                        
                                    </select>
                                 <?php $this->endWidget(); ?>
                            </div>
                            <div class="baches_container">
                                <ul class="list-unstyled">
                                    <?php foreach ($data['sections'] as $section) {?>
                                    <li>
                                        <a href="<?php echo Yii::app()->createUrl("institutes/feedbackfrommbatrack",array("batch_id"=>$_REQUEST['batch_id'],'section_id'=>$section->id));?>">
                                            <div class="baches_repeat">
                                                <h3><?php echo $section->section_name;?></h3>
                                               
                                            </div>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <div class="session_container">
                                <div class="session_table">
                                    <table class="col-md-12  col-sm-12 col-xs-12 table-bordered table-striped table-condensed cf">
                                        <thead class="cf">
                                            <tr>
                                                <th class="first_th">S.No.</th>
                                                <th class="agenda_th" >Module</th>
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
                                                                <td class="first_td" >
                                                                    <span class="level_span">1</span>
                                                                    <span class="level_info">Not Valuable at all</span>
                                                                </td>
                                                                <td>
                                                                    <span class="level_span">2</span>
                                                                    <span class="level_info">Little Valuable</span>
                                                                </td>
                                                                <td>
                                                                    <span class="level_span">3</span>
                                                                    <span class="level_info">Moderately Valuable</span>
                                                                </td>
                                                                <td>
                                                                    <span class="level_span">4</span>
                                                                    <span class="level_info">Highly Valuable</span>
                                                                </td>
                                                                <td>
                                                                    <span class="level_span">5</span>
                                                                    <span class="level_info">Very Highly Valuable</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <?php 
                                            $perTotal = 0;
                                            $perConsolidated = 0;
                                            $counter = 1;
					    if (isset($_REQUEST['section_id'])) {
$students_in_section = CHtml::listData(InstituteBatchSectionStudent::model()->findAllByAttributes(array("institute_batch_section_id"=>$_REQUEST['section_id'])), "id", "student_id");
					    }
                                            foreach ($data['modules'] as $count=>$module){
                                                if ($data['module_id'] == "" || $data['module_id'] == $module->id) {
                                                    
                                            $criteria = new CDbCriteria;
                                            $students = array();
                                            $batchStudents = Students::model()->findAllByAttributes(array("institute_batch_id"=>$batch_id));
                                            foreach ($batchStudents as $batchStudent) {
				if (isset($_REQUEST['section_id']) && in_array($batchStudent->id, $students_in_section)) {  
						    $students[] = $batchStudent->id; 
						} else {
						   
						}
                                                if (!isset($_REQUEST['section_id'])) {
						     $students[] = $batchStudent->id; 
						     
						}
						
                                            }
                                            $criteria->addCondition("module_id= ".$module->id);
                                            $criteria->addInCondition("student_id",$students);
                                            $rating = ModuleStudentRating::model()->findAll($criteria);
                                            $to =0;
                                            $given = 0;
                                            foreach ($rating as $rats){
                                               $to = $to + 10;
                                               $given = $given + $rats->rating;
                                            }
                                            if ($to == 0) {
                                                $per = 0;
                                            } else {
                                                $per = $given / $to * 100;
                                            }
                                            $perTotal = $perTotal+$to;
                                            $perConsolidated = $perConsolidated+$given;
					    if ($per != 0) {
                                                ?>
                                            <tr>
                                                <td class="first_td"><?php echo $counter;$counter++;?></td>
                                                <td><?php echo $module->name;?></td>
                                                <td>
                                                    <div class="progress_div">
                                                        <div class="progress_status">
                                                            <?php if ($per >= 80)  {?>
                                                            <div class="progress high">
                                                            <?php } else if($per > 40 && $per < 80){?>
                                                            <div class="progress medium">
                                                            <?php } else {?>
                                                            <div class="progress low">
                                                            <?php }?>
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $per;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per;?>%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
					    <?php }}}?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="progress_average">
                                    <div class="session_table second_session">
                                        <table class="col-md-12  col-sm-12 col-xs-12 table-bordered">
                                            <thead class="cf">
                                                <tr>
                                                    <th class="first_th"></th>
                                                    <th class="agenda_th"></th>
                                                    <th></th>
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
                                                                    <td class="first_td" >
                                                                        <span class="level_span">1</span>
                                                                        <span class="level_info">Not Valuable at all</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="level_span">2</span>
                                                                        <span class="level_info">Little Valuable</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="level_span">3</span>
                                                                        <span class="level_info">Moderately Valuable</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="level_span">4</span>
                                                                        <span class="level_info">Highly Valuable</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="level_span">5</span>
                                                                        <span class="level_info">Very Highly Valuable</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tower_prgess">
                                        <div class="tower_img">
                                            <?php $perAll = 0;
                                                if ($perTotal!=0) {
                                                    $perAll  = $perConsolidated / $perTotal * 100;
                                                }
                                            ?>
                                            <span>- Average of Module</span>
                                            <div class="progress_div">
                                                <div class="progress_status">
                                                   <?php if ($perAll >= 80)  {?>
                                                            <div class="progress high">
                                                            <?php } else if($perAll > 40 && $perAll < 80){?>
                                                            <div class="progress medium">
                                                            <?php } else {?>
                                                            <div class="progress low">
                                                            <?php }?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $perAll;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perAll;?>%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tower_img">
                                            <span>- YTD of average of Modules completed</span>
                                            <div class="progress_div">
                                                <div class="progress_status">
                                                    <?php if ($data['per'] >= 80)  {?>
                                                            <div class="progress high">
                                                            <?php } else if($data['per'] > 40 && $data['per'] < 80){?>
                                                            <div class="progress medium">
                                                            <?php } else {?>
                                                            <div class="progress low">
                                                            <?php }?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $data['per'] ;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $data['per'] ;?>%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
