<?php
include 'connect.php';
session_start();
 $resource = mysqli_query($con,"SELECT distinct(cname) FROM company");
 
 $resource1= mysqli_query($con,"SELECT id FROM resume");
 $resource2= mysqli_query($con,"SELECT id FROM company");
  $count = mysqli_num_rows($resource);
  $count1 = mysqli_num_rows($resource1);
  $count2 = mysqli_num_rows($resource2);
   $email=$_SESSION["email"];
  $tim= $_SESSION["logtime"] ;
 
 
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
<title>main page</title>
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.js"></script>
   <link href="css/mdb.min.css" rel="stylesheet">
   <link href="css/jquery-ui.css" rel="stylesheet">
<script src="js/gen.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
    
  <script type="text/javascript" src="js/mdb.min.js"></script>
   
  <style type="text/css">

*{
      margin:0;
      padding: 0;
}
.container-fluid{
      margin:0;
      padding: 0;

    }
    #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  font-family: cursive;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  animation: bounce 2s 1;
  animation-timing-function: linear;
}
#myBtn:hover {
  background-color: #555;
}

    
 body{

	
	background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
    }
    
    #navbar2{
      box-shadow: 30px gray;
      animation: bounce 2s 1;
      animation-timing-function: linear;
     
    }

        
    #nav2 .nav-item .nav-link{
     width: 160px;
      color: white;
      font-weight: bolder;
      font-family: 'Krona One', sans-serif;
      position: relative;
      display: inline-block;
      overflow: hidden;
      transition: 0.5s;
      letter-spacing:2px;
    }
    #nav2 .nav-item .nav-link:hover{
      
      border-radius: 7px;
      background:#03e9f4;
      color: black;
      font-family: cursive;
      box-shadow: 0 0 5px #03e9f4,
                  0 0 25px #03e9f4,
                  0 0 50px #03e9f4,
                  0 0 100px #03e9f4;

    }
    

   .navbar-brand{
       margin-left: 25px;
      font-family: cursive;
      color: white;
      position: relative;
      animation: bounce 2s infinite;
      animation-timing-function: linear;
    }
  
    .dropdown-menu .dropdown-item{
      background-color:white;

    }
    .dropdown-menu .dropdown-item:hover{
      background-color: tomato;
      font-family: cursive;

    }
    #firstbar{
      height: 40px;
      background:#e5e5e5;
      
    }
    #second{
            background:black;
            
    }
    #navbar1{
      padding: 0px;
      
    }
    #firstbar #navbar1 #ul {
      font-size: 12px;
      font-weight:bold;
      font-family: verdana;
      margin-left: 100px;
      color: gray;
    }
   
    #ul .nav-item:after{
      content: "|";
    }
    #navbar1 #ul1 {
      height: 40px;

    }
    #navbar1 #ul1 button{
      font-weight:bold;
      font-family: cursive;
      border:none;
      width: 100px;
      color: #800000;
      letter-spacing: 2px;
      
          }
    #navbar1 #ul1 button:hover{
      transition: 0.5s;
      border-radius: 25px;
      background-color: #80ffd4;
      box-shadow: 0 0 5px rgba(0,0,0,0.3),
                  0 0 25px rgba(0,0,0,0.3),
                  0 0 50px rgba(0,0,0,0.3),
                  0 0 100px rgba(0,0,0,0.3);
           
    }
    
#job{
        margin: 0px;
      }

    #job #inner{
      padding-top: 10px;
      margin-top: 30px;
      background-color:beige;
      height: 350px;
      margin-bottom: 30px;
    }
    
   .tab {

    width: 100%;
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}


.tab button {
  width: 33.3%;
  color: maroon;
  font-family: 'Noto Sans HK', sans-serif;
  background-color: inherit;
  font-weight:bold;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}


.tab button:hover {
  color: tomato;
  font-weight:bold;
  background-color: #ddd;
  border-bottom-color: tomato;
  border-bottom-style: solid;
  font-family: Inria Sans;
}

