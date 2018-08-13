<?php
$all = getCities();
    
?>
<section class="banner_area who_we_are">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<?php $this->setPageTitle('Student6 Register'); ?>
<section class="login_container">
    <div class="container">
        <div class="login_outer">
            <div class="login_login signup">
                <div class="next_container">
					<img src="<?php echo Yii::app()->baseUrl;?>/images/mtrek_logo.png"/>
					<div class="iner_tech_logo">
						<h2>Mtrek <em>TM</em></h2>
						<span>(MTech/MS students)</span>
						<p> MS/Mtechs with management skills </p>
					</div>
				</div>
                <div class="logo_line"></div>
            </div>
            <div class="sign_up_div">
                <h2>MS Student </br> REGISTER & Verify</h2>
                <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'mba-student-form',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                            'action' => Yii::app()->createUrl('site/register')
                            
                    ))); ?>  
                
                    <div class="phAnimate">
                        <?php if($model->email != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'email', $data); ?>
                        <?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                      
                    </div>
                    <div class="phAnimate">
                        <?php if($model->password != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'password', $data); ?>
                        <?php echo $form->passwordField($model, 'password', array('class' => "input_field")); ?>
                      
                    </div>
		<div class="phAnimate">
                                                <label class="required" for="firstname">Confirm Password <span class="required">*</span></label>                        <input type="password" maxlength="255" id="Users_cpassword" name="Users[cpassword]" class="input_field" placeholder="">                        
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
                    <div class="phAnimate calender">
                        <span>D.O.B<em>*</em></span>
                        <label for="lastname">D.O.B <em>*</em></label>
                        <div id="example10"></div>
                    </div>
                    <div class="phAnimate">
                        <?php if($model->institute_email_address != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                        <?php echo $form->labelEx($model, 'institute_email_address',$data); ?>
                        <?php echo $form->textField($model, 'institute_email_address', array('class' => "input_field")); ?>
                       
                    </div>
                    <div class="optional_div">
                        <div class="main_option">
                            <h3>Optional</h3>
                        </div>
                        <div class="phAnimate">
                            <?php if($model->institute != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname",'class' => 'active');};?>
                            <?php echo $form->labelEx($model, 'institute', $data); ?>
                          
                            <?php echo $form->dropDownList($model, 'institute', CHtml::listData(Institutes::model()->findAllByAttributes(array("id"=>0)), "id", "name"),array('empty' => "Select Institute","class" => "input_field","id"=>"institute_id")); ?>
                            
                        </div>
                        <div class="phAnimate">
                            <?php if($model->city != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname");};?>
                            <?php echo $form->labelEx($model, 'city', $data); ?>
                            <?php // echo $form->textField($model, 'city', array('class' => "input_field")); ?>
                            <?php
                            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                //'model'=>$model,
                                //'attribute'=>'name',
                                'id' => 'Users_city',
                                'name' => 'Users[city]',
                                'source' => $all,
                                'options' => array(
                                    'delay' => 300,
                                    'minLength' => 1,
                                    'showAnim' => 'fold',
                                    'change' => "js:function(event,ui)
                                                    {
                                                    if (ui.item==null)
                                                        {
                                                        $('#Users_city').val('');
                                                        $('#Users_city').focus();
                                                         $('#myModalCity').modal('show')
                                                        }
                                                    }"
                                ),
                                'htmlOptions' => array(
                                    'size' => '40',
                                    'class' => "input_field"
                                ),
                            ));
                            ?>
                        </div>
                        <div class="phAnimate">
                            <?php if($model->program != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname",'class' => 'active');};?>
                            <?php echo $form->labelEx($model, 'program', $data); ?>
                            <?php echo $form->dropDownList($model, 'program', array(),array("empty"=>"Select Program",'class' => "input_field")); ?>
                            
                        </div>
                        <div class="phAnimate">
                            <?php if($model->batch != ''){ $data =  array('for' => "firstname",'class' => 'active');}else{$data =  array('for' => "firstname",'class' => 'active');};?>
                            <?php echo $form->labelEx($model, 'batch',$data); ?>
                            <?php echo $form->dropDownList($model, 'batch',array(),array("empty"=>"Select Batch",'class' => "input_field")); ?>
                            
                        </div>
                        <div class="btton_field">
							<div class="site_btn">
								<button type="submit" class="yello_btn raised ripple" >REGISTER </button>
							</div>
                        </div>
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