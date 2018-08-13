<?php $this->setPageTitle('Industry - Project With Faculty'); ?>
<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<section class="industrial_portal">
    <div class="container">
	<div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('industry/portal')?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('industry/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">MBAtrek Feedback</a></li>
            </ul>
        </div>  
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <div class="left_sidebar">
                     <?php echo $this->renderPartial('traits');?>
                    <div class="module_div">
                        <div class="left_heading">
                            <h2>MBAtrek Module</h2>
                        </div>
                         <?php echo $this->renderPartial('modules_left_banner', array('data' => $data)); ?>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar">
                    <div class="main_heading">
                        <h4>Projects</h4>
                        <h3 class="text_right">Industry Projects With Faculty</h3>
                    </div>
                    <p class="jobs_text">Consulting Assignments which we are willing to assign to B - Schools.</p>
                    <div class="session_table industry">
                        <table class="col-md-12 table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                                <tr>
                                    <th class="first_th">S.No.</th>
                                    <th class="assignment_titlt">Assignment Title</th>
                                    <th>Deliverable </br>Requirements</th>
                                    <th>Desired Experience & </br>Exposure of Faculty</th>
                                    <th class="budget_div">Budget</th>
                                    <th class="time_schedult">Time Schedule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($data['consulting_projectss'])) {?>
                                <?php foreach($data['consulting_projectss'] as $key => $consulting_projects) {?>
                                <tr>
                                    <td class="first_td"  class="heading_text"><?php echo $key+1;?>.</td>
                                    <td><?php echo $consulting_projects->assignment_title;?> </td>
                                    <td><?php echo $consulting_projects->deliverable_requirement	;?> </td>
                                    <td><?php echo $consulting_projects->desired_experience;?> </td>
                                    <td><?php echo $consulting_projects->budget;?> </td>
                                    <td><?php echo $consulting_projects->time_scedule;?> </td>
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $this->renderPartial('industry_analysis'); ?>
<?php echo $this->renderPartial('industry_footer'); ?>
<style>
    .required{
        color : red;
    }
</style>
