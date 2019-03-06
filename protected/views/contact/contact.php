<?php $this->setPageTitle('Contact Us'); ?>
<div class="contact_container_page">
    <div class="container">
        <div class="maine_contact_heading">
            <h2>Let&rsquo;s Connect</h2>
            <h3>Looking forward to transforming you</h3>
            <?php
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'contact-form',
                'enableAjaxValidation' => false,
                'action' => Yii::app()->createUrl('contact/create'),
                'htmlOptions' => array(
                    'class' => 'form-horizontal',
            )));
            ?> 
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_info_div margin-0">
                                <div class="phAnimate">
                                    <label for="lastname">First Name <em>*</em></label> 
                                    <?php
                                    if ($model->first_name != '') {
                                        $data = array('for' => "first_name", 'class' => 'active');
                                    } else {
                                        $data = array('for' => "first_name");
                                    };
                                    ?>
<?php echo $form->labelEx($model, 'first_name', $data); ?>
<?php echo $form->textField($model, 'first_name', array('class' => "input_field")); ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="contact_info_div margin-0">
                                <div class="phAnimate">
                                    <!--<label for="lastname">Last Name <em>*</em></label>--> 
                                    <?php
                                    if ($model->last_name != '') {
                                        $data = array('for' => "last_name", 'class' => 'active');
                                    } else {
                                        $data = array('for' => "last_name");
                                    };
                                    ?>
<?php echo $form->labelEx($model, 'last_name', $data); ?>
<?php echo $form->textField($model, 'last_name', array('class' => "input_field")); ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="contact_info_div">
                                <div class="phAnimate">
                                    <!--<label for="lastname">Email <em>*</em></label>--> 
                                    <?php
                                    if ($model->email != '') {
                                        $data = array('for' => "email", 'class' => 'active');
                                    } else {
                                        $data = array('for' => "email");
                                    };
                                    ?>
<?php echo $form->labelEx($model, 'email', $data); ?>
<?php echo $form->textField($model, 'email', array('class' => "input_field")); ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="contact_info_div">
                                <div class="phAnimate">
                                    <?php
                                    if ($model->mobile_no != '') {
                                        $data = array('for' => "mobile_no", 'class' => 'active');
                                    } else {
                                        $data = array('for' => "mobile_no");
                                    };
                                    ?>
<?php echo $form->labelEx($model, 'mobile_no', $data); ?>
<?php echo $form->textField($model, 'mobile_no', array('class' => "input_field")); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="are_yu"><label>Are You?</label>
                                <ul>
                                    <li>
                                        <input type="radio"  name="Contact[are_you]" value="1"  id="radio2" class="css-checkbox radio-comp-inst" checked="checked"/>
                                        <label for="radio2" class="css-label radGroup1">Company Official</label>                                                    
                                    </li>
                                    <li>
                                        <input type="radio" name="Contact[are_you]" value="2"  id="radio3" class="css-checkbox radio-comp-inst" />
                                        <label for="radio3" class="css-label radGroup1">Institute Rep</label>
                                    </li>
                                    <li>
                                        <input type="radio"  name="Contact[are_you]" value="3"  id="radio31" class="css-checkbox radio-comp-inst" />
                                        <label for="radio31" class="css-label radGroup1">College Student</label>
                                    </li>
                                    <li>
                                        <input type="radio"  name="Contact[are_you]" value="4"  id="radio32" class="css-checkbox radio-comp-inst" />
                                        <label for="radio32" class="css-label radGroup1">Young professional</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact_info_div">
                                <div id="company-autofill" class="phAnimate" >
