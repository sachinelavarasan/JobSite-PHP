<!DOCTYPE html>
<html>
<head>
	<title>company</title>
	<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width,initial-scale=1">
				<link href="css/bootstrap.min.css" rel="stylesheet">
			  <link href="animate/animate.min.css" rel="stylesheet">
			   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
			   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			   <script src="js/jquery.js"></script>
			   <link href="css/mdb.min.css" rel="stylesheet">
		
			<script src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/popper.min.js"></script>
			
			<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
			    
			  <script type="text/javascript" src="js/mdb.min.js"></script>
	<style >
	#display{
	background-color: #ffe6ff;
}
#tabl{
	padding: 20px;
    overflow-x:auto;
}

#card{
	background-color:tomato;
}
#card:hover{
	background-color:black;
	color: white;
	border-radius: 150px;
	animation: heartBeat 3s 1;
    animation-timing-function: ease-out;
}
.hoverable{
	border:2px solid black;
}
</style>

</head>
<body>
	<div class="container-fluid" id="display">
	<div class="container-fluid" id=" display1">
		<div id="tabl">
		<h1>Our Clients</h1>
      <?php include("connect.php");
       $sql="select distinct cname FROM company ";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
        
      
         while($rows=mysqli_fetch_array($result))
         {   

    ?> 
    <div class="row row-cols-1 row-cols-md-3" style="width:200px;display:inline-block;">  
        <div class="col mb-2">
         <div class="card small" id="card">
      	<div class="card-body">
        <h5 class="card-title"  style="text-align:center;"><?php echo $rows['cname'];?></h5>
        </div>
           </div>
</div>
</div>
      <?php 
    
}


}
?>
</div>
</div>
	</div>

	<h1 style="background-color:black;color: white;text-align: center;">Our Achievements</h1>
<div class="row" style="background-color:yellow;">
  <div class="col-md-4" style="margin-left: 400px;">
    <div class="timeline-main">
      
      <ul class="stepper stepper-vertical timeline timeline-simple pl-0">

        <li>
         
          <a href="#!">
            <span class="circle grey"></span>
          </a>

          
          <div class="step-content ml-3 p-4 hoverable">
            <h4 class="font-weight-bold">2019 Journey</h4>
            <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 2019</p>
            <p class="mb-0">In 2019 we had clients 250 company for recruitment process and 2000 student get placed in that companies. </p>
          </div>
        </li>
        <li class="timeline-inverted">
         
          <a href="#!">
            <span class="circle grey"></span>
          </a>

          
          <div class="step-content mr-xl-3 p-4 hoverable">
            <h4 class="font-weight-bold">2018 Journey</h4>
            <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 2016</p>
            <p class="mb-0">In 2018 we had clients 100 company for recruitment process and 1000 student get placed in that companies. we got prize for more placement achieved  of the year</p>
          </div>
        </li>
        <li>
          
          <a href="#!">
            <span class="circle grey"></span>
          </a>

          
          <div class="step-content ml-3 p-4 hoverable">
            <h4 class="font-weight-bold">2017 Journey</h4>
            <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 2015</p>
            <p class="mb-0">In 2017 we had clients 100 company for recruitment process and 4 student get placed in that companies. we had tie up with google and microsoft.</p>
          </div>
        </li>
        <li class="timeline-inverted">
         
          <a href="#!">
            <span class="circle grey"></span>
          </a>

          
          <div class="step-content mr-xl-3 p-4 hoverable">
            <h4 class="font-weight-bold"> 2016 Journey</h4>
            <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 2014</p>
            <p class="mb-0">In  we start in 2016 with clients 50 company for recruitment process.</p>
          </div>
        </li>
        
       
          
      </ul>
      
    </div>
  </div>
</div>


</body>
</html>