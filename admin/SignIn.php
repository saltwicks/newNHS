<html>

<head>

<link rel="stylesheet" type="text/css" href="../events/headbar.css">

<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="../events/tableStyle.css">

<script type="text/javascript" src="../events/header.js"></script>







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



$member = mysqli_query($con,"SELECT * FROM members WHERE ID=$id");

while($row = mysqli_fetch_array($member)) {	  

	  $meetings = $row['Meetings'];

	 }

$newMeetingsValue = $meetings+1;



	

mysqli_query($con,"UPDATE members SET Meetings='$newMeetingsValue' WHERE ID=$id");



echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin/adminDirectory.php?getpass=78951'</script>";

	 



mysqli_close($con);



//ending tag ?>



</body>

</html>

