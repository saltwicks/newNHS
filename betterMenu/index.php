<!DOCTYPE html>

<html ng-app="myApp" ng-controller="namesCtrl">

 <head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="lib/jquery/js/jquery.min.js"></script>

	<script src="lib/angular/js/angular.min.js"></script>

	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="res/css/search.css">

	<script src="lib/bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="res/css/search.css">

  <script src = "res/js/member.js"></script>

</head>



<body>

<script type = "text/javascript">





angular.module('myApp', []).controller('namesCtrl', function($scope) {

    $names = <?php

            // Connect to MySQL

            $con = mysqli_connect("localhost", "root", "");mysqli_select_db($con, "WVNHS");

            $result = mysqli_query($con,"SELECT * FROM members ORDER BY Position DESC, Last, First ASC");

            $usernames = array();
            $hours= array();
            while($row = mysqli_fetch_array($result)) {

                $usernames[] = $row['First'].",". $row['Last'];
               
            }

            echo json_encode( $usernames );

        ?>;



        $scope.members = new Array();

        for(var i = 0; i<$names.length;  i++){

           $fullName = $names[i].split(",");

           $scope.members[i] = new NHS.Member($fullName[0], $fullName[1]);

        }



});

</script>



	<div class="container-fluid">





    <form class="form-signin">

      <h2 class="form-signin-heading">Search by Name</h2>

      <input type="text" id="inputPassword" class="form-control" placeholder="Name" ng-model="test">

      </div>

    </form>



    <div class="table-responsive">

        <h2 class="sub-header">Members</h2>

            <table class="table table-striped">

              <thead>

                <tr>

                  <th>#</th>

                  <th>First</th>

                  <th>Last</th>

                  <th></th>

                </tr>

              </thead>

              <tbody>

        				  <tr ng-repeat="x in members | filter:test | orderBy:'first'">

                    <td class="col-md-1">{{$index}} </td>

        				    <td class ="col-md-2">{{x.getFirstName()}}</td>

                    <td class ="col-md-2">{{x.getLastName()}}</td>
                    
                    <td class ="col-md-2"><button type="button" class="btn btn-info">Info</button></td>

        				  </tr>               

              </tbody>

            </table>

          </div>



   </div> <!-- /container -->



</body>

</html>



