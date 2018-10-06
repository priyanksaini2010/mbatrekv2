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
                window.location.href = "https://mbatrek.com/v2/cart/removeCart?p="+$(this).val();
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
    $(".apply-promo").click(function(){
        $.ajax({
            url : "https://mbatrek.com/v2/cart/applypromo",
            type : "post",
            data : {
                code : $(".apply-promo-value").val()
            },
            success : function(data){
                var obj = $.parseJSON(data);
                if(obj.status == "success"){
                    window.location.refresh;
                    validationMethod("thanks",obj.message)
                    location.reload(true);
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