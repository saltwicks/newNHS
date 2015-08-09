<html>

<head>

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
    <link rel= "stylesheet" href= "bootstrap1.css">
    <link rel="stylesheet" href="main.css">
<style>



.formWrap{

	margin:0 auto;

	position:relative;

	background-color:#999;

	padding:2em;

	width:25%;

	margin-top:3em;

}



.formfield{

	margin:0 auto;

	width:50%;

	display:inline-block;

	margin-top: 1em;

	margin-bottom: 1em;

}

body{

	margin:0;

}







</style>

</head>

<body>




<?php	

// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



//	$pass = mysqli_real_escape_string($con, $_POST['passcode']);

	$pass = $_GET['pass'];

//	if($pass!="maryspass"){

	if($pass!="a12B7low8"){

		echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";

	}

?>





<div class = "formWrap">

	<form action="createEvent.php" method="post" enctype="multipart/form-data">

	<div class ="formfield">Event Name (no spaces plzzz):<br> <input type="text" name="name"></div>

	<div class ="formfield">Date: (YYYY-MM-DD)<br> <input type="text" name="date"></div>

	<div class ="formfield">Spots: <br> <input type="text" name="spots"></div><br>

	<label for="file">Descrtiption:</label><br>

	<input type="file" name="file" id="file"><br>

	<div class ="formfield"><input type="submit"></div>

	</form>

	

<!--	<form action="upload_file.php" method="post"

enctype="multipart/form-data">

<label for="file">Filename:</label>

<input type="file" name="file" id="file"><br>

<input type="submit" name="submit" value="Submit">

</form>-->

</div>



</body>

</html>
