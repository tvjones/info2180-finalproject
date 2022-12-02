$( document ).ready(function () {

    $("#saveBtn").click(function() {
        var fname = $("#fname").val().trim();
        var lname = $("#lname").val().trim();
        var email = $("emailAdd").val().trim();
        var password = $("password").val().trim();

        // if (())
    })

    $("#logoutBtn").click(function() {
        console.log('Logout Clicked');
        $.ajax ({
            url: 'logout.php',
            method: 'POST',
            success: function (response) {
                window.location = 'landing.html';
            }
        
        });
    })
})
