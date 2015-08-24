<html>

<head>

<link rel="stylesheet" type="text/css" href="../events/headbar.css">

<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="../events/header.js"></script>





<style>

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

	

<?php //starting tag



// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$id = mysqli_real_escape_string($con, $_POST['id']);



$member = mysqli_query($con,"SELECT * FROM members WHERE ID='12241709'");

$first="hi";

while($row = mysqli_fetch_array($member)) {

	  echo $row['First']."<br>";

	  echo $row['Last']."<br>";

	  echo $row['ID']."<br>";

	  echo $row['Grade']."<br>";

	  

	  $first = $row['First'];

	  $last = $row['Last'];

	 }

 echo $id;

 echo $first." ".$last;



mysqli_close($con);



//ending tag ?>



</body>

</html>

