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
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal')?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">MBAtrek Talk to Us</a></li>
            </ul>
        </div>
        <div class="row">
            <?php echo $this->renderPartial("left_menu",array('data'=>$data));?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar ">
                    <div class="new_heading">
                        <h3>Interactions With <?php echo ucfirst($text);?></h3>
                    </div>
                    <div class="mudle_field">
                        <div class="row">
                        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                            'id'=>'filter-form-interationlanding',
                            'enableAjaxValidation'=>false,
                            'method' =>'GET',
                            'htmlOptions'=>array(
                                'class'=>'form-horizontal',


                        ))); ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="imnput_module">
                                    <select name="module_id" id="filter-module-interationlanding">
                                        <option value="">Module</option>
                                        <?php foreach ($data['modules'] as $module){?>
                                        <option <?php if ($data['module_id'] == $module->id) {?>selected="selected"<?php }?> value="<?php echo $module->id;?>"><?php echo $module->name;?></option>
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
                                        <th class="agenda_th" >Agenda</th>
                                        <th>Module</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['interactions'] as $sessionKey=>$sessions) {?>
                                    <tr>
                                        <td class="first_td"><?php echo $sessionKey+1;?></td>
                                        <td><?php echo $sessions->agenda;?></td>
                                        <td>
                                           <?php echo $sessions->module->name;?>
                                        </td>
                                        <td>
                                            <a style="color: black !important;" href="<?php echo Yii::app()->createUrl('institutes/interaction',array('id'=>$sessions->id,'type'=>$data['type']));?>">
                                                View Details
                                            </a>
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
</section>