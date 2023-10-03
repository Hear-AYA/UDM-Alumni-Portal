<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/user dash.css">
    <link rel="stylesheet" href="css/myprof.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>UDM Alumni Portal</title>
</head>
<body>
    <div class="container">
      <div class="topbar">
        <p>Welcome Alumni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
        <div class="bg">
          <img src="img/UDM_Lights.jpg" alt="avt" class="avt">
        </div>
        
      <div class="sidebar">
        <h1>Dashboard</h1>
          <ul>
          <li>  
            <a href="announcement.html">
            <i class="fas fa-bullhorn"></i>
            <div>Announcement</div>
            </a>
          </li>           
          <li>
            <a href="myprofile.html">
              <i class="fas fa-id-card"></i>
              <div>My Profile</div>
            </a>
          </li>
          <li>
            <a href="Job.html">
              <i class="fas fa-user-tie"></i>
              <div>Job Offerings</div>
            </a>
          </li>
          <li>
            <a href="mapping.html">
              <i class="fas fa-map-marked-alt"></i>
              <div>Mapping Alumni Trajectories</div>
            </a>
          </li>
        </ul>
        <img src="img/udm.png" alt="Avtr" class="avtr">
      </div>
      <div class="contain1">
<form action="conn.php" method="POST">
<table cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>First Name: </td>
<td><input type="text" name="Fname" maxlength="50" id="Fname" placeholder="First Name" required />
</td>
</tr>
<!------------------------ Middle Name --------------------------------------->
<td>Middle Initial: </td>
<td><input type="text" name="Mname" maxlength="50" id="Mname"  placeholder="Middle Name" required />
</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name: </td>
<td><input type="text" name="Lname" maxlength="50" id="Lname" placeholder="Last Name" required />
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email ID: </td>
<td><input type="text" name="email" maxlength="100" id="email" placeholder="Email" required /></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Contact Number: </td>
<td>
<input type="text" name="cnum" maxlength="11" id="cnum" placeholder="Contact Number" required />
</td>
</tr>
<!------------------- Award Achievement ---------------------------------------->
<tr>
<td>Award/Achievement: </td>
<td><input type="text" name="aa" maxlength="50" id="aa" placeholder="Awards" required />
</td>
</tr>
<!------------------------ Year Graduated --------------------------------------->
<tr>
<td>Year Graduated: </td>
<td><input type="text" name="grad" maxlength="50" id="grad" placeholder="Year" required />
</td>
</tr>
<!------------------------ Current Job --------------------------------------->
<tr>
<td>Current Job: </td>
<td><input type="text" name="cjob" maxlength="50" id="cjob" placeholder="Current Job" required />
</td>
</tr>
<!------------------------ Job Exp --------------------------------------->
<tr>
<td>Job Experience: </td>
<td><input type="text" name="jobexp" maxlength="50" id="jobexp" placeholder="Job Experience" required />
</td>
</tr>
<!------------------------ Skills --------------------------------------->
<tr>
<td>Skills and Expertise: </td>
<td><input type="text" name="saexp" maxlength="50" id="saexp" placeholder="Skill/s" required />
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender: </td>
<td>
<input type="radio" name="gender" id="gender" value="Male" />
Male
<input type="radio" name="gender" id="gender" value="Female" />
Female
</td>
</tr>
<!--------------------------Date Of Birth----------------------------------->
<tr>
<td>Date of Birth : </td>
<td>
  <input type="date" name="dateofbirth" class="date">
</td>
</tr>
</td>
</tr>
<!---------------------------- Courses ----------------------------------->
  <td>Degree: </td>
  <td><input type="text" name="course" maxlength="50" id="course" placeholder="Degree" required />
  </td>
  </tr>
<!--------- File Upload ------------>
<tr>
  <td>Upload Picture: </td>
  <td> <input type="file" id="avatar1" name="avatar1" />
    <label for="file"></label></td>
</tr>
<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
</td>
</tr>
<!--------- End ------------>
</table>
</form>
</div>
</body>
</html> 