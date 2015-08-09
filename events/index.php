<html>

<head>

<link rel="stylesheet" type="text/css" href="tableStyle.css">

<!--<link rel="stylesheet" type="text/css" href="eventStyle.css">-->

<link rel="stylesheet" type="text/css" href="headbar.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="header.js"></script>

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

h1{
  color: rgb(0,32,96);
  text-align:center;

}
a{
  color:rgb(0,32,96);
}
.affix{
  top: 0;
  width: 100%;
}
body{
  background: -webkit-linear-gradient(#002060, #56A0D3); 
  background: -o-linear-gradient(#002060, #56A0D3); 
  background: -moz-linear-gradient(#002060,#56A0D3); 
  background: linear-gradient(#002060,#56A0D3);
  background-repeat:no-repeat;
  height:100%;
}
</style>



</head>

<body>

 <div class="nav"data-spy="affix">
      <div class="container">
        <ul class= "pull-right nav nav-pills">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../forms/index.php">Forms</a></li>
          <li><a href="../myStats/index.php">My Stats</a></li>
          <li><a href="../members/index.php">Members</a></li>
          <li><a href="">Events</a></li>
          <li><a href="../admin/index.php">Admin Login</a></li>
          <li><a href="../members/signup.php">Create Account</a></li>
        </ul>
      </div>
    </div>

<h1>Events</h1>

<?php //starting tag
//error_reporting(0);

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



function runMyFunction($input) {

    echo $input;

  }



//runMyFunction($_GET['eventName']);



$orderthing = 'Date';

$result = mysqli_query($con,"SELECT * FROM events ORDER BY $orderthing ASC");



echo "<div class='Table'>

	<table >

        <tr><td>Name</td>

		<td >Date</td>

		<td>Signed Up</td>

		<td>Max Spots</td>

    </tr>";





while($row = mysqli_fetch_array($result)) {

 /* echo "<tr>";

  echo "<td><a href ='http://www.wvnhs.com/events/eventInfo.php?eventName=".$row['Name']."'>" . $row['Name'] . "</a></td>";

  echo "<td>" . $row['Date'] . "</td>";

  echo "<td>" . $row['Spots_Taken'] . "</td>";

    echo "<td>" . $row['Total_Spots'] . "</td>";

  echo "</tr>";*/

  $date = $row['Date'];

  $date2 = date_create($date);

  $eventName = $row['Name'];

  if($eventName != 'KHK')$newName = preg_replace('/(?<!\ )[A-Z]/', ' $0', $eventName);

  else $newName =$eventName;



   echo "<tr>

            <td >

             <a href ='eventInfo.php?eventName=".$row['Name']."'>" . str_replace("_", " ", $newName) . "</a>

            </td>

            <td>

              " . date_format($date2, "M d") . "

            </td>

            <td>

              " . $row['Spots_Taken'] . "

             </td>

			 <td>

              " . $row['Total_Spots'] . "

             </td>

        </tr>";

}



echo "</table>

            </div>";



mysqli_close($con);



//ending tag ?>



</body>

</html>

