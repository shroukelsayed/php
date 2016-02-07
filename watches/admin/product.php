<?php
	class Products{
		var $id;
		var $name;
		var $cat_id;
		var $price;
		var $qty;
		var $sale;
		var $pic1;
		var $pic2;
		var $pic3;
		var $pic4;

		private static $conn = Null;

		public function __construct($id=-1) {
		if(is_null(self::$conn)) self::$conn = mysqli_connect('localhost','root','osama','store');
		if($id!=-1) {
			$query = "select * from products where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$products = mysqli_fetch_assoc($result);
			$this->id = $products['id'];
			$this->name = $products['name'];
			$this->cat_id = $products['cat_id'];
			$this->price = $products['price'];
			$this->qty= $products['qty'];
			$this->sale= $products['sale'];
			$this->pic1= $products['pic1'];
			$this->pic2= $products['pic2'];
			$this->pic3= $products['pic3'];
			$this->pic4= $products['pic4'];
			}
		}
	
		function insert() {
			$query = "insert into products(name,cat_id,price,qty,sale,pic1,pic2,pic3,pic4) values('$this->name','$this->cat_id','$this->price','$this->qty','$this->sale' ,'$this->pic1','$this->pic2','$this->pic3','$this->pic4')";
			$result  = mysqli_query(self::$conn,$query);
			return mysqli_insert_id(self::$conn);
		}
	
		function update($id) {
			$query = "update products set name='$this->name',price='$this->price',qty='$this->qty',sale='$this->sale' where id=$id ";
			$result = mysqli_query(self::$conn,$query);
			//return mysqli_num_rows($result);			
		}

		function delete($id) {
			$query = "delete from products where id=$id";
			mysqli_query(self::$conn,$query);
		}
	
		function updateQty(){
			$query = "update products set qty='$this->qty' where id=$this->id";
			mysqli_query(self::$conn,$query);
		}
	
		function updateSale(){
			$query = "update products set sale='$this->sale' where id=$this->id";
			mysqli_query(self::$conn,$query);
		}
	
		function updatePrice(){
			$query = "update products set price='$this->price' where id=$this->id";
			mysqli_query(self::$conn,$query);
		}
	
		function searchByPrice(){
			$query = "select * from products where price=$price ";
			$result = mysqli_query(self::$conn,$query);
			$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;
		}
	
		function searchByName($name){
			//echo "in query";
			$query = "select id from products where name='$name'";
			$result = mysqli_query(self::$conn,$query);
			$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;
		}

		function selectAllProducts(){
			$query = "select * from products";
			$result = mysqli_query(self::$conn,$query);
			$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;	
		}
		function serchById($id) {
		$query = "select * from products where cat_id=$id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;	
	}
	}
?>