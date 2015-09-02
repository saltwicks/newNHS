<html>

<head>

<link rel="stylesheet" type="text/css" href="../events/headbar.css">

<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="../events/tableStyle.css">

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




<style>

.headbar{

margin-top:-4em;

}

.Table{
border:solid 10px #56A0D3;
border-radius:20px;
width:80%;

}

.red{

	color:red;

}
h1{
	  color: rgb(0,32,96);
	  font-size: 40px;
	  font-weight: bold;
	  padding: 7px 5px;
	  text-transform: uppercase;
	  
}

h2{
		color: rgb(0,32,96);
	  font-size: 32px;
	  font-weight: bold;
	  padding: 7px 5px;
	  text-transform: uppercase;
	
}
body{
  /*background: -webkit-linear-gradient(#56A0D3, #56A0D3); 
  background: -o-linear-gradient(#56A0D3, #56A0D3); 
  background: -moz-linear-gradient(#56A0D3,#56A0D3); 
  background: linear-gradient(#56A0D3,#56A0D3); */
  background-repeat:no-repeat;
  
  
}
h3{
	  color: rgb(0,32,96);
	  font-size: 32px;
	  font-weight: bold;
	  padding: 7px 5px;
	  text-transform: uppercase;
	background-color:#56A0D3;
	border-radius:25px;
	border:solid 3px rgb(0,32,96);
	text-align:center;
	width:25%;
	margin:auto;
	margin-bottom: 10px;

}
.alert{
	width:25%;
	margin:0 auto;
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



$id = mysqli_real_escape_string($con, $_POST['id']);
//check if ID field is empty
if($id == ""){
	echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";
}


$member = mysqli_query($con,"SELECT * FROM members WHERE ID=$id");

while($row = mysqli_fetch_array($member)) {	  

	  $name = $row['First']." ".$row['Last'];

	  $grade = $row['Grade'];

	  $pos = $row['Position'];

	  //if($pos.length<1)$pos="Member";

	  $email = $row['Email'];

	  $credits=$row['Credits'];

	 }

	 

echo "<h1>".$name."</h1><br>";

echo "<h3>Statistics<span class='red'>**</span></h3>";



 

 echo "<div class='Table'>

	<table >

        <tr><td>Name</td>

		<td>Grade</td>

		<td>Position</td>

		<td>User Identification</td>

		<td>Email</td>

		<td>Credits</td>

	
    </tr>";

	

   echo "<tr>

            <td >

             ".$name."

			 </td>

            <td>

              ".$grade."

            </td>

            <td>

              ".$pos."

             </td>

			 <td>

              ".$id."

             </td>

			 <td>

              ".$email."

             </td>

			 <td>

              ".($credits)." of 100

             </td>

	        </tr></table></div><br><br>";



$events = mysqli_query($con, "SELECT * From Events");

$current_date = new DateTime();



/*echo "<div class = 'announcmentWrapper'>";

	echo "<div class = 'announcment'>";

		echo "<h2><span class = 'red'>**</span>Statistics Key</h2>";

		echo "<hr class = 'experiencehr' />";

		echo "<ul>";

			echo "<li>20 hours needed by the end of the year, 14 for half year mark.</li><br>";
			echo "<br>";
			echo "<li>Hours tab includes hours from KHK.</li><br>";
			echo "<br>";
			echo "<li>1 Group Project needed by half year mark, 2 by the end of the year.</li><br>";
			echo "<br>";
			echo "<li>Half year mark occurs on February 1st.</li><br>";

		echo "</ul>";

echo "</div></div>";*/





echo "<div class = 'announcmentWrapper'>";

	echo "<div class = 'announcment'>";

	echo "<h2>Events and Updates</h2>";

	echo "<hr class = 'experiencehr' />";

		while($row = mysqli_fetch_array($events)){

			$eventName = $row['Name'];
			$creditsAdded= $row['Credits_Added'];
			$creditsWorth= $row['Credits_Worth'];
			$date = $row['Date'];

			//echo "<p>".$eventName."</p><br>";

			$event = mysqli_query($con, "SELECT * From $eventName");
			
			while($member = mysqli_fetch_array($event)){

				$memberID = $member['ID'];

				//echo "<p>".$memberID."</p><br>";

				if($memberID===$id){
					echo $creditsAdded;
					if($creditsAdded == 1){
						echo "<p>". $creditsWorth. " credit(s) have been added for ". $eventName. "</p><br>";
					}
					else{
						echo "<p> Credits for ". $eventName. " have not been added yet </p>";
					}
					echo "<p>You ";

					if ($date > $current_date)

					  echo "are attending ";

					else

						echo "attended ";

					echo str_replace("_", " ", $eventName);

					$date2 = date_create($date);

					echo " on ".date_format($date2, "l,  F d")."</p>";

				}

			}

		}

	echo "</div></div>";


mysqli_close($con);



//ending tag ?>



</body>

</html>

