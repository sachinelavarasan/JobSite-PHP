
<!DOCTYPE html>
<html>
<head>
	<title>curriculam</title>
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
	<style>
		#flu1{
		padding-top: 50px;
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
   text-align: center;
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
</head>
<body>
<h1>Your Resumes</h1>
<div class="container-fluid" id="display">
	<div class="container-fluid" id=" display1">
		<div id="tabl">
      <?php 
      $con=mysqli_connect("localhost","root","","project");
      session_start();
       $sess=$_SESSION["email"] ;
       $sql="select * from resume where email ='$sess'";
      $result= mysqli_query($con,$sql);
    echo "<table>";
       if(mysqli_num_rows($result)>0)
       { 
       
        
        echo "<tr><th>Name</th><th>Gender</th><th>Date of Birth</th><th>year of experience</th><th>SKills</th><th>Industry Expectation</th><th>Profile</th></tr>";
         while($rows=mysqli_fetch_array($result))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $rows['fname'];?></td>
        <td><?php echo $rows['gen'];?></td>
        <td><?php echo $rows['dob'];?></td>
        <td><?php echo $rows['yob'];?></td>
        <td><?php echo $rows['skills'];?></td>
        <td><?php echo $rows['indus'];?></td>
      <td><img src="uploads/<?php echo $rows['photo']?>" style="width:50px;height:50px;"></td>
      </tr>
      <?php 
    
}

}
else{
	echo "<tr><td>No resume added in your profile</td></tr>";
}
echo "</table>";
?>

  <h1>Apply filters</h1>
  
  <form class="form-inline" method="post" action="">
  <label class="sr-only" for="inlineFor1">company</label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="comn" placeholder="company name">
  
  <div class="input-group mb-2 mr-sm-2">
    
    <label class="my-1 mr-2" for="inlineFor">Location</label>
 
    <input type="text" class="form-control mb-2 mr-sm-2" name="cloca" placeholder="company Location">
  </div>
  <label class="sr-only" for="inlineFor1">Salary</label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="sala" placeholder="salary">
  
  <input type="submit" class="btn btn-primary mb-2" name="submit" value="submit">
</form>


  
  <table>
    
  <?php 
   if(isset($_POST['submit']))
   {
    $con=mysqli_connect("localhost","root","","project");
    $cna=$_POST['comn'];
    $loc=$_POST['cloca'];
     $salw=$_POST['sala'];
     if($cna!=""||$loc!=""||$salw!="")
     {
      if($cna!=""&&$loc!="")
      {
    $fet="select * FROM company where cname='$cna' and comloc='$loc'";
      }
      else if($salw!=""&&$loc!=""){
        $fet="select * FROM company where salary='$salw' and comloc='$loc'";

      }
  $sq2=mysqli_query($con,$fet);
  echo "<h1>It's Your Choice</h1>";
     echo "<tr><th>Company Name</th><th>Job Location</th><th>Wanted</th><th>salary</th></tr>";
  if(mysqli_num_rows($sq2))
      {

             
         while($row=mysqli_fetch_array($sq2))
         {  
     ?>
     <tr>
        <td><?php echo $row['cname'];?></td>
        <td><?php echo $row['comloc'];?></td>
        <td><?php echo $row['jobs'];?></td>
        <td><?php echo $row['salary'];?></td>
      </tr>
      <?php
        }

    }
    else
    {
      echo "<tr><td colspan='4'><center>No data found</center></td></tr>";
    }
 }
}else{
   echo "<tr><td colspan='4'><center>No data found</center></td></tr>";
}


   ?>
</table>
    </div>

  </div>
  </div>
	
</body>
</html>



       
      
        
        