// Method to call validation pop up or alerts
function validationMethod(id,text){
    
    alert(text);
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
    
    $("#register-form").submit(function(){
        if ($("#UsersNew_full_name").val() == ""){
            validationMethod("UsersNew_full_name","Please enter full name");
            return false;
        }
        if ($("#UsersNew_email").val() == "" || !validateEmail($("#UsersNew_email").val())){
            validationMethod("UsersNew_email","Please enter valid email.");return false;
        }
        if ($("#UsersNew_password").val() == ""){
            validationMethod("UsersNew_password","Please enter password.");return false;
        }
        if ($("#UsersNew_password").val().length < 6){
            validationMethod("UsersNew_cpassword","Please password of atleast 7 characters.");return false;
        }
        if ($("#UsersNew_cpassword").val() == ""){
            validationMethod("UsersNew_cpassword","Please confirm password!");return false;
        }
       
        
        if ($("#UsersNew_cpassword").val() != $("#UsersNew_password").val()){
            validationMethod("UsersNew_cpassword","Confirm password and Password must be same.");return false;
        }
        return true;
    });
})

$("#contact-form").submit(function() {
//    alert("here");
            
            if ($("#Contact_first_name").val() == "") {
                $("#Contact_first_name").focus()
                validationMethod("Contact_first_name","Please enter first name.");
                return false;
            }
            if ($("#Contact_last_name").val() == "") {
                $("#Contact_last_name").focus()
                validationMethod("Contact_last_name","Please enter last name.");
                return false;
            }
            if ($("#Contact_email").val() == "" || !validateEmail($("#Contact_email").val())) {
                $("#Contact_email").focus()
                validationMethod("Contact_email","Please enter valid email.");
                return false;
            }   
            if ($("#Contact_mobile_no").val() == "") {
                $("#Contact_mobile_no").focus()
                validationMethod("Contact_mobile_no","Please enter valid mobile number.");
                return false;
            }
            if ($("#Contact_name_of_company_institute").val() == "") {
                $("#Contact_name_of_company_institute").focus()
                validationMethod("Contact_name_of_company_institute","Please enter name of Company / Institute.");
                return false;
            }
            if ($("#Contact_subject").val() == "") {
                $("#Contact_subject").focus()
                validationMethod("Contact_subject","Please enter subject.");
                return false;
            }
            if ($("#Contact_subject").val() == "") {
                $("#Contact_subject").focus()
                validationMethod("Contact_your_message","Please enter your message.");
                return false;
            }
            
        });