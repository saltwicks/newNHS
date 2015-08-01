<html>

<head>

<link rel="stylesheet" type="text/css" href="headbar.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="header.js"></script>



</head>

<body>

<!--<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='home'>Home</div>

	</div>-->

<?php //starting tag



// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$id = mysqli_real_escape_string($con, $_POST['id']);

$event = $_GET['eventName'];

$result2 = mysqli_query($con,"SELECT * FROM Events WHERE Name='$event'");

$member = mysqli_query($con,"SELECT * FROM members WHERE ID='$id'");





$result = mysqli_query($con,"SELECT * FROM $event");

$exists = false;

$mexists = true;

while($row = mysqli_fetch_array($result)) {

	if($row['ID']===$id)$exists=true;

}

while($row = mysqli_fetch_array($member)) {

	$mexists=false;

}

if($exists){

	echo "Member with ID <b>'".$id."'</b> is already signed up";

}

else if($mexists){

	echo "Member does not exist";

}

else{

$member = mysqli_query($con,"SELECT * FROM members WHERE ID='$id'");



	echo count($member);

	echo "<h1>Event Details</h1>";



	while($row = mysqli_fetch_array($result2)) {

	  echo $row['Name']."<br>";

	  echo $row['Date']."<br>";

	  echo $row['Spots_Taken']."<br>";

	  echo $row['Total_Spots']."<br>";

	  $totalSpots = $row['Total_Spots'];

	   $oldSpotsTaken = $row['Spots_Taken'];

	 $newSpotsTaken = $oldSpotsTaken+1;

	 }

	

	

	 echo "<br><h1>Member Details</h2>";

	 while($row = mysqli_fetch_array($member)) {

	  echo $row['First']."<br>";

	  echo $row['Last']."<br>";

	  echo $row['ID']."<br>";

	  echo $row['Grade']."<br>";

	  

	  $first = $row['First'];

	  $last = $row['Last'];

	 }



		 

		

		if($oldSpotsTaken>=$totalSpots){

			echo "<br><br><strong><h1>Sorry, no spots left</h1><strong>";

			echo "<script type='text/javascript'>alert('Sorry, no spots left');</script>";

			echo "<script type='text/javascript'>window.location.href = 'http://www.wvnhs.com/events/eventInfo.php?eventName=".$event."'</script>";

		}

		else{



			$sql="INSERT INTO $event (LastName, FirstName, ID)

		VALUES ('$last','$first', '$id')";

		if (!mysqli_query($con,$sql)) {

		  die('Error: ' . mysqli_error($con));

		}

			

			echo $newSpotsTaken;

			mysqli_query($con, "UPDATE Events

			SET Spots_Taken=$newSpotsTaken 

			WHERE Name = '$event'");



			echo "<script type='text/javascript'>window.location.href = 'http://www.wvnhs.com/events/eventInfo.php?eventName=".$event."'</script>";

		}

}

mysqli_close($con);



?>

</body>

</html>

</html>
