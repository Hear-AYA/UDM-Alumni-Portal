<?php

    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $cnum = $_POST['cnum'];
    $aa = $_POST['aa'];
    $grad = $_POST['grad'];
    $cjob = $_POST['cjob'];
    $jobexp = $_POST['jobexp'];
    $saexp = $_POST['saexp'];
    $gender = $_POST['gender'];
    $dob = $_POST['dateofbirth'];
    $course = $_POST['course'];
    $avatar1 = $_POST['avatar1'];

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "userprofile";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO myprofile (Fname, Mname, Lname, email, cnum, aa, grad, cjob, jobexp, saexp, gender, dob, course, avatar1) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)) {
    die (mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssisssssssss",
                    $Fname, $Mname, $Lname, $email, $cnum, $aa, $grad, $cjob, $jobexp, $saexp, $gender, $dob, $course, $avatar1);


mysqli_stmt_execute($stmt);

echo "Information Saved!";

?>

<html>
    <body>
        <h3><a href="myprofile.php">Back</a></h3>
    </body>
</html>