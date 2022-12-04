$( document ).ready(function () {

    $("#errorDiv").hide();

    $(function() {
        $('#loginBtn').click('submit', function(e) {
            e.preventDefault();

            let $error = $('#errorDiv');
            let $email = $("#email").val().trim();
            let $password = $("#password").val().trim();

            $.ajax({
                method: 'POST',
                url: 'php/landing-dashboard.php',
                data: {
                    login: 1,
                    emailPHP: $email,
                    passwordPHP: $password
                },
            }).then(function(res) {
                let data = JSON.parse(res);

                if (data.error) {
                    $error.html(data.error);
                    $error.show();
                    return;
                }

                localStorage.setItem('token', data.token);
                location.replace('html-php/dashboard.php');

            }).fail(function(res) {
                $error.html('Error attempting to sign in.');
                $error.show();
            })
        });
    })
})




