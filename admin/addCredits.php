

<html>

<head>

	<!--<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../events/headbar.css">-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="../events/header.js"></script>
<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel= "stylesheet" href= "../bootstrap1.css">
    <link rel="stylesheet" href="../main.css">
	



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

 <div class="nav">
      <div class="container">
        <ul class= "pull-right nav nav-pills">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../forms/index.php">Forms</a></li>
          <li><a href="../myStats/index.php">My Stats</a></li>
          <li><a href="../members/index.php">Members</a></li>
          <li><a href="../events/index.php">Events</a></li>
          <li><a href="../admin/index.php">Admin Login</a></li>
          <li><a href="../members/signup.php">Create Account</a></li>
        </ul>
      </div>
    </div>
 </div>

<?php //starting tag
session_start();


// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



echo "<h1>Adding Credits</h1><br><br>";




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



echo "<script type='text/javascript'>window.location.href = ../admin/adminDirectory.php?pass=a12B7low8'</script>";











mysqli_close($con);



?>









</body>

</html>
