<?php
    session_start();

    if (isset($_POST['login'])) {
        $mysqli = new mysqli(hostname:'localhost', username: 'root', password: '', database: 'dolphin_crm');
        if($mysqli->connect_error) {
            echo json_encode(['error' => 'Incorrect email and/or password.']);
        }
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli->set_charset("utf8mb4");


//        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//        try {
//            /** @var TYPE_NAME $mysqli */
//            $mysqli = new mysqli("localhost", "root", "", "dolphin_crm");
//            $mysqli->set_charset("utf8mb4");
//            exit('Successful Adding');
//        } catch(Exception $e) {
//            error_log($e->getMessage());
//            exit('Error connecting to database'); //Should be a message a typical user could understand
//        }

        $firstName = isset($_POST['fname']) ? $_POST['fname'] : null;
        $lastName = isset($_POST['lname']) ? $_POST['lname'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $userRoles = isset($_POST['role']) ? $_POST['role'] : null;

        echo ($firstName)


        $sql = "INSERT INTO users (firstname, lastname, passwd, email, user_role)
                VALUES ($firstName, $lastName, $password, $email, $userRoles)";

//        $stmt = $mysqli->prepare("INSERT INTO users (firstname, lastname, passwd, email, user_role)
//                VALUES ($firstName, $lastName, $password, $email, $userRoles)");
//        $stmt->bind_param("sssss", $_POST['firstname'], $_POST['lastname'],
//                            $_POST['passwd'], $_POST['email'], $_POST['user_role']);
//        $stmt->execute();
//        $stmt->close();


//        $firstName = $mysqli->real_escape_string(($_POST['firstNamePHP']));
//        $lastName = $mysqli->real_escape_string($_POST['lastNamePHP']);
//        $email = $mysqli->real_escape_string($_POST['emailPHP']);
//        $password = ($mysqli->real_escape_string($_POST['passwordPHP']));
//        $user_roles = ($mysqli->real_escape_string($_POST['userRolesPHP']));
//        $sql = "INSERT INTO users (firstname, lastname, passwd, email, user_role)
//                VALUES ($firstName, $lastName, $password, $email, $user_roles )";
//
//        $_SESSION['email'] = $email;
//        $_SESSION['token'] = password_hash(session_id(), PASSWORD_DEFAULT);
//        //echo json_encode(['token' => "${_SESSION['token']}"]);
//        echo json_encode(['token' => "${sql}"]);
    }
    else {
        echo json_encode(['error' => 'Incorrect email and/or password.']);
    }