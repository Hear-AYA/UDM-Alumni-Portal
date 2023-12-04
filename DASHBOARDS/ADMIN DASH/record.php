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
<td>Full Name: </td>
<td><?php echo$fullName?> </td>
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email: </td>
<td><?php echo$email?></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Contact Number: </td>
<td>
<?php echo$pnum?> </td>
</tr>
<!------------------- Award Achievement ---------------------------------------->
<tr>
<td>Award/Achievement: </td>
<td><?php echo$award?> 
</td>
</tr>
<!------------------------ Year Graduated --------------------------------------->
<tr>
<td>Year Graduated: </td>
<td><?php echo$year_graduated?>
</td>
</tr>
<!------------------------ Current Job --------------------------------------->
<tr>
<td>Current Job: </td>
<td><?php echo$current_job?>
</td>
</tr>
<!------------------------ Job Exp --------------------------------------->
<tr>
<td>Job Experience: </td>
<td><?php echo$job_experience?>
</td>
</tr>
<!------------------------ Skills --------------------------------------->
<tr>
<td>Skills and Expertise: </td>
<td><?php echo$skill_expertise?>
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender: </td>
<td>
<?php echo$gender?>
</td>
</tr>
<!--------------------------Date Of Birth----------------------------------->
<tr>
  <td>Date of Birth : </td>
  <td>
  <?php echo$dateofbirth?>
  </td>
  </tr>
  </td>
  </tr>
<!---------------------------- Courses ----------------------------------->
  <td>Degree: </td>
  <td><?php echo$degree?>
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