.tab button.active {
  background-color: #ccc;
}


.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
#rec{
  
  margin-top: 30px;
  background-color:aquamarine;
  height: 550px;
}
 #rec-in{
  width:100%;
  padding-top: 30px;
  
}
#rec-in,h3{
  color: green;
  font-family: cursive;
}
#rec-in,p{
  font-family: verdana;
  color:black;
  font-weight:bold;
  text-align: center;
}
#row1{
            animation: tada 3s 1;
            animation-timing-function: ease-out;

}
#foot{
  padding:30px;
  box-shadow:0 0 5px rgba(0,0,0,0.3),
  0 0 25px rgba(0,0,25,0.3),
  0 0 25px rgba(0,0,50,0.3), 
  0 0 25px rgba(0,0,75,0.3); 
}
#Myid
{
  padding: 20px;
  display :none;
  overflow-x:auto;
}

#Myid1
{
  padding: 20px;
  display :none;
  overflow-x:auto;
}

#Myid2
{
  padding: 20px;
  display :none;
  overflow-x:auto;
}
#Myid table {
  border-collapse: collapse;
  width: 100%;
}
#Myid th{
  font-family: 'Allerta';
  color: gray;
   font-weight: bold;
   font-size: 20px;
   background-color:tomato;
   
}
#Myid th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

#Myid tr:hover {background-color:#f5f5f5;}
#Myid1 table {
  border-collapse: collapse;
  width: 100%;
}
#Myid1 th{
  font-family: 'Allerta';
  color: gray;
   font-weight: bold;
   font-size: 20px;
   background-color:tomato;
   
}
#Myid1 th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

#Myid1 tr:hover {background-color:#f5f5f5;}

#Myid2 table {
  border-collapse: collapse;
  width: 100%;
}
#Myid2 th{
  font-family: 'Allerta';
  color: gray;
   font-weight: bold;
   font-size: 20px;
   background-color:tomato;
   
}
#Myid2 th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

#Myid2 tr:hover {background-color:#f5f5f5;}
#wrapper
{
 
 padding:5px;
 height: 300px;
 width: 400px;
}
#output_image
{
 max-height: 200px;
}
      
    
  </style>
</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div class="container-fluid" id="firstbar">
   <nav class="navbar " id="navbar1">
    <ul class="navbar nav" id="ul">
                      <li class="nav-item">
                           <?php echo $count2;?> Jobs</li>&nbsp;
                      <li class="nav-item">
                        <?php echo $count1;?> Resumes
                      </li>&nbsp;
                      <li class="nav-item">
                       <?php echo $count;?> Companies
                      </li>&nbsp; &nbsp;
                      <li> <i class="fa fa-twitter-square fa-2x"></i> </li>&nbsp;&nbsp;
                      <li><i class="fa fa-facebook-square fa-2x"></i></li>&nbsp;&nbsp;
                      <li><i class="fa fa-youtube-square fa-2x"></i></li>&nbsp;&nbsp;   
                      <li><i class="fa fa-github-square fa-2x"></i></li>&nbsp;&nbsp; 
                    
   </ul>
   <ul class="navbar nav" id="ul1">
                      <li><?php echo $email;?>&ensp;</li> 
                      <li style="background-color: tomato;border-radius: 5px;padding: 2px;"><?php echo "Log-In:".$tim;?></li> &ensp;
                      <li><button onclick="window.location.href='logout.php'">Logout</button> </li>&nbsp;&nbsp;                                
      </ul>
   </nav>
 </div>


  
