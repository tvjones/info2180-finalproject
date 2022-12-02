$( document ).ready(function () {

    console.log('page ready');

    $("#emailErr").hide();
    $("#passwordErr").hide();

    var error_email = false;
    var error_password = false;

    $("#emailAdd").focusout(function() {
        check_email();
    })

    $("#password").focusout(function() {
        check_pass();
    })

    function check_email() {
        var pattern = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/;
        var email = $("#emailAdd").val();

        if (pattern.test(email) && email !== '') {
            $("#emailErr").hide();
            $("#emailAdd").css("border", "2px solid #34F458");
        } else {
            $("#emailErr").html("Invalid Email");
            $("#emailErr").show();
            $("#emailAdd").css("border", "2px solid #F90A0A");
            error_email = true;        
        }
    }

    function check_pass() {
        var password_length= $("#password").val().length;
        if (password_length < 8) {
            $("#passwordErr").html("Too short");
            $("#passwordErr").show();
            $("#password").css("border", "2px solid #F90A0A");
            error_password = true;

        } else {
            $("#passwordErr").hide();
            $("#password").css("border", "2px solid #34F458");      
        }
    }

    $("#loginBtn").click(function() {
        let email = $("#emailAdd").val().trim();
        let password = $("#password").val().trim();
        console.log(email, password);

        if (email == "" || password == "") 
            alert('Enter Credentials');   
        else {
            $.ajax ({
                url: 'login.php',
                method: 'POST',
                data: {
                    login: 1,
                    emailPHP: email,
                    passwordPHP: password
                },
                success: function (response) {
                    $("#response").text(response);

                    if (response.indexOf('success') >= 0)
                    window.location = 'user-creation.html';
                },
                fail: function (response) {
                    if (response.indexOf('fail') >= 0)
                    window.location = 'landing.html';
                },
                dataType: 'text'
            });
        }

    });
})
    



