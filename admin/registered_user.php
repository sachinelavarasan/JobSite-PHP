<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Registerd Student</title>
	<style type="text/css">
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
#tab1 tr{
	font-family: 'Allerta';
  
   font-size: 15px;
      padding: 8px;
  

}
#tabl td{
	color: black;
   font-weight: bold;
 text-align: center;
 line-height: 50px;
  border-bottom: 2px solid gray;
}

#tabl tr:hover {background-color:#f5f5f5;}

	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="registered_student" style="float:left">
<h1>
Registered User
</h1>
<div class="container-fluid" id="display">
	<div class="container-fluid" id=" display1">
		<div id="tabl">
      <?php include("connect.php");
       $sql="select * from register ";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
        echo "<table>";
        echo "<tr><th>Username</th><th>Email</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $rows['username'];?></td>
        
        <td><?php echo $rows['email'];?></td>
        
      </tr>
      <?php 
    
}
echo "</table>";
}
?>
</div>


	</div>

	
</div>




</div>

<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>