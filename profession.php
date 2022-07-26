<?php session_start();
include 'connect.php';
$emai=$_SESSION["email"] ;
$resource= mysqli_query($con,"SELECT username FROM register where email='$emai'");
    if(mysqli_num_rows($resource)>0)
       { 
      while($rows=mysqli_fetch_array($resource))
         {
           $user=$rows['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>profession</title>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width,initial-scale=1">
				<link href="css/bootstrap.min.css" rel="stylesheet">
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
			<script defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKako5c--gyK79kSPUeAULrjpg0CTasd4&callback=initMap">
			</script>
			<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
			    
			  <script type="text/javascript" src="js/mdb.min.js"></script>
</head>
<style>
	#flu1{
		padding-top: 50px;
	}
	.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/google.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
#map{
	margin-top: 30px;
	margin-left: 350px;
width:50%;
height:400px;
margin-bottom: 30px;
}
#display{
	background-color:beige;
}
#tabl{
	padding: 20px;
    overflow-x:auto;
}
#tabl table {
  border-collapse: collapse;
  width: 100%;
}
#tabl th{
  font-family: 'Allerta';
  color: white;
   font-weight: bold;
   font-size: 20px;
   background-color:black;
   padding: 8px;
  text-align: center;
   
}
#tabl td {
 
  border-bottom: 2px solid gray;
}

#tabl tr:hover {background-color:#f5f5f5;}

</style>

<body>
<div class="container-fluid" id="flu1">
<div class="hero-image">
  <div class="hero-text">
    <h1>I am <?php echo $user;}}?></h1>
    <p style="color: white;">And I'm a Developer</p>
    <button>Hire me</button>
  </div>
</div>
</div>
<div class="container-fluid" id="display">
	<div class="container-fluid" id=" display1">
		<div id="tabl">
      <?php include("connect.php");
       $sql="select * from company ";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
        echo "<table>";
        echo "<tr><th>Company Name</th><th>Company Location</th><th>Company Email</th><th>Jobs</th><th>Salary</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $rows['cname'];?></td>
        <td><?php echo $rows['comloc'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['jobs'];?></td>
        <td><?php echo $rows['salary'];?></td>
      </tr>
      <?php 
    
}
echo "</table>";
}
?>
</div>

	</div>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#statics">ADD COMPANY&nbsp;<i class="fa fa-plus-circle"></i></button>
	
</div>

<div id="map"></div>

<div class="modal fade" id="statics" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Company</h5>
      </div>
      <div class="modal-body">
    <form method="post" action="addcom.php" >
      
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" class="form-control" name="cname" placeholder="Company name" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="location">Company Location</label>
    <input type="text" class="form-control" id="place" name="cloc" placeholder="Company Location" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Company Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="cemail" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Job</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="job" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Salary</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sal" required autocomplete="off">
  </div>
   
  <input type="submit" class="btn btn-primary" value="Add Job" name="submit">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



</body>
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

<?php

?>