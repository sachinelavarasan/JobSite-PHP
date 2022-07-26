
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
		padding-top: 20px;
		margin-top: 100px;
		margin-bottom: 200px;
		background-color:white;
		border-radius: 40px;
		animation: swing 2s 1;
        animation-timing-function: linear;		
		height: 300px;
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

	<div class="container" id="login">
		<form method="post" action="email.php" class="form-group">

  <div class="form-group">

<center>
      <h3 style="color:green;font-weight: bold;">Forget Password</h3>
      
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" autocomplete="off" name="email" required
    >
     </div>
  
   <div class="text-center my-4">
        <button class="btn btn-primary text-white btn-lg" type="submit" name="submit">submit</button>
      </div>
      
      <div class="link login-link text-center">Not yet a member? 
           <a href="register.php">Signup now</a>
      </div>
</form>
</div>
</center>
</body>
</html>