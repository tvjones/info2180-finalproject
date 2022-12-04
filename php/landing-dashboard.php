<?php

//if already logged in
//    if (isset($_SESSION['loggedIN'])) {
//     header('Location: user-creation.php');
//     exit();
// }

    session_start();

    if (isset($_POST['login'])) {
        $connection = new mysqli(hostname:'localhost', username: 'root', password: '', database: 'dolphin_crm');

        $email = $connection->real_escape_string($_POST['emailPHP']);
        $password = ($connection->real_escape_string($_POST['passwordPHP']));
        $data = $connection->query("SELECT id FROM users WHERE email='$email' AND passwd='$password'");
    }

    if ($data->num_rows > 0) {
        //$_SESSION['loggedIN'] = '1';
        $_SESSION['email'] = $email;
        $_SESSION['token'] = password_hash(session_id(), PASSWORD_DEFAULT);
        echo json_encode(['token' => "${_SESSION['token']}"]);

        //exit('Login Successful...');
    }
    else {
        echo json_encode(['error' => 'Incorrect email and/or password.']);
    }

    // $email = $_POST['emailPHP'];
    // $password = $_POST['passwordPHP'];

    // session_start();
    // if ($email == 'admin@project2.com' && $password == '*A0F874BC7F54EE086FCE60A37CE7887D8B31086B') {
    //     $_SESSION['token'] = password_hash(session_id(), PASSWORD_DEFAULT);

    //     echo json_encode(['token' => "${_SESSION['token']}"]);
    // }
    // else {
    //     echo json_encode(['error' => 'Incorrect email and/or password.']);
    // }

?>