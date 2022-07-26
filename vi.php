<?php
include 'connect.php';
$quer="SELECT * FROM login";
$re=mysqli_query($con,$quer);
$re1=mysqli_num_rows($re);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="mdb/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<br>
	<div class="container" style="max-width: 400px;">
		<div>
			<legend>my chart</legend>
			<canvas id="barChart"></canvas>
		</div>
	</div>
</body>
<script src="js/jquery.js"></script>
<script src="mdb/js/mdb.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
var datas= '<?php echo $re1; ?>';
	//bar
var ctxB = document.getElementById("barChart").getContext('2d');

var myBarChart = new Chart(ctxB, {
type: 'bar',

data: {
labels: ["users"],
datasets: [{
label: 'Number of user registered',
data: [datas],
backgroundColor: [
'rgba(255,0,0, 0.8)',

],
borderColor: [
'rgba(0,0,0,1)',

],
borderWidth: 5
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>
</html>
