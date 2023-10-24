<?php

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $pnum = $_POST['pnum'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];

    // Database Connection
    $conn = new mysqli('localhost','root','','regsdb');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else {
            $stmt = $conn->prepare("INSERT into regsinfo(fullName, email, pass, cpass, pnum, course, gender) 
            VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssiss", $fullName, $email, $pass, $cpass, $pnum, $course, $gender);
            $stmt->execute();
            echo "registration successfully. please wait to verify your account...";
            $stmt->close();
            $conn->close();

        }
?>

<html>
    <body>
        <h3><a href="login.php">Login</a></h3>
    </body>
</html>