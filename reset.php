
<?php
include("connect.php");

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pw=$_POST['password'];
	
	$que="select email from register where email='$email'";
	$quer=mysqli_query($con,$que);
	if(mysqli_num_rows($quer)>0)
	{
		
   
	$que1="update register set password='$pw' where email='$email'";
	
	if(mysqli_query($con,$que1))
	{
		echo "<script>alert('Updated Successfully!');window.location = 'login.php'</script>";
	}
	else{
		echo "<script>alert('Something wrong');window.location = 'reset.php'</script>";
	}
}
else{
	echo "<script>alert('Check Your Email id !');window.location = 'reset.php'</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>password reset</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
	body{
		background:url('img/register.jpg');
	}
	

	.container{
		padding-top: 2px;
		margin-top: 100px;
		margin-bottom: 200px;
		background-color:white;
		border-radius: 40px;
		animation: swing 2s 1;
        animation-timing-function: linear;		
		height: 350px;
		width: 350px;
		margin-left: 300px;
			}
	.container:hover{
		box-shadow: 0 0 5px black,
                  0 0 10px black,
                  0 0 15px black,
                  0 0 20px black;
	}
.form-group a i {
  font-family: FontAwesome;
  margin: 0 auto;
  font-size: 5rem;
  font-style: normal;
  cursor: pointer;
}

form .fa {
  top: 13px;
  right: 1rem;
}
</style>
</head>
<body>

<center>
	
<div class="container">
    <form id="updateForm" class="mt-5" action="" method="post">
      <center>
      <h3 style="color:maroon;font-weight: bold;">Password Reset!!</h3>
      
      </center>  
      <div class="form-group position-relative">
        <label for="email" class="sr-only">Email</label>
        <input class="form-control" id="email" name="email" type="text" placeholder="Email" required="" autocomplete="off">
        <i class="fa fa-envelope fa-lg position-absolute"></i>
        </div>
      <label for="password" class="pull-left sr-only">Password</label>
      <div class="form-group position-relative">
        <input class="form-control" id="password" name="password" type="password" placeholder="Password" >
		</div>
      <label for="password" class="pull-left sr-only">Re-type Password</label>
      <div class="position-relative">
        <input class="form-control" id="password1" name="password1" type="password" placeholder="Re-Password" required="">
                
        </div>
         
      <div class="text-center my-4">
        <button class="btn btn-primary text-white btn-lg" type="submit" name="submit">Update</button>
      </div>
      
      </div>
                    
    </form>
</div>

</center>
</body>
</html>

