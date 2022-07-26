  
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
	.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  animation: fadeIn 2s 1;
  animation-timing-function: linear;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

	.container{
		padding-top: 1px;
		margin-top: 10px;
		margin-bottom: 200px;
		background-color:white;
		border-radius: 40px;
		animation: swing 2s 1;
        animation-timing-function: linear;		
		height: 630px;
		width: 350px;
		margin-left: 750px;
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
	<div class="container">
    <form id="RegisterForm" class="mt-5" action="" method="post">
      <center>
      <h3 style="color:maroon;font-weight: bold;">Register !!</h3>
      <div class="imgcontainer">
    <img src="img/avatar.jpg" alt="Avatar" class="avatar">
      </div>
      </center>  
      <div class="form-group position-relative">
        <label for="email" class="sr-only">User</label>
        <input class="form-control" id="email" name="user" type="text" placeholder="Username" required="">
        <i class="fa fa-user fa-lg position-absolute"></i>
        </div>  
      <div class="form-group position-relative">
        <label for="email" class="sr-only">Email</label>
        <input class="form-control" id="email" name="email" type="text" placeholder="Email" required="" autocomplete="off">
        <i class="fa fa-envelope fa-lg position-absolute"></i>
        </div>
      <label for="password" class="pull-left sr-only">Password</label>
      <div class="form-group position-relative">
        <input class="form-control" id="password" name="password" type="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
		<i class="fa fa-eye fa-lg position-absolute" id="unshow"></i>
        </div>
      <label for="password" class="pull-left sr-only">Re-type Password</label>
      <div class="position-relative">
        <input class="form-control" id="password1" name="password1" type="password" placeholder="Re-Password" required="" onkeyup="valid();">
        <i class="fa fa-eye fa-lg position-absolute" id="unshow1"></i>
        <div class="text">
         </div>
        </div>
         
      <div class="text-center my-4">
        <button class="btn btn-primary text-white btn-lg" type="submit" name="submit">Register</button>
      </div>
      <div class="link login-link text-center">Already a member? 
                     <a href="login.php">Login here</a> 
        </div>
      </div>
                    
    </form>
  </div>
  <script >
  	const unshow = document.querySelector('#unshow');
		const password = document.querySelector('#password');
		unshow.addEventListener('click', function (e) {
		    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
		    password.setAttribute('type', type);
		    this.classList.toggle('fa-eye-slash');
});
		const unshow1= document.querySelector('#unshow1');
		const password1 = document.querySelector('#password1');
		unshow1.addEventListener('click', function (e) {
		    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
		    password1.setAttribute('type', type);
		    this.classList.toggle('fa-eye-slash');
});
  </script>
 <script>
	  const input = document.getElementById("password");
	  const input1 = document.getElementById("password1");
      const text = document.querySelector(".text");
      let regExpWeak = /[a-z]/;
      let regExpMedium = /\d+/;
      let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
     
      function valid(){
      if((input.value != "")&&(input1.value != "")){
      	if(input.value==input1.value){
      	  
           if(input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong)))no=1;
          if(input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong))))no=2;
          if(input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong))no=3;
          if(no==1){
            text.style.display = "block";
            text.textContent = "Your password is too week";
            text.classList.add("weak");
          }
          if(no==2){
            
            text.textContent = "Your password is medium";
            text.classList.add("medium");
          }else{
            text.classList.remove("medium");
          }
          if(no==3){
            text.textContent = "Your password is strong";
            text.classList.add("strong");
          }else{
            text.classList.remove("strong");
          }
  }
  else{
  	        text.style.display = "block";
            text.textContent = "Password and Re-type password not matched";
  }
}
else{
  	        text.style.display = "block";
            text.textContent = "Password and Re-type password connot be empty";
  }
}
</script>

</body>
</html>
<?php
 include("connect.php");
if(isset($_POST['submit']))
{       $user=$_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password1'];
        $que="SELECT * FROM register WHERE email = '$email'";
        $cekuser = mysqli_query($con,$que);
        $ro= mysqli_num_rows($cekuser);
        
        if($ro>0) {
          echo "<script>alert('This Username already Exists!');window.location = 'login.php'</script>";
        }
        else
        {
           $quer= "INSERT INTO register VALUES ('$user','$email','$password')";  
            if(mysqli_query($con,$quer))
            {
             echo "<script>alert('Welcome $user Successfully Registered Your Account');window.location = 'login.php'</script>";

            }
               else{
                echo "<script>alert('Please check your details');window.location = 'register.php'</script>";
               }


        }
       
  
}

?>