<section class="banner_area who_we_are">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<?php $this->setPageTitle('Institute Register'); ?>
<section class="login_container">
    <div class="container">
        <div class="login_outer">
            <div class="login_login signup">
                <img src="<?php echo Yii::app()->baseUrl;?>/images/footer_logo.png"/>
                <div class="logo_line"></div>
            </div>
            <div class="sign_up_div industry_input">
                <h2>Industry & Institute</br> Registeration</h2>
                <form class="form-horizontal" action='' method="POST">
                    <div class="phAnimate">
                        <label for="firstname">Email <em>*</em></label>
                        <input type="text" class="input_field" id="Email">
                    </div>
                    <div class="phAnimate">
                        <label for="lastname">First Name <em>*</em></label>
                        <input type="text" class="input_field" id="Password">
                    </div>
                    <div class="phAnimate">
                        <label for="lastname">Last Name <em>*</em></label>
                        <input type="text" class="input_field" id="Password">
                    </div>
                    <div class="phAnimate">
                        <label for="lastname">Name of Industry / Institute <em>*</em></label>
                        <input type="text" class="input_field" id="Password">
                    </div>
                    <div class="phAnimate last_filed">
                        <label for="lastname">Mobile No. (optional) </label>
                        <input type="text" class="input_field" id="Password">
                    </div>
                    <div class="mandtory_filed">
                        <p><em>*</em> Mandatory Fields</p>
                    </div>
                    <div class="btton_field">
                        <button type="submit" class="yello_btn raised ripple" >REGISTER</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>	
</section>