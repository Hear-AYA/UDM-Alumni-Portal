<?php

    include'../ADMIN DASH/connect/connect.php';

    $id=$_GET['id'];

    $sql = "SELECT * FROM job WHERE id='$id'";
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
        <p>Welcome Almuni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
       <div class="sidebar" style="font-size: 16px;">
        <h1 style="margin-top: 0px; font-size: 32px;"><b>Dashboard</b></h1>
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
       
        <div class="container2">

            <div class="job">
              <form class="edit-form" method="POST">
                <input type="hidden" name="id">
                <div>
                  <label>Position Title</label><br>
                  <?php echo $position_title;?>
                </div>
                <div>
                  <label>Requirements</label><br>
                  <?php echo $requirements;?>
                </div>
                <div>
                  <label>Salary/Job/Pay Grade</label><br>
                  <?php echo $job;?>
                </div>
                <div>
                  <label>Monthly Salary</label><br>
                  <?php echo $monthly_salary;?>
                </div>
                <fieldset>
                  <legend>Qualifications</legend>
                  <div>
                    <label>Education</label><br>
                    <?php echo $education;?>
                  </div>
                  <div>
                    <label>Training</label><br>
                    <?php echo $training;?>
                  </div>
                  <div>
                    <label>Experience</label><br>
                    <?php echo $experience;?>
                  </div>
                  <div>
                    <label>Eligibility</label><br>
                    <?php echo $eligibility;?>
                  </div>
                  <div>
                    <label>Research Output</label><br>

                    <?php echo $research;?>
                  </div>
                  <div>
                    <label>Community Extension Service</label><br>
                    <?php echo $community;?>
                  </div>
                  <div>
                    <label>Competency (if applicable)</label><br>
                    <?php echo $competency;?>
                  </div>
                  <div>
                    <label>Place of Assignment</label><br>
                    <?php echo $assignment;?>
                  </div>
                  <div>
                    <label>Open positions</label><br>
                    <?php echo $open_positions;?>
                  </div>
                </fieldset><br>
                <!-- <button class="btn btn-primary" name="save_job">Save Changes</button> -->
              </form>
            </div>
          </div>
          
        </body>
        </html>