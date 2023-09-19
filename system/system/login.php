
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sys.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/udm.ico">
    <title>UDM - Alumni Portal</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/udm1.png" alt="UDMLOGO">
            <label class="LOGO">Universidad De Manila</label>
            <ul>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <div class="container1"></div>
    
    <div class="container">
        <?php 
        if (isset($_POST["login"])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
                require_once "database.php";
            $sql = "SELECT * FROM regsinfo WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: userdash.php");
                    die();
                }else{
                    echo "<div>Password does not match</div>";
                }
            }else{
                    echo "<div>Email does not match</div>";
            }
                
        }
        ?>
        
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="txt">
                <input type="text" name="email" id="email" required>
                <label>Username</label>
            </div>
            <div class="txt">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login" name="login" id="login">
            <div class="signup">
                Don't have an account? <a href="signup.php">Sign up</a> here!
            </div>
        </form>
    </div>
</body>
</html>