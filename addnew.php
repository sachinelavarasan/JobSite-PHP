<?php
session_start();
include("connect.php");


if(isset($_SESSION["email"]))
{

if(isset($_POST['submit']))
{    
	$sess=$_SESSION["email"] ;
	$fname=$_POST['fname'];
	    $gen=$_POST['gender'];
    
    $dob=$_POST['dob'];
  
    $yoe=$_POST['yoe'];
    
    $indus=$_POST['indus'];
    
    $skill=$_POST['skill'];
    
    $about=$_POST['about'];
   
    $loc=$_POST['loc'];
    

 $file = rand(1000,100000)."-".$_FILES['image']['name'];
 $file_loc = $_FILES['image']['tmp_name'];
 
 $folder="uploads/";
 $file1 = rand(1000,100000)."-".$_FILES['resume']['name'];
 $file_loc1 = $_FILES['resume']['tmp_name'];
 
 $folder1="resumes/";
  
 move_uploaded_file($file_loc,$folder.$file);
 move_uploaded_file($file_loc1,$folder1.$file1);
 $sql="INSERT INTO resume(fname,gen,dob,yob,skills,indus,about,loc,photo,cv,email) VALUES('$fname','$gen','$dob','$yoe','$skill','$indus','$about','$loc','$file','$file1','$sess')";
 if(mysqli_query($con,$sql))
 {
 		echo "<script>alert('Your Resume added SuccessFully'); window.location = 'index1.php'</script>";
 } 
 else
 {
 	
 	 	echo "<script>alert('Something Error'); window.location = 'index1.php'</script>";
 }
}else
{
 	echo "<script>alert('Not Set'); window.location = 'index1.php'</script>";
}
}
?>
