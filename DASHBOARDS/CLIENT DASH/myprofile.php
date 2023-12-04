<?php
     require_once "../ADMIN DASH/connect/connect.php";
    session_start();

    if(!isset($_SESSION['email'])){
      header('location: index.php');
    }

    $email=$_SESSION['email'];
    $emails=$_SESSION['email'];


    $sql = "SELECT * FROM regsinfo WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    extract($row);
?>
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
<style type="text/css">
  td{
    text-align: justify;
  }
  
</style>
<body>
    <div class="container">
      <div class="topbar">
        <p>Welcome Alumni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
        <div class="bg">
          <img src="img/aaa.jpg" alt="avt" class="avt">
        </div>
        
      <div class="sidebar">
        <h1>Dashboard</h1>
          <ul>
          <li>  
            <a href="upcoming events.php">
            <i class="fas fa-bullhorn"></i>
            <div>Events</div>
            </a>
          </li>           
          <li>
            <a href="myprofile.php">
              <i class="fas fa-id-card"></i>
              <div>My Profile</div>
            </a>
          </li>
          <li>
            <a href="Job.php">
              <i class="fas fa-user-tie"></i>
              <div>Job Offerings</div>
            </a>
          </li>
          <li>
            <a href="mapping.php">
              <i class="fas fa-map-marked-alt"></i>
              <div>Mapping Alumni Trajectories</div>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="fas fa-arrow-left"></i>
              <div>Logout</div>
            </a>
          </li>
        </ul>
        <img src="img/udm.png" alt="Avtr" class="avtr">
      </div>
      <div class="contain1">

<table cellpadding = "10">
<form method="POST" >
  <input type="hidden" name="id" value="<?php echo$id?>">
<!--------------------- First Name ------------------------------------------>
<tr>
  <td colspan="2">
    <h1 style="color: gold;text-decoration: underline;"><i>Personal Information</i></h1>
  </td>
</tr>
<tr>
<td>Fullname: </td>
<td><input type="text" name="fullName" maxlength="50" placeholder="" value="<?php echo$fullName?>" required/>
</td>
<tr>
<td>Gender: </td>
<td>

  <?php
     if($gender=="Male"){
      ?>
        <input type="radio" name="gender" value="Male" checked required/>
Male
      <?php
     }else{
      ?>
        <input type="radio" name="gender" value="Male"  required/>
Male
      <?php
     }
  ?>
<?php
     if($gender=="Female"){
      ?>
        <input type="radio" name="gender" value="Female" checked required/>
Female
      <?php
     }else{
      ?>
        <input type="radio" name="gender" value="Female" required />
Female
      <?php
     }
  ?>

</td>
</tr>
<!--------------------------Date Of Birth----------------------------------->
<tr>
  <td>Date of Birth : </td>
  <td>
    <input type="date" name="dateofbirth" class="date"  value="<?php echo$dateofbirth?>" required>
  </td>
</tr>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email: </td>
<td><input type="email" name="email" maxlength="100" placeholder="" value="<?php echo$email?>" required/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Contact Number: </td>
<td>
<input type="text" name="pnum" maxlength="11" placeholder="" value="<?php echo$pnum?>" required/>
</td>
</tr>
<tr>
  <td colspan="2">
    <h1 style="color: gold;text-decoration: underline;"><i>Professional Information</i></h1>
  </td>
</tr>
<!------------------- Award Achievement ---------------------------------------->
<tr>
<td>Award/Achievement: </td>
<td><input type="text" name="award" maxlength="50" placeholder="" value="<?php echo$award?>" required/>
</td>
</tr>
<!------------------------ Year Graduated --------------------------------------->
<tr>
<td>Year Graduated: </td>
<td><input type="text" name="year_graduated" maxlength="50" placeholder="" value="<?php echo$year_graduated?>" required/>
</td>
</tr>
<!------------------------ Current Job --------------------------------------->
<tr>
<td>Address: </td>
<td><input type="text" name="address" maxlength="50" placeholder="" value="<?php echo$address?>" required />
</td>
</tr>
<!------------------------ Address --------------------------------------->
<tr>
<td>Current Job: </td>
<td><input type="text" name="current_job" maxlength="50" placeholder="" value="<?php echo$current_job?>"  required/>
</td>
</tr>
<!------------------------ Job Exp --------------------------------------->
<tr>
<td>Job Experience: </td>
<td><input type="text" name="job_experience" maxlength="50" placeholder="" value="<?php echo$job_experience?>" required />
</td>
</tr>
<!------------------------ Skills --------------------------------------->
<tr>
<td>Skills and Expertise: </td>
<td><input type="text" name="skill_expertise" maxlength="50" placeholder="" value="<?php echo$skill_expertise?>"  required/>
</td>
</tr>
<!---------------------- Gender ------------------------------------->

  </td>
  </tr>
<!---------------------------- Courses ----------------------------------->
  <td>Degree: </td>
  <td><input type="text" name="degree" maxlength="50" placeholder="" value="<?php echo$degree?>" required/>
  </td>
  </tr>
<!--------- File Upload ------------>

<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" >
<input type="submit" value="Submit" name="save_edit" style="width: 100px;"  >
<!-- <input type="button" value="Edit"> -->
</td>
</tr>
<!--------- End ------------>
</form>
</table>

</div>
</body>
</html> 


<?php
    if(isset($_POST['save_edit'])){
      extract($_POST);
    

      $data="";

      foreach ($_POST as $k => $v) {

        if(empty($data)){
          $data .= " $k='$v' ";
        }else{

          if($k=="save_edit"){
            $data .= "";
          }else{
            $data .= ", $k='$v' ";
          }
          
        }
        
      }

      $sql = "UPDATE regsinfo SET $data WHERE email='$emails'";

      if ($conn->query($sql) === TRUE) {
       ?>
       <script type="text/javascript">
         alert('update successfully');
         location.href='myprofile.php';
       </script>
       <?php
      } else {
        echo "Error updating record: " . $conn->error;
      }

    }


    if(isset($_FILES['img_loc']) && $_FILES['img_loc']['tmp_name'] != ''){
      $data="";
      $img_loc = strtotime(date('y-m-d H:i')).'_'.$_FILES['img_loc']['name'];
      $move = move_uploaded_file($_FILES['img_loc']['tmp_name'],'uploads/'. $img_loc);
      $data .= " img_loc = '$img_loc' ";

      $id=$_POST['id'];


      $sql = "UPDATE regsinfo SET $data WHERE email='$emails'";

      if ($conn->query($sql) === TRUE) {
        ?>
       <script type="text/javascript">
         alert('update successfully');
         location.href='myprofile.php';
       </script>
       <?php
      } else {
        echo "Error updating record: " . $conn->error;
      }
    }
?>

