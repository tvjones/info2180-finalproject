<?php

    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "dolphin_crm";

    session_start();
    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }