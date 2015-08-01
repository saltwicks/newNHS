

<html>

<head>

	<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../events/headbar.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="../events/header.js"></script>

	



</head>

<style>

.headbar{

margin-top:-4em;

}

.announcmentWrapper{

	margin-top:5em;

}

h2{

	text-align: left;

}

.remove{

	float:right;

	color:red;

	font-weight: bolder;

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
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



echo "<h1>Removing From Event</h1><br><br>";



$id = $_GET['id'];

$eventName = $_GET['event'];



$event = mysqli_query($con,"SELECT * FROM Events WHERE Name='$eventName'");

$member = mysqli_query($con,"SELECT * FROM members WHERE ID='$id'");



$membersInEvent = mysqli_query($con,"SELECT * FROM $eventName WHERE ID='$id'");



while($member = mysqli_fetch_array($membersInEvent)) {

	echo "Removing ".$member['FirstName']." ".$member['LastName']." from ".$eventName;

}



$del = mysqli_query($con,"DELETE FROM $eventName WHERE ID='$id'"); //Delete the member from the event



while($row = mysqli_fetch_array($event)) {

	

	$oldSpotsTaken = $row['Spots_Taken'];

	$newSpotsTaken = $oldSpotsTaken-1;

	 

	 mysqli_query($con, "UPDATE Events

	 SET Spots_Taken=$newSpotsTaken 

	 WHERE Name = '$eventName'");

	

}



echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin/eventMemberList.php?pass=a12B7low8'</script>";











mysqli_close($con);



?>









</body>

</html>
