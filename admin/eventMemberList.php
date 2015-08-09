

<html>

<head>

	<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../events/headbar.css">

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

.remove{

	float:right;

	color:red;

	font-weight: bolder;

}
body{
	  background: -webkit-linear-gradient(#93C2E3, #2E7AAF); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#93C2E3, #2E7AAF); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#93C2E3,#2E7AAF); /* For Firefox 3.6 to 15 */
  background: linear-gradient(#93C2E3,#2E7AAF); /* Standard syntax */
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
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$pass = $_GET['pass'];

if($pass!="a12B7low8"){

	echo "<script type='text/javascript'>window.location.href = '../admin'</script>";

}



$result = mysqli_query($con,"SELECT * FROM Events ORDER BY Name ASC, Date ASC");



echo "<div class='announcmentWrapper' id='announcment'>

		 <div class='announcment'>

		 	<h1>Admin Event Page</h1>";





while($row = mysqli_fetch_array($result)) {

	$date = $row['Date'];

	$date2 = date_create($date);



	

//	if(substr($row['Name'],0,7)!='Library'){  // make sure its not a bardi event

	if(true){ 

		echo "<hr class ='experiencehr'/>";

		echo "<h2>".

		preg_replace('/(?<!\ )[A-Z]/', ' $0',$row['Name'])

		." - ".

			date_format($date2, "l,  F d")

		." </h2>"

		;



		$eventName = $row['Name'];

		$result2 = mysqli_query($con, "SELECT * FROM $eventName"); // Get the event table

		echo "<ol>";

		while($row2 = mysqli_fetch_array($result2)){

			echo "<li>".$row2['FirstName']." ".$row2['LastName']; // print the members

			$userID = $row2['ID'];

			echo "<a href ='removeFromEvent.php?id=$userID&event=$eventName'><span class = 'REMOVE'>Remove</span></a></li><br>";

		}

		echo "</ol>";

		

	}	



 }

 echo "</div></div>";







mysqli_close($con);



?>









</body>

</html>
