<?php
    $servername = $_SESSION["server"];
    $username = $_SESSION["username"];
    $password = $_SESSION["pswd"];
    $database = $_SESSION["database"];
    $mysqli = new mysqli($servername,$username,$password,$database);
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>