<?php
//medical-send

include "../db_conn.php";

extract($_POST);

$save_query = "INSERT INTO `medicalrecords` (`id`, `name`, `course_yr_sec`, `age`, `contact`, `address`, `email`, `id_number`, `gender`, `dob`) VALUES (NULL, '$pname', '$course', '$age', '$contact', '$address', '$email', '$num', '$gender', '$dob')";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=medical-records&status=success");
}else{
	echo 'DB error, fck!';
}

