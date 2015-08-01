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


</style>
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
// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id  = $_GET['id'];
$newVal = mysqli_real_escape_string($con, $_POST['newValue']);

echo "new value is ".$newVal;
echo "<br>id is ".$id;

$member = mysqli_query($con,"SELECT * FROM members WHERE ID=$id");

if ($_POST['change']){
	if($newVal!="")
	mysqli_query($con,"UPDATE members SET Group_Project='$newVal' WHERE ID=$id");
}
else if($_POST['add']){
		
	$oldVal=0;
	while($row = mysqli_fetch_array($member)) {
		$oldVal = $row['Group_Project'];
	}
	$newVal+=$oldVal;
	mysqli_query($con,"UPDATE members SET Group_Project='$newVal' WHERE ID=$id");

	}

	 echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin/members?pass=a12B7low8'</script>";

mysqli_close($con);
?>

</div>
</body>
</html>
