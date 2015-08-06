<html>

<head>
    <link rel= "stylesheet" href= "../bootstrap1.css">
    <link rel="stylesheet" href="../main.css">
<link rel="stylesheet" href="headbar.css" type="text/css">

<link rel="stylesheet" href="../events/eventInfoStyle.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<style>



body{

	margin:0;
	 background: -webkit-linear-gradient(white,#93C2E3, #2E7AAF); 
  background: -o-linear-gradient(white,#93C2E3, #2E7AAF); 
  background: -moz-linear-gradient(white,#93C2E3,#2E7AAF); 
  background: linear-gradient(white,#93C2E3,#2E7AAF); 
  background-repeat:no-repeat;
  height:100%;

}

.headbar{

margin-top:-4em;

}
.nav a{
	  color: #5a5a5a;
  font-size: 11px;
  font-weight: bold;
  padding: 14px 10px;
  text-transform: uppercase;

}

.adminList a{

	font-size: xx-large;

	color:#002060;

	text-shadow:2px 2px white;

}

.adminList li{

	color:white;

	line-height: 2em;

	text-align: left;

	font-family: Helvetica;

}

h1{
	color:#002060;
}



</style>

</head>

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

		echo "<script type='text/javascript'>window.location.href = '../admin'</script>";

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


<div class="adminList">
	<ul>

		<li><a href = 'members?pass=a12B7low8'>View All Members</a></li>

		<li><a href = 'eventForm.php?pass=a12B7low8'>Create Event</a></li>

		<li><a href = 'deleteEvent.php?pass=a12B7low8'>Delete Event</a></li>

		<!--<li><a href = 'http://wvnhs.com/admin/manageMeetings.php?pass=a12B7low8'>Add/Remove Meeting</a></li>-->

		<li><a href = 'eventMemberList.php?pass=a12B7low8'>See Members for Events</a></li>

	</ul>
</div>








</body>

</html>
