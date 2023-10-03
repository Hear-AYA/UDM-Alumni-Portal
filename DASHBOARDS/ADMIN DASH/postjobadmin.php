<!DOCTYPE html>
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
    <title>UDM Alumni Portal</title>
</head>
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
            <div>Upcoming Events</div>
            </a>
          </li>           
          <li>
            <a href="myprofile.php">
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
              <form class="edit-form" method="POST">
                <input type="hidden" name="id">
                <div>
                  <label>Position Title</label><br>
                  <input class="form" type="text" name="position_title">
                </div>
                <div>
                  <label>Requirements</label><br>
                  <input type="text" name="requirements">
                </div>
                <div>
                  <label>Salary/Job/Pay Grade</label><br>
                  <input type="text" name="job">
                </div>
                <div>
                  <label>Monthly Salary</label><br>
                  <input type="text" name="monthly_salary">
                </div>
                <fieldset>
                  <legend>Qualifications</legend>
                  <div>
                    <label>Education</label><br>
                    <input type="text" name="education">
                  </div>
                  <div>
                    <label>Training</label><br>
                    <input type="text" name="training">
                  </div>
                  <div>
                    <label>Experience</label><br>
                    <input type="text" name="experience">
                  </div>
                  <div>
                    <label>Eligibility</label><br>
                    <input type="text" name="eligibility">
                  </div>
                  <div>
                    <label>Research Output</label><br>
                    <input type="text" name="research">
                  </div>
                  <div>
                    <label>Community Extension Service</label><br>
                    <input type="text" name="community">
                  </div>
                  <div>
                    <label>Competency (if applicable)</label><br>
                    <input type="text" name="competency">
                  </div>
                  <div>
                    <label>Place of Assignment</label><br>
                    <input type="text" name="assignment">
                  </div>
                  <div>
                    <label>Open positions</label><br>
                    <input type="text" name="open_positions">
                  </div>
                </fieldset><br>
                <button class="btn btn-primary" name="save_job">Save Changes</button>
              </form>
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