<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Add Company</title>
	<style type="text/css">

	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="add_company" style="float:left">
<h1>
Add Company
</h1>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#statics">ADD COMPANY&nbsp;<i class="fa fa-plus-circle"></i></button>
</div>

<div class="modal fade" id="statics" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Company</h5>
      </div>
      <div class="modal-body">
    <form method="post" action="" >
      
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" class="form-control" name="cname" placeholder="Company name" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="gender">Company Location</label>
    <input type="text" class="form-control" name="cloc" placeholder="Company Location" required autocomplete="off">
    
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


<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>

<?php

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
 		echo "<script>alert('job added SuccessFully'); window.location = 'dashboard.php'</script>";
 } 
 else
 {
 	
 	 	echo "<script>alert('Something Error'); window.location = 'dashboard.php'</script>";
 }
}

?>

