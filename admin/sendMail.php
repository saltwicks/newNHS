<?php

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$message = mysqli_real_escape_string($con, $_POST['message']);

$subject = mysqli_real_escape_string($con, $_POST['subject']);

$body = $_POST['message'];



$result = mysqli_query($con,"SELECT * FROM members");



while($row = mysqli_fetch_array($result)) {

	$mail =mail($row['Email'], $subject, "Dear ".$row['First'].",\r\n\r\n".$body, 'From: WV NHS');

}



// Send



if($mail){

echo "Mail delivered";

}else{

echo "Problem encountered";

}



echo "<script type='text/javascript'>window.location.href = '../admin/mailForm.php'</script>";



?>

