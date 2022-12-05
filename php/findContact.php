<?php
    $connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
    if ($connection -> connect_error){
        die("Connection Failed: ". $connection -> connect_error);
    }

    $email = $connection->real_escape_string($_POST['emailPHP']);

    //$connection->query("SELECT id FROM users WHERE email='$email' AND passwd='$password'");
    $sql = "SELECT title, firstname, lastname, email, company, user_type from Contacts WHERE email='$email'";
    $result = $connection -> query($sql);
    echo $result;


