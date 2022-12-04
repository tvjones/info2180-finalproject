$( document ).ready(function () {

    $("#logoutBtn").on('click', function() {
        console.log('Logout Clicked');
        $.ajax ({
            url: '../php/logout.php',
            method: 'POST',
            success: function (response) {
                window.location = '../landing.html';
            }

        });
    })
})