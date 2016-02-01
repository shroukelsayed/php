<?php

class cart{
	
	var $user_id;
	var $prod_id;
	var $qty;

	private static $conn = Null;

	public function __construct($id=-1) {
		if(is_null(self::$conn)) self::$conn = mysqli_connect('localhost','root','osama','store');
		if($id!=-1) {
			# to get all the products for a specific user
			$this->user_id=$id;
			$query = "select * from cart where user_id=$id";
			$result = mysqli_query(self::$conn,$query);
			$data = [];

			while($row = mysqli_fetch_assoc($result)) 
				$data []= ['prod_id'=>$row['prod_id'],'qty'=>$row['qty']];		
			// var_dump($data);
			return $data;
		}
	}

	function insert($user_id,$prod_id){
		$query = "select * from cart where user_id='$user_id' and prod_id='$prod_id' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$cart = mysqli_fetch_assoc($result);
		$this->qty = $cart['qty'];
		if(!is_null($this->qty)){
			$query = "update cart set qty=qty+1 where user_id=$user_id and prod_id=$prod_id";
			mysqli_query(self::$conn,$query);
		}
		else{
			$query = "insert into cart values('$user_id','$prod_id',1)";
			mysqli_query(self::$conn,$query);
		}
	}

	function delete($user_id,$prod_id=-1){
		if($prod_id==-1)
			$query = "delete from cart where user_id=$user_id";
		else
			$query = "delete from cart where user_id=$user_id and prod_id=$prod_id";
		
		mysqli_query(self::$conn,$query);
	}

	function decrease($user_id,$prod_id){
		$query = "select * from cart where user_id='$user_id' and prod_id='$prod_id' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$cart = mysqli_fetch_assoc($result);
		$this->qty = $cart['qty'];
		if ($this->qty>1) 
			$query = "update cart set qty=qty-1 where user_id=$user_id and prod_id=$prod_id";
		else
			$query = "delete from cart where user_id=$user_id and prod_id=$prod_id";
		mysqli_query(self::$conn,$query);
	}

}
?>