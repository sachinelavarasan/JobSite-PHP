<?php
include 'connect.php';
session_start();
$user=$_SESSION["email"];
 $resource = mysqli_query($con,"SELECT * FROM admin where email='$user'");
    while($count = mysqli_fetch_array($resource)){
          $use=$count["username"];
    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>
  <style type="text/css">
 
    
    .nav-item a:hover
      {
         color:white;
         background-color: purple;
      }
  </style>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
</html>

<body id="page-top">

<nav class="navbar" style="background-color:coral; width:100%">
      <a class="navbar-brand" href="#" style="color:black;float:left;">
      <img src="img/logo.jpg" height="60" width="60">&nbsp <b> Job Portal</b></a>

<div class="nav-item dropdown no-arrow" style="float:right;">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:blue;background-color: white;">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $use;?></span>
                <img class="img-profile rounded-circle" src="img/businessman.png" style="width:30px;height:30px;">
              </a>
              
              
</div>
</nav>

