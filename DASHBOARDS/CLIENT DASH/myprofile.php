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
            <a href="upcoming events.html">
            <i class="fas fa-bullhorn"></i>
            <div>Events</div>
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
<form>
<table cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>First Name: </td>
<td><input type="text" name="FirstName" maxlength="50" placeholder="" />
</td>
</tr>
<!------------------------ Middle Name --------------------------------------->
<td>Middle Initial: </td>
<td><input type="text" name="Middle Name" maxlength="50" placeholder="" />
</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name: </td>
<td><input type="text" name="LastName" maxlength="50" placeholder=""/>
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email ID: </td>
<td><input type="email" name="EmailID" maxlength="100" placeholder=""/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Contact Number: </td>
<td>
<input type="text" name="MobileNumber" maxlength="10" placeholder=""/>
</td>
</tr>
<!------------------- Award Achievement ---------------------------------------->
<tr>
<td>Award/Achievement: </td>
<td><input type="text" name="Award/Achievement" maxlength="50" placeholder="" />
</td>
</tr>
<!------------------------ Year Graduated --------------------------------------->
<tr>
<td>Year Graduated: </td>
<td><input type="text" name="Year Graduated" maxlength="50" placeholder="" />
</td>
</tr>
<!------------------------ Current Job --------------------------------------->
<tr>
<td>Current Job: </td>
<td><input type="text" name="Current Job" maxlength="50" placeholder="" />
</td>
</tr>
<!------------------------ Job Exp --------------------------------------->
<tr>
<td>Job Experience: </td>
<td><input type="text" name="Job Expirience" maxlength="50" placeholder="" />
</td>
</tr>
<!------------------------ Skills --------------------------------------->
<tr>
<td>Skills and Expertise: </td>
<td><input type="text" name="Skills and Expertise" maxlength="50" placeholder="" />
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender: </td>
<td>
<input type="radio" name="Gender" value="Male" />
Male
<input type="radio" name="Gender" value="Female" />
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
  <td><input type="text" name="Othercourse" maxlength="50" placeholder="" />
  </td>
  </tr>
<!--------- File Upload ------------>
<tr>
  <td>Upload Picture: </td>
  <td> <input type="file" id="file" />
    <label for="file"></label></td>
</tr>
<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="button" value="Edit">
</td>
</tr>
<!--------- End ------------>
</table>
</form>
</div>
</body>
</html> 