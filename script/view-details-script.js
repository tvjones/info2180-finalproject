$( document ).ready(function () {
    $("#viewDetailsBtn").click('button',function(){
        console.log('View Button Clicked');
        $.ajax ({
            url: '../contact-details.html',
            method: 'POST',
            success: function (response) {
                window.location = '../contact-details.html';
            }

         });
     })
})


//$(document).load("client-details.html");
// });
//
// $("#viewDetailsBtn").on('click', function() {
//     console.log('View Button Clicked');
//     $.ajax ({
//         url: '../view-details.html',
//         method: 'POST',
//         success: function (response) {
//             window.location = '../view-details.html';
//         }
//