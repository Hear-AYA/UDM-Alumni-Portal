<?php
    include'connect/connect.php';
    include'header.php';

    $id=$_GET['id'];

    $sql = "SELECT * FROM job WHERE id='$id'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    extract($row);

?>
<body style="background: url('bg/udm.jpg');">
    
  <div class="container1"   style="margin-top:-20px;">
      <?php 
        include'navigation.php';
      ?>
       
        <div class="container2">

            <div class="job">
              <form class="edit-form" method="POST">
                <input type="hidden" name="id">
                <div>
                  <label>Position Title</label><br>
                  <input class="form" type="text" name="position_title" value="<?php echo$position_title?>">
                </div>
                <div>
                  <label>Requirements</label><br>
                  <textarea type="text" name="requirements" value="" style="width: 250px;height: 150px;"><?php echo$requirements?></textarea>
                </div>
                <div>
                  <label>Salary/Job/Pay Grade</label><br>
                  <input type="text" name="job"  value="<?php echo$job?>">
                </div>
                <div>
                  <label>Monthly Salary</label><br>
                  <input type="text" name="monthly_salary" value="<?php echo$monthly_salary?>">
                </div>
                <fieldset>
                  <legend>Qualifications</legend>
                  <div>
                    <label>Education</label><br>
                    <input type="text" name="education" value="<?php echo$education?>">
                  </div>
                  <div>
                    <label>Training</label><br>
                    <input type="text" name="training" value="<?php echo$training?>">
                  </div>
                  <div>
                    <label>Experience</label><br>
                    <input type="text" name="experience" value="<?php echo$experience?>">
                  </div>
                  <div>
                    <label>Eligibility</label><br>
                    <input type="text" name="eligibility" value="<?php echo$eligibility?>">
                  </div>
                  <div>
                    <label>Research Output</label><br>
                    <input type="text" name="research" value="<?php echo$research?>">
                  </div>
                  <div>
                    <label>Community Extension Service</label><br>
                    <input type="text" name="community" value="<?php echo$community?>">
                  </div>
                  <div>
                    <label>Competency (if applicable)</label><br>
                    <input type="text" name="competency" value="<?php echo$competency?>">
                  </div>
                  <div>
                    <label>Place of Assignment</label><br>
                    <input type="text" name="assignment" value="<?php echo$assignment?>">
                  </div>
                  <div>
                    <label>Open positions</label><br>
                    <input type="text" name="open_positions" value="<?php echo$open_positions?>">
                  </div>
                </fieldset><br>
                <!-- <button class="btn btn-primary" name="save_job">Save Changes</button> -->
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