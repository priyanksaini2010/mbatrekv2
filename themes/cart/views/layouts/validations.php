<script>
    
    <?php if (isset($this->errors) && count($this->errors) > 0) { ?>
            <?php foreach($this->errors as $key=>$error){?>
                <?php if($key == "emailexist"){?>
           $('#myModal35').modal('show');
        <?php }else {?>
            validationMethod("error","<?php echo $error;?>")
        <?php }?>
            <?php }?>
<?php } ?>
    <?php
    $flash = Yii::app()->user->getFlashes();
    $resetdone = isset($flash['resetdone'])?$flash['resetdone']:"";
    if(isset($resetdone) && $resetdone == 1){?>
    validationMethod("thanks","Your password has been reset successfully. Please login with your new password")
    <?php }?>
    <?php if(isset($_REQUEST['thankprofile'])){?>
    validationMethod("thanks","Your profile has been updated successfully.")
    <?php }?>
    <?php
    $flash = Yii::app()->user->getFlashes();
    $thankcp = isset($flash['thankcp'])?$flash['thankcp']:"";
    if(isset($thankcp) && $thankcp ==1){?>
    validationMethod("thanks","Your password has been updated successfully.")
    <?php }?>
    <?php if(isset($_REQUEST['thankreg'])){?>
	 //validationMethod("thanks","Thanks for signup with us, please check your email to verify your account.")
    $('#myModal40').modal('show');
    <?php }?>
    <?php if(isset($_REQUEST['thankforin'])){?>
	 validationMethod("error","Please use MBAtrek registered email address.")
    <?php }?>
    <?php if(isset($_REQUEST['thankfor'])){?>
	 validationMethod("thanks","Please check your inbox for password recovery.")
    <?php }?>
    <?php if(isset($_REQUEST['underconst'])){?>
	 validationMethod("error","This page is under construction.")
    <?php }?>
    <?php if(isset($_REQUEST['thankc'])){?>
	 validationMethodThanks("thanks","Thank You for reaching out to us! We will get back to you soon.")
    <?php }?>
    <?php if(isset($_REQUEST['thankscampus'])){?>
	 specialValidationMethod("thanks","no-message-from-here")
    <?php }?>
    <?php if(isset($_REQUEST['thanksinterview'])){?>
	 specialValidationMethodInterview("thanks","no-message-from-here")
    <?php }?>
    <?php if(isset($_REQUEST['thanksindustry'])){?>
	 specialValidationMethodIndustry("thanks","no-message-from-here")
    <?php }?>
        <?php if(isset($_REQUEST['thanksverify'])){?>
	 // validationMethod("congrats","Thanks for registering with us. Your account has been verified now.")
    $('#myModal50').modal('show');
    <?php }?>
    <?php if(isset($_REQUEST['thanmscart'])){
        $type = ""
        
        ?>
	 validationMethod("thanks","Thanks for your feedback, we will get in touch with you soon.")
    <?php }?>
        $(document).ready(function(){
            $("#img1").click(function(){
                $('#myModalimage1').modal('show');
            })
            $("#img2").click(function(){
                $('#myModalimage2').modal('show');
            })
            $("#img3").click(function(){
                $('#myModalimage3').modal('show');
            })
            $("#login-form-submit").click(function(){
                $.ajax({
                    "type" : "post",
                    url : "<?php echo Yii::app()->createUrl("cart/loginandapply")?>",
                    data : {
                        "username" : $("#LoginForm_username").val(),
                        "password" : $("#LoginForm_password").val()
                    },
                    success : function(data){
//                        alert("herer");
                        var obj = $.parseJSON(data);
                        if(obj.status == "success"){
        //                    window.location.refresh;
                            validationMethod("thanks",obj.message)
        //                    location.reload("?thanmscart=1");
                            setInterval(function(){window.location.reload(); }, 3000);
                        }else if(obj.status == "loginfailed"){
                             validationMethod("error",obj.message)
        //                    location.reload("?thanmscart=1");
//                            setInterval(function(){window.location.reload(); }, 3000);
                        }else {
                            validationMethodSpecialCart("error",obj.message)
                             setInterval(function(){window.location.reload(); }, 3000);
                        }
                    }
                })
            });
            $("#talk-to-advisory-form-registered").submit(function() {
                if ($("#mbatrek_id").val() == "" || !validateEmail($("#mbatrek_id").val())) {
                    $("#mbatrek_id").focus()

                    validationMethod("error","Please Enter MBATrek Id");
                    return false;
                }
                if ($("#message2").val() == "") {
                    $("#message2").focus()
                    validationMethod("error","Please Enter Message");
                    return false;
                }
                if ($("#area2").val() == "") {
                    $("#area2").focus()
                    validationMethod("error","Please Enter Area");
                    return false;
                }
                if ($("#TalkToAdvisory_verifyCode").val() == "") {
                    $("#TalkToAdvisory_verifyCode").focus()
                     validationMethod("error","Please Enter Verification Code");
                    return false;
                }
            });
            $("#talk-to-advisory-form").submit(function() {

                if ($("#TalkToAdvisory_name").val() == "") {
                    $("#TalkToAdvisory_name").focus()
                    validationMethod("error","Please Enter Name");
                    return false;
                }
                if ($("#TalkToAdvisory_email").val() == "" || !validateEmail($("#TalkToAdvisory_email").val())) {
                    $("#TalkToAdvisory_email").focus()
                     validationMethod("error","Please Enter Email Id");
                    return false;
                }
                if ($("#TalkToAdvisory_message").val() == "") {
                    $("#TalkToAdvisory_message").focus()
                     validationMethod("error","Please Enter Message");
                    return false;
                }
                if ($("#TalkToAdvisory_area").val() == "") {
                    $("#TalkToAdvisory_area").focus()
                     validationMethod("error","Please Enter Area");
                    return false;
                }
                if ($("#TalkToAdvisory_verifyCode").val() == "") {
                    $("#TalkToAdvisory_verifyCode").focus()
                     validationMethod("error","Please Enter Verification Code");
                    return false;
                }
            });
            $("#talk_subit").click(function() {
                $("#talk-to-advisory-form").submit();
            })
            $("#talk_submit").click(function() {
                $("#talk-to-advisory-form-registered").submit();
            })
        })
