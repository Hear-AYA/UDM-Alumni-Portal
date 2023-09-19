<?php 
    $hostName = "localhost";
    $email = "root";
    $password = "";
    $dbName = "regsdb";

    $conn = mysqli_connect ($hostName, $email, $password, $dbName);
        if (!$conn) {
            die ("Something went wrong;");
        }

?>