<html>

<head>
<link rel="stylesheet" href="../main.css">
<link rel="stylesheet" type="text/css" href="../events/headbar.css">

<!--<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">-->

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




<style>

.headbar{

margin-top:-4em;

}

p{

margin-bottom:0em;

}
h1{
	text-align:center;
  color: rgb(0,32,96);
  font-size: 40px;
  font-weight: bold;
  padding: 7px 5px;
  text-transform: uppercase;
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



</head>

<body>

 <div class="nav">
      <div class="container">
        <ul class= "pull-right nav nav-pills">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../forms/index.php">Forms</a></li>
          <li><a href="">My Stats</a></li>
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



echo "<h1>Sign In</h1>";



mysqli_close($con);



//ending tag ?>



<div class = "myStatsLogin">	

		<form action="Data.php" method="post">

		<p>User Identification:<br> <input type="text" name="id"></p>

		<input type="submit">

		</form>

</div>





</body>

</html>

