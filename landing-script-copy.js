$( document ).ready(function () {

    $("#error").hide();

    $(function() {
        $('#loginform').on('submit', function(e) {
            e.preventDefault();

            let $error = $('#error');
            let $email = $("#emailAdd").val().trim();
            let $password = $("#password").val().trim();

            $.ajax({
                type: 'POST',
                url: 'login-copy.php',
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
                location.href = 'user-creation-copy.php';
                
            }).fail(function(res) {
                $error.html('Error attempting to sign in.');
                $error.show();
            })
        });
    })
})
    



