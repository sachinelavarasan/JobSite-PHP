<?php
include("connect.php");
$id=$_GET['cid'];
$cname=$_GET['cname'];
$cloc=$_GET['cloc'];
$cemail=$_GET['cemail'];
$job=$_GET['job'];
$sal=$_GET['sal'];

$de="update company set cname='$cname',comloc='$cloc',email='$cemail',jobs='$job',salary='$sal' where id='$id' ";
if(mysqli_query($con,$de)){
	echo "<script>alert('Update successfully');</script>";
	header("Location:dashboard.php");
}
else{
	echo "<script>alert('Error');</script>";
}
mysqli_close($con);

?>