<?php
      include'connect/connect.php';
    
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
<body>
    
  <div class="container1"  style="margin-top:-30px;">
      <div class="topbar">
        <p>Welcome Alumni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
  
       
      <?php
        include'navigation.php';
      ?>
       
        <div class="container2" >

            <div class="job" >
              <center><canvas id="myChart" style="width:100%;max-width:50%; margin-top:20px;"></canvas></center>
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
                }


              ?>
              <script>
              const xValues = ['Q 1','Q 2','Q 3','Q 4'];
              const yValues = ['<?php echo$rad1?>','<?php echo$rad2?>','<?php echo$rad3?>','<?php echo$rad4?>'];

              new Chart("myChart", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "black",
                    borderColor: "black",
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
            <div class="row">
              <div class="col-md-6">
                <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
                <?php

                $data_score="0";

                $sql = "SELECT COUNT(rad1) FROM professional WHERE rad1='1'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score=$row['COUNT(rad1)'];
                  }
                } else {
                  $data_score="0";
                }
                ?>

                 <?php

                $data_score1="0";

                $sql = "SELECT COUNT(rad1) FROM professional WHERE rad1='0'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score1=$row['COUNT(rad1)'];
                  }
                } else {
                  $data_score1="0";
                }
                ?>
                <script>
                var xValues1 = ["Yes", "No"];
                var yValues1 = [<?php echo$data_score?>, <?php echo$data_score1?>, 44, 24, 15];
                var barColors = ["#135c10", "#91cf8b"];

                new Chart("myChart1", {
                  type: "bar",
                  data: {
                    labels: xValues1,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues1
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Question 1. Is your current job directly related to your degree?"
                    }
                  }
                });
                </script>
              </div>
              <div class="col-md-6">
                <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                <?php

                $data_score="0";

                $sql = "SELECT COUNT(rad2) FROM professional WHERE rad2='1'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score=$row['COUNT(rad2)'];
                  }
                } else {
                  $data_score="0";
                }
                ?>

                 <?php

                $data_score1="0";

                $sql = "SELECT COUNT(rad2) FROM professional WHERE rad2='0'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score1=$row['COUNT(rad2)'];
                  }
                } else {
                  $data_score1="0";
                }
                ?>
                <script>
                var xValues2 = ["Yes", "No"];
                var yValues2 = [<?php echo$data_score?>, <?php echo$data_score1?>, 44, 24, 15];
                var barColors = ["#135c10", "#91cf8b"];

                new Chart("myChart2", {
                  type: "bar",
                  data: {
                    labels: xValues2,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues2
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Question 2. Did the University prepare you for your career path?"
                    }
                  }
                });
                </script>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                <?php

                $data_score="0";

                $sql = "SELECT COUNT(rad3) FROM professional WHERE rad3='1'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score=$row['COUNT(rad3)'];
                  }
                } else {
                  $data_score="0";
                }
                ?>

                 <?php

                $data_score1="0";

                $sql = "SELECT COUNT(rad3) FROM professional WHERE rad3='0'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score1=$row['COUNT(rad3)'];
                  }
                } else {
                  $data_score1="0";
                }
                ?>
                <script>
                var xValues3 = ["Yes", "No"];
                var yValues3 = [<?php echo$data_score?>, <?php echo$data_score1?>, 44, 24, 15];
                var barColors = ["#135c10", "#91cf8b"];

                new Chart("myChart3", {
                  type: "bar",
                  data: {
                    labels: xValues3,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues3
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Question 3. Did you switch industries after graduation?"
                    }
                  }
                });
                </script>
              </div>
              <div class="col-md-6">
                <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
                <?php

                $data_score="0";

                $sql = "SELECT COUNT(rad4) FROM professional WHERE rad4='1'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score=$row['COUNT(rad4)'];
                  }
                } else {
                  $data_score="0";
                }
                ?>

                 <?php

                $data_score1="0";

                $sql = "SELECT COUNT(rad4) FROM professional WHERE rad4='0'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $data_score1=$row['COUNT(rad4)'];
                  }
                } else {
                  $data_score1="0";
                }
                ?>
                <script>
                var xValues4 = ["Yes", "No"];
                var yValues4 = [<?php echo$data_score?>, <?php echo$data_score1?>, 44, 24, 15];
                var barColors = ["#135c10", "#91cf8b"];

                new Chart("myChart4", {
                  type: "bar",
                  data: {
                    labels: xValues4,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues4
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Question 4. Have you worked in a position related to your internship experience?"
                    }
                  }
                });
                </script>
              </div>
            </div>
          </div>
          
          </div>
          
          
        </body>
        </html>