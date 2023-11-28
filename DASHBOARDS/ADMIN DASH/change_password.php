<?php
      include'connect/connect.php';
    session_start();
    $email=$_SESSION['email'];
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
<table style="margin-top: 200px;">

<form method="POST" >
<!--------------------- First Name ------------------------------------------>
<tr>
<td>Old Password: </td>
<td><input type="password" name="old_password" maxlength="50" placeholder="" value="" />
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>New Password: </td>
<td><input type="password" name="new_password" maxlength="100" placeholder="" value=""/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Confirm Password: </td>
<td>
<input type="password" name="confirm_password" maxlength="11" placeholder="" value=""/>
</td>
</tr>

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
    
      $sql = "SELECT * FROM regsinfo WHERE email='$email' LIMIT 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['pass']==$old_password){

            if($new_password==$confirm_password){

              $sql = "UPDATE regsinfo SET pass='$new_password' WHERE email='$email'";

              if ($conn->query($sql) === TRUE) {
                ?>
                <script type="text/javascript">
                  alert('Successfully password updated');
                </script>
              <?php
              } else {
                ?>
                <script type="text/javascript">
                  alert('Error database');
                </script>
              <?php
              }

            }else{
              ?>
                <script type="text/javascript">
                  alert('Wrong Confirm password');
                </script>
              <?php
            }

          }else{
            ?>
              <script type="text/javascript">
                alert('Wrong old password');
              </script>
            <?php
          }
        }
      }
      

    }


    
?>
        </body>
        </html>