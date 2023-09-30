<?php
//change-pass-save

include "../db_conn.php";

extract($_POST);


$save_query = "UPDATE users SET password='$password' WHERE id = '$userid'";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=manage-user&status=success");
}else{
	echo 'DB error, fck!';
}

