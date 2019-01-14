// Method to call validation pop up or alerts
function phonenumber(mobNum)
{
    var filter = /^\d*(?:\.\d{1,2})?$/;

    if (filter.test(mobNum)) {
        if (mobNum.length == 10) {
            return true
        } else {
            return false;
        }
    }
    else {
        return false;
    }
}
function passwords(pass)
{
    // var filter = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/;
    var filter = /^[-@./#&+\w\s]*$/;

    if (filter.test(pass)) {
        if (pass.length >= 8) {
            return true
        } else {
            return false;
        }
    }
    else {
        return false;
    }
}


function validationMethod(id,text){
//    alert(id);
    switch(id){
        case "error":
            $("#pop-notification-type").text("Error !");
            $("#pop-notification-class").addClass("fa-warning");
            $("#pop-notification-class").removeClass("fa-check");
            break;
        case "thanks":
            $("#pop-notification-type").text("Thanks");
            $("#pop-notification-class").addClass("fa-check");
            $("#pop-notification-class").removeClass("fa-warning");
            break;
        case "congrats":
            $("#pop-notification-type").text("Congratulations!");
            $("#pop-notification-class").addClass("fa-check");
            $("#pop-notification-class").removeClass("fa-warning");
            break;
    }
     $("#pop-notification-text").text(text);
    $('#myModal27').modal('show');
//    alert(text);
}

function validationMethodNotApplied(id,text){
    $('#myModal32').modal('show');
//    alert(text);
}

function validationMethodThanks(id,text){
    $('#myModal33').modal('show');
//    alert(text);
}
function specialValidationMethod(id,text){
    $('#myModal28').modal('show');
//    alert(text);
}
function specialValidationMethodInterview(id,text){
    $('#myModal30').modal('show');
//    alert(text);
}
function specialValidationMethodIndustry(id,text){
    $('#myModal31').modal('show');
//    alert(text);
}
function validationMethodSpecialCart(id,text){
    $('#myModal29').modal('show');
//    alert(text);
}
// Method to validate email
function validateEmail(emailField) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField) == false)
    {

        return false;
    }
    return true;
}
$(document).ready(function(){
     $("#submit_form_btn_act").click(function(){
         
         $('#contact-form').submit();
     });
 });
