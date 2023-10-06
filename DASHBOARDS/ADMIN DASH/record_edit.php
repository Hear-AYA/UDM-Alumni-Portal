<?php
      include'connect/connect.php';
    

    $email=$_GET['email'];
    $emails=$_GET['email'];


    $sql = "SELECT * FROM regsinfo WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    extract($row);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/admin dash.css">
    <link rel="stylesheet" href="css/upcoming events.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>UDM ADMIN record</title>
</head>
<style type="text/css">
  td{
    padding: 2px 2px;
  }
  input{
    width: ;
  }
</style>
<body>
    
  <div class="container1">
      <div class="topbar">
        <p>Welcome Alumni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
  
       
      <div class="sidebar">
          <h1>Dashboard</h1>
            <ul>
            <li>  
              <a href="upcoming events.php">
              <i class="fas fa-bullhorn"></i>
              <div>Upcoming Event</div>
              </a>
            </li>           
            <li>
              <a href="alumnirecords.php">
                <i class="fas fa-id-card"></i>
                <div>Alumni Records</div>
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
            <!--
            <li>
              <a href="AddData.php">
                <i class="fas fa-users"></i>
                <div>Add Data</div>
              </a>
            </li>
    -->
          </ul>
            <img src="img/udm.png" alt="Avtr" class="avtr">
          </div>
       
        <div class="container2">

            <div class="job">
              <table cellpadding = "10">
<tr>
  <td>
    <?php
      if($img_loc!==""){
        ?>
          <img src="../CLIENT DASH/uploads/<?php echo$img_loc?>" width="100px" height="100px" style="border-radius:100px;">
        <?php
      }else{
        ?>
          <img src="../../dummy.png" width="100px" height="100px">
        <?php
      }
    ?>

  </td>
</tr>
<tr>
  <td>Upload Picture: </td>
  <td>
    <form  enctype="multipart/form-data"  method="POST">
       <input type="file" name="img_loc" id="img_loc" />
       <button type="submit" name='update_pic' >Update pic</button>
    </form>
  </td>
</tr>
<form method="POST" >
  <input type="hidden" name="id" value="<?php echo$id?>">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>Fullname Name: </td>
<td><input type="text" name="fullName" maxlength="50" placeholder="" value="<?php echo$fullName?>" />
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email: </td>
<td><input type="email" name="email" maxlength="100" placeholder="" value="<?php echo$email?>"/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Contact Number: </td>
<td>
<input type="text" name="pnum" maxlength="11" placeholder="" value="<?php echo$pnum?>"/>
</td>
</tr>
<!------------------- Award Achievement ---------------------------------------->
<tr>
<td>Award/Achievement: </td>
<td><input type="text" name="award" maxlength="50" placeholder="" value="<?php echo$award?>" />
</td>
</tr>
<!------------------------ Year Graduated --------------------------------------->
<tr>
<td>Year Graduated: </td>
<td><input type="text" name="year_graduated" maxlength="50" placeholder="" value="<?php echo$year_graduated?>" />
</td>
</tr>
<!------------------------ Current Job --------------------------------------->
<tr>
<td>Current Job: </td>
<td><input type="text" name="current_job" maxlength="50" placeholder="" value="<?php echo$current_job?>" />
</td>
</tr>
<!------------------------ Job Exp --------------------------------------->
<tr>
<td>Job Experience: </td>
<td><input type="text" name="job_experience" maxlength="50" placeholder="" value="<?php echo$job_experience?>" />
</td>
</tr>
<!------------------------ Skills --------------------------------------->
<tr>
<td>Skills and Expertise: </td>
<td><input type="text" name="skill_expertise" maxlength="50" placeholder="" value="<?php echo$skill_expertise?>" />
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender: </td>
<td>

  <?php
     if($gender=="Male"){
      ?>
        <input type="radio" name="gender" value="Male" checked />
Male
      <?php
     }else{
      ?>
        <input type="radio" name="gender" value="Male"  />
Male
      <?php
     }
  ?>
<?php
     if($gender=="Female"){
      ?>
        <input type="radio" name="gender" value="Female" checked />
Female
      <?php
     }else{
      ?>
        <input type="radio" name="gender" value="Female"  />
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
    <input type="date" name="dateofbirth" class="date"  value="<?php echo$dateofbirth?>">
  </td>
  </tr>
  </td>
  </tr>
<!---------------------------- Courses ----------------------------------->
  <td>Degree: </td>
  <td><input type="text" name="degree" maxlength="50" placeholder="" value="<?php echo$degree?>" />
  </td>
  </tr>
<!--------- File Upload ------------>

<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Update" name="save_edit"  >
    <!-- <a href="record_edit.php?email=<?php echo$email?>" > Edit</a> -->
</td>
</tr>
<!--------- End ------------>
</form>
</table>
            </div>
          </div>
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
         location.href="record.php?email=<?php echo$email?>";
       </script>
       <?php
      } else {
        echo "Error updating record: " . $conn->error;
      }

    }


    if(isset($_FILES['img_loc']) && $_FILES['img_loc']['tmp_name'] != ''){
      $data="";
      $img_loc = strtotime(date('y-m-d H:i')).'_'.$_FILES['img_loc']['name'];
      $move = move_uploaded_file($_FILES['img_loc']['tmp_name'],'../CLIENT DASH/uploads/'. $img_loc);
      $data .= " img_loc = '$img_loc' ";

      $id=$_POST['id'];


      $sql = "UPDATE regsinfo SET $data WHERE email='$emails'";

      if ($conn->query($sql) === TRUE) {
        ?>
       <script type="text/javascript">
         alert('update successfully');
         location.href="record.php?email=<?php echo$email?>";
       </script>
       <?php
      } else {
        echo "Error updating record: " . $conn->error;
      }
    }
?>
        </body>
        </html>