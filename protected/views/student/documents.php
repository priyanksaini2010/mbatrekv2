<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 

<section class="industrial_portal student_feedback">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">My Documents</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
		<?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <!-- <div class="main_heading edit_hdng">
                        <h4>Feedback</h4>
                        <h3>Student Feedback</h3> 
                </div> -->
                <div class="right_sidebar student_remarks_div">
                    <div class="mudle_field remarks_student">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="imnput_module">
				    <?php
				    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
					'id' => 'filter-form-attendance',
					'enableAjaxValidation' => false,
					'method' => 'GET',
					'htmlOptions' => array(
					    'class' => 'form-horizontal',
				    )));
				    ?>
				    
				    <?php $this->endWidget(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module_progess">
			<div class="session_table">
			    <table class="col-md-12 table-bordered">
				<thead class="cf">
				    <tr>
					<th class="agenda_th">Session</th>
					<th class="feedback_th">Task Assigned</th>
					<th class="feedback_th">Link Of Assignment</th>
					<th class="feedback_th">Your Document</th>
					
				    </tr>
				</thead>
				<tbody>
				    
<?php
foreach ($data['docs'] as $k => $session) {?>

    <tr class="already_given">
	<td><?php echo $session->session_name; ?></td>
	<td><?php echo $session->task_assigned; ?></td>
	<td><a href="<?php echo $session->link_of_assignment; ?>" style="color:black;"><?php echo $session->link_of_assignment; ?></a></td>
	<td>
	    <?php
	    $filename = getcwd()."/assets/eBrouchers/".$session->your_document;
	    //pr($filename);
	     if(file_exists($filename)) {
	   ?>
	    <a style="color: black;" href="<?php echo Yii::app()->createUrl('site/downloadfiles', array('path' =>  "/assets/eBrouchers/".$session->your_document,'name'=>$session->your_document)) ?>"><span class="glyphicon glyphicon-download"></span></a>
	    <?php } else {?>
	     <a style="color: black; cursor: pointer;" onclick="$('#myModalNoPlan').modal('show')" href-="javascript:void('0')"><span class="glyphicon glyphicon-download"></span></a>
	    <?php }?>
	    
	</td>
	
    </tr>

<?php }?>

				</tbody>
			    </table>
			</div>
		    </div>
                </div>
            </div>
	    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_pegination">
                         <ul class="list-unstyled list-inline">
                            <li><span><?php // echo "Page ".($pages->currentPage+1)." of " .$pages->pages;?></span></li>
                         </ul>
                        <?php $this->widget('CLinkPager', array(
                            "header" =>"",
                            'pages' => $pages,
                            'firstPageLabel'     => 'First',
                            'nextPageLabel'     => 'Next',
                            'lastPageLabel'     => 'Last',
                            'prevPageLabel'     => 'Previous',
                            'selectedPageCssClass' => 'active',
                            'htmlOptions' =>array(
                                "class" => "list-unstyled list-inline",
                            )
                        )) ?>
                    </div>
                </div>
        </div>
    </div>
</section>