<div class="container-fluid" id="second">
   <nav class="navbar" id="navbar2">
    <a class="navbar-brand" href="#">
    <img src="img/logo.jpg" width="80" height="60"  alt="logo">
    Job Portal
  </a>    
           <ul class="navbar nav" id="nav2">
        
         
                      <li class="nav-item">
                        <a class="nav-link " href="profession" >PROFESSION (<?php echo $count2;?>)</a>
                      </li>
                     
                   
                      <li class="nav-item">
                        <a class="nav-link" href="curriculam">CURRICULAM VITAE (<?php echo $count1;?>)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="company">COMPANIES (<?php echo $count;?>)</a>
                      </li>
                                            
                       <li class="nav-item">
                            <a class="nav-link" href="contact">CONTACT</a> 
                        </li> 
                        
                        
                        <li id="but">
                         <button type="button" class="btn btn-light" data-toggle="modal" data-target="#staticBackdrop">ADD RESUME&nbsp;<i class="fa fa-plus-circle"></i></button>
                            
                        </li> 
                  
                  </ul>
         
         </nav>     
</div>
<div id="content"></div>
<script>

var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

  
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Resume Upload</h5>
      </div>
      <div class="modal-body">
    <form method="post" action="addnew.php" enctype="multipart/form-data">
      
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Fullname" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="browser-default custom-select" name="gender" required autocomplete="off">
    <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date Of Birth</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="dob" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Year Of Experience</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="yoe" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Industry</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="indus" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Skills</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="skill" required autocomplete="off"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">About Me</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about" required autocomplete="off"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Location</label>
    <input type="text"  id="place" name="loc" required class="form-control col-sm-4">
  </div>

  <div class="form-group">
    
    <label for="exampleInputFile">Upload Your Photo</label>
    <input type="file" class="form-control-file" accept="image/*" name="image" required onchange="    preview_image(event)"> 
    <div id="wrapper">
 <img id="output_image"/>
</div>
    <small>UPLOAD ONLY image</small>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">CV </label>
    <input type="file" class="form-control-file" accept="application/pdf,application/msword" name="resume" required>
    <small>UPLOAD ONLY .doc AND .pdf</small>
  </div>
  
  <input type="submit" class="btn btn-primary" value="submit" name="submit">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="container-fluid" id="job">
  <div class="container" id="inner">
    <div class="container-fluid" id="inner1">
  <div class="tab">
  <button class="tablinks active" onclick="toggleText(1)">LATEST COMPANIES</button>
  <button class="tablinks" onclick="toggleText(2)">LATEST RESUMES</button>
  <button class="tablinks" onclick="toggleText(3)">LATEST JOB</button>
  </div>
    </div>

    <div id="Myid">
      <?php include("connect.php");
       $sql="select * from company order by id desc";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        $i=0;
        echo "<table>";
        echo "<tr><th>Company Id</th><th>Company Location</th><th>Company Name</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
             
             if($i==3)  
             {
                break;
             }
           else{
                  
    ?>

      <tr>
        <td><?php echo $rows['id'];?></td>
        <td><?php echo $rows['comloc'];?></td>
        <td><?php echo $rows['cname']."</br>";echo $rows['email'];?></td>
      </tr>
      <?php 
    }
    $i++;
}
echo "</table>";
}
?>
</div>


    <div id="Myid1">
      <?php include("connect.php");
       $sql="select * from resume order by id desc";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        $i=0;
        echo "<table>";
        echo "<tr><th>Resume Id</th><th>Name</th><th>Skills</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
             
             if($i==3)  
             {
                break;
             }
           else{
                  
    ?>

      <tr>
        <td><?php echo $rows['id'];?></td>
        <td><?php echo $rows['fname'];?></td>
        <td><?php echo $rows['skills']."<br>";?></td>
      </tr>
      <?php 
    }
    $i++;
}
echo "</table>";
}
?>
</div>

    <div id="Myid2">
      <?php include("connect.php");
       $sql="select * from company order by id desc";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        $i=0;
        echo "<table>";
        echo "<tr><th>Job id</th><th>Job Name</th><th>Salary</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
             
             if($i==3)  
             {
                break;
             }
           else{
                  
    ?>

      <tr>
        <td><?php echo $rows['id'];?></td>
        <td><?php echo $rows['jobs'];?></td>
        <td><?php echo $rows['salary']."<br>"; echo $rows['comloc'];?></td>
      </tr>
      <?php 
    }
    $i++;
}
echo "</table>";
}
?>

    </div>

    </div>
