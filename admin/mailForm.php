

<html> 

<head> 

<title>Send Mail</title> 

<link rel="stylesheet" href="headbar.css" type="text/css">

<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

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

<body bgcolor="#FFFFFF"> 

<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='mystats'>My Stats</div>

		<div class = "signup" id='home'>Home</div>

	</div>

	

	<h1>Send Mail</h1>

<form method="post" action="sendMail.php"> 



Subject: <input type="text" name="subject" size="25"> <br> 



Your Message: <br> 



<textarea type="text" cols="50" rows="5" name="message">Your Message Here...</textarea> <br> 



<input type="submit" value="submit"> 



<?php	

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$pass = $_GET['pass'];

	if($pass!="a12B7low8"){

		echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin'</script>";

	}

?>



</body> 

</head>
