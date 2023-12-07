<?php
include 'header.php';
?>
<body style="background: url('bg/udm.jpg');">
    
  <div class="container1" style="margin-top:-20px;">
      <?php 
        include 'navigation.php';
      ?>
       
        <div class="container2">

            <div class="job">
              <form class="edit-form" method="POST">
                <input type="hidden" name="id">
                <div>
                  <label>Position Title</label><br>
                  <input class="form" type="text" name="position_title">
                </div>
                <div>
                  <label>Hyperlink</label><br>
                  <input type="text" name="requirements">
                </div>
                <button class="btn btn-primary" name="save_job">Submit</button>
              </form>
            </div>
          </div>
          <?php
            include 'connect/connect.php';

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

                if($id==""){
                  $sql="INSERT INTO job SET $data";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully added job links');
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
                        location.href="Job.php";
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
