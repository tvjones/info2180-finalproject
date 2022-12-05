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

    $("#displayUsersBtn").on('click', function() {
        console.log('Display Users Clicked');
        $('#dashboard-content-panel').load('../users_page.php')

        });

    $("#addUserButton").on('click', function() {
        console.log('Add User Clicked');
        $('#dashboard-content-panel').load('../html-php/user-creation.php')
    });

    $("#addContactButton").on('click', function() {
        console.log('Add Contact Clicked');
        $('#dashboard-content-panel').load('../html-php/contact_creation.php')
    });

    $("#homeBtn").on('click', function() {
        console.log('Display Home Clicked');
        $('#dashboard-content-panel').load('../html-php/contact-page.php')

    });

})