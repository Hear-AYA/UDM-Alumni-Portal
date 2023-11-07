<?php
    include'connect/connect.php';

    include'header.php';
?>

<style type="text/css">
  table, th, td {
    border: 1px solid black;
    padding: 20px;
}

table {
    background-color: antiquewhite;
    font-weight: bold;
    padding: 25px;
    position: absolute;
    left: 295px;
    top: 130px;
    height: 50%;
    width: 75%;
    
}
</style>
<body style="background: url('bg/udm.jpg');">
    <div class="container-fluid" >
      <?php
        include'navigation.php';
      ?>
      <center>
    <table style="background: white !important; padding: 20px !!important; text-align: center;">
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
    </center>
  </div>
</body>
<?php
    include'footer.php';
?>