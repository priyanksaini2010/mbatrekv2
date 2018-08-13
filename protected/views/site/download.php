<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Download eBrouchers'); ?>

<section class="login_container">
    <div class="container">
        <div class="login_outer">
            <div class="login_login signup">
                <img src="<?php echo Yii::app()->baseUrl;?>/images/footer_logo.png"/>
                <div class="logo_line"></div>
            </div>
            <div class="sign_up_div industry_input">
                <h2>Download Brochure </br> Information</h2>
                <p class="form_text">Thank you for interest in the MBAtrek. Fill Out the form below and you will receive the brochure via Email.</p>
                    <?php
                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id' => 'ebroucher-download-form-form',
                        'enableAjaxValidation' => false, 'htmlOptions' => array('class' => 'form-horizontal')
                    ));
                    ?>
                    <div class="phAnimate">
                        <?php echo $form->labelEx($model, 'email', array('for' => "firstname")); ?>
                        <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate">

                        <?php echo $form->labelEx($model, 'first_name', array('for' => "firstname")); ?>
                        <?php echo $form->textField($model, 'first_name', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate">
                        <?php echo $form->labelEx($model, 'last_name', array('for' => "firstname")); ?>
                        <?php echo $form->textField($model, 'last_name', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate last_filed">
                        <?php echo $form->labelEx($model, 'phone_number', array('for' => "firstname")); ?>
                        <?php echo $form->textField($model, 'phone_number', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="mandtory_filed">
                        <p><em>*</em> Mandatory Fields</p>
                    </div>
                    <div class="btton_field">
                        <button type="submit" class="yello_btn raised ripple" >Download</button>
                    </div>
                    <?php $this->endWidget(); ?>
            </div>
        </div>

    </div>	
<!--    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <h3>Error !</h3>
            <div class="error_wrap">
                <div class="error_container">
                    <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please Enter Your Name !</p>
                </div>
                 <button class="md-close">OK</button> 
                <div class="main_register"><div class="site_btn"><a class="raised ripple md-close" href="javascript:void(0);">OK</a></div></div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>-->
</section><style>
    .required{
        color : red;
    }
</style>
<script>
    $(doument).ready(function() {
        alert("here");

    })


</script>
