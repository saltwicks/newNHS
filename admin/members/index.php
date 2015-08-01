<html>

<head>

<link rel="stylesheet" type="text/css" href="../../members/tableStyle.css">

<link rel="stylesheet" type="text/css" href="../../members/indexStyle.css">

<link rel="stylesheet" href="../../members/headbar.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="../../members/headbar.js"></script>



<style>

.Table{

width:70%;

}

</style>



</head>

<body>

<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='mystats'>My Stats</div>

		<div class = "signup" id='home'>Home</div>

	</div>

<h1> Members </h1>

<?php //starting tag



// Check connection
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

	$pass = $_GET['pass'];

	if($pass!="a12B7low8"){

		echo "<script type='text/javascript'>window.location.href = 'http://wvnhs.com/admin'</script>";

	}



$result = mysqli_query($con,"SELECT * FROM members ORDER BY Position DESC, Last, First ASC");



echo "<div class='Table'>

	<table >

        <tr><td>Last</td>

		<td >First</td>

		<td >Grade</td>

		<td>Position</td>

		<td>User Identification</td>

		<td>Email</td>

		<td>Hours</td>

		<td>Group Project</td>

		<td>KHK</td>

    </tr>";





while($row = mysqli_fetch_array($result)) {

  

   echo "<tr>

            <td >

             " . $row['Last'] . "

			 <form action='changeLast.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit'>

			</form>

			</td>

            <td>

              " . $row['First'] . "

			  <form action='changeFirst.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit'>

			</form>

            </td>

			<td>

              " . $row['Grade'] . "

			  <form action='changeGrade.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit'>

			</form>

            </td>

            <td>

              " . $row['Position'] . "

			  <form action='changePosition.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit'>

			</form>

             </td>

			 <td>

              ".$row['ID']."

			  <form action='changeID.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit'>

			</form>

             </td>

			 <td>

              ".$row['Email']."

			  <form action='changeEmail.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit'>

			</form>

             </td>

			 <td>

              ".$row['Hours']." hours of 10 hours

			  <form action='changeHours.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit' name='add' value='add'>

				<input type='submit' name='change' value='change'>

			</form>

             </td>

			 <td>

              ".$row['Group_Project']." of 2 projects

			  <form action='changeGP.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit' name='add' value='add'>

				<input type='submit' name='change' value='change'>

			</form>

             </td>

			 <td>

              ".$row['KHK']." hours of 5 hours

			  <form action='changeKHK.php?id=".$row['ID']."' method='post'>

				<br> <input type='text' name='newValue'>

				<input type='submit' name='add' value='add'>

				<input type='submit' name='change' value='change'>

			</form>

             </td>

        </tr>";

}



echo "</table>

            </div>";



?>



mysqli_close($con);



//ending tag ?>



</body>

</html>