$(document).ready(function(){
    
     $("#share").jsSocials({
    showLabel: false,
    showCount: false,
    shares: ["email", "twitter", "facebook", "linkedin"]
})
    //Registeration Form Validation
    $(".cart-remove").click(function(){
        $("#remove-yes").attr("alt",$(this).val())
        $("#myModal-removecart").show()
            // if(confirm("Are you sure you want to remove this product from your cart?")){
            //     window.location.href = 'https://'+domain_name+"cart/removeCart?p="+$(this).val();
            // }
    });
    $("#remove-no").click(function(){
        $("#myModal-removecart").hide()
    });
    $("#remove-yes").click(function(){
        window.location.href = 'https://'+domain_name+"cart/removeCart?p="+$(this).attr("alt");
    });
    $("#clear-cart").click(function(e){
        e.preventDefault();
        if(confirm("Are you sure you want remove all products from your cart?")){
            window.location.href = 'https://'+domain_name+"cart/clearcart";
        }
    });
     $("#gstin-apply").click(function(){
         $.ajax({
             url : "applygstin",
             type : "post",
             data : {
                 gstin : $("#gstin").val()
             },
             success : function(data){
                 var obj = $.parseJSON(data);
                 if(obj.status == "success"){
//                    window.location.refresh;
                     validationMethod("congrats",obj.message)
//                    location.reload("?thanmscart=1");
                     setInterval(function(){window.location.href =  'https://'+domain_name+"cart/cart"}, 3000);
                 } else {
                     validationMethod("error",obj.message)
                 }

             }

         });
     });
     $("#retrieve-form").submit(function(){
         if ($("#UsersNew_password").val() == ""){
             validationMethod("error","Please enter password.");return false;
         }
         if ($("#UsersNew_password").val().length < 8){
             $('#myModal34').modal('show');;
             return false;
         }
         if (!passwords($("#UsersNew_password").val())){
             $('#myModal34').modal('show');
             return false;
         }
         if ($("#UsersNew_cpassword").val() == ""){
             validationMethod("error","Please confirm password.");return false;
         }
         if ($("#UsersNew_cpassword").val() != $("#UsersNew_password").val()){
             validationMethod("error","Confirm password and Password must be same.");return false;
         }
     })
    $("#register-form").submit(function(){
        
        if ($("#UsersNew_full_name").val() == ""){
            validationMethod("UsersNew_full_name","Please enter full name");
            return false;
        }
        if ($("#UsersNew_email").val() == ""){
            validationMethod("error","Please enter your email id.");return false;
        }
        if ($("#UsersNew_email").val() == "" || !validateEmail($("#UsersNew_email").val())){
            validationMethod("error","Please enter valid email. e.g. yourname@example.com");return false;
        }
        if ($("#UsersNew_password").val() == ""){
            validationMethod("error","Please enter password.");return false;
        }
        if ($("#UsersNew_password").val().length < 8){
            $('#myModal34').modal('show');;
            return false;
        }
        if (!passwords($("#UsersNew_password").val())){
            $('#myModal34').modal('show');
            return false;
        }
        if ($("#UsersNew_cpassword").val() == ""){
            validationMethod("error","Please confirm password.");return false;
        }
        if ($("#UsersNew_mobile_number").val() == ""  || !phonenumber($("#UsersNew_mobile_number").val())){
            validationMethod("error","Please valid mobile number.");return false;
        }
        
        if(!$('#radio2').is(':checked') && !$('#radio3').is(':checked')) {
            validationMethod("error","Please tell us if you are a college student or a young professional.");return false;
        }
        if($('#radio2').is(':checked')){
            if($("#name_of_college").val() == ""){
                validationMethod("error","Please enter college name.");return false;
            }
        }
        if($('#radio3').is(':checked')){
            if($("#name_of_company").val() == ""){
                validationMethod("error","Please enter company name.");return false;
            }
        }
        if ($("#UsersNew_cpassword").val() != $("#UsersNew_password").val()){
            validationMethod("error","Confirm password and Password must be same.");return false;
        }
        if ($("#UsersNew_verifyCode").val() == ""){
            validationMethod("error","Please enter verification code.");return false;
        }
        return true ;
    });
    $("#campus-ambassador-form").submit(function(){
        if ($("#CampusAmbassador_first_name").val() == ""){
            validationMethod("error","Please enter first name.");
            return false;
        }
        if ($("#CampusAmbassador_last_name").val() == ""){
            validationMethod("error","Please enter last name.");
            return false;
        }
        if ($("#CampusAmbassador_mobile_number").val() == "" || !phonenumber($("#CampusAmbassador_mobile_number").val())){
            validationMethod("error","Please enter valid mobile number.");
            return false;
        }
        if ($("#CampusAmbassador_email_id").val() == "" || !validateEmail($("#CampusAmbassador_email_id").val())){
            validationMethod("error","Please enter valid email.");return false;
        }
        if ($("#CampusAmbassador_college_id").val() == ""){
            validationMethod("error","Please select a college.");
            return false;
        }
        if ($("#CampusAmbassador_college_id").val() == 2){
            if($("#CampusAmbassador_name_of_college").val() == ""){
                validationMethod("error","Please enter name of college.");
                return false;
            }
            
        }
        if ($("#CampusAmbassador_course_id").val() == ""){
            validationMethod("error","Please select a course.");
            return false;
        }
        if ($("#CampusAmbassador_course_id").val() == 2){
            if($("#CampusAmbassador_name_of_course").val() == ""){
                validationMethod("error","Please enter name of course.");
                return false;
            }
            
        }
        if ($("#CampusAmbassador_year_of_graduation_id").val() == ""){
            validationMethod("error","Please select a year of graduation.");
            return false;
        }
        if ($("#CampusAmbassador_question_1").val() == ""){
            validationMethod("error","Please tell us Why do you want to be a MBAtrek Campus Ambassador?");
            return false;
        }
        if ($("#CampusAmbassador_question_2").val() == ""){
            validationMethod("error","Please Suggest two super creative ideas to share the importance of career development in your college");
            return false;
        }
        if ($("#CampusAmbassador_verifyCode").val() == ""){
            validationMethod("error","Please enter verification code.");return false;
        }
//        if ($("#CampusAmbassador_question_3").val() == ""){
//            validationMethod("error","Please provide Any additional information you would like");
//            return false;
//        }
        
        
        return true;
    });
    $("#interview-ready-form").submit(function(){
        if ($("#InterviewReadyCompetition_first_name").val() == ""){
            validationMethod("error","Please enter first name.");
            return false;
        }
        if ($("#InterviewReadyCompetition_last_name").val() == ""){
            validationMethod("error","Please enter last name.");
            return false;
        }
        if ($("#InterviewReadyCompetition_mobile_number").val() == "" || !phonenumber($("#InterviewReadyCompetition_mobile_number").val())){
            validationMethod("error","Please enter valid mobile number.");
            return false;
        }
        if ($("#InterviewReadyCompetition_email_id").val() == "" || !validateEmail($("#InterviewReadyCompetition_email_id").val())){
            validationMethod("error","Please enter valid email.");return false;
        }
        if ($("#InterviewReadyCompetition_mba_batch").val() == ""){
            validationMethod("error","Please select a MBA batch.");
            return false;
        }
        if ($("#InterviewReadyCompetition_college").val() == ""){
            validationMethod("error","Please select a college.");
            return false;
        }
        
//        if ($("#InterviewReadyCompetition_name_of_college").val() == ""){
//            validationMethod("error","Please enter college name.");
//            return false;
//        }
//        if ($("#CampusAmbassador_year_of_graduation_id").val() == ""){
//            validationMethod("error","Please select a year of graduation.");
//            return false;
//        }
        if($("#InterviewReadyCompetition_college").val() == 4){
            if ($("#InterviewReadyCompetition_name_of_college").val() == ""){
                validationMethod("error","Please enter college name.");
                return false;
            } 
        }
         if($("#InterviewReadyCompetition_college").val() == 4){
            if ($("#InterviewReadyCompetition_question_2").val() == ""){
                validationMethod("error","Please tell us Email of your Student Placement Coordinator / Student Committee Member");
                return false;
            }
        }
        if($("#InterviewReadyCompetition_college").val() == 4){
            if ($("#InterviewReadyCompetition_question_1").val() == ""){
                validationMethod("error","Please tell us Name of your Student Placement Coordinator / Student Committee Member");
                return false;
            }
        }
        if ($("#InterviewReadyCompetition_verifyCode").val() == ""){
            validationMethod("error","Please enter verification code.");return false;
        }
        
//        if ($("#CampusAmbassador_question_3").val() == ""){
//            validationMethod("error","Please provide Any additional information you would like");
//            return false;
//        }
        
        
        return true;
    });
    $("#profile-save").click(function(){
        if ($("#profile-mobile-number").val() == "" || !phonenumber($("#profile-mobile-number").val())){
            validationMethod("error","Please enter valid mobile number.");
            return false;
        }
        $("#profile-form").submit();
    })
    $("#change-password-save").click(function(){
        if ($("#old-password").val() == ""){
            validationMethod("error","Please enter old password.");return false;
        }
        if ($("#new-password").val() == ""){
            validationMethod("error","Please enter password.");return false;
        }
        if ($("#new-password").val().length < 8){
            $('#myModal34').modal('show');;
            return false;
        }
        if (!passwords($("#new-password").val())){
            $('#myModal34').modal('show');
            return false;
        }
        if ($("#confirm-password").val() == ""){
            validationMethod("error","Please confirm password.");return false;
        }

        if ($("#new-password").val() != $("#confirm-password").val()){
            validationMethod("error","Confirm password and Password must be same.");return false;
        }
        $("#cp-form").submit();
    })
    
    $("#industry-ready-form-updated").submit(function(){

        if ($("#IndustryReadyCompetition_team_name").val() == ""){
            validationMethod("error","Please enter your team name.");
            return false;
        }

        //Member 1 Validation
        if ($("#IndustryReadyCompetition_first_name").val() == ""){
            validationMethod("error","Please enter first name of member 1.");
            return false;
        }
        if ($("#IndustryReadyCompetition_last_name").val() == ""){
            validationMethod("error","Please enter last name of member 1.");
            return false;
        }
        if ($("#IndustryReadyCompetition_mobile_number").val() == "" || !phonenumber($("#IndustryReadyCompetition_mobile_number").val())){
            validationMethod("error","Please enter valid mobile number of member 1.");
            return false;
        }
        if ($("#IndustryReadyCompetition_email_id").val() == "" || !validateEmail($("#IndustryReadyCompetition_email_id").val())){
            validationMethod("error","Please enter valid email of member 1.");return false;
        }
        //Member 2 Validations
        if ($("#IndustryReadyCompetition_first_name_1").val() == ""){
            validationMethod("error","Please enter first name of member 2.");
            return false;
        }
        if ($("#IndustryReadyCompetition_last_name_1").val() == ""){
            validationMethod("error","Please enter last name of member 2.");
            return false;
        }
        if ($("#IndustryReadyCompetition_mobile_number_1").val() == "" || !phonenumber($("#IndustryReadyCompetition_mobile_number_1").val())){
            validationMethod("error","Please enter valid mobile number of member 2.");
            return false;
        }
        if ($("#IndustryReadyCompetition_email_Id_1").val() == "" || !validateEmail($("#IndustryReadyCompetition_email_Id_1").val())){
            validationMethod("error","Please enter valid email of member 2.");return false;
        }
        //Member 3 Validation
        if ($("#IndustryReadyCompetition_first_name_2").val() == ""){
            validationMethod("error","Please enter first name of member 3.");
            return false;
        }
        if ($("#IndustryReadyCompetition_last_name_2").val() == ""){
            validationMethod("error","Please enter last name of member 3.");
            return false;
        }
        if ($("#IndustryReadyCompetition_mobile_number_2").val() == "" || !phonenumber($("#IndustryReadyCompetition_mobile_number_2").val())){
            validationMethod("error","Please enter valid mobile number of member 3.");
            return false;
        }
        if ($("#IndustryReadyCompetition_email_Id_2").val() == "" || !validateEmail($("#IndustryReadyCompetition_email_Id_2").val())){
            validationMethod("error","Please enter valid email of member 3.");return false;
        }
        //Member Validation Ends
        if ($("#IndustryReadyCompetition_mba_batch").val() == ""){
            validationMethod("error","Please select a MBA batch.");
            return false;
        }
        if ($("#IndustryReadyCompetition_college").val() == ""){
            validationMethod("error","Please select a college.");
            return false;
        }
        if($("#IndustryReadyCompetition_college").val() == 4){
            if ($("#IndustryReadyCompetition_name_of_college").val() == ""){
                validationMethod("error","Please enter college name.");
                return false;
            } 
        }
        
//        if ($("#CampusAmbassador_year_of_graduation_id").val() == ""){
//            validationMethod("error","Please select a year of graduation.");
//            return false;
//        }
        if($("#IndustryReadyCompetition_college").val() == 4){
            if ($("#IndustryReadyCompetition_question_1").val() == ""){
                validationMethod("error","Please tell us Name of your Student Placement Coordinator / Student Committee Member");
                return false;
            }
        }
        if($("#IndustryReadyCompetition_college").val() == 4){
            if ($("#IndustryReadyCompetition_question_2").val() == ""){
                validationMethod("error","Please tell us Email of your Student Placement Coordinator / Student Committee Member");
                return false;
            }
        }
        if ($("#IndustryReadyCompetition_verifyCode").val() == ""){
            validationMethod("error","Please enter verification code.");return false;
        }
        
        
//        if ($("#CampusAmbassador_question_3").val() == ""){
//            validationMethod("error","Please provide Any additional information you would like");
//            return false;
//        }
        
        
        return false;
    });
    $("#IndustryReadyCompetition_college").change(function(){
        
        if($(this).val() == 4){
            $("#IndustryReadyCompetition_name_of_college").show();
            $("#IndustryReadyCompetition_question_2").show();
            $("#IndustryReadyCompetition_question_1").show();
            $("#IndustryReadyCompetition_question_3").show();

        } else {
            $("#IndustryReadyCompetition_name_of_college").hide();
            $("#IndustryReadyCompetition_question_1").hide();
            $("#IndustryReadyCompetition_question_2").hide();
            $("#IndustryReadyCompetition_question_3").hide();
        }
    });
    $("#InterviewReadyCompetition_college").change(function(){
        
        if($(this).val() == 4){
            $("#name_of_college").show();
            $("#question_1").show();
            $("#question_2").show();
            $("#question_3").show();
        } else {
            $("#name_of_college").hide();
            $("#question_1").hide();
            $("#question_2").hide();
            $("#question_3").hide();
        }
    });
    $("#CampusAmbassador_course_id").change(function(){
        
        if($(this).val() == 2){
            $("#name_of_course").show();
        } else {
            $("#name_of_course").hide();
        }
    });
    $("#CampusAmbassador_college_id").change(function(){
        
        if($(this).val() == 2){
            $("#name_of_college").show();
        } else {
            $("#name_of_college").hide();
        }
    });
    $(".apply-promo").click(function(){
        if(!validateEmail($(".apply-promo-value").val())){
            validationMethod("error","Please enter valid email.");return false;
        }
        $.ajax({
            url : "applypromo",
            type : "post",
            data : {
                code : $(".apply-promo-value").val()
            },
            success : function(data){
                var obj = $.parseJSON(data);
                if(obj.status == "success"){
//                    window.location.refresh;
                    validationMethod("congrats",obj.message)
//                    location.reload("?thanmscart=1");
                    setInterval(function(){window.location.reload(); }, 3000);
                } else if(obj.status == "notapplied"){
                    validationMethodNotApplied("error",obj.message)
                }else {
                    validationMethod("error",obj.message)
                }
                
            }
            
        });
    });
})

