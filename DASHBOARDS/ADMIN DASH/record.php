<?php
      include'connect/connect.php';
    

    $email=$_GET['email'];
    $emails=$_GET['email'];


    $sql = "SELECT * FROM regsinfo WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    extract($row);
?>

<?php
    include'header.php';
?>
<style type="text/css">
  td{
    padding: 2px 2px;
  }
  input{
    width: ;
  }
</style>
<body style="background: url('bg/udm.jpg');">
    
  <div class="container1"   style="margin-top:-20px;">
      <?php 
        include'navigation.php';
      ?>
       
        <div class="container2">

            <div class="job">
              <table cellpadding = "10">

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
<!-- <input type="button" value="Edit"> -->
    <!-- <a href="record_edit.php?email=<?php echo$email?>" > Edit</a> -->
</td>
</tr>
<!--------- End ------------>
</form>
</table>
            </div>
          </div>
          <?php
            include'connect/connect.php';

            if(isset($_POST['save_job'])){
              extract($_POST);

              $data = "";
              foreach ($_POST as $k => $v){

                if(empty($data)){
                  $data .= " $k='$v' ";
                }else{

                  if($k=="save_job"){
                    $data .= "";
                  }else{
                    $data .= ", $k='$v' ";
                  }
                  
                }
              }
              //$data;

                if($id==""){
                  $sql="INSERT INTO job SET $data";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully register job post');
                        location.href="Job.php";
                      </script>
                    <?php
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }else{
                  $sql="UPDATE job SET $data WHERE id='$id'";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully update job post ');
                        location.href="record.php?email=<?php echo$email?>";
                      </script>
                    <?php
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }
            }
          ?>
        </body>
        </html>