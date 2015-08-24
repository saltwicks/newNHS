<html>

<head>

<link rel="stylesheet" href="headbar.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>

</head>

<body>

<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='home'>Home</div>

	</div>

<?php

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



// escape variables for security

$name = mysqli_real_escape_string($con, $_POST['name']);



$result = mysqli_query($con,"SELECT * FROM members

WHERE First='$name'");



while($row = mysqli_fetch_assoc($result)) {

  echo $row['First'] . " " . $row['Last']. " " . $row['Grade']. " " . $row['Position']. " " . $row['ID'];

  echo "<br>";

}



echo "<a href = 'http://www.wvnhs.com/members/all_members.php'> Go Back </a>";



mysqli_close($con);

?>

</body>

</html>
