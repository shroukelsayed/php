<?php
	
	include 'feedback.php';

	$feedback = new Feedback();

	$feedback['name'] = $_POST['name'];
	$feedback['email'] = $_POST['email'];
	$feedback['subject'] = $_POST['subject'];
	$feedback['msg'] = $_POST['msg'];

	$res = $feedback->insert();
	echo "$res";

?>