<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UDM Alumni Portal </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <img src="bg/1.png" style="width:70px;position: absolute;margin-top:-20px;margin-left: 20px;">
    <h2>Sign Up</h2>
    <form action="connect.php" method="POST">
      <div class="input-box">
        <input type="text" placeholder="Full Name" id="fullName" name="fullName" required>
        <br> <br>
        <input type="text" placeholder="Email" id="email" name="email" required>
        <br> <br>
        <input type="password" placeholder="Password" id="pass" name="pass" required>
        <br> <br>
        <input type="password" placeholder="Confirm password" id="cpass" name="cpass" required>
        <br> <br>
        <input type="number" placeholder="Phone Number" maxlength="11" id="pnum" name="pnum" required>
        <br> <br>
        <input type="text" placeholder="Course" id="course" name="course" required>
        <br> <br>
        <input type="text" placeholder="Gender: Male/Female/Others" id="gender" name="gender" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept terms and condition.</a></h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="../">Login here</a></h3>
      </div>
    </form>
  </div>
  
</body>
</html>