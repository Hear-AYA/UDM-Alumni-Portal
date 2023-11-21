<?php
    require_once "../ADMIN DASH/connect/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/udm.ico">
    <title>UDM Alumni Portal</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/udm logo.png" alt="UDMLOGO">
            <label class="LOGO">Universidad De Manila</label>
            <ul>
                <li><a href="signup.php">Sign In</a></li>
            </ul>
        </div>
    </nav>
    <img src="img/UDM_Lights.jpg" alt="avt" class="avt">  

    <div class="container1"></div>
    
    <div class="container">

        <?php

        extract($_GET);



            $sql = "UPDATE regsinfo SET verified='1' WHERE email='$email'";

            if ($conn->query($sql) === TRUE) {
              ?>
                <h1>Successfully Login</h1>

              <?php

                        session_start();
                        $_SESSION["email"] = $email;
                        header("Location: upcoming events.php");
            } else {
              echo "Error updating record: " . $conn->error;
            }
        ?>
        <h1>Congratualtions</h1>
        <div class="signup">
               Let me <a href="login.php">Sign in</a> 
            </div>
    </div>
</body>
</html>
