<html>

<head>

<link rel="stylesheet" href="headbar.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>

</head>

<body>

<?php



//=====================================Code for creating the Event===============================



// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$eventName = mysqli_real_escape_string($con, $_POST['name']);



$result = mysqli_query($con,"SELECT * FROM Events WHERE Name = '$eventName'");

$exists = false;

while($row = mysqli_fetch_array($result)) {

	if($row['ID']===$id)$exists=true;

}

if($exists){

	echo "Event with name <b>'".$eventName."'</b> already exists";

}

else{

	// escape variables for security

	



	$sql="CREATE TABLE $eventName(LastName CHAR(30),FirstName CHAR(30),ID CHAR(30))";



	// Execute query

	if (mysqli_query($con,$sql)) {

	  echo "Table $eventName created successfully";

	} else {

	  echo "Error creating table: " . mysqli_error($con);

	}





	$date = mysqli_real_escape_string($con, $_POST['date']);

	$spots = mysqli_real_escape_string($con, $_POST['spots']);;



	$sql="INSERT INTO Events (Name, Date, Spots_Taken, Total_Spots)

	VALUES ('$eventName', '$date', '0', '$spots')";



	if (!mysqli_query($con,$sql)) {

	  die('Error: ' . mysqli_error($con));

	}



	//============================== Code for Uploading a File ====================================



	$allowedExts = array("txt", "jpeg", "jpg", "png");

	$temp = explode(".", $_FILES["file"]["name"]);

	$extension = end($temp);



	if (($_FILES["file"]["size"] < 20000)

	&& in_array($extension, $allowedExts)) {

	  if ($_FILES["file"]["error"] > 0) {

		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";

	  } else {

		echo "Upload: " . $_FILES["file"]["name"] . "<br>";

		echo "Type: " . $_FILES["file"]["type"] . "<br>";

		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

		if (file_exists("upload/" . $_FILES["file"]["name"])) {

		  echo $_FILES["file"]["name"] . " already exists. ";

		} else {

		// Get the original file name from $_FILES

$file_name= $_FILES['file']['name'];



// Remove any characters you dont want

// The below code will remove anything that is not a-z or 0-9

$file_name = preg_replace("'", "&#39", $file_name);

		  move_uploaded_file($_FILES["file"]["tmp_name"],

		  "../events/uploads/" . $_FILES["file"]["name"]);

		  echo "Stored in: " . "uploads/" . $_FILES["file"]["name"];

		}

	  }

	} else {

	  echo "Invalid file";

	}



	//--------------------Redirect-----------------------------------



	echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/events'</script>";

}



mysqli_close($con);

?>

</body>

</html>
