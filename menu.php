<?php
session_start();
include('E:\xampp\htdocs\job-portal\connection\db.php');

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jobify </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/price_rangs.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/style.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/style-img.css">
    
   <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
   <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
  







   
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo SITEURL;?>assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="<?php echo SITEURL;?>assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?php echo SITEURL;?>index.php">Home</a>  </li>
                                            <li><a href="<?php echo SITEURL;?>job_listing.php">Find a Jobs </a></li>
                                            <li><a href="<?php echo SITEURL;?>blog.php">Blog</a> </li>
                                            <li><a href="<?php echo SITEURL;?>about.php">About</a></li>  
                                            <li><a href="<?php echo SITEURL;?>contact.php">Contact us</a></li>
    
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <?php
                                   if (empty($_SESSION['email'])) {
                                    ?>
                                    <a href="<?php echo SITEURL;?>register.php" class="btn head-btn1">Register</a>
                                    <a href="<?php echo SITEURL;?>register.php" class="btn head-btn2">Login</a>
                              
                                    <?php
                                    }elseif($_SESSION['email']==true){
                                
                                    $email =$_SESSION['email'];

                                    $sql ="SELECT * FROM user_login  WHERE email ='$email' ";
                                    $res = mysqli_query($conn,$sql);
                                    if($res==TRUE){
                                        //Count row to whether we have data in database or not
                                        $count =mysqli_num_rows($res);//function get row in database
                                        if($count>0){
                                            $rows=mysqli_fetch_assoc($res);
                                            $name=$rows['name'];
                                        }
                                    }
                                   ?>
                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                    <a href="#" class="btn head-btn1">HI
                                        <?php echo $name;?>
                                    </a>
                                    <a href="logout.php" class="btn head-btn2">Logout</a>
                                    <?php
                                   } 
                                  ?>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header End -->

    </header>