<html>

<head>

<!--<link rel="stylesheet" href="headbar.css" type="text/css">

<link rel="stylesheet" href="../events/eventInfoStyle.css" type="text/css">-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--<script type="text/javascript" src="headbar.js"></script>-->

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

.formWrap{

	margin:0 auto;

	position:relative;

	background-color:white;

	padding:2em;

	width:25%;
	background-color:#56A0D3;
	color:rgb(0,32,96);
	margin-top:3em;
    border-style:solid;
  	border-width:5px;
	border-radius:25px;
	


}



.formfield{

	margin:0 auto;

	width:50%;

	display:inline-block;

	margin-top: 1em;

	margin-bottom: 1em;
		text-align:center;
  color: rgb(0,32,96);
  font-size: 20px;
  font-weight: bold;
  padding: 7px 5px;
  text-transform: uppercase;


}

.headbar{

margin-top:-3em;

}

body{

  background: -webkit-linear-gradient(#93C2E3, #2E7AAF); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#93C2E3, #2E7AAF); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#93C2E3,#2E7AAF); /* For Firefox 3.6 to 15 */
  background: linear-gradient(#93C2E3,#2E7AAF); /* Standard syntax */
  background-repeat:no-repeat;
  height:100%;


}

.adminClass{
  background-color:#56A0D3;
}
.affix{
  top: 0;
  width: 100%;
}



</style>


</head>

<body class= "adminClass">

 <div class="nav">
      <div class="container">
        <ul class= "pull-right nav nav-pills">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../forms/index.php">Forms</a></li>
          <li><a href="../myStats/index.php">My Stats</a></li>
          <li><a href="../members/index.php">Members</a></li>
          <li><a href="../events/index.php">Events</a></li>
          <li><a href="">Admin Login</a></li>
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



mysqli_close($con);



//ending tag ?>



<div class = "formWrap">



	<form action="adminDirectory.php" method="post">

	<div class ="formfield">Password:<br> <input type="text" name="passcode"></div>

	<div class ="formfield"><input type="submit"></div>

	</form>

	

</div>



</body>

</html>



