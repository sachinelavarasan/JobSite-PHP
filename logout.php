<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<?php
session_start();


if(isset($_SESSION["email"] )){
	echo "<script>alert('session has Expired'); window.location = 'index.php'</script>";
	
session_destroy();
}else{
	echo "<script>alert('login Again'); window.location = 'index.php'</script>";
	
}

?>


</body>
</html>