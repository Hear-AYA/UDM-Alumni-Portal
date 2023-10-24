<?php
      include'connect/connect.php';
    

    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $ids=$_GET['id'];

        if($_GET['delete']){
          $sql = "DELETE FROM announcement WHERE id='$id'";

          if ($conn->query($sql) === TRUE) {
            ?>
                <script type="text/javascript">
                  alert('Successfully deleted Announcement post');
                  location.href="upcoming events.php";
                </script>
              <?php
          } else {
            echo "Error deleting record: " . $conn->error;
          }
        }

      $sql = "SELECT * FROM announcement WHERE id='$id' LIMIT 1";
      $result = $conn->query($sql);

      $row = $result->fetch_assoc();
      extract($row);
    }else{
      $id="";
      $title="";
      $description="";
      $date_time="";
      $from_time="";
      $to_time="";
      $type="";
    }
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
    

  </td>
</tr>
<form method="POST" >
  <input type="hidden" name="id" value="<?php echo$id?>">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>Title: </td>
<td><input type="text" name="title" class="form-control" required value="<?php echo$title?>" />
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Description: </td>
<td><textarea name="description" class="form-control" style="height: 200px; width: 300px;" required><?php echo$description?></textarea></td></td>
</tr>
<tr>
<td>When: </td>
<td>
<input type="date" name="date_time" class="form-control" required value="<?php echo$date_time?>"/>
</td>
</tr>
<tr>
<td>Start: </td>
<td>
<input type="time" name="from_time" class="form-control" value="<?php echo$from_time?>"/>
</td>
</tr>
<tr>
<td>End: </td>
<td>
<input type="time" name="to_time" class="form-control" value="<?php echo$to_time?>"/>
</td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Type: </td>
<td>
<select type="text" name="type" class="form-control" required>
  <option><?php echo$type?></option>
  <option>Event</option>
  <option>News</option>
</select>
</td>
</tr>
<!------------------- Award Achievement ---------------------------------------->
<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<!-- <input type="button" value="Edit"> -->
    <?php
      if(isset($_GET['id'])){
        ?>
          <button class="btn btn-success" name="save_event" type="submit">Update</button>
        <?php
      }else{
        ?>
          <button class="btn btn-primary" name="save_event" type="submit">Save</button>
        <?php
      }
    ?>
</td>
</tr>
<!--------- End ------------>
</form>
</table><br>
<table class="table table-striped table-border">
  <tr>
    <td>Title</td>
    <td>Decription</td>
    <td>When</td>
    <td>From</td>
    <td>To</td>
    <td>Type</td>
    <td></td>
  </tr>
  <?php
    $sql = "SELECT * FROM announcement";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        extract($row);
      ?>
        <tr>
          <td><?php echo$title?></td>
          <td><?php echo$description?></td>
          <td><?php echo$date_time?></td>
          <td><?php echo$from_time?></td>
          <td><?php echo$to_time?></td>
          <td><?php echo$type?></td>
          <td>
            <a href="add_events.php?id=<?php echo$id?>">Edit</a> | 
            <a href="add_events.php?id=<?php echo$id?>&delete=delete">Delete</a>
          </td>

        </tr>
      <?php
      }
    }
  ?>
</table>
            </div>
          </div>
          <?php
            include'connect/connect.php';

            if(isset($_POST['save_event'])){
              extract($_POST);

              $data = "";
              foreach ($_POST as $k => $v){

                if(empty($data)){
                  $data .= " $k='$v' ";
                }else{

                  if($k=="save_event"){
                    $data .= "";
                  }else{
                    $data .= ", $k='$v' ";
                  }
                  
                }
              }
              echo$data;


                if($id==""){
                  $sql="INSERT INTO announcement SET $data";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully register Announcement post');
                        location.href="upcoming events.php";
                      </script>
                    <?php
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }else{
                  $sql="UPDATE announcement SET $data WHERE id='$id'";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully update Announcement post ');
                        location.href="upcoming events.php";
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

        