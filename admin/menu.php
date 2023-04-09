<?php include('./connection/db.php');

session_start();
if($_SESSION['email']==true){
 
}else{
  header('location:admin_login.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jobify Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/admin_dashboard.css" rel="stylesheet">
    <!-- data table css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo SITEURL;?>css/style.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/style-img.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="<?php echo SITEURL;?>assets/img/logo/logo.png" alt="">
      </a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer.php">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">
                  <span data-feather="users"></span>
                  blog
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="bar-chart-2"></span>
                  <i class="fa-solid fa-paper-plane"></i>
                  category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job.php">
                  <span data-feather="layers"></span>
                  Job
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_deatail.php">
                  <span data-feather="layers"></span>
                  Job-Detail
                </a> 
              </li>
             
            </ul>
            <li class="nav-item">
                <a class="nav-link" href="../">
                  <span data-feather="layers"></span>
                  User View
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">
                  <span data-feather="layers"></span>
                  User Feedback
                </a>
              </li>
            </ul>

            
            </ul>
          </div>
        </nav>

       