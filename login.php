<?php

    if (isset($_POST['login'])) {
        $email = $_POST['emailPHP'];
        $password = $_POST['passwordPHP'];

        exit($email . " = " . $password);
    }

?>