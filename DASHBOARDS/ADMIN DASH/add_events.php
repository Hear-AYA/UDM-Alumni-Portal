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
  <div class="container1" style="margin-top:-20px;">
      <?php
        include'navigation.php';
      ?>
<div class="container2">
<form method="POST" >
<table >
  <tr>
    <td>
    </td>
  </tr>

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
</table>
</form>
<br>
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
            
          <?php
            //include'connect/connect.php';

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
        </div>
      </div>
        </body>
        </html>

        