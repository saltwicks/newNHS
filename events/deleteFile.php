

<html>

<head>

	<link rel="stylesheet" type="text/css" href="eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="headbar.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="header.js"></script>

	



</head>

<style>

.headbar{

margin-top:-4em;

}

</style>

<body>

<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='mystats'>My Stats</div>

		<div class = "signup" id='home'>Home</div>

	</div>

<?php //starting tag


// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

unlink("uploads/text.txt");





mysqli_close($con);



?>









</body>

</html>
