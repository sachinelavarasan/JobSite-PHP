<?php
session_start();
include("connect.php");


if(isset($_POST['submit']))
{    
	$cname=$_POST['cname'];
	    $cloc=$_POST['cloc'];
        $cemail=$_POST['cemail'];
      $sal=$_POST['sal'];
      $job=$_POST['job'];
    
  $sql="INSERT INTO company(cname,comloc,email,jobs,salary) VALUES('$cname','$cloc','$cemail','$job','$sal')";
 if(mysqli_query($con,$sql))
 {
 		echo "<script>alert('company added SuccessFully'); window.location = 'index1.php'</script>";
 } 
 else
 {
 	
 	 	echo "<script>alert('Something Error'); window.location = 'index1.php'</script>";
 }
}

?>
