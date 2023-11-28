<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "regsdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


     date_default_timezone_set('Asia/Manila');

      $datestamp = date("Y-m-d");
      $timestamp = date("H:i:s");

      $datestamp1 = date("M d,Y");

      $date_time = date("Y-m-d H:i:s");
      $timestamp2 = date("H:i a");
      $day=date('l');
      $day_num=date('d');
      $month=date('M');
      $year=date('Y');

      $date_now = date("d/m/Y");
      $date_nows = date("m-d-Y");

      $date_nows_plus = strtotime(date("m/d/Y"));

      $plus_month = date("m-d-Y", strtotime("+1 month", $date_nows_plus));

      $today_str = strtotime(date("Y-m-d H:i:s"));



      function user_type($type){


        if($type=="admin"){
          return "ADMIN DASH/upcoming events.php";
        }else{
          return "CLIENT DASH/myprofile.php";
        }

      }
      

?>