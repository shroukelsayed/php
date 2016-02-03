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
                  <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../home.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <!-- <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li> -->
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
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <div class="btn-group btn-group-lg ">                       
                                <a href="insertCategory.php"><input type="button" class="btn btn-primary " value="Insert Categories"></a>
                                <a href="insertSubCategory.php"><input type="button" class="btn btn-primary " value="Insert SubCategories"></a>
                                <a href="productNames.php"><input type="button" class="btn btn-primary " value="Insert Products"></a>
                            </div>
                            <div class="panel panel-primary text-center no-boder bg-color-blue input-lg">
                                <form action="#" onsubmit="return flag;" method="post" class="form-group form-inline">
                                    <div id="ca" class="form-group">
                                        <label for="insert">insertCategoryName:</label>
                                        <input type="text" name="insertCat" class="form-control" id="insertCat">
                                        <span id='chck'>
                                    </span>
                                    <script>
                                        onload=function(){
                                            flag=false;
                                           $("#insertCat").blur(function(event) {
                                                var pat= /[a-zA-Z]{6,10}/;
                                                if(this.value.match(pat))
                                                    {   
                                                        $('#chck').css('color', 'red');
                                                        $('#chck').text('Done');
                                                        flag=true;

                                                    }
                                                else
                                                    {
                                                        $('#chck').css('color', 'red');
                                                        $('#chck').text('insertOnlyCharacters');
                                                        $('#insertCat').focus();
                                                        flag=false;
                                                    }
                                            }); 
                                        }
                                        </script>
                                        <?php
                                            if(isset($_POST['choose']))
                                            {
                                                if($_POST['choose']=='addCat')
                                                {
                                                    $categories = new categories();
                                                    @$categories->name=$_POST['insertCat'];
                                                    $categs= $categories->insertCat();
                                                }
                                            }
                                            //include 'categories.php';
                                            
                                        ?>
                                    </div>
                                    <button type="submit" name="choose" value="addCat" id="addCat" class="btn btn-default">Submit</button>
                                    <script src="assets/js/jquery-1.10.2.js"></script>
                                    <script type="text/javascript" src="CetegoriesValidation.js"></script>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
				
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