<?php
if ($model->name_of_company_institute != '') {
    $data = array('for' => "name_of_company_institute", 'class' => 'active');
} else {
    $data = array('for' => "name_of_company_institute");
};
?>                                  <label for="name_of_company" class="required active">Name of Company<span class="required">*</span></label>
                                    <select class="input_field select2class" name="Contact[name_of_company_institute]" id="name_of_company">
                                        <option value="">Select an Company</option>
                                        <?php
                                        $autofill = ContactAutofill::model()->findAll();
                                        $tags = array();
                                        foreach ($autofill as $item){?>

                                            <option><?php echo $item->name;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="phAnimate" id="inst-autofill" class="phAnimate" style="display: none">
                                    <label for="name_of_company_institute_" class="required active">Name of Institute<span class="required">*</span></label>
<!--                                    <input class="input_field" name="Contact[name_of_company_institute_1]" id="Contact_name_of_company_institute_1" type="text" maxlength="255" placeholder="" autocomplete="off">-->

                                    <select class="input_field select2class" name="Contact[name_of_company_institute_1]" id="name_of_institute">
                                        <option value="">Select an Institute</option>
                                        <?php
            $autofill = ContactAutofillCompany::model()->findAll();
            $tags = array();
            foreach ($autofill as $item){?>
                <option><?php echo $item->name;?></option>
            <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col-md-12">
                            <div class="contact_info_div">
                                <div class="phAnimate"> 
<?php
if ($model->subject != '') {
    $data = array('for' => "subject", 'class' => 'active');
} else {
    $data = array('for' => "subject");
};
?>
                                    <?php echo $form->labelEx($model, 'subject', $data); ?>
                                    <?php echo $form->textField($model, 'subject', array('class' => "input_field")); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact_info_div">
                                <div class="phAnimate">
<?php
if ($model->your_message != '') {
    $data = array('for' => "your_message", 'class' => 'active');
} else {
    $data = array('for' => "your_message");
};
?>
<?php echo $form->labelEx($model, 'your_message', $data); ?>
<?php echo $form->textArea($model, 'your_message', array('class' => "input_field")); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="google_information">
                        <div class="gogle_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464.7087345811168!2d77.10559451870735!3d28.43369177688048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1f55b2edfb19%3A0x9939c497d99d1cd2!2sMBAtrek+Pvt.+Ltd!5e0!3m2!1sen!2sin!4v1537617887525" width="332" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="google_map_info">
                            <h3>MBAtrek Private Ltd.</h3>
                            <label>414 (4th Floor), Suncity Business Tower, </label> <label>Golf Course Road, Sector -54, </label> <label>Gurugram &ndash; 122003, INDIA</label> <label>CIN: U74999HR2016PTC057728</label><label>Email: <a href="mailto:contact@mbatrek.com">contact@mbatrek.com</a></label>
							<label>Phone: <a href="https://wa.me/919821948334?text=Can%20you%20help%20with%20MBAtrek's%20career%20development%20services%3F%F0%9F%98%81
" target="_blank">+91 9821948334</a> , <a href="https://wa.me/919821948335?text=Can%20you%20help%20with%20MBAtrek's%20career%20development%20services%3F%F0%9F%98%81" target="_blank">+91 9821948335</a> </label>
							</div>
                    </div>
                </div>
            </div>
            <?php if (CCaptcha::checkRequirements()): ?>
                <div class="catcha_Code">
						<?php echo $form->labelEx($model, 'verifyCode'); ?>
										<div>
						<?php $this->widget('CCaptcha'); ?>
						<?php echo $form->textField($model, 'verifyCode'); ?>
										</div>
										<div class="hint">Please enter the characters as they are shown in the image above.
											<br/>Characters are not case-sensitive.</div>
						<?php echo $form->error($model, 'verifyCode'); ?>
                </div>
<?php endif; ?>
            <div class="capcha_div"><img src="images/capcha.png" alt="" />
                <div class="submit_form_btn" ><button type="submit">Submit</button></div>
            </div>
<?php $this->endWidget(); ?>
        </div>
    </div>
</div><style>
    .required{
        color : red;
    }
    .select2-container{
        height: 40px !important;
        width: 555px !important;

    }
</style>
<script>

</script>