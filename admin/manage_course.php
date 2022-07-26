<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="animate/animate.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Manage Course</title>
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
<div id="manage_course" style="float:left">
<h1>
Manage Company
</h1>
<div class="container-fluid" id="display">
	<div class="container-fluid" id=" display1">
		<div id="tabl">
      <?php include("connect.php");
       $sql="select * from company ";
      $result= mysqli_query($con,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
        echo "<table>";
        echo "<thead>";
        echo "<tr><th>Company Name</th><th>Location</th><th>Email</th><th>Jobs</th><th>Salary</th><th>Edit</th><th>Delete</th></tr>";
        echo "</thead>";
        echo "<tbody>";
         while($rows=mysqli_fetch_array($result))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $rows['cname'];?></td>
        
        <td><?php echo $rows['comloc'];?></td>
        <td><?php echo $rows['email'];?></td>
        
        <td><?php echo $rows['jobs'];?></td>
        <td><?php echo $rows['salary'];?></td>
        
        <td>
        <a href="edit.php?id=<?php echo $rows['id'];?>" class="btn btn-info">Update</a></td>
        <td>
        <a href="delete.php?id=<?php echo $rows['id'];?>" class="btn btn-danger">Delete</a>
    </td>
        
      </tr>
      <?php 
    
}
echo "</tbody>";
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