$( document ).ready(function () {

    console.log('page ready');

    $("#emailErr").hide();
    $("#passwordErr").hide();

    var error_email = false;
    var error_password = false;

    $("input[type='email']").focusout(function() {
        check_email();
    })

    $("input[type='password']").focusout(function() {
        check_pass();
    })

    function check_email() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("input[type='email']").val();

        if (pattern.test(email) && email !== '') {
            $("#emailErr").hide();
            $("input[type='email']").css("border", "2px solid #34F458");
        } else {
            $("#emailErr").html("Invalid Email");
            $("#emailErr").show();
            $("input[type='email']").css("border", "2px solid #F90A0A");
            error_email = true;        
        }
    }

    function check_pass() {
        var password_length= $("input[type='password']").val().length;
        if (password_length < 8) {
            $("#passwordErr").html("Too short");
            $("#passwordErr").show();
            $("input[type='password']").css("border", "2px solid #F90A0A");
            error_password = true;

        } else {
            $("#passwordErr").hide();
            $("input[type='password']").css("border", "2px solid #34F458");      
        }
    }

    $("#loginBtn").click(function() {
        var email = $("input[type='email']").val();
        var password = $("input[type='password']").val();
        console.log(email, password);

        if (email == "" || password == "") {
            alert('Enter credentials');
        }
            
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
                dataType: 'text'
            });
        }

    });
})
    



