<?php

session_start();

if (!isset($_SESSION['token'])) {
    header('Location: ../landing.html');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dolphin CRM</title>
        <link rel="stylesheet" href="../user-creation.css" />
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="../script/user-creation.js"></script>
    </head>
    <body>
        <div class="branding">
            <p>Dolphin CRM</p>
        </div>
        <main>
            <aside>
                <p>Home</p>
                <p>New Contact</p>
                <p>Users</p>
                <hr />
                <p id="logoutBtn"><p>Logout</p>
            </aside>
            <div class="data-entry">
                <h1>New User</h1>
                <!--          add the php file to process the data similar to the logout.php in action below e.g. action="create-user.php"-->
                <form action="../php/newUser-dB.php" name="add-user" id="add-user" method="post">
                    <div class="input-item">
                        <label for="fname">First Name</label>
                        <input type="text" placeholder="Jane" name="fname" id="fname">
                        <span class="error_form" id="fnameError"></span>
                    </div>
                    <div class="input-item">
                        <label for="lname">Last Name</label>
                        <input type="text" placeholder="Doe" name="lname" id="lname">
                        <span class="error_form" id="lnameError"></span>
                    </div>
                    <div class="input-item">
                        <label for="email">Email</label>
                        <input type="email" placeholder="something@example.com" name="email" id="email">
                        <span class="error_form" id="emailError"></span>
                    </div>
                    <div class="input-item">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        <span class="error_form" id="passwordError"></span>
                    </div>
                    <div class="input-item">
                        <label for="role">Role</label>
                        <select name="role" id="selectOpt">
                            <option value="Member">Member</option>
                        </select>
                    </div>
                    <div class="input-item">
                        <button id="saveBtn" type="submit">Save</button>
                    </div>
                    <div id="result"></div>
                </form>
            </div>
        </main>
    </body>
</html>
