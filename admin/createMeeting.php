<html>

<head>

<link rel="stylesheet" href="headbar.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>

</head>

<body>

<?php



//=====================================Code for creating the Meeting===============================



// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$date = mysqli_real_escape_string($con, $_POST['date']);



$sql="INSERT INTO Meetings (Date)

	VALUES ('$date')";



if (!mysqli_query($con,$sql)) {

	  die('Error: ' . mysqli_error($con));

	}

	else{

		echo "Meeting Added Sucessfully";

	}

	



	//--------------------Redirect-----------------------------------



	echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin/manageMeetings.php?pass=a12B7low8'</script>";



mysqli_close($con);

?>

</body>

</html>
