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
                                    $array = @$categs->categories(NULL);
                                    foreach ($array as $key => $categories) {
                                        $subs=@$categs->categories($categories['id']);
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
                                        $array = @$categs->categories(NULL);
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
                                                        $array2 = @$categs->categories($_POST['categories']);
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
                <form method="post"  onsubmit="return checkAll();"  enctype='multipart/form-data'>
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
            <input type='file' name='image1' />
            <input type='file' name='image2' />
          
            <input type='file' name='image3' />
            <input type='file' name='image4' />
     <input type="text" name="scat" value=<?php echo $_POST['scat'];?> class="hidden">
           <button type="submit" name="choose" value="add" id="add" class="btn btn-primary">Add Product</button></form>
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
                        echo "<pre>";
                        // echo print_r($_FILES);
                        if(!empty($_FILES['image1']['name'])){
                           $name = $_FILES['image1']['name'];
                           $tmp_name = @$_FILES['image1']['tmp_name'];
                           @move_uploaded_file($tmp_name,'../images/'.strtotime("now").$name);
                           $product->pic1= @strtotime("now").$name;
                        }
                        else
                            $product->pic1= NULL;
                        if(!empty($_FILES['image2']['name'])){
                            $name = $_FILES['image2']['name'];
                            $tmp_name = @$_FILES['image2']['tmp_name'];
                            @move_uploaded_file($tmp_name,'../images/'.strtotime("now").$name);
                           $product->pic2= @strtotime("now").$name;
                        }
                        else
                            $product->pic2= NULL; 
                      
                        if(!empty($_FILES['image3']['name'])){
                            $name = $_FILES['image3']['name'];
                            $tmp_name = @$_FILES['image3']['tmp_name'];     
                            @move_uploaded_file($tmp_name,'../images/'.strtotime("now").$name);
                           $product->pic3= strtotime("now").$name;
                        }
                        else
                            $product->pic3= NULL;
                        if(!empty($_FILES['image4']['name'])){
                            $name = $_FILES['image4']['name'];
                            $tmp_name = @$_FILES['image4']['tmp_name']; 
                            @move_uploaded_file($tmp_name,'../images/'.strtotime("now").$name);
                           $product->pic4= strtotime("now").$name;
                        }
                        else
                            $product->pic4= NULL;
                        @$prod=$product->insert();
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