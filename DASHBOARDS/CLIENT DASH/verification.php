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
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    <img src="img/UDM_Lights.jpg" alt="avt" class="avt">  

    <div class="container1"></div>
    
    <div class="container">
        <h1>Verification</h1>
        <form method="POST">
            <div class="txt">
                <input type="hidden" name="email" value="<?php echo$_GET['email']?>">
                <input type="" name="code">
                <label>Code</label>
            </div>
            <!-- <a href="forgot.php"><div class="pass">Forgot Password?</div></a> -->
                <input type="submit" value="Confirm">
            <div class="signup">
                Don't have an account? <a href="signup.php">Sign up</a> here!
            </div>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['email'])){
        extract($_POST);

        
            // $email = $_POST['email'];
            // $pass = $_POST['password'];
                

            // $sql = "SELECT * FROM regsinfo WHERE email = '$email'";
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //   // output data of each row
            //   while($row = $result->fetch_assoc()) {
            //     //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            //   }
            // } else {
            //     echo "<div>Email does not match</div>";
            // }  

            $sql = "SELECT * FROM regsinfo WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($user) {

                

                if($user['verify_number']=="$code"){
                        session_start();
                        $_SESSION["email"] = $email;
                        header('location: verified.php?email='.$email);
                    }else{
                        ?>
                        <script type="text/javascript">
                            alert('Wrong code');
                            location.href="verification.php?email=<?php echo$email?> ";
                        </script>
                        <?php
                    }
                }else{
                        echo "<div>Email does not match</div>";
                }
                
        

    }

    if(isset($_GET['success'])){
        ?>
            <script type="text/javascript">
                alert('<?php echo$_GET['success']?>');
            </script>
        <?php
    }
?>