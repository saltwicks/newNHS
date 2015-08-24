<?php

$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



// escape variables for security

$exists=false;



$name1 = mysqli_real_escape_string($con, $_POST['name1']);

$name2 = mysqli_real_escape_string($con, $_POST['name2']);

$grade = mysqli_real_escape_string($con, $_POST['grade']);

$position = mysqli_real_escape_string($con, $_POST['position']);

$id = mysqli_real_escape_string($con, $_POST['id']);

$email = mysqli_real_escape_string($con, $_POST['email']);



$result = mysqli_query($con,"SELECT * FROM members WHERE ID = '$id'");



while($row = mysqli_fetch_array($result)) {

	if($row['ID']===$id)$exists=true;

}

if($exists){

	echo "User Already Exists";

}

else{



   //insert query goes here

	$sql="INSERT INTO members (First, Last, Grade, Position, ID, Email)

	VALUES ('$name1', '$name2', '$grade', '$position', '$id', '$email')";



	if (!mysqli_query($con,$sql)) {

	  die('Error: ' . mysqli_error($con));

	}

	

	

	// The message

$message = "Hi ".$name1.",\r\n\r\n

Welcome to Wayne Valley National Honor Society. This Email is to inform you that you have successfully created an account with the user ID of ".$id.". You can now use the NHS website to sign up for events and view announcements. If you made a mistake signing up, please contact Mary Dwyer or Jake Podell.

			\r\n\r\n Thank you, and see you at the next meeting.";



	// Send

	mail($email, 'Account Created', $message, 'From: WV NHS');







	header( 'Location: http://wvnhs.com/members' ) ;

}

	

mysqli_close($con);

?>
