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
            // $stmt = $conn->prepare("INSERT into regsinfo(fullName, email, pass, cpass, pnum, course, gender,verified) 
            // VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            // $stmt->bind_param( $fullName, $email, $pass, $cpass, $pnum, $course, $gender,"1");
            // $stmt->execute();
            // echo "registration successfully. please wait to verify your account...";
            // $stmt->close();
            // $conn->close();


            $sql = "INSERT INTO regsinfo (fullName, email, pass, cpass, pnum, course, gender,verified,type)
            VALUES ('$fullName', '$email', '$pass', '$cpass', '$pnum', '$course', '$gender','1','student')";

            if ($conn->query($sql) === TRUE) {
              echo "registration successfully. please wait to verify your account...";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }


        }
?>

    

<html>
    <body>
        <h3><a href="../">Login</a></h3>
    </body>
</html>