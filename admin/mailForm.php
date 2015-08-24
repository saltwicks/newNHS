

<html> 

<head> 

<title>Send Mail</title> 

<link rel="stylesheet" href="headbar.css" type="text/css">

<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>
<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel= "stylesheet" href= "../bootstrap1.css">
<link rel="stylesheet" href="../main.css">


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

	

	<h1>Send Mail</h1>

<form method="post" action="sendMail.php"> 



Subject: <input type="text" name="subject" size="25"> <br> 



Your Message: <br> 



<textarea type="text" cols="50" rows="5" name="message">Your Message Here...</textarea> <br> 



<input type="submit" value="submit"> 



<?php	

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$pass = $_GET['pass'];

	if($pass!="a12B7low8"){

		echo "<script type='text/javascript'>window.location.href = '../admin'</script>";

	}

?>



</body> 

</head>
