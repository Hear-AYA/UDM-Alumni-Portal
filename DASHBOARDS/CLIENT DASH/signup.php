<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> UDM Alumni Portal </title>
  <link rel="stylesheet" href="style.css">
  <script>
    function showPopup() {
      alert("R.A. 10173 (Data Privacy Act.) Your personal data is treated almost literally in the same way as your own personal property. Thus, it should never be collected, processed and stored by any organization without your explicit consent, unless otherwise provided by law.");
    }

    function validateForm() {
      // Validation for phone number (11 digits)
      var phoneNumber = document.getElementById("pnum").value;
      if (phoneNumber.length !== 11) {
        alert("Please enter a valid 11-digit phone number.");
        return false;
      }

      // Validation for password (minimum 8 characters)
      var password = document.getElementById("pass").value;
      if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
      }

      // Validation for checkbox
      var checkbox = document.getElementById("termsCheckbox");
      if (!checkbox.checked) {
        alert("Please accept the terms and conditions to proceed.");
        return false;
      }

      return true; // Form is valid
    }
  </script>
</head>

<body>
  <div class="wrapper">
    <img src="bg/1.png" style="width:70px;position: absolute;margin-top:-20px;margin-left: 20px;">
    <h2>Sign Up</h2>
    <form action="connect.php" method="POST" onsubmit="return validateForm()">
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
        <input type="checkbox" id="termsCheckbox" onclick="showPopup()">
        <h3>I've read it, understand it, and agree with it.</a></h3><required>
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
