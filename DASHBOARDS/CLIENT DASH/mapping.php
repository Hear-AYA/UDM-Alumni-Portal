<?php
     require_once "../ADMIN DASH/connect/connect.php";
    session_start();

    if(!isset($_SESSION['email'])){
      header('location: index.php');
    }

    $email=$_SESSION['email'];
    $emails=$_SESSION['email'];


    $sql = "SELECT * FROM regsinfo WHERE email='$email' LIMIT 1";
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
    <link rel="stylesheet" href="css/user dash.css">
    <link rel="stylesheet" type="text/css" href="css/mapp.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>UDM Alumni Portal</title>
</head>
<body>
    <div class="container">
      <div class="topbar">
        <p>Welcome Alumni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
        <div class="bg">
          <img src="img/aaa.jpg" alt="avt" class="avt">
        </div>
      <div class="sidebar">
        <h1>Dashboard</h1>
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
        <div class="contain1">
	
    <div class="titles">
	<h1 style="margin-top: -20px;">Aligning Professional Paths with Degree Attainments</h1>
    </div>

	<!-- Create Form -->
	<form id="form" method="POST" >
		<div class="form-control">
			<label for="question" id="label-question">
				1. 	Is your current job currently related
					<br><p style="text-indent: 17px;">to your college major?</p>
			</label>
			<input type="hidden" name="alumni_id" value="<?php echo$id?> ">
			<label for="recommed-4">
			<input type="radio"
				id="recommed-4"
				name="rad1" value="1"> Yes</input>
			</label>

			<label for="recommed-5">
			<input type="radio"
				id="recommed-5"
				name="rad1" value="0"> No</input>
			</label>
		</div>

		<div class="form-control">
			<label for="question" id="label-question">
				2. Did the University prepare you for
				<br><p style="text-indent: 17px;">your career path?</p>
			</label>

			<label for="recommed-6">
				<input type="radio"
					id="recommed-6"
					name="rad2" value="1"> Yes</input>
				</label>
	
				<label for="recommed-7">
				<input type="radio"
					id="recommed-7"
					name="rad2" value="0"> No</input>
				</label>
		</div>

		<div class="form-control">
			<label for="question" id="label-question">
				3. Did you switch industries after graduation?
			</label>

			<label for="recommed-8">
				<input type="radio"
					id="recommed-8"
					name="rad3" value="1"> Yes</input>
				</label>
	
				<label for="recommed-9">
				<input type="radio"
					id="recommed-9"
					name="rad3" value="0"> No</input>
				</label>
		</div>

		<div class="form-control">
			<label for="question" id="label-question">
				4. Have you worked in a position
				<p style="text-indent: 17px;">relatedto your internship</p>
				<p style="text-indent: 17px;">experience?</p>
			</label>

			<label for="recommed-10">
				<input type="radio"
					id="recommed-10"
					name="rad4" value="1"> Yes</input>
				</label>
	
				<label for="recommed-11">
				<input type="radio"
					id="recommed-11"
					name="rad4" value="0"> No</input>
				</label>
		</div>

		<!-- <div class="form-control">
			<label for="question" id="label-question">
				5. How long did it take for you to find  
				<br><p style="text-indent: 17px;">a job after you graduate?</p>
			</label>

			<label for="recommed-12">
				<input type="radio"
					id="recommed-12"
					name="rad5" value="1"> 0 to 6 months</input>
				</label>
	
				<label for="recommed-13">
				<input type="radio"
					id="recommed-13"
					name="rad5" value="0"> 7 months or longer</input>
				</label>
		</div>

		<div class="form-control">
			<label for="question" id="label-question">
				6. Did you achieve a specific career  
				<br><p style="text-indent: 17px;">goal you set for yourself after</p>
				<p style="text-indent: 17px;">graduation?</p>

			</label>

			<label for="recommed-14">
				<input type="radio"
					id="recommed-14"
					name="rad6" value="1"> Yes</input>
				</label>
				<label for="recommed-15">
				<input type="radio"
					id="recommed-15"
					name="rad6" value="0"> No</input>
				</label>
		</div>

		<div class="form-control">
			<label for="question" id="label-question">
				7. While at UDM, did you have any
				<br><p style="text-indent: 19px;">Idea that your current job existed?</p>
			</label>

			<label for="recommed-16">
				<input type="radio"
					id="recommed-16"
					name="rad7" value="1"> Yes</input>
				</label>
	
				<label for="recommed-17">
				<input type="radio"
					id="recommed-17"
					name="rad7" value="0"> No</input>
				</label>
		</div>

		<div class="form-control">
			<label for="question" id="label-question">
				8. Based on what you know, would
				&nbsp;&nbsp;&nbsp;&nbsp;you pick the same career path?
			</label>

			<label for="recommed-18">
				<input type="radio"
					id="recommed-18"
					name="rad8" value="1"> Yes</input>
				</label>
	
				<label for="recommed-19">
				<input type="radio"
					id="recommed-19"
					name="rad8" value="0"> No</input>
				</label>
		</div> -->

		<button type="submit" value="submit" name="degree">
			Submit
		</button>
	</form>
	<?php

		if(isset($_POST['degree'])){

			extract($_POST);

			$data="";

				foreach ($_POST as $k => $v) {
					if(empty($data)){
	          $data .= " $k='$v' ";
	        }else{

	          if($k=="degree"){
	            $data .= "";
	          }else if($k=="rad3"){
	            $data .= ", $k='$v' ";
	          }else{
	            $data .= ", $k='$v' ";
	          }
	          
	        }
				}

				$sql = "SELECT *  FROM professional WHERE alumni_id='$alumni_id'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  $sql = "UPDATE professional SET $data WHERE alumni_id='$alumni_id'";
				}else{
					$sql = "INSERT INTO professional SET $data";
				}

				

				if (mysqli_query($conn, $sql)) {
				  ?>
		       <script type="text/javascript">
		         alert('The response you provided has been saved');
		         location.href='mapping.php';
		       </script>
		       <?php
				} else {
				  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		}
?>
</body>
</html>


