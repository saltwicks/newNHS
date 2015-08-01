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

a:visited, a:link{

	font-size: xx-large;

	color:white;

	text-shadow:2px 2px #000;

}

li{

	color:white;

	line-height: 2em;

	text-align: left;

	font-family: Helvetica;

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

	

	<h1>Welcome, Admin</h1>



<?php	
error_reporting(0);
// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$getpass = $_GET['getpass'];

$passcodes = array("12241709", "adminpa$$");

$passlength = count($passcodes);

$isAdmin=false;



$pass = mysqli_real_escape_string($con, $_POST['passcode']);



	for($x=0;$x<$passlength;$x++){

		if($pass==$passcodes[$x] || $getpass==78951){

			$isAdmin=true;

		}

	}

	

	if(!$isAdmin)

		echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin'</script>";

?>



</div>



<!--<div class = "announcmentWrapper">

<div class = "announcment">

	<h2>Meeting Attendance</h2>

	<form action="SignIn.php" method="post">

	<p>User ID:<br> <input type="text" name="id"></p>

	<input type="submit" value="Sign In!">

	</form>

</div></div>-->



<ul>

	<li><a href = 'http://wvnhs.com/admin/members?pass=a12B7low8'>View All Members</a></li>

	<li><a href = 'http://wvnhs.com/admin/eventForm.php?pass=a12B7low8'>Create Event</a></li>

	<li><a href = 'http://wvnhs.com/admin/deleteEvent.php?pass=a12B7low8'>Delete Event</a></li>

	<!--<li><a href = 'http://wvnhs.com/admin/manageMeetings.php?pass=a12B7low8'>Add/Remove Meeting</a></li>-->

	<li><a href = 'http://wvnhs.com/admin/eventMemberList.php?pass=a12B7low8'>See Members for Events</a></li>

</ul>









</body>

</html>
