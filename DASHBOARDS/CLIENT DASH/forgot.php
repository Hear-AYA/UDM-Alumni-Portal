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
        <h1>Email</h1>
        <form method="GET" action="test_email.php">
            <div class="txt">
                <input type="email" name="to" required>
                <input type="hidden" name="page" value="forgot">
                <input type="hidden" name="body" value="">
                <input type="hidden" name="subject" value="Forgot Password">
                <label>Username</label>
            </div>
            <input type="submit" value="Send">
            <div class="signup">
                Already have an account? <a href="index.php">Sign in</a> here!
            </div>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['email'])){
        extract($_POST);

        
            $email = $_POST['email'];
            $pass = $_POST['password'];
                

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

                

                if ($pass == $user["pass"]) {
                    session_start();
                    $_SESSION["email"] = $email;
                    header("Location: myprofile.php");
                    die();
                }else{
                    echo "<div>Password does not match</div>";
                }
            }else{
                    echo "<div>Email does not match</div>";
            }
                
        

    }
?>