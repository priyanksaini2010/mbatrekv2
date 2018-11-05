// Method to call validation pop up or alerts
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
    }
     $("#pop-notification-text").text(text);
    $('#myModal27').modal('show');
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
    //Registeration Form Validation
    $(".cart-remove").click(function(){
            if(confirm("Are you sure you want to remove this product from your cart?")){
                window.location.href = "https://localhost/v3/cart/removeCart?p="+$(this).val();
            }
        });
    $("#register-form").submit(function(){
        if ($("#UsersNew_full_name").val() == ""){
            validationMethod("UsersNew_full_name","Please enter full name");
            return false;
        }
        if ($("#UsersNew_email").val() == "" || !validateEmail($("#UsersNew_email").val())){
            validationMethod("error","Please enter valid email.");return false;
        }
        if ($("#UsersNew_password").val() == ""){
            validationMethod("error","Please enter password.");return false;
        }
        if ($("#UsersNew_password").val().length < 6){
            validationMethod("error","Please password of atleast 7 characters.");return false;
        }
        if ($("#UsersNew_cpassword").val() == ""){
            validationMethod("error","Please confirm password!");return false;
        }
       
        
        if ($("#UsersNew_cpassword").val() != $("#UsersNew_password").val()){
            validationMethod("error","Confirm password and Password must be same.");return false;
        }
        return true;
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
        if ($("#CampusAmbassador_mobile_number").val() == ""){
            validationMethod("error","Please enter mobile number.");
            return false;
        }
        if ($("#CampusAmbassador_email_id").val() == "" || !validateEmail($("#CampusAmbassador_email_id").val())){
            validationMethod("error","Please enter valid email.");return false;
        }
        if ($("#CampusAmbassador_college_id").val() == ""){
            validationMethod("error","Please select a college.");
            return false;
        }
        if ($("#CampusAmbassador_course_id").val() == ""){
            validationMethod("error","Please select a course.");
            return false;
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
        if ($("#InterviewReadyCompetition_mobile_number").val() == ""){
            validationMethod("error","Please enter mobile number.");
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
        if ($("#InterviewReadyCompetition_question_1").val() == ""){
            validationMethod("error","Please tell us Name of your Student Placement Coordinator / Student Committee Member");
            return false;
        }
        if ($("#InterviewReadyCompetition_question_2").val() == ""){
            validationMethod("error","Please tell us Email of your Student Placement Coordinator / Student Committee Member");
            return false;
        }
//        if ($("#CampusAmbassador_question_3").val() == ""){
//            validationMethod("error","Please provide Any additional information you would like");
//            return false;
//        }
        
        
        return true;
    });
    
    $("#industry-ready-form").submit(function(){
        if ($("#IndustryReadyCompetition_first_name").val() == ""){
            validationMethod("error","Please enter first name.");
            return false;
        }
        if ($("#IndustryReadyCompetition_last_name").val() == ""){
            validationMethod("error","Please enter last name.");
            return false;
        }
        if ($("#IndustryReadyCompetition_mobile_number").val() == ""){
            validationMethod("error","Please enter mobile number.");
            return false;
        }
        if ($("#IndustryReadyCompetition_email_id").val() == "" || !validateEmail($("#IndustryReadyCompetition_email_id").val())){
            validationMethod("error","Please enter valid email.");return false;
        }
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
        if ($("#IndustryReadyCompetition_question_1").val() == ""){
            validationMethod("error","Please tell us Name of your Student Placement Coordinator / Student Committee Member");
            return false;
        }
        if ($("#IndustryReadyCompetition_question_2").val() == ""){
            validationMethod("error","Please tell us Email of your Student Placement Coordinator / Student Committee Member");
            return false;
        }
//        if ($("#CampusAmbassador_question_3").val() == ""){
//            validationMethod("error","Please provide Any additional information you would like");
//            return false;
//        }
        
        
        return true;
    });
    $("#IndustryReadyCompetition_college").change(function(){
        
        if($(this).val() == 4){
            $("#name_of_college").show();
        } else {
            $("#name_of_college").hide();
        }
    });
    $("#InterviewReadyCompetition_college").change(function(){
        
        if($(this).val() == 4){
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
                    validationMethod("thanks",obj.message)
//                    location.reload("?thanmscart=1");
                    setInterval(function(){window.location.reload(); }, 3000);
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
            if ($("#Contact_mobile_no").val() == "") {
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
            
        });