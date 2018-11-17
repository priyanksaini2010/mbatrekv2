<?php $this->setPageTitle('Talk To Career Advisory');
if(!isset($model)){
    $model = new TalkToAdvisory();
}


?>  
 
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Talk to Our Career Advisor</a></li>
    </ul>
</div>
<section class="bielf_container task_page">
    <div class="container">
        <div class="main_heading talk_advisor">
            <h3>Talk to Our Career Advisor</h3>
        </div> 
        <div class="talk_to_Advisor margin_bottom_45">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel-login">
                    <ul class="list-inline list-unstyled">
                        <li>
                            <a href="javascript:void(0);" class="active" id="login-form-link">New User</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="register-form-link">Already Registered</a>
                        </li>
                    </ul>
                    <div class="panel-body">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                    'id'=>'talk-to-advisory-form',
                                    'enableAjaxValidation'=>false,
                                    'action' => Yii::app()->createUrl('TalkToAdvisory/create'),
                                    'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'action' => Yii::app()->createUrl('talkToAdvisory/create')

                                    )
                            )); ?>
                            <div id="login-form">
                                <div class="heading_Tab">
                                    <h2>Looking for a Career Advice?</h2>
                                    <h3>Write to us your query and we will get back with the best solution</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="phAnimate">
                                        <?php if($model->name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'name', $data); ?>
                                        <?php echo $form->textField($model, 'name', array('class' => "input_field")); ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="phAnimate">
                                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'email', $data); ?>
                                        <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 align_over_txt">
                                    <div class="phAnimate">
                                        <?php if($model->area != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'area', $data); ?>
                                        <?php echo $form->textField($model, 'area', array('class' => "input_field")); ?>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="phAnimate">
                                        <?php if($model->message != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'message', $data); ?>
                                        <?php echo $form->textArea($model, 'message', array('class' => "input_field")); ?>
                                    </div>
                                </div>
                                <?php if (CCaptcha::checkRequirements()): ?>
                                                <div class="row">
                                    <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                                    <div>
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode'); ?>
                                                    </div>
                                                    <div class="hint">Please enter the letters as they are shown in the image above.
                                                        <br/>Letters are not case-sensitive.</div>
                                    <?php echo $form->error($model, 'verifyCode'); ?>
                                                </div>
                                <?php endif; ?>
                                <div class="sibmit_form">
                                    <button class="site_btn raised ripple" type="submit"><a id='talk_subit' href="javascript:void('0');">Submit</a></button>
                                </div>
                            </div>
                            <?php $this->endWidget();?>
                            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                    'id'=>'talk-to-advisory-form-registered',
                                    'enableAjaxValidation'=>false,
                                    'action' => Yii::app()->createUrl('TalkToAdvisory/create'),
                                    'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'action' => Yii::app()->createUrl('talkToAdvisory/create')

                                    )
                            )); ?>
                            <div id="register-form" style="display:none;">
                                <div class="heading_Tab">
                                    <h2>Got Stuck? Have An Issue?</h2>
                                    <h3>Write to us your query and we will get back with the best possible solution</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="phAnimate">
                                        <label for="firstname">Your MBAtrek email id <em>*</em></label>
                                        <input type="text" class="input_field" id="mbatrek_id" name="mbatrek_id">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="phAnimate">
                                        <?php if($model->area != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'area', $data); ?>
                                        <?php echo $form->textField($model, 'area', array('class' => "input_field",'id'=>"area2")); ?>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 align_over_txt">
                                    <div class="phAnimate">
                                        <?php if($model->message != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                        <?php echo $form->labelEx($model, 'message', $data); ?>
                                        <?php echo $form->textArea($model, 'message', array('class' => "input_field","id"=>"message2")); ?>
                                    </div>
                                </div>
                                <?php if (CCaptcha::checkRequirements()): ?>
                                                <div class="row">
                                    <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                                    <div>
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode'); ?>
                                                    </div>
                                                    <div class="hint">Please enter the letters as they are shown in the image above.
                                                        <br/>Letters are not case-sensitive.</div>
                                    <?php echo $form->error($model, 'verifyCode'); ?>
                                                </div>
                                <?php endif; ?>
                                <div class="sibmit_form">
                                    <button class="site_btn raised ripple" type="submit"><a id='talk_submit' href="javascript:void('0');">Post</a></button>
                                </div>
                            </div>
                            <?php $this->endWidget();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .required{
        color : red;
    }
</style>