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