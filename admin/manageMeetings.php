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

	<h1>Manage Meetings</h1><br>



<?php	

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$pass = $_GET['pass'];

	if($pass!="a12B7low8"){

		echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin'</script>";

	}

	

$result = mysqli_query($con,"SELECT * FROM Meetings");



while($row = mysqli_fetch_array($result)) {

	$date = $row['Date'];

	$date2 = date_create($date);

	echo "<a href = 'http://wvnhs.com/admin/deleteMeeting.php?name=".$date."'>".date_format($date2, "l,  F d")."</a><br>";

}



?>



</div>



<form action="createMeeting.php" method="post" enctype="multipart/form-data">

	<h2>Create Meeting</h2>Date: (YYYY-MM-DD)<br> <input type="text" name="date"></div>

	<input type="submit">

</form>

</body>

</html>
