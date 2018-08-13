<?php $this->setPageTitle('Hanbook');

$model = new HandbookDownload();

?>  
<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Handbook</a></li>
    </ul>
</div>
<section class="bielf_container">
    <div class="container">
        <div class="main_heading blog_heading">
                <h4>Hanbook</h4>
				<h3>MBAtrek Hanbook</h3>
        </div> 
        <div class="hand_book">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="hand_book_details">
                                <div class="defination_block">
                                    <h3>Terms & Definations</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                                <div class="defination_block">
                                    <h3>Cases & Example</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 padding_0">
                            <div class="hand_book_details">
                                <img src="images/handbook_img.png" class="img-responsive" >
                            </div>
                        </div>
                    </div>
                    <div class="defination_block">
                        <h3>Practical Applicability </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="defination_block">
                        <h3>Handy Conversation</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="defination_block">
                        <h3>Tips & Tricks</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div> 
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'handbook-form',
                        'enableAjaxValidation'=>false,
                       'action' => Yii::app()->createUrl('handbookDownload/create'),
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                            
                            
                    ))); ?>
                    <div class="form_handbook">
                        <h2>Complete the form to download the PDF</h2>
                        <div class="form_filed_hand">
                            <div class="phAnimate">
                                <?php if($model->first_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                <?php echo $form->labelEx($model, 'first_name', $data); ?>
                                <?php echo $form->textField($model, 'first_name', array('class' => "input_field")); ?>
                            </div>
                            <div class="phAnimate">
                                <?php if($model->last_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                <?php echo $form->labelEx($model, 'last_name', $data); ?>
                                <?php echo $form->textField($model, 'last_name', array('class' => "input_field")); ?>
                            </div>
                            <div class="phAnimate">
                                <?php if($model->email_address != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                <?php echo $form->labelEx($model, 'email_address', $data); ?>
                                <?php echo $form->textField($model, 'email_address', array('class' => "input_field")); ?>
                            </div>
                            <div class="phAnimate">
                                <?php if($model->institute_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                <?php echo $form->labelEx($model, 'institute_name', $data); ?>
                                <?php echo $form->textField($model, 'institute_name', array('class' => "input_field")); ?>
                            </div>
                            <div class="phAnimate">
                                <?php if($model->comapny_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                                <?php echo $form->labelEx($model, 'comapny_name', $data); ?>
                                <?php echo $form->textField($model, 'comapny_name', array('class' => "input_field")); ?>
                            </div>
                            <div class="site_btn"><input class="raised ripple" type="submit" name="Submit" value="submit"/> </div>
                        </div>
                    </div>
                    <?php $this->endWidget();?>
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