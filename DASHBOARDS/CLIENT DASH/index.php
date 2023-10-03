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
        <h1>Login</h1>
        <form method="post">
            <div class="txt">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="txt">
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">
            <div class="signup">
                Don't have an account? <a href="signup.php">Sign up</a> here!
            </div>
        </form>
    </div>
</body>
</html>