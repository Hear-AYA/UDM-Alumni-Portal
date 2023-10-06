<?php
    include'connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alumnirecords.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"/>
    <title>UDM Alumni Portal</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
          <p>Welcome Admin!</p>
            <img src="img/udm logo.png" alt="Avatar" class="avatar">          
          </div>
            <img src="img/UDM_Lights.jpg" alt="avt" class="avt">
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
    <table>
        <tr>
            <th>Avatar</th>
            <th>Name</th>
            <th>Course Graduated</th>
            <th>Action</th>
        </tr>

        <?php
            $sql = "SELECT * FROM regsinfo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               extract($row);
        ?>
          <tr>
              <td>
                  <?php
                    if($img_loc!==""){
                      ?>
                        <img src="../CLIENT DASH/uploads/<?php echo$img_loc?>" width="100px" height="100px" style="border-radius:100px;">
                      <?php
                    }else{
                      ?>
                        <img src="../../dummy.png" width="100px" height="100px">
                      <?php
                    }
                  ?>
              </td>
              <td><?php echo$fullName?></td>
              <td><?php echo$degree?></td>
              <td>
                <a class="view" href="record.php?email=<?php echo$email?>">View</a> | <a class="view" href="record_edit.php?email=<?php echo$email?>">Edit</a>
              </td>
          </tr>
        <?php   
              }
            }
        ?>
        
    </table>
</body>
</html>