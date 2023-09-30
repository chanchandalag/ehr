<?php
//patient-edit-save

include "../db_conn.php";

extract($_POST);


$save_query = "UPDATE patient SET name='$pname', course_yr_sec='$course', age='$age', contact='$contact', address='$address', email='$email', id_number='$num', gender='$gender', dob='$dob' WHERE id = '$userid'";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=student-record&status=success");
}else{
	echo 'DB error, fck!';
}

