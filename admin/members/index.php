<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel= "stylesheet" href= "../../bootstrap1.css">
    <link rel="stylesheet" href="../../main.css">
<script>
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>
<style>

</style>
</head>
    <div class="nav">
      <div class="container">
        <ul class= "pull-right nav nav-pills" >
          <li><a href="../../index.html">Home</a></li>
          <li><a href="../../forms/index.php">Forms</a></li>
          <li><a href="../../myStats/index.php">My Stats</a></li>
          <li><a href="../../members/index.php">Members</a></li>
          <li><a href="../../events/index.php">Events</a></li>
          <li><a href="../../admin/index.php">Admin Login</a></li>
          <li><a href="../../members/signup.php">Create Account</a></li>
        </ul>
      </div>
    </div>
<?php //starting tag
$con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHSV2");
if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

    $pass = $_GET['pass'];

    if($pass!="a12B7low8"){

        echo "<script type='text/javascript'>window.location.href = '../admin'</script>";

    }

$result = mysqli_query($con,"SELECT * FROM members ORDER BY Position DESC, Last, First ASC");




echo '<div class="input-group"> <span class="input-group-addon">Search</span>

    <input id="filter" type="text" class="form-control" placeholder="Type here...">
</div>';

/* class="table table-striped" -----------------for actual table, replace with this----nothing-width="100%" border="0" cellspacing="0" cellpadding="0"*/
echo '<table class="table table-striped">
    <thead>
        <tr>
            <th>Last</th>
            <th>First</th>
            <th>Grade</th>
            <th>Position</th>
            <th>User ID</th>
            <th>Email</th>
            <th>Credits</th>
            
        </tr>
    </thead>';
while($row = mysqli_fetch_array($result)) {
  echo '<tbody class="searchable">
        <tr>

            <td >

             ' . $row['Last'] . '

             <form action="changeLast.php?id='.$row["ID"].'" method="post">

                <br> <input type="text" name="newValue">

                <input type="submit">

            </form>

            </td>

            <td>

              ' . $row["First"] . '

              <form action="changeFirst.php?id='.$row["ID"].'" method="post">

                <br> <input type="text" name="newValue">

                <input type="submit">

            </form>

            </td>

            <td>

              ' . $row["Grade"] . '

              <form action="changeGrade.php?id='.$row["ID"].'" method="post">

                <br> <input type="text" name="newValue">

                <input type="submit">

            </form>

            </td>

            <td>

              ' . $row["Position"] . '

              <form action="changePosition.php?id='.$row["ID"].'" method="post">

                <br> <input type="text" name="newValue">

                <input type="submit">

            </form>

             </td>

             <td>

              '.$row["ID"].'

              <form action="changeID.php?id='.$row["ID"].'" method="post">

                <br> <input type="text" name="newValue">

                <input type="submit">

            </form>

             </td>

             <td>

              '.$row["Email"].'

              <form action="changeEmail.php?id='.$row["ID"].'" method="post">

                <br> <input type="text: name="newValue">

                <input type="submit">

            </form>

             </td>

             <td>

              '.$row["Credits"].'  of 100 credits

              <form action="changeCredits.php?id='.$row["ID"].'" method="post">

                <br> <input type="text" name="newValue">

                <input type="submit" name="add" value="add">

                <input type="submit" name="change" value="change">

            </form>

             </td>

             
        </tr>";
    </tbody>';
}

echo '</table>';

mysqli_close($con);
//ending tag ?>
</html>