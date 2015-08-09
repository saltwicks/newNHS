<html>

<head>

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
          <li><a href="../../members/signup.php">Create Account</a></li>
        </ul>
      </div>
 </div>

	<h1>Deleting Event</h1>



<?php	

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$event = $_GET['name'];

	

$result = mysqli_query($con,"SELECT * FROM Events WHERE Name = '$event'");



while($row = mysqli_fetch_array($result)) {

	echo "deleting ".$row['Name'];

}

$del = mysqli_query($con,"DELETE FROM Events WHERE Name='$event'"); //Delete the event from the list of events

$del2 = "DROP TABLE $event"; //Delete the Event Table that holds the members who are signed up
mysqli_query($con,$del);
mysqli_query($con,$del2);



unlink("../events/uploads/".$event.".txt");



echo "<script type='text/javascript'>window.location.href = '../events'</script>";



?>



</div>



</body>

</html>
