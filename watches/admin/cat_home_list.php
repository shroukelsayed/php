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
                        <a  href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i> View Users</a>
                    </li>
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap"></i> Categories<span class="fa arrow"></span></a>
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
        <div id="page-wrapper">
            <div id="page-inner" name="center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Categories:
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                        <div class="col-md-6">
                            <!--    Context Classes  -->
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                </div>
                                <table class='table table-hover table-striped'>
                                        <thead>
                                        <tr>
                                            <th> Name </th>
                                            <th> Price </th>
                                            <th> Quantity </th>
                                            <th> Sale </th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    include 'product.php';
                                    $product= new Products();
                                    if (isset($_GET['x'])) {
                                        $array=$product->serchById($_GET['x']);
                                            foreach ($array as $key => $product) {
                                                echo "<tr>";
                                                echo "<td>".$product['name']."</td>";
                                                echo "<td>".$product['price']."</td>";
                                                echo "<td>".$product['qty']."</td>";
                                                echo "<td>".$product['sale']."</td>";
                                                echo "<td><a href='cat_home_list.php?y=1&z=$product[id]'>"."Edit"."</a>&nbsp&nbsp&nbsp";
                                                echo "<a href='cat_home_list.php?y=3&z=$product[id]'>"."Delete"."</a></td>";
                                                echo "</tr>";
                                        }
                                        echo " </tbody></table></div></div>";
                                    }
                                    else
                                    {
                                        if ($_GET['y']==1) {
                                            $array=$product->serchById($_GET['z']);
                                            foreach ($array as $key => $product) {
                                                echo "<tr>";
                                            ?>
                                                <form action="cat_home_list.php?y=2" method="post" accept-charset="utf-8"> 
                                                <td><input type="text" name='name' value='<?php echo $product['name']; ?>' /></td>
                                                <td><input type="text" name='price' value='<?php echo $product['price']; ?>' /></td>
                                                <td><input type="text" name='qty' value='<?php echo $product['qty']; ?>' /></td>
                                                <td><input type="text" name='sale' value='<?php echo $product['sale']; ?>' /></td>
                                                <td><input type="text" name='id' value='<?php echo $product['id']; ?>' hidden/></td>


                                                <td>
                                                    <input type="submit" value="Save" style="width:100%;height:100%;"></button>
                                                </td>
                                                </form>
                                               <?php
                                                echo "</tr>";
                                                }

                                              echo " </tbody></table></div></div>";
                                             }
                                            elseif ($_GET['y']==3) {
                                                $array=$product->delete($_GET['z']);
                                            }
                                            elseif($_GET['y']==2){  
                                           $prod= new Products();

                                                     $prod->name=$_POST['name'];
                                                     $prod->price=$_POST['price'];
                                                     $prod->qty=$_POST['qty'];
                                                     $prod->sale=$_POST['sale'];
                                                    $prods=$prod->update($_POST['id']);
                                                  
                                            }
                                    }
                                    ?>   
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