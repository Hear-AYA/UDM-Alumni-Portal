<?php
        require_once "../ADMIN DASH/connect/connect.php";
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
    <title>UDM Alumni Portal</title>
</head>
<body>
    
  <div class="container1">
      <div class="topbar">
        <p>Welcome Alumni!</p>
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
          <h3>EVENTS & NEWS</h3>
          
          <hr>
          <div class="row">
            <div class="col-lg-push-4 col-md-4 col-md-push-4">
              <div class="searchForm type2">
                <form action="" class="searchForm"><!-- Add The Appropriate Action for Your Site's Search Form/Page -->
                  <label class="sr-only" for="searchNewsEvents">Search News and Events</label>
                   <input id="searchNewsEvents" name="data" id="data" placeholder="What are you looking for?" type="search" onkeyup="search_data(this.value);search_datas(this.value);"> <input type="submit" value="Search">
                </form>
              </div>
            </div>
            <div class="clearfix visible-sm visible-xs">
              &nbsp;
            </div>
            <div class="col-lg-push-4 col-md-4 col-md-push-4">
              <div class="dropdownCategories">
              <label class="sr-only" for="dropdownNewsEvents">Category dropdown for News and Events</label>
              <select id="title" onchange="search_data(this.value);search_datas(this.value);">
                <option></option>
                <?php
                  $sql = "SELECT DISTINCT title FROM announcement";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      extract($row);
                     ?>
                     <option><?php echo$title?></option>
                     <?php
                    }
                  }
                ?>
              </select>
              </div>
            </div>  
            <div class="clearfix visible-sm visible-xs">
              &nbsp;
            </div>
            <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
              <ul class="nav nav-pills" role="tablist">
                <li class="active">
                  <a data-toggle="tab" href="#tab1" role="tab">Events</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#tab2" role="tab">News</a>
                </li>
              </ul>
            </div>
          </div><!-- / row -->
          <hr>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
              <div class="row" id="events">
              </div>
            </div>
            <div class="tab-pane fade" id="tab2">
              <div class="row" id="news">
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          function  search_data(){
            var data=document.getElementById('searchNewsEvents').value;
            var title=document.getElementById('title').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("events").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "events_news.php?data=" + data+'&title='+title+'&type=Event', true);
            xmlhttp.send();
          }
          function  search_datas(){
            var data=document.getElementById('searchNewsEvents').value;
            var title=document.getElementById('title').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("news").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "events_news.php?data=" + data+'&title='+title+'&type=News', true);
            xmlhttp.send();
          }


          search_data();
          search_datas();
        </script>
      </body>
      </html>