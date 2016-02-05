<?php
session_start();
include '../user.php';
if(isset($_SESSION['user_id'])) {
	$user= new User($_SESSION['user_id']);
		if ($user->email!='admin@gmail.com' && $user->password!='Admin1234')
			header("location:../home.php");
		
	}
?>