

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

		<div class = "signup" id='forms'>Forms</div>

		<div class = "signup" id='home'>Home</div>

	</div>

<?php //starting tag


// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$event = $_GET['eventName'];

$result = mysqli_query($con,"SELECT * FROM Events WHERE Name='$event'");



while($row = mysqli_fetch_array($result)) {

  $eventName=$row['Name'];

  $date=$row['Date'];

  $spotsTaken=$row['Spots_Taken'];

  $totalSpots=$row['Total_Spots'];

 }

 

$result = mysqli_query($con,"SELECT * FROM $eventName");



$newName = preg_replace('/(?<!\ )[A-Z]/', ' $0', $eventName);



echo "<h1>".str_replace("_", " ", $newName)."</h1>";

$date2 = date_create($date);

echo "<h2>".date_format($date2, "l,  F d")."</h2>";



$file = file_get_contents('uploads/'.$eventName.'.txt', true);

echo "<div class='announcmentWrapper' id='announcment'>

		 	<div class='announcment'>

		 		<h1>Event Details</h1>

		 		<hr class = 'experiencehr'>

				<p>".$file."</p>			

				<hr class = 'experiencehr'>

				<p>Spots Taken: ".$spotsTaken."<br>Total Spots: ".$totalSpots."

				

			</div>

		</div>

		<div class='announcmentWrapper' id='announcment'>

		 	<div class='announcment'>

			<h1>Members Attending</h1>

			<hr class = 'experiencehr'>

				";//<ol>";

				

				$result2 = mysqli_query($con,"SELECT * FROM $event");



			//	while($row = mysqli_fetch_array($result2)) {

				 //echo "<p><li>".$row['FirstName']." ".$row['LastName']."</li></p><br>";

					echo"<p> To see if you have signed up for this event, please check your <a href ='http://www.wvnhs.com/myStats'>My Stats</a> page!</p>";

			//	 }

				

			echo 

		//	</ol>

			"</div>

		 </div>";



$canSign = true;

if($spotsTaken>=$totalSpots) $canSign=false;

echo "<div class='announcmentWrapper' id='announcment'>

		 	<div class='announcment'>

			<form action='signUp.php?eventName=".$eventName."' method='post'>

<p>User Identification:</p> <input type='text' name='id'><br>

<input type='submit' value='Sign Up!'";

if(!$canSign)echo "disabled";

echo "/>

</form>

<div class = 'sideImage'>

	<img src='wvlogo.png'>

</div>

<p>Signing up means that there are less spots for other members.<br> PLEASE don't sign up unless you are 100% sure you can attend.<br>In the event of a last minute emergency, please contact an NHS Board member.</p>

</div></div>";





mysqli_close($con);



?>









</body>

</html>