</div>

<div class="container-fluid" id="rec">
  <div class="container" id="rec-in">
    <h3>Recent News</h3>
  <p>These are the recent news from our blog</p>
  <div class="row row-cols-1 row-cols-md-3" id="row1">
  <div class="col mb-4">
    <div class="card small">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img/google1.jpg" style="height:200px;"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/google.jpg" style="height:200px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/google2.jpg" style="height:200px;" class="d-block w-100" alt="...">
    </div>
  </div>
  
</div>
      <div class="card-body">
        <h5 class="card-title">Google</h5>
        <p class="card-text">Google, LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware..</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card small">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img/tes.jpg" style="height:200px;"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/tes1.jpeg" style="height:200px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/tes2.jpg" style="height:200px;" class="d-block w-100" alt="...">
    </div>
  </div>
  
</div>
      <div class="card-body">
        <h5 class="card-title">Tesla</h5>
        <p class="card-text">Tesla is an American electric vehicle and clean energy company based in Palo Alto, California.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card small">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img/micro.jpg" style="height:200px;"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/micro1.jpg" style="height:200px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/micro2.jpg" style="height:200px;" class="d-block w-100" alt="...">
    </div>
  </div>
  
</div>
      <div class="card-body">
        <h5 class="card-title">Microsoft</h5>
        <p class="card-text">U.S. Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports, and sells computer software, consumer electronics, personal computers, and related services..</p>
      </div>
    </div>
  </div>
  
</div>

  </div>
  
  </div>



<footer class="page-footer font-small special-color-dark pt-4">

  
  <div class="container" id="foot">

   
    <div class="row">
   <div class="col-md-6 mb-4">
       
        <form class="form-inline" id="footer">
<i class="fa fa-facebook" style="color:blue;padding:5px;background-color:white;border-radius:15px;font-size:30px;"></i>&ensp;
<i class="fa fa-twitter" style="color:black;padding:5px;background-color:white;border-radius:15px;font-size:30px;"></i>&ensp;
<i class="fa fa-google" style="color:blue;padding:5px;background-color:white;border-radius:15px;font-size:30px;"></i>&ensp;
<i class="fa fa-youtube" style="color:red;padding:5px;background-color:white;border-radius:15px;font-size:30px;"></i>&ensp;
<i class="fa fa-instagram" style="color:#cf2e82;padding:5px;background-color:white;border-radius:15px;font-size:30px;"></i>
          
        </form>
        

      </div>
      
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="email" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white my-0" type="button">Submit</button>
          </div>
        </form>

      </div>
      
    </div>
  
  </div>
  
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://technojobindia.com/"> CareerPath.com</a>
  </div>
  
</footer>
    
      
</body>
<script>
function toggleText(ee){
  var x = document.getElementById("Myid");
  var y = document.getElementById("Myid1");
  var z = document.getElementById("Myid2");
  if (ee==1) {
    x.style.display = "block";
    y.style.display = "none";
        z.style.display = "none";
  } 
  else if(ee==2){
    x.style.display = "none";
    z.style.display = "none";
     y.style.display = "block";

  }
  else  if(ee==3)
  {
    x.style.display = "none";
        y.style.display = "none";
     z.style.display = "block";
  }

}

</script>
<script>
function toggleText1(){
  
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}
</script>
<script>
function toggleText2(){

  if (z.style.display === "block") {
    z.style.display = "none";
  } else {
    z.style.display = "block";
  }
}
</script>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<script>
  $( function() {
    var availableTags = [
    "karur",
    "salem",
    "kodumudi",
    "namakkal",
    "coimbatore"
    ];
    $( "#place" ).autocomplete({
      source: availableTags,
      minLength:2
    });
  } );
  </script>
</html>