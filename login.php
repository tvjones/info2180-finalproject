<?php

    session_start();

    //if already logged in
    if (isset($_SESSION['loggedIN'])) {
        header('Location: user-creation.html');
        exit();
    }

    if (isset($_POST['login'])) {
        $connection = new mysqli(hostname:'localhost', username: 'root', password: '', database: 'dolphin_crm');

        $email = $connection->real_escape_string($_POST['emailPHP']);
        $password = ($connection->real_escape_string($_POST['passwordPHP']));
        $data = $connection->query("SELECT id FROM users WHERE email='$email' AND passwd='$password'");

        if ($data->num_rows > 0) {
            $_SESSION['loggedIN'] = '1';
            $_SESSION['email'] = $email;
			exit('Login Successful...');
        }
        else
            exit('Please Check Login Credentials');

        // exit($email . " = " . $password);
    }

?>