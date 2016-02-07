<?php
include 'adminsession.php';
?>
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
       
            <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
         <!-- Google Fonts-->
       <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
         <!-- TABLE STYLES-->
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                            <li><a href="../profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                            <a class="active-menu" href="table.php"><i class="fa fa-table"></i> View Users</a>
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
                        <a href="insertData.php"><i class="fa fa-table"></i>Insert Data</a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Users Data :
                            </h1>
                        </div>
                    </div> 
                     <!-- /. ROW  -->
                    <div class="row">
                        <div class="col-md-6">
                            <!--    Context Classes  -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Users Data :
                                </div>
                                    <table class='table table-hover table-striped'>
                                        <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Credit </th>
                                            <th> Address </th>
                                            <th> Birthdate </th>
                                            <th> Job </th>
                                            <th> Interests </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php include 'viewUsers.php'; ?>   
                            </div>
                        </div>
                        <!--  end  Context Classes  -->
                    </div>
                </div>
                    <!-- /. ROW  -->
            </div>
                   <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
                 <!-- /. PAGE INNER  -->
                </div>
             <!-- /. PAGE WRAPPER  -->
         <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="assets/js/jquery-1.10.2.js"></script>
          <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
         <!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
        </script>
             <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>
    </body>
</html> 