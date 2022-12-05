<?php
    $connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
    if($connection->connect_error) {
        die("Connection Failed: ". $connection -> connect_error);
    }

    $firstName = $_POST['fname'] ?? null;
    $lastName = $_POST['lname'] ??  null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $userRoles = $_POST['role'] ?? null;

    $sql = "INSERT INTO Users (firstname, lastname, passwd, email, user_role,created_at)
            VALUES ('$firstName', '$lastName', '$password', '$email', '$userRoles', NOW())";

    $connection->query($sql);

//    if ($connection->query($sql) === TRUE) {
//        echo "ADDED: ".$firstName.", ".$lastName;
//    } else {
//        echo "Error: ".$sql."<br>".$connection->error;
//    }

    $connection->close();

?>