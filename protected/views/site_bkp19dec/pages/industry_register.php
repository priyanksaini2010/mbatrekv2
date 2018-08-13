<?php echo $this->renderPartial('pages/_banner_area'); ?>
<?php $this->setPageTitle('Industry Register'); 
?>
<section class="login_container">
    <div class="container">
        <div class="login_outer">
            <div class="login_login signup">
                <img src="images/footer_logo.png"/>
                <div class="logo_line"></div>
            </div>
            <div class="sign_up_div industry_input">
                <h2>Industry & Institute</br> Registration</h2>
                
                    
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'industry-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                            'action' => Yii::app()->createUrl('site/register')
                            
                ))); ?>    
                    <div class="phAnimate">
                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'email',$data); ?>
                        <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate">
                        <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'password', $data); ?>
                        <?php echo $form->passwordField($model, 'password', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate">
                        <?php if($model->fname != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'fname', $data); ?>
                        <?php echo $form->textField($model, 'fname', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate">
                        <?php if($model->lname != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'lname', $data); ?>
                        <?php echo $form->textField($model, 'lname', array('class' => "input_field")); ?>
                        
                    </div>
                    <div class="phAnimate">
                        <?php if($model->institute_industry_name != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'institute_industry_name',$data); ?>
                        <?php echo $form->textField($model, 'institute_industry_name', array('class' => "input_field")); ?>
                        
                    </div>
                    
                    <div class="mandtory_filed">
                        <p><em>*</em> Mandatory Fields</p>
                    </div>
                    <div class="btton_field">
                        <button type="submit" class="yello_btn raised ripple" >REGISTER</button>
                    </div>
                <?php $this->endWidget();?>
            </div>
        </div>
    </div>	
</section>

<style>
    .required{
        color : red;
    }
</style>