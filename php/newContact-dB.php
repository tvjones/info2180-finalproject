<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection = new mysqli('localhost', 'root', '', 'dolphin_crm');
if($connection->connect_error) {
    die("Connection Failed: ". $connection -> connect_error);
}
// else{
//    echo "<h1>Connection Successful</h1>";
//}
    $title = $_POST['title'] ?? null;
    $firstName = $_POST['fname'] ?? null;
    $lastName = $_POST['lname'] ??  null;
    $email = $_POST['email'] ?? null;
    $phoneNum = $_POST['telephone'] ?? null;
    $company = $_POST['company'] ?? null;
    $userType = $_POST['usertype'] ?? null;
    $assignedTo = (int)$_POST['assignedto'] ?? null;

    $sql = "INSERT INTO Contacts (title, firstname, lastname, email, telephone, company, user_type, assigned_to, created_at)
                    VALUES ('$title','$firstName', '$lastName', '$email', '$phoneNum', '$company','$userType','$assignedTo', NOW() )";

    if ($connection->query($sql) === TRUE) {
        echo "ADDED: ".$firstName.", ".$lastName;
    } else {
        echo "Error: ".$sql."<br>".$connection->error;
    }


    $connection->close();


?>