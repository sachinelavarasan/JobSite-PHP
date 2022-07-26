<?php
include 'connect.php';
session_start();
 $resource = mysqli_query($con,"SELECT distinct(cname) FROM company");
 $resource3 = mysqli_query($con,"SELECT distinct(email) FROM register");
 $resource1= mysqli_query($con,"SELECT id FROM resume");
 $resource2= mysqli_query($con,"SELECT id FROM company");
  $count = mysqli_num_rows($resource);
  $count1 = mysqli_num_rows($resource1);
  $count2 = mysqli_num_rows($resource2);
  $count3 = mysqli_num_rows($resource3);
 
?>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Inria Sans' rel='stylesheet'>
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   
   <link href="css/mdb.min.css" rel="stylesheet">
   <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKako5c--gyK79kSPUeAULrjpg0CTasd4&callback=initMap">
</script>
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
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

	background-image: url('img/back3.jpg');
	background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
    }
    
    #navbar2{
      box-shadow: 3px gray;
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
    #nav2 #but a{
      padding: 10px;
      border-radius: 25px;
      text-align: center;
      color: white;
      font-weight:bold;
      border-style: dashed;
      text-decoration: none;
      border-color: white;
      width:200px;
      height: 50px;
    }
    #nav2 #but a:hover{
      background-color: white;
      padding: 10px;
      border-radius: 25px;
      text-align: center;
      color: black;
      font-weight:bold;
      text-decoration: none;
      border-style: dashed;
      border-color: black;
      
    }
    #contain{
      height: 350px;
      padding: 20px;
      background-image: url('img/stat.jpg');
      background-size: cover;
      font-family: verdana;
      text-align: center;
      box-shadow: 3px gray;

            animation: bounceOut 2s 1;
            animation-timing-function: linear;
  

    }
    #contain h3{

              color:#3cb371;
              font-weight:bold;
    }
    #contain p{
      padding: 10px;
      font-weight: bold;
    }
     #contain #cir
     {
      width: 100%; 
      
} 
#contain #cir #cir1
     {
    
      font-size:10px;
      background-color:   #ff9999;
      width: 12%;
      height:160px;
    margin-left:130px;
      padding-top: 20px;
     float:left;
     border-radius: 80px;
      

} 
#contain #cir #cir2
     {
      
      font-size:10px;
      background-color: #ff9999;
      width: 12%;
      height:160px;
      padding-top: 20px;
      margin-left:130px;
     float:left;
     border-radius: 80px;
      

} 
#contain #cir #cir3
     {
       font-size:10px;
       background-color: #ff9999;
    margin-left:130px;
      width: 12%;
      height:160px;
      padding-top: 20px;
     float:left;
     border-radius: 80px;
      

} 
#contain #cir #cir4
     {
      font-size:10px;
      margin-left:130px;
      background-color: #ff9999;
       width: 12%;
      height:160px;
      padding-top: 20px;
      float:left;
       border-radius: 80px;
     } 
#contain #cir p{
color:black;
position: relative;
font-weight:bold;
padding-top: 20px;
text-align: center;
font-size:20px;
font-family: Inria Sans;
text-transform: uppercase;

       }
      
      #job{
        margin: 0px;
      }

    #job #inner{
      padding-top: 10px;
      margin-top: 30px;
      background-color:white;
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
  background-color:white;
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



  </style>
     
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
   <div class="container-fluid" id="firstbar">
   <nav class="navbar " id="navbar1">
    <ul class="navbar nav" id="ul">
                      <li class="nav-item">
                            <?php echo $count2; ?> Jobs   </li>&nbsp;
                      <li class="nav-item">
                        <?php echo $count1; ?> Resumes
                      </li>&nbsp;
                      <li class="nav-item">
                        <?php echo $count; ?> Companies
                      </li>&nbsp; &nbsp;
                      <li> <i class="fa fa-twitter-square fa-2x"></i> </li>&nbsp;&nbsp;
                      <li><i class="fa fa-facebook-square fa-2x"></i></li>&nbsp;&nbsp;
                      <li><i class="fa fa-youtube-square fa-2x"></i></li>&nbsp;&nbsp;   
                      <li><i class="fa fa-github-square fa-2x"></i></li>&nbsp;&nbsp; 
                    
   </ul>
   <ul class="navbar nav" id="ul1">
                      <li><button onclick="window.location.href='register.php'">Register</button> </li>&nbsp;&nbsp;
                      <li><button onclick="window.location.href='login.php'">Login</button> </li>&nbsp;&nbsp;
                                         
     </ul>  
   </nav>
 </div>


  
<div class="container-fluid" id="second">
   <nav class="navbar" id="navbar2">
    <a class="navbar-brand" href="#">
    <img src="img/logo.jpg" width="90" height="70"  alt="logo">
    Job Portal
  </a>   	
           <ul class="navbar nav" id="nav2">
        
         
                      <li class="nav-item">
                        <a class="nav-link " href="login.php">PROFESSION</a>
                      </li>
                     
                   
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">CURRICULAM VITAE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">COMPANIES</a>
                      </li>
                      
            
                       <li class="nav-item">
                            <a class="nav-link" href="login.php">CONTACT US</a> 
                        </li> 
                        
                        
                        <li id="but">                            
                              <a href="login.php">ADD Resume&nbsp;<i class="fa fa-plus-circle"></i></a>
                            
                        </li> 
                  
                  </ul>
   		   
         </nav>     
</div>
   	
  

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img/card.jpg" style="height:400px;"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/card1.jpg" style="height:400px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/card2.jpg" style="height:400px;" class="d-block w-100" alt="...">
    </div>
  </div>
  
</div>
<div class="container-fluid" id="contain">
  <h3><i class="fa fa-bar-chart"></i>&ensp;Stats Overview</h3>
  <p>Here's a brief overview of the website's stats.See how many jobs are posted.how many resumes are active and the number of present companies.</p>
<div id="cir">
  <div id="cir1"><i class="fa fa-volume-up" style="font-size:25px;color: #e1e1d0;"></i><p><?php echo $count2; ?><br>Job Offers</p></div>
  <div id="cir2"><i class="fa fa-file-pdf-o" style="font-size:25px;color: #e1e1d0;"></i><p><?php echo $count1;?><br>Resumes</p></div>
  <div id="cir3"><i class="fa fa-building" style="font-size:25px;color: #e1e1d0;"></i><p><?php echo $count;?><br>Companies</p></div>
  <div id="cir4"><i class="fa fa-users" style="font-size:25px;color: #e1e1d0;"></i><p><?php echo $count3;?><br>Members</p></div>
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
        <td><?php echo $rows['cname']."\n";echo $rows['email'];?></td>
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

  <div id="map" style="width:100%;height:400px;"></div>
  
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
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://technojobindia.com/"> CareerPath.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  

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
<script>
      
      function initMap() {
        
        const sa = { lat: 36.778259, lng: -119.417931 };
        
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,

          center: sa,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        
        const marker = new google.maps.Marker({
          position: sa,
          map: map,
        });
      }
    </script>
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

<script type="text/javascript" src="js/popper.min.js"></script>
    
  <script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
