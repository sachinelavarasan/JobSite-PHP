<html >
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
<script src="js/gen.js"></script>
<script src="js/bootstrap.min.js"></script>
   
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
    #nav2 #but{
      padding: 10px;
      border-radius: 25px;
      text-align: center;
      color: white;
      font-weight:bold;
      border-style: dashed;
      border-color: white;
      width:200px;
      height: 50px;
    }
    #nav2 #but:hover{
      background-color: white;
      padding: 10px;
      border-radius: 25px;
      text-align: center;
      color: black;
      font-weight:bold;
      border-style: dashed;
      border-color: black;
      
    }
  </style>
</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div class="container-fluid" id="firstbar">
   <nav class="navbar " id="navbar1">
    <ul class="navbar nav" id="ul">
                      <li class="nav-item">
                           3 Jobs      </li>&nbsp;
                      <li class="nav-item">
                        2 Resumes
                      </li>&nbsp;
                      <li class="nav-item">
                        2 Companies
                      </li>&nbsp; &nbsp;
                      <li> <i class="fa fa-twitter-square fa-2x"></i> </li>&nbsp;&nbsp;
                      <li><i class="fa fa-facebook-square fa-2x"></i></li>&nbsp;&nbsp;
                      <li><i class="fa fa-youtube-square fa-2x"></i></li>&nbsp;&nbsp;   
                      <li><i class="fa fa-github-square fa-2x"></i></li>&nbsp;&nbsp; 
                    
   </ul>
   <ul class="navbar nav" id="ul1">
                      <li><button onclick="window.location.href='logout.php'">Logout</button> </li>&nbsp;&nbsp;
                                         
     </ul>  
   </nav>
 </div>


  
<div class="container-fluid" id="second">
   <nav class="navbar" id="navbar2">
    <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="80" height="60"  alt="logo">
    Job Portal
  </a>    
           <ul class="navbar nav" id="nav2">
        
         
                      <li class="nav-item">
                        <a class="nav-link " href="profession" >PROFESSION</a>
                      </li>
                     
                   
                      <li class="nav-item">
                        <a class="nav-link" href="curriculam">CURRICULAM VITAE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="clique">CLIQUE</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CONTOUR</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="addnew">add profile</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                           
                        </li>
            
                       <li class="nav-item">
                            <a class="nav-link" href="contact">CONTACT</a> 
                        </li> 
                        
                        
                        <li id="but">                            
                              ADD NEW&nbsp;<i class="fa fa-plus-circle"></i>
                            
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

    
</body>
</html>