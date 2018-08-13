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