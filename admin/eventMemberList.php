

<html>

<head>

	<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../events/headbar.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="../events/header.js"></script>

	



</head>

<style>

.headbar{

margin-top:0em;

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



$pass = $_GET['pass'];

if($pass!="a12B7low8"){

	echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin'</script>";

}



$result = mysqli_query($con,"SELECT * FROM Events ORDER BY Name ASC, Date ASC");



echo "<div class='announcmentWrapper' id='announcment'>

		 <div class='announcment'>

		 	<h1>Admin Event Page</h1>";





while($row = mysqli_fetch_array($result)) {

	$date = $row['Date'];

	$date2 = date_create($date);



	

//	if(substr($row['Name'],0,7)!='Library'){  // make sure its not a bardi event

	if(true){ 

		echo "<hr class ='experiencehr'/>";

		echo "<h2>".

		preg_replace('/(?<!\ )[A-Z]/', ' $0',$row['Name'])

		." - ".

			date_format($date2, "l,  F d")

		." </h2>"

		;



		$eventName = $row['Name'];

		$result2 = mysqli_query($con, "SELECT * FROM $eventName"); // Get the event table

		echo "<ol>";

		while($row2 = mysqli_fetch_array($result2)){

			echo "<li>".$row2['FirstName']." ".$row2['LastName']; // print the members

			$userID = $row2['ID'];

			echo "<a href ='http://www.wvnhs.com/admin/removeFromEvent.php?id=$userID&event=$eventName'><span class = 'REMOVE'>Remove</span></a></li><br>";

		}

		echo "</ol>";

		

	}	



 }

 echo "</div></div>";







mysqli_close($con);



?>









</body>

</html>
