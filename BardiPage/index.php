

<html>

<head>

	<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">



	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="../events/header.js"></script>

	    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel= "stylesheet" href= "../bootstrap1.css">
    <link rel="stylesheet" href="../main.css">



</head>

<style>

.headbar{

margin-top:0em;

}

.announcmentWrapper{

	margin-top:5em;

}

h2{

	text-align: left;

}
body{
		  background: -webkit-linear-gradient(#93C2E3, #2E7AAF); 
  background: -o-linear-gradient(#93C2E3, #2E7AAF); 
  background: -moz-linear-gradient(#93C2E3,#2E7AAF); 
  background: linear-gradient(#93C2E3,#2E7AAF); 
  background-repeat:no-repeat;
  height:100%;
}
</style>

<body>

    <div class="nav" >
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

<?php //starting tag


// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$result = mysqli_query($con,"SELECT * FROM Events ORDER BY Date ASC, Name ASC");



echo "<div class='announcmentWrapper' id='announcment'>

		 	<div class='announcment'>

		 	<h1>Grand Master Bardi Page</h1>";

while($row = mysqli_fetch_array($result)) {

	$date = $row['Date'];

	$date2 = date_create($date);



	

	if(substr($row['Name'],0,7)==='Library'){

		echo "<hr class ='experiencehr'/>";

		echo "<h2>".

			date_format($date2, "l,  F d")

		." - ".

			preg_replace('/(?<!\ )[0-9]/', ' $0',(substr($row['Name'],15,strlen($row['Name'])-1)))

		." </h2>";



		$eventName = $row['Name'];

		$result2 = mysqli_query($con, "SELECT * FROM $eventName");

		echo "<ol>";

		while($row2 = mysqli_fetch_array($result2)){

			echo "<li>".$row2['FirstName']." ".$row2['LastName']."</li><br>";

		}

		echo "</ol>";

		

	}

	else{

	//	echo (substr($row['Name'],0,6));

	}

	



 }

 echo "</div></div>";







mysqli_close($con);



?>









</body>

</html>
