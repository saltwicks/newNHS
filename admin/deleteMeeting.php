<html>

<head>

<link rel="stylesheet" href="headbar.css" type="text/css">

<link rel="stylesheet" href="../events/eventInfoStyle.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>

<style>

body{

	margin:0;

}

.headbar{

margin-top:-4em;

}

</style>

</head>

<body>

<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='mystats'>My Stats</div>

		<div class = "signup" id='home'>Home</div>

	</div>

	<h1>Deleting Event</h1>



<?php	

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$date =$_GET['name'];

	

$result = mysqli_query($con,"SELECT * FROM Meetings WHERE Date = '$date'");



while($row = mysqli_fetch_array($result)) {

	echo "deleting ";

}

$del = "DELETE FROM Meetings WHERE Date='$date'";

mysqli_query($con,$del);



echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin/manageMeetings.php?pass=a12B7low8'</script>";

?>



</div>



</body>

</html>
