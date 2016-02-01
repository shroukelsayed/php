<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Controls</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Controls</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
         <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i> View Users</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Categories<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php
                                 //   include 'SelectAllCategories.php';
                                    include 'categories.php';
                                    $categs=new categories();
                                    $array = $categs->categories(NULL);
                                    foreach ($array as $key => $categories) {
                                        $subs=$categs->categories($categories['id']);
                                ?>
                                <a href="#"><?php echo $categories['name'];?><span class="fa arrow"></span></a>
                                <?php 
                                    foreach ($subs as $key => $subs) { ?>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="cat_home_list.php?x=<?php echo $subs['id']; ?>"><?php echo $subs['name'];?></a>
                                    </li>
                                </ul>
                                <?php
                                    }
                                        }
                                ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="insertData.php" class="active-menu"><i class="fa fa-table"></i>Insert Data</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner" name="center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Insert Data :
                        </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="btn-group btn-group-lg ">                       
                                <a href="insertCategory.php"><input type="button" class="btn btn-primary " value="Insert Categories"></a>
                                <a href="insertSubCategory.php"><input type="button" class="btn btn-primary " value="Insert SubCategories"></a>
                                <a href="productNames.php"><input type="button" class="btn btn-primary " value="Insert Products"></a>
                            </div>
                        <div class="panel panel-primary text-center no-boder bg-color-blue input-md">
                            <form action="productNames.php" id="main" method="post" role="form" class=" form-inline">
                            <div class="form-group">
                                    <label for="categories">ChooseCategory:</label>
                                    <select name="categories" class="form-control">
                                    <?php
                                        $categs=new categories();
                                        $array = $categs->categories(NULL);
                                        foreach ($array as $key => $categories) {
                                    ?>    
                                        <option value=<?php echo $categories['id'];?>><?php echo $categories['name'];?></option>
                                        <?php } ?>
                                    </select>
                                    
                                  <button type="submit" name="choose" id="ch1" value="ch1" class="btn btn-default">Submit</button>

                                  </form>
                                  <?php 

                                    if(isset($_POST['choose']))
                                    {
                                        if ($_POST['choose']=="ch1") {
                                            ?>
                                            <form action="productNames.php" method="post"  >
                                                <label for="sCategories">ChooseSubCategory:</label>
                                                    <select name="sCategories" class="form-control">
                                                    <?php
                                                        $array2 = $categs->categories($_POST['categories']);
                                                        foreach ($array2 as $key => $sCategories) {
                                                    ?>    
                                                        <option value=<?php echo $sCategories['id'];?>><?php echo $sCategories['name'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                <input type="text" name="scat" value=<?php echo $sCategories['id'];?> class="hidden">
                                  <button type="submit" name="choose" value="ch2" class="btn btn-default">Submit</button>
                            </form>
                                            <?php
                                            echo "you Choose".$_POST['categories'];
                                            }
                                            elseif ($_POST['choose']=='ch2') {

                                                ?>
                <form method="post" onsubmit="return checkAll();">
          <label for="product">Enter Product Name:</label>
              <input type="text" id="txt1" name="product" class="form-control" id="product"><span id="sp1"></span>
            <span id="sp5"></span>
            <label for="price">Enter Product Price:</label>
          <input type="text" name="price" id="txt2" class="form-control" id="price"><span id="sp2"></span>
            <br/>
            <label for="qty">Enter Product Quantity:</label>
              <input type="text" name="qty" id="txt3" class="form-control" id="qty">
              <span id="sp3"></span> 
             <label for="sale">Enter Product Sale:</label>
       <input type="text" name="sale" id="txt4" class="form-control" id="sale"><span id="sp4"></span>
            <br>
     <input type="text" name="scat" value=<?php echo $_POST['scat'];?> class="hidden">
           <button type="submit" name="choose" value="add" id="add" class="btn btn-primary">Add Product</button>
       <script src="assets/js/jquery-1.10.2.js"></script>

   <!-- <script type="text/javascript" src="CetegoriesValidation.js"></script> -->
           <script>
           var pat= /[a-zA-Z]{6,10}/;
           var pat1= /[0-9]/;
            flag1=false;
            flag2=false;
            flag3=false;
            flag4=false;
                function checkAll(){
                        return flag1&&flag2&&flag3&&flag4;
                    }
                $(function(){
                    $("#txt1").blur(function(event) {
            if(this.value.match(pat))
                {   
                    $('#sp5').empty();
                    $('#sp5').css('color', 'red');
                    
                    flag1=true;
                }
            else
                {
                    $('#sp5').css('color', 'red');
                    $('#sp5').text('OnlyCharacters[6-10]');
                    $('#txt1').focus();
                    flag1=false;

                }
        });
        $("#txt2").blur(function(event) {
             if(this.value.match(pat1))
                {   
                    $('#txt2').empty();
                    $('#sp2').css('color', 'red');
                    // $('#sp2').text('Done');
                    flag2=true;
                }
            else
                {
                    $('#sp2').css('color', 'red');
                    $('#sp2').text('OnlyNumbers');
                    $('#txt2').focus();
                    flag2=false;
                }
        });
        $("#txt3").blur(function(event) {
            if(this.value.match(pat1))
                {   
                    $('#txt3').empty();
                    $('#sp3').css('color', 'red');
                    // $('#sp3').text('Done');
                    flag3=true;
                }
            else
                {
                    $('#sp3').css('color', 'red');
                    $('#sp3').text('OnlyNumbers');
                    $('#txt3').focus();
                    flag3=false;
                }
                
        });
        $("#txt4").blur(function(event) {
            if(this.value.match(pat1))
                {   
                    $('#txt4').empty();
                    $('#sp4').css('color', 'red');
                    // $('#sp4').text('Done');
                    flag4=true;
                }
            else
                {
                    $('#sp4').css('color', 'red');
                    $('#sp4').text('OnlyNumbers');
                    $('#txt4').focus();
                    flag4=false;
                }
        });
                })
                
           </script>
    </form>
     
                              <?php  } 
                                    }
                                   ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
			 <?php
                if(isset($_POST['choose']))
                {
                    if($_POST['choose']=="add")
                    {
                        include 'product.php';
                        $product= new Products();
                      //  var_dump($_POST);
                        $product->cat_id = $_POST['scat'];
                        $product->name =  $_POST['product'];
                        $product->price =  $_POST['price'];
                        $product->qty =  $_POST['qty'];
                        $product->sale =  $_POST['sale'];
                        $prod=$product->insert();
                    }
                }
            ?>	
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

   
     
    
</body>
</html>