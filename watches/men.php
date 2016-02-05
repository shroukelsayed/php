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
<link href="css/component.css" rel='stylesheet' type='text/css' />
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
				  <a class="login" href="profile.php">
				  <?php
					include 'session.php';
					
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
   <div class="men">
    <div class="container">
    	<div class="col-md-4 sidebar_men">
    	  <h3>Categories</h3>
    	  <?php
            $categs=new categories();
            $array = $categs->categories(NULL);
            foreach ($array as $key => $categories) {
                $subs=$categs->categories($categories['id']);
          ?>
            <ul class="product-categories color">
    	  <h3><?php echo $categories['name'];?></h3>
    	   
			<?php 
	            foreach ($subs as $key => $subs) { 
	         ?>
			<li class="cat-item cat-item-60"><a href="men.php?cat_id=<?php echo $subs['id'];?>"><?php echo $subs['name'];?></a></li>
			<?php
                }
              }
            ?>	
            </ul>
		</div>
    	<div class="col-md-8 mens_right">
    		<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="home.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        Men / Women&nbsp;
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="home.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			</div>
    		<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
				<div class="cbp-vm-options">
					<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
					<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
				</div>
				<div class="pages">   
       	   		</div>
				<div class="clearfix"></div>
				<ul>
				<?php
	                include 'admin/product.php';
	                $prod = new Products();
	                $array = @$prod->selectProductsById($_GET['cat_id']);
	                //var_dump($array);
	                foreach ($array as $key => $value) {
	            ?>
				<!-- ////////////////////////// -->
				  <li class="simpleCart_shelfItem">
						<a class="cbp-vm-image" href="single.php">
						 <div class="view view-first">
				   		  <div class="inner_content clearfix">
							<div class="product_image">
								<div class="mask1"><img src="<?php if($key == 'pic1' || $key == 'pic2' || $key == 'pic3'|| $key == 'pic4') echo $value; ?>" alt="image" class="img-responsive zoom-img"></div>
				                 <div class="product_container">
								   <h4><?php echo $value['name']; ?></h4>
								   <div class="price mount item_price"><?php echo $value['price']; ?></div>
								   <br/><br/>
								   <a class="button item_add cbp-vm-icon cbp-vm-add" href="men.php?cat_id=<?php echo $value['cat_id'];?>&cart=<?php echo $value['id']; ?>">Add to cart</a>

								   <!-- // add product into cart -->











								   

								 </div>		
							  </div>
		                     </div>
	                      </div>
	                    </a>
					</li>
					<?php 
						}
					?>
				<!-- ////////////////////////// -->
				</ul>
			</div>
			<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
	        <script src="js/classie.js" type="text/javascript"></script>
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