$("#contact-form").submit(function() {
//    alert("here");
            
            if ($("#Contact_first_name").val() == "") {
                $("#Contact_first_name").focus()
                validationMethod("error","Please enter first name.");
                return false;
            }
            if ($("#Contact_last_name").val() == "") {
                $("#Contact_last_name").focus()
                validationMethod("error","Please enter last name.");
                return false;
            }
            if ($("#Contact_email").val() == "" || !validateEmail($("#Contact_email").val())) {
                $("#Contact_email").focus()
                validationMethod("Contact_email","Please enter valid email.");
                return false;
            }   
            if ($("#Contact_mobile_no").val() == "" || !phonenumber($("#Contact_mobile_no").val())) {
                $("#Contact_mobile_no").focus()
                validationMethod("error","Please enter valid mobile number.");
                return false;
            }
            if ($("#Contact_name_of_company_institute").val() == "") {
                $("#Contact_name_of_company_institute").focus()
                validationMethod("error","Please enter name of Company / Institute.");
                return false;
            }
            if ($("#Contact_subject").val() == "") {
                $("#Contact_subject").focus()
                validationMethod("error","Please enter subject.");
                return false;
            }
            if ($("#Contact_subject").val() == "") {
                $("#Contact_subject").focus()
                validationMethod("error","Please enter your message.");
                return false;
            }
            if($("#Contact_verifyCode").val() == ""){
                validationMethod("error","Please enter verification code.");
                return false;
            }
            
        });
