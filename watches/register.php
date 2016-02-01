<!DOCTYPE HTML>
<html>
<head>
<title>Watches an E-Commerce online Shopping </title>
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
<script src="js/simpleCart.min.js"> </script>

<!-- Registeration Form styles  -->
<script type="text/javascript" src="registeration.js"></script>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/Rgcss/demo.css" />
<link rel="stylesheet" type="text/css" href="css/Rgcss/style.css" />
<link rel="stylesheet" type="text/css" href="css/Rgcss/animate-custom.css" />
<style type="text/css" media="screen">
	#wrapper label{
	color: rgb(64, 92, 96);
	text-align:left;
}	
#passconfirmlabel:after{
    content: attr(data-icon);
    font-family: 'FontomasCustomRegular';
    color: rgb(106, 159, 171);
    position: absolute;
    left: -145px;
    top: 35px;
	width: 30px;
}
#emaillabel:after{
	left: -225px;	
}
#creditlabel:after{
	left: -220px;	
}
</style>

</head>
<body>
	<div class="men_banner">
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
			  <a class="login" href="login.php">
				<i class="user"> </i> 
				<li class="user_desc">Log In</li>
			  </a>
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
					<!----//search-scripts---->
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
	        <div class="clearfix"> </div>
	    </div>
	   </div>
    </div>
    <div class="account-in">
   	  <div class="container">
   	  	<div class='alert alert-danger' style="display:none" id="errors"><b></b></div>
   	     <div id="wrapper">
	        <form   autocomplete="on" name='registration'  onReset="return confirm('Do you want to reset ?')"> 
	            <h1> Sign up </h1> 
	             
	                <label for="fname" class="uname" data-icon="u"> First Name</label>
	                <input name="fname" id="fname" required="required" type="text" placeholder="FirstName690" />
	            	</br>
					<span style="display:none"  class='alert alert-danger' id="fnspan">Please enter a name</span>

	                <label for="lname" class="lname" data-icon="u"> Last Name</label>
	                <input name="lname" id="lname" required="required" type="text" placeholder="LastName690" />
	                </br>
					<span style="display:none " class='alert alert-danger' id="lnspan">Please enter a name</span>
	             
	                <label for="email" class="youmail" data-icon="e" id="emaillabel">  Email</label>
	                <input name="email" id="email" required="required" type="email" placeholder="mysupermail@mail.com"/>
	                </br>
					<span style="display:none" class='alert alert-danger' id="espan"></span> 
	             
	                <label for="password" class="youpasswd" data-icon="p"> Password </label>
	                <input name="password" id="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
	                </br>
					<span style="display:none" class='alert alert-danger' id="pspan">password must contain at least  1 number, 1 upper and 1 lowercase and its length must be at least 8 </span>
	           
	                <label for="passconfirm" class="youpasswd" data-icon="p" id="passconfirmlabel" >Please confirm your password </label>
	                <input name="passconfirm" id="passconfirm"  required="required" type="password" placeholder="eg. X8df90EO"/>
	                </br>
					<span style="display:none" class='alert alert-danger' id="cpspan">Doesn't match the password you entered!</span>
	         
	                <label for="credit" class="youpasswd" data-icon="p" id="creditlabel"> Credit </label>
	                <input name="credit" id="credit" required="required" type="text" placeholder="eg. 123456789"/>
	                </br>
					<span style="display:none" class='alert alert-danger' id="cspan">It takes numbers only</span>
	             
	                <label for="address" class="youpasswd" > Address </label>
	                <input name="address" id="address" required="required" type="text" placeholder="eg. Mansoura"/>
	                </br>
					<span style="display:none" class='alert alert-danger' id="aspan">Please enter an address</span>

	                <label for="birthdate" class="youpasswd" > Birth Date </label>
	                <input name="birthdate" id="birthdate" required="required" type="date" placeholder="eg. 10/12/1992"/>
	                </br>
					<span style="display:none" class='alert alert-danger' id="bspan">Please pick your birthdate</span>

	                <label for="Job" class="youpasswd" > Your Job </label><br/>
	                <select class="youpasswd" name="Job" id="job" required="required">
	                    <option selected="" value="Default">Please select a Job</option>
	                    <option value="Doctor">Doctor</option>
	                    <option value="Engineer">Engineer</option>
	                    <option value="Accountant">Accountant</option>
	                    <option value="Other">Other</option>
	                </select>
	                </br>
						<span style="display:none" class='alert alert-danger' id="jspan">Please select a job</span>

	                <br/>
	                <label for="interests" class="youpasswd" > Interests </label><br/>
	                <textarea name="interests" id="interests" cols="52"></textarea>
	                </br>
					<span style="display:none" class='alert alert-danger' id="ispan">Please write your interests</span>
	            
	            <p class="signin button"> 
	            	
					<input type="reset" name="reset" value="reset" id="reset" />&nbsp&nbsp&nbsp&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="submit" id="submit"/>
				</p>
	        </form>
	    </div>
	  </div>
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