<?php
    include'connect/connect.php';

    include'header.php';
?>

<style type="text/css">
  table, th, td {
    border: 1px solid black;
/*    padding: 20px;*/
}

table {
    background-color: antiquewhite;
    font-weight: bold;
/*    padding: 25px;*/
    position: absolute;
    left: 295px;
    top: 130px;
    height: 50%;
    width: 75%;
    
}


</style>
<body style="background: url('img/UDM_Lights.jpg') ;">

    <img src="img/aaa.jpg" alt="avt" class="avt">
    <div class="container-fluid" >
      <?php
        include'navigation.php';
      ?>
      <center>
    <table style="background: white !important; padding: 20px !!important; text-align: center;">
        <tr>
            <th><center>Name</center></th>
            <th><center>Degree</center></th>
            <th><center>Year Graduated</center></th>
            <td><center>Current Job</center></td>
            <th><center>Action</center></th>
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
              
              <td><?php echo$fullName?></td>
              <td><?php echo$degree?></td>
              <td><?php echo$year_graduated?></td>
              <td><?php echo$current_job?></td>
              <td>
                <a class="view" href="record.php?email=<?php echo$email?>">View</a> 
              </td>
          </tr>
        <?php   
              }
            }
        ?>
        
    </table>
    </center>
  </div>
</body>
<?php
    include'footer.php';
?>