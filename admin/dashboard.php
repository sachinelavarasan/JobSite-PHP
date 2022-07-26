<?php
include 'connect.php';

 $resource = mysqli_query($con,"SELECT distinct(cname) FROM company");
 $resource3 = mysqli_query($con,"SELECT distinct(email) FROM register");
 $resource1= mysqli_query($con,"SELECT id FROM resume");
 $resource2= mysqli_query($con,"SELECT id FROM company");
  $count4 = mysqli_num_rows($resource);
  $count1 = mysqli_num_rows($resource1);
  $count2 = mysqli_num_rows($resource2);
  $count3 = mysqli_num_rows($resource3);
  
 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Dashboard</title>
	<style type="text/css">
     #photo
     {
      margin-top: 200px;
      margin-left: 1000px;

     }
	
	</style>
</head>
<body style="background-color:black;">
<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="dashbord">
<div id="card1" style="float:left;margin-left: 70px;margin-top: 50px;">
 <div class="card" style="border-radius: 100px;">
   <div class="card-header" style="background-color: aquamarine;font-family: Lucida Console;color:black; font-weight: bold;">
     Registered of Users
   </div>
   <div class="card-body" style="font-family: Lucida Console;color:black; font-weight: bold;">
   <center>
      <?php echo $count3; ?>
     </center>
   </div>
 </div>
 </div>
<div id="card2" style="float:left;margin-left: 70px;margin-top: 50px;">
 <div class="card" style="border-radius: 100px;">
   <div class="card-header" style="background-color: chocolate;font-family: Lucida Console;color:black; font-weight: bold;">
     Our clients
   </div>
   <div class="card-body" style="font-family: Lucida Console;color:black; font-weight: bold;">
   <center>
        <?php echo $count4; ?>
      </center>
   </div>
 </div>
 </div>

<div id="card3" style="float:left;margin-left: 70px;margin-top: 50px;">
 <div class="card" style="border-radius: 100px;">
   <div class="card-header" style="background-color: bisque;font-family: Lucida Console;color:black; font-weight: bold;">
     Number of Jobs
   </div>
   <div class="card-body" style="font-family: Lucida Console;color:black; font-weight: bold;">
   <center>
       <?php echo $count2; ?>
      </center>
   </div>
 </div>
 </div>
</div>
 <div id="photo">
  <h1 style="color: white;">ADMIN</h1>
  <img src="img/admin.jpg" width="250" height="250" >
  <h3>Janani</h3>
 </div>

<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>

</body>
</html>