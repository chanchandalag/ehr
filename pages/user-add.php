<?php
//user-add

include "../db_conn.php";

extract($_POST);

$save_query = "INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `role`) VALUES (NULL, '$uname', '$password', '$email', '$role')";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=manage-user&status=success");
}else{
	echo 'DB error, fck!';
}

