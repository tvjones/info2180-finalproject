<?php
session_start();
if (!isset($_SESSION['token'])) {
    header('Location: ../landing.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script type="text/javascript" src="../script/dashboard.js"></script>
    <script type="text/javascript" src="../script/view-details-script.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dolphin CRM</title>
    <link rel="stylesheet" href="../dashboard.css" />
    <link rel="stylesheet" href="../users_page.css" />
    <link rel="stylesheet" href="../contact-page-styles.css" />
<!--    <link rel="stylesheet" href="../user-creation.css" />-->
</head>
<body>
<div class="branding">
    <img src="../images/dolphin.png" width="30px" alt="dolphin logo">
    <p>Dolphin CRM</p>
</div>
<main>
    <aside>
        <div>
            <img src="../images/home.png" width="30px" height="30px" alt="home" />
            <p id="homeBtn">Home</p>
        </div>
        <div>
            <img src="../images/user.png" alt="" width="30px" height="30px" />
            <p id="newContactBtn">New Contact</p>
        </div>
        <div>
            <img src="../images/group.png" width="30px" height="30px" alt="" />
            <p id="displayUsersBtn">Users</p>
        </div>

        <hr />
        <div>
            <img src="../images/logout.png" width="30px" height="30px" alt="">
            <p id="logoutBtn">Logout</p>
        </div>
    </aside>

    <div id = "dashboard-content-panel">
        <?php include '../html-php/contact-page.php' ?>
    </div>
</main>
</body>
</html>