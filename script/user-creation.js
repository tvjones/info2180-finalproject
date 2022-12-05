$( document ).ready(function () {
    //
    // $("#fnameError").hide();
    // $("#lnameError").hide();
    // $("#emailError").hide();
    // $("#passwordError").hide();
    //
    //
    // let $error = $('#errorDiv').val();
    // let firstname = $('#fname').val();
    // let lastname = $('#lname').val();
    // let email = $('#email').val();
    // let password = $('#password').val();
    //
    // let fname_error = false;
    // let lname_error = false;
    // let email_error = false;
    // let password_error = false;
    //
    // $pass_string = 'Should contain at least 8 characters. Must include 1 Uppercase,\
    //                     1 lowercase and 1 digit';
    //
    // //clear previous error messages
    // //clearErrors();
    //
    // $("#fname").focusout(function() {
    //     check_fname();
    // })
    //
    // $("#lname").focusout(function() {
    //     check_lname();
    // })
    //
    // $("#email").focusout(function() {
    //     check_email();
    // })
    //
    // $("#password").focusout(function() {
    //     check_password();
    // })
    //
    //
    // function isEmpty(elementValue) {
    //     if (elementValue.length == 0) {
    //         console.log ('Field is Empty');
    //         return true;
    //     }
    //     return false;
    // }
    //
    // function isName(name) {
    //     return /^([^0-9]*)$/.test(name);
    // }
    //
    // function isValidEmail(emailAddress) {
    //     return /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/.test(emailAddress);
    // }
    //
    // function isValidPassword(password) {
    //     return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(password);
    // }
    //
    // function insertAfter(element, newNode) {
    //     element.parentNode.insertBefore(newNode, this.nextSibling);
    // }
    //
    // function clearErrors() {
    //     var elementsWithErrors = document.querySelectorAll('.error');
    //     //console.log(elementsWithErrors);
    //     for (var x = 0; x < elementsWithErrors.length; x++) {
    //         elementsWithErrors[x].setAttribute('class', '');
    //         elementsWithErrors[x].parentNode.removeChild(elementsWithErrors[x].nextElementSibling);
    //         //console.log(elementsWithErrors[x].nextElementSibling);
    //     }
    // }
    //
    // function displayErrorMessage(formField, message) {
    //     formField.setAttribute('class', 'error');
    //     var errorMessageText = document.createTextNode(message);
    //     var errorMessage = document.createElement('span');
    //     errorMessage.setAttribute('class', 'error-message');
    //     errorMessage.appendChild(errorMessageText);
    //     //formField.insertAfter(errorMessage);
    //     insertAfter(formField, errorMessage);
    // }
    //
    // function check_fname() {
    //     if (isName(firstname) == false) {
    //         $("#fnameError").html("First Name in Incorrect Format");
    //         $("#fname").css("border", "2px solid #F90A0A");
    //         $("#fnameError").show();
    //         //displayErrorMessage(firstname, "First Name in Incorrect Format");
    //         fname_error = true;
    //     }
    //
    //     else if (isEmpty(firstname)) {
    //         $("#fnameError").html("You must fill in your First Name");
    //         $("#fname").css("border", "2px solid #F90A0A");
    //         $("#fnameError").show();
    //         //displayErrorMessage(firstname, "You must fill in your First Name");
    //         fname_error = true;
    //     }
    //
    //     else {
    //         $("#fnameError").hide();
    //         $("#fname").css("border", "2px solid #34F458");
    //         fname_error = false;
    //     }
    // }
    //
    // function check_lname() {
    //     if (isName(lastname) == false) {
    //         $("#lnameError").html("Last Name in Incorrect Format");
    //         $("#lname").css("border", "2px solid #F90A0A");
    //         $("#lnameError").show();
    //         //displayErrorMessage(firstname, "Last Name in Incorrect Format");
    //         lname_error = true;
    //     }
    //
    //     else if (isEmpty(lastname)) {
    //         $("#lnameError").html("You must fill in your Last Name");
    //         $("#lname").css("border", "2px solid #F90A0A");
    //         $("#lnameError").show();
    //         //displayErrorMessage(lastname, "You must fill in your Last Name");
    //         lname_error = true;
    //     }
    //
    //     else {
    //         $("#lnameError").hide();
    //         $("#lname").css("border", "2px solid #34F458");
    //         lname_error = false;
    //     }
    // }
    //
    // function check_email() {
    //     if (isValidEmail(email) == false) {
    //         $("#emailError").html("Invalid Email Format");
    //         $("#email").css("border", "2px solid #F90A0A");
    //         $("#emailError").show();
    //         //displayErrorMessage(firstname, "Email Address in Incorrect Format");
    //         email_error = true;
    //     }
    //
    //     else if (isEmpty(email)) {
    //         $("#emailError").html("You must fill in your Email Address");
    //         $("#email").css("border", "2px solid #F90A0A");
    //         $("#emailError").show();
    //         //displayErrorMessage(firstname, "You must fill in your Email Address");
    //         email_error = true;
    //     }
    //
    //     else {
    //         //console.log(isValidEmail(email));
    //         $("#emailError").hide();
    //         $("#email").css("border", "2px solid #34F458");
    //         email_error = false;
    //     }
    // }
    //
    // //Password Regex needs to be fixed!
    // function check_password() {
    //     if (isValidPassword(password) == false) {
    //         $("#passwordError").html($pass_string);
    //         $("#password").css("border", "2px solid #F90A0A");
    //         $("#passwordError").show();
    //         //displayErrorMessage(firstname, "Password in Incorrect Format");
    //         password_error = true;
    //     }
    //
    //     else if (isEmpty(password)) {
    //         $("#passwordError").html("You must fill in your Password");
    //         $("#password").css("border", "2px solid #F90A0A");
    //         $("#passwordError").show();
    //         //displayErrorMessage(firstname, "You must fill in your Password");
    //         password_error = true;
    //     }
    //
    //     else {
    //         //console.log(isValidPassword(password));
    //         $("#passwordError").hide();
    //         $("#password").css("border", "2px solid #34F458");
    //         password_error = false;
    //     }
    // }

    // $("#saveBtn").click(function(e) {
    //     e.preventDefault();
    //     console.log(firstname);
    //
    // })

    $("#logoutBtn").click(function() {
        console.log('Logout Clicked');
        $.ajax ({
            url: '../php/logout.php',
            method: 'POST',
            success: function (response) {
                window.location = 'landing-copy.html';
            }

        });
    })



})
