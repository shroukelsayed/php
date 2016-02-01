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
	      <div class="clearfix"> </div>
	     </div>
	    </div>
   </div>
   <div class="main">
    <div class="container">
    	<ul class="content-home">
           <li class="col-sm-4">
              <a href="single.html" class="item-link" title="">
                <div class="bannerBox">
                   <img src="images/w1.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                   <div class="item-html">
                      <h3>Men's<span>Watches</span></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <button>Shop now!</button>
                   </div>
                </div>
              </a>
           </li>
           <li class="col-sm-4">
              <a href="single.html" class="item-link" title="">
                <div class="bannerBox">
                   <img src="images/w3.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                   <div class="item-html">
                      <h3>Men's<span>Watches</span></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <button>Shop now!</button>
                   </div>
                </div>
              </a>
           </li>
           <li class="col-sm-4">
              <a href="single.html" class="item-link" title="">
                <div class="bannerBox">
                   <img src="images/w2.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                   <div class="item-html">
                      <h3>Women's<span>Watches</span></h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      <button>Shop now!</button>
                   </div>
                </div>
              </a>
           </li> 
           <div class="clearfix"> </div>         
       </ul>
    </div>
    <div class="middle_content">
    	<div class="container">
    		<h2>Welcome</h2>
    		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
    	</div>
    </div>
   	<div class="content_middle_bottom">
   		<div class="header-left" id="home">
		      <section>
				<ul class="lb-album" >
					<li>
						<a href="#image-1">
							<img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
							<span>Pointe</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">x Close</a>
							<img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
							<div>
								<h3>pointe <span>/point/</span></h3>
								<p>Dance performed on the tips of the toes</p>
							</div>
						</div>
					</li>
					<li>
						<a href="#image-2">
							<img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
							<span>Port de bras</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
							<div>							
								<h3>port de bras <span>/ˌpôr də ˈbrä/</span></h3>
								<p>An exercise designed to develop graceful movement and disposition of the arms</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-3">
							<img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
							<span>Plié</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
							<div>							
								<h3>pli·é <span>/plēˈā/</span></h3>
								<p>A movement in which a dancer bends the knees and straightens them again</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-4">
							<img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
							<span>Adagio</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
							<div>							
								<h3>a·da·gio <span>/əˈdäjō/</span></h3>
								<p>A movement or composition marked to be played adagio</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
							<span>Frappé</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
							<div>							
								<h3>frap·pé<span>/fraˈpā/</span></h3>
								<p>Involving a beating action of the toe of one foot against the ankle of the supporting leg</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
							<span>Glissade</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
							<div>							
								<h3>glis·sade <span>/gliˈsäd/</span></h3>
								<p>One leg is brushed outward from the body, which then takes the weight while the second leg is brushed in to meet it</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
							<span>Jeté</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
							<div>							
								<h3>je·té <span>/zhə-ˈtā/</span></h3>
								<p>A springing jump made from one foot to the other in any direction</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
							<span>Piqué</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
							<div>							
								<h3>pi·qué <span>/pēˈkā/</span></h3>
								<p>Strongly pointed toe of the lifted and extended leg sharply lowers to hit the floor then immediately rebounds upward</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
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