<html>

<head>

<link rel="stylesheet" type="text/css" href="tableStyle.css">

<!--<link rel="stylesheet" type="text/css" href="indexStyle.css">-->

<link rel="stylesheet" href="headbar.css" type="text/css">

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
  h1{
      text-align:center;
      color:rgb(0,32,96);
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
          <li><a href="">Members</a></li>
          <li><a href="../events/index.php">Events</a></li>
          <li><a href="../admin/index.php">Admin Login</a></li>
          <li><a href="../members/signup.php">Create Account</a></li>
        </ul>
      </div>
    </div>

<h1 style= "color: rgb(0,32,96)"> Board </h1>

<?php //starting tag

$con = mysqli_connect("localhost", "root", ""); mysqli_select_db($con, "WVNHS");

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$result = mysqli_query($con,"SELECT * FROM members ORDER BY Position DESC, Last, First ASC");



echo "<div class='Table'>

	<table >

        <tr><td>Last</td>

		<td >First</td>

		<td >Grade</td>

		<td>Position</td>

    </tr>";





while($row = mysqli_fetch_array($result)) {

 /* echo "<tr>";

  echo "<td><a href ='http://www.wvnhs.com/events/eventInfo.php?eventName=".$row['Name']."'>" . $row['Name'] . "</a></td>";

  echo "<td>" . $row['Date'] . "</td>";

  echo "<td>" . $row['Spots_Taken'] . "</td>";

    echo "<td>" . $row['Total_Spots'] . "</td>";

  echo "</tr>";*/

  if($row['Position']!=null)
  {
       echo "<tr>

                <td >

                 " . $row['Last'] . "

                </td>

                <td>

                  " . $row['First'] . "

                </td>

    			<td>

                  " . $row['Grade'] . "

                </td>

                <td>

                  " . $row['Position'] . "

                 </td>

            </tr>";

  }

}



echo "</table>

            </div><br><br><br>";



//mysqli_close($con);



//ending tag ?>



</body>

</html>

