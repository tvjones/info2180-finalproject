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
            return true;
        } 
        else {
            $("#emailErr").html("Invalid Email");
            $("#emailErr").show();
            $("#emailAdd").css("border", "2px solid #F90A0A");
            error_email = true;
            return false;        
        }
    }

    function check_pass() {
        var password_length= $("#password").val().length;
        if (password_length < 8) {
            $("#passwordErr").html("Too short");
            $("#passwordErr").show();
            $("#password").css("border", "2px solid #F90A0A");
            error_password = true;
            return false;
        }

        if (password == "")
            alert('Password Empty');

        else {
            $("#passwordErr").hide();
            $("#password").css("border", "2px solid #34F458");
            return true;     
        }
    }

    $("#loginBtn").click(function(e) {
        e.preventDefault();
        
        if (check_email && check_pass) {

            var email = $("#emailAdd").val().trim();
            var password = $("#password").val().trim();
            console.log(email, password);

            $.ajax ({
                url: 'login.php',
                method: 'POST',
                data: {
                    login: 1,
                    emailPHP: email,
                    passwordPHP: password
                },
                dataType: 'text',
                success: function (response) {
                    $("#response").text(response);

                    if (response.indexOf('success') >= 0)
                    window.location = 'user-creation.html';
                }
        }
        // else {
        // alert("Please enter valid credentials");
        //         fail: function (response) {
        //             if (response.indexOf('fail') >= 0)
        //             window.location = 'landing.html';
        //         }
        //     }
        );
        }

    });
})
    



