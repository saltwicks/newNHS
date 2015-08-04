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

width:70%;

}
body{

}
</style>



</head>

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

	

<?php //starting tag




// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$id = mysqli_real_escape_string($con, $_POST['id']);



$member = mysqli_query($con,"SELECT * FROM members WHERE ID=$id");

while($row = mysqli_fetch_array($member)) {	  

	  $name = $row['First']." ".$row['Last'];

	  $grade = $row['Grade'];

	  $pos = $row['Position'];

	  if($pos.length<1)$pos="Member";

	  $email = $row['Email'];

	  $khk=$row['KHK'];

	  $gp =$row['Group_Project'];

	  $hours =$row['Hours'];

	  $meetings =$row['Meetings'];

	 }

	 

echo "<h1>".$name."</h1><br>";

echo "<h2>Statistics</h2>";



 

 echo "<div class='Table'>

	<table >

        <tr><td>Name</td>

		<td>Grade</td>

		<td>Position</td>

		<td>ID</td>

		<td>Email</td>

		<td>Hours</td>

		<td>Group Project</td>

		<td>KHK</td>

		<td>Total</td>

		<td>Meetings</td>

		

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

              ".$hours+$khk." hours of 20 hours

             </td>

			 <td>

              ".$gp." of 2 projects

             </td>

			 <td>

              ".$khk." hours of 5 hours

             </td>

			 <td>

              ".$meetings." meetings attended

             </td>

        </tr>";





mysqli_close($con);



//ending tag ?>



</body>

</html>

