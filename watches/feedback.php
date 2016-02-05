<?php

	class Feedback{

		var $name;
		var $email;
		var $subject;
		var $msg;

		private static $conn = Null;
		
		public function __construct($id=-1) {
		if(is_null(self::$conn)) self::$conn = mysqli_connect('localhost','root','osama','store');
		if($id!=-1) {
			$query = "select * from feedback where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$feedback = mysqli_fetch_assoc($result);
			$this->id = $feedback['id'];
			$this->name = $feedback['name'];
			$this->email = $feedback['email'];
			$this->subject = $feedback['subject'];
			$this->msg= $feedback['msg'];
			}
		}
	
		function insert() {
			$query = "insert into feedback(name,email,subject,msg) values('$this->name','$this->email','$this->subject','$this->msg')";
			$result  = mysqli_query(self::$conn,$query);
			return mysqli_insert_id(self::$conn);
		}

		function selectAllFeedbacks(){
			$query = "select * from feedback";
			$result = mysqli_query(self::$conn,$query);
			$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;	
		}
	}
?>