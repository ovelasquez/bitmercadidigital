

if($("#contactForm").length){
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });
}


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "include/contact-form.php",
        data: "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Your message has been sent. We will keep in touch with you soon.");
    $('#form-submit').addClass('disabled');

}

function formError(){
    $("#contactForm").removeClass().one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "text-primary";
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);

    } else {
        var msgClasses = "text-danger";
        $("#msgSubmit").removeClass().addClass(msgClasses).text('Something went wront. Please try later.');
    }
    
}