//        $(document).ready(function(){
//    //Registeration Form Validation
//        $(".cart-remove").click(function(){
//                if(confirm("Are you sure you want to remove this product from your cart?")){
//                    window.location.href = <?php echo Yii::app()->createUrl("cart/removeCart",array("p"));?>+$(this).val();
//                }
//            })
//    })

    $( function() {
        <?php
            $autofill = ContactAutofill::model()->findAll();
            $tags = array();
            foreach ($autofill as $item){
                $tags[] = $item->name;
            }

        ?>
        var availableTags = <?php echo json_encode($tags);?>;
        // console.log(tags);
        // var availableTags = [
        //     "ActionScript",
        //     "AppleScript",
        //     "Asp",
        //     "BASIC",
        //     "C",
        //     "C++",
        //     "Clojure",
        //     "COBOL",
        //     "ColdFusion",
        //     "Erlang",
        //     "Fortran",
        //     "Groovy",
        //     "Haskell",
        //     "Java",
        //     "JavaScript",
        //     "Lisp",
        //     "Perl",
        //     "PHP",
        //     "Python",
        //     "Ruby",
        //     "Scala",
        //     "Scheme"
        // ];
        $( "#Contact_name_of_company_institute" ).autocomplete({
            source: availableTags
        });
        $(function() {
            // Find all YouTube and Vimeo videos
            var $allVideos = $("iframe[src*='www.youtube.com'], iframe[src*='player.vimeo.com']");

            // Figure out and save aspect ratio for each video
            $allVideos.each(function() {
                $(this).attr('height',300);
                $(this).attr('width',358);
            });

        });
        $(function(){
            $('#stop-video').click(function(){
                $("iframe[src*='www.youtube.com']").attr('src', $("iframe[src*='www.youtube.com']").attr('src'));
            });
        });
    } );

</script>