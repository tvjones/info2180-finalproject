$( document ).ready(function () {

    $("#saveBtn").click(function() {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email = $("emailAdd").val();
        var password = $("password").val();

        //alert("clicked");

        if ($(fname)=='' || $(lname)== '' || $(email)=='' || $(password)=='') {
            alert("Missing Field");
        }
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
