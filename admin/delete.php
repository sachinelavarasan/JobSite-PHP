<?php
include("connect.php");
$id=$_GET['id'];


$de="delete from company where id='$id' ";
if(mysqli_query($con,$de)){
	echo "<script>alert('deleted successfully');</script>";
	header("Location:manage_course.php");
}
else{
	echo "<script>alert('Error');</script>";
}
mysqli_close($con);

?>