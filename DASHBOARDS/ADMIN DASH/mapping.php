<?php
      include'connect/connect.php';
    

    
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
    <script type="text/javascript" src="js/chart.js"></script>
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
       
        <div class="container2" style="background: white;">

            <div class="job">
              <canvas id="myChart" style="width:100%;max-width:50%; margin-top:20px;"></canvas>
              <?php

                $sql = "SELECT SUM(rad1) AS rad1,SUM(rad2) AS rad2,SUM(rad3) AS rad3,SUM(rad4) AS rad4,SUM(rad5) AS rad5,SUM(rad6) AS rad6,SUM(rad7) AS rad7,SUM(rad8) AS rad8 FROM professional";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  $row = $result->fetch_assoc();

                  extract($row);



                }else{
                  $rad1="0";
                  $rad2="0";
                  $rad3="0";
                  $rad4="0";
                  $rad5="0";
                  $rad6="0";
                  $rad7="0";
                  $rad8="0";
                }


              ?>
              <script>
              const xValues = ['Question 1','Question 2','Question 3','Question 4','Question 5','Question 6','Question 7','Question 8'];
              const yValues = ['<?php echo$rad1?>','<?php echo$rad2?>','<?php echo$rad3?>','<?php echo$rad4?>','<?php echo$rad5?>','<?php echo$rad6?>','<?php echo$rad7?>','<?php echo$rad8?>'];

              new Chart("myChart", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                  }]
                },
                options: {
                  legend: {display: false},
                  // scales: {
                  //   yAxes: [{ticks: {min: 6, max:16}}],
                  // }
                }
              });
              </script>
            </div>
          </div>
          
        </body>
        </html>