<?php
session_start();
include 'user.php';

$_method = $_SERVER['REQUEST_METHOD'];

$epat='/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/';
$passpat= '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/';

if($_method == 'POST') {
	if (isset($_POST['lpassword'])) {
		$user  =new User();
		$user->IfExist($_POST['lemail']);
		if (isset($user->password)) {
			if ($_POST['lpassword']==$user->password) {
				$response='OK';
				$_SESSION['user_id']=$user->id;
			}
			else
				$response='Bad Request';
		}
		
		else 
			$response='Bad Request';
		echo $response;

	
	} else {
		//insert action
		$errors = [];
		if(!isset($_POST['fname']) || !isset($_POST['lname']) || empty(trim($_POST['fname'])) || empty(trim($_POST['lname'])) ){
			$errors[] = "Please, Enter a valid name";
		}
		else
			$name = trim($_POST['fname'])." ".trim($_POST['lname']);

		if(!isset($_POST['email'])  || !preg_match($epat , $_POST['email'])  ){
			$errors[] = "Please, Enter a valid email";		
		}
		else{
			$user  =new User();
			$user->IfExist($_POST['email']);
			if(isset($user->id)) {
				$errors[]="This email has already registered";
			}
			
		}


		if (!isset($_POST['password']) || !preg_match($passpat, $_POST['password']) ) {
			$errors[] = "Please, Enter a valid password";
		}
		elseif (!isset($_POST['passconfirm']) || $_POST['password']!=$_POST['passconfirm']) {
			$errors[] = "The confirmation password does not match the password entered";
		}
	
		

		if ( !isset($_POST['address']) || empty(trim($_POST['address'])) ) {
			$errors[] = "Please, Enter a valid address";
		}
		if (!isset($_POST['job']) || $_POST['job']== 'Default'){
			$errors[] = "Please, Choose a job";
		}

		if (!isset($_POST['birthdate']) || empty(trim($_POST['birthdate'])) ){
			$errors[] = "Please, Pick a birthdate";	
		}

		if (!isset($_POST['interests']) || empty(trim($_POST['interests'])) ) {
			$errors[] = "Please, Enter your interests";
		}

		if (empty($errors)){
			$user = new User;
			$user->name = $name;
			$user->email = $_POST['email'];
			$user->password = $_POST['password'];
			$user->credit = $_POST['credit'];
			$user->address = $_POST['address'];
			$user->job = $_POST['job'];
			$user->birthdate = $_POST['birthdate'];
			$user->interests = $_POST['interests'];
			$user->id=$user->insert();
			if($user->id>0) {
			 	echo "OK";			
			}
			else
				echo "Bad";		
		}
		else {
			echo json_encode($errors);
		}
	}	

}else if($_method=='GET') {
	// get user with a specific email
	if(isset($_GET['email'])) {
		$user  =new User();
		$user->IfExist($_GET['email']);
		if(isset($user->id)) {
			$response='OK';
		} else {
			$response='Bad Request';
		}
		echo $response;

	} else {
		// // get all users
		// $user = new User;
		// $data = $user->users();
		// if(count($data)>0) {
		// 	$response['data'] = $data;
		// 	$response['status']='OK';
		// 	$json_response = json_encode($response);
		// 	echo $json_response;
		// } 		
	}
}
$url = "http://localhost".$_SERVER['REQUEST_URI'];

?>