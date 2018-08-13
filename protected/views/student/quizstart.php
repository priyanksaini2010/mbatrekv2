<section class="banner_area">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   
<section class="industrial_portal">
    <div class="container">
        <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/assignments');?>">Assignments</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/assignments',array('module'=>$data['assigment']->module_id));?>"><?php echo $data['assigment']->module->name;?></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);"><?php echo $data['assigment']->title;?></a></li>
            </ul>
        </div>   
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <?php echo $this->renderPartial("left_menu",array("data"=>$data));?>
            </div>
            
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar case_study">
                    <div class="case_study_details">
                        <div class="question_Case quize_question">
                            <?php foreach ($data['quiz'] as $key=>$value) {?>
                            <div class="question_repeat">
                                <h2><?php echo $key+1;?>. <?php echo $value->question;?>?</h2>
                                <ul class="list-unstyled">
                                    <?php foreach ($value->moduleAssigjmentQuizAnswers as $answers) { ?>
                                            <li>
                                                <div class="readio_btn">
                                                    <input src="<?php echo $value->id;?>" value="<?php echo $answers->id;?>" type="radio" name="radiog_lite_<?php echo $value->id;?>" id="radio1_<?php echo $answers->id;?>" class="css-checkbox quize_question_all" atr="<?php echo $answers->id; ?>"/>
                                                    <label for="radio1_<?php echo $answers->id;?>" class="css-label radGroup1"><?php echo $answers->answer; ?></label>
                                                </div>
                                            </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php }?>
                            <input type="hidden" id="assigment_id" value="<?php echo $data['assigment']->id;?>"/>
                            <div class="submit_case" id="submit-quiz-assigment" style="cursor: pointer;">
                                <div class="site_btn"><a data-toggle="modal" data-target="" class="raised ripple has-ripple" href="">Submit</a></div>
                            </div>
                            <div id="myModal1" class="modal result_pop" data-easein="expandIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h2><?php echo $data['assigment']->title; ?></h2>
                                            <h3>Result</h3>
                                        </div>
                                        <div class="modal-body">
                                            <table class="col-md-12 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><label>Questions Answered</label></td>
                                                        <td><label id="total_answered">20</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Correct</label></td>
                                                        <td><label id="total_correct">20</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Marks</label></td>
                                                        <td><label id="score">20</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label>Total Marks</label></td>
                                                        <td><label id="total_score">20</label></td>
                                                    </tr>
<!--                                                    <tr>
                                                        <td><label>Suggestions</label></td>
                                                        <td><label>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer magna ante, tincidunt n </label></td>
                                                    </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md-overlay"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>