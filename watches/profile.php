<!DOCTYPE HTML>
<html>
<head>
<title>Watches an E-Commerce online Shopping</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"></script>
</head>
<body>
	<div class="banner">
   	  <div class="container">
   	  	<div class="header_top">
   	  	   <div class="header_top_left">
   	  	   	  <div class="box_11"><a href="register.php">Register</a></div><br>	
	  	      <div class="box_11"><a href="checkout.php">
		      <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	       </div>
           <div class="header_top_right">
			 <ul class="header_user_info">
				  <a class="login" href="profile.php">
				  <?php
					session_start();
					include 'user.php';
					if(isset($_SESSION['user_id'])) {
						$user= new User($_SESSION['user_id']);
						?>
					<i class="user"> </i> 
					<li class="user_desc">Welcome <?php echo $user->name; ?></li> 
				  </a>
				  <br/>
				  		<?php
						if ($user->email=='admin@gmail.com' && $user->password=='Admin1234') 
							{
							?>
								<a href="admin/index.php">
								  <li class="user_desc">&nbsp&nbsp<img src="images/settings-icon.png" width="20px" height="20px" align="left">&nbsp&nbsp&nbsp Settings
					            </li></a>
				  <?php
							}
						}
				  ?>
				 <div class="clearfix"> </div> 	
		     </ul>
		    <!-- start search-->
				<div class="search-box">
				   <div id="sb-search" class="sb-search">
					  <form>
						 <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						 <input class="sb-search-submit" type="submit" value="">
						 <span class="sb-icon-search"> </span>
					  </form>
				    </div>
				 </div>
				 <!----search-scripts---->
				 <script src="js/classie1.js"></script>
				 <script src="js/uisearch.js"></script>
				   <script>
					 new UISearch( document.getElementById( 'sb-search' ) );
				   </script>
					<!---//search-scripts-->
		            <div class="clearfix"> </div>
			 </div>
		     <div class="clearfix"> </div>
	  </div>
	  <div class="header_bottom">
	   <div class="logo">
		  <h1><a href="home.php"><span class="m_1">W</span>atches</a></h1>
	   </div>
   	   <div class="menu">
	     <ul class="megamenu skyblue">
	     	<?php
             //   include 'SelectAllCategories.php';
                include 'admin/categories.php';
                $categs=new categories();
                $array = $categs->categories(NULL);
                foreach ($array as $key => $categories) {
                    $subs=$categs->categories($categories['id']);
            ?>
            
			<li><a class="color2" href="#"><?php echo $categories['name'];?></a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $categories['name'];?></h4>
								<?php 
                                    foreach ($subs as $key => $subs) { 
                                 ?>
								<ul>
									<li><a href="men.php"><?php echo $subs['name'];?></a></li>
								</ul>
								<?php
                                    }
                                  }
                                ?>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										  <img src="images/p1.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">watches</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/p2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">watches</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/p3.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">watches</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
				 </li>
				<li><a class="color10" href="brands.php">Brands</a></li>
				<li class="color10"><a class="color3" href="home.php">Sale</a></li>
				<li class="color10"><a class="color3" href="contact.php">Contact Us</a></li>
				<div class="clearfix"> </div>
			</ul>
		</div>
	      <div class="clearfix"> 
	      </div>
	     </div>
	    </div>
   </div>
   <div class="main">
   <div class="container">
   	<div class="col-md-9">
   	<?php
   		if(isset($_POST['edit'])) {

		?>
		 <form method="post" action="home.php">
    	   <table class="table table-bordered table-hover table-striped table-responsive">
    		<thead> <tr>
    					<th colspan="2" class="danger" > &nbsp&nbsp&nbsp&nbsp&nbsp User Profile Data :</th>
    				</tr> 
    		</thead>
    		<tr>
    			<td>User Name : </td>
    			<td><input type="text" name="name" value="<?php echo $user->name; ?>"></td>
    		</tr>
    		<tr>
    			<td>User Email : </td>
    			<td><input type="text" name="email" value="<?php echo $user->email; ?>"></td>
    		</tr>
    		<tr>
    			<td>Password : </td>
    			<td><input type="password" name="password" value="<?php echo "*********" ?>"></td>
    		</tr>
    		<tr>
    			<td>Credit : </td>
    			<td><input type="text" name="credit" value="<?php echo $user->credit; ?>"></td>
    		</tr>
    		<tr>
    			<td>Address : </td>
    			<td><input type="text" name="address" value="<?php echo $user->address; ?>"></td>
    		</tr>
    		<tr>
    			<td>BirthDate : </td>
    			<td><input type="date" name="birthdate" value="<?php echo $user->birthdate; ?>"></td>
    		</tr>
    		<tr>
    			<td>Job : </td>
    			<td><input type="text" name="job" value="<?php echo $user->job; ?>"></td>
    		</tr>
    		<tr>
    			<td>Interests :</td>
    			<td><input type="textarea" name="interests" value="<?php echo $user->interests; ?>"></td>
    		</tr>
    	</table>
    	<button type="submit" class="btn btn-primary" name="save"> Save Changes</button>
    	</form>
   	<?php
   		}else{
   			?>
   	  <form method="post" action="#">
    	<table class="table table-bordered table-hover table-striped table-responsive">
    		<thead> <tr>
    					<th colspan="2" class="danger" > &nbsp&nbsp&nbsp&nbsp&nbsp User Profile Data :</th>
    				</tr> 
    		</thead>
    		<tr>
    			<td>User Name : </td>
    			<td><?php echo $user->name; ?></td>
    		</tr>
    		<tr>
    			<td>User Email : </td>
    			<td><?php echo $user->email; ?></td>
    		</tr>
    		<tr>
    			<td>Password : </td>
    			<td><?php echo "*********" ?></td>
    		</tr>
    		<tr>
    			<td>Credit : </td>
    			<td><?php echo $user->credit; ?></td>
    		</tr>
    		<tr>
    			<td>Address : </td>
    			<td><?php echo $user->address; ?></td>
    		</tr>
    		<tr>
    			<td>BirthDate : </td>
    			<td><?php echo $user->birthdate; ?></td>
    		</tr>
    		<tr>
    			<td>Job : </td>
    			<td><?php echo $user->job; ?></td>
    		</tr>
    		<tr>
    			<td>Interests :</td>
    			<td><?php echo $user->interests; ?></td>
    		</tr>
    	</table>
    	<button type="submit" class="btn btn-primary" name="edit"> Edit Profile</button>
    	</form>
    	<?php

	    		if(isset($_POST['save'])){
	    			//$user = new User();
	    			$user->id=$_SESSION['user_id'];
	    			$user->name=$_POST['name'];
	    			$user->email=$_POST['email'];
	    			$user->password=$_POST['password'];
	    			$user->address=$_POST['address'];
	    			$user->job=$_POST['job'];
	    			$user->birthdate=$_POST['birthdate'];
	    			$user->interests=$_POST['interests'];
	    			$user->credit=$_POST['credit'];
	    			
	   				$user->update();
	   			}
	   			$id=$_SESSION['user_id'];
	   			unset($_SESSION['user_id']);
	   			$_SESSION['user_id']=$id;
	   			if(isset($_SESSION['user_id'])){
	   				$_SESSION['name']=$user->name;
	   				$_SESSION['email']=$user->email;
	   				$_SESSION['password']=$user->password;
	   				$_SESSION['address']=$user->address;
	   				$_SESSION['job']=$user->job;
	   				$_SESSION['birthdate']=$user->birthdate;
	   				$_SESSION['interests']=$user->interests;
	   				$_SESSION['credit']=$user->credit;
	   			}
    		}
    	?>
    </div>
    </div>
    </div>
    <div class="middle_content">
    	<div class="container">
    	</div>
    </div>
   <div class="footer">
   	 <div class="container">
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2015 Watches. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	    </div>
   	</div>
   </div>
</body>
</html>		