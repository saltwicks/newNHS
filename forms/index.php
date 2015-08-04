<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<title>WVNHS Forms</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		
		<link rel="stylesheet" href="css/mosaic.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../events/eventInfoStyle.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../events/headbar.css">
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="../events/header.js"></script>
		<script type="text/javascript" src="js/mosaic.1.0.1.js"></script>
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
	body{
		   background: -webkit-linear-gradient(#93C2E3, #2E7AAF); 
		  background: -o-linear-gradient(#93C2E3, #2E7AAF); 
		  background: -moz-linear-gradient(#93C2E3,#2E7AAF); 
		  background: linear-gradient(#93C2E3,#2E7AAF); 
		  background-repeat:no-repeat;
		  height:100%;
  
	}
	.headbar{
		margin-top:-5em;
	}
	p{
		margin-bottom:0em;
	}
	.sorry p{
		text-align: center;
		color: black;
		text-shadow: none;
		width: 100%;
	}
	body{
		text-align: left;
	}
	.affix{
		  top: 0;
		  width: 100%;
		}
	.hide{
		color: rgba(0,0,0,0);
		text-shadow:none;
	}
	h1{
		margin-bottom: -80px;
		margin-top:50px;
		color: rgb(0,32,96);
		  font-size: 40px;
		  font-weight: bold;
		  padding: 7px 5px;
		  text-transform: uppercase;
		  text-align:center;
		  background-color:#56A0D3;
		  border-radius:25px;
	}


</style>

<script>
  	if( screen.width<800){
		document.write('<link rel="stylesheet" href="mobilestyles.css" type="text/css">');
	}
	else{
		document.write('<link rel="stylesheet" href="normalStyles.css" type="text/css">');
	}
</script>

<script type="text/javascript">  
	
	jQuery(function($){
		
		$('.circle').mosaic({
			opacity		:	0.8			//Opacity for overlay (0-1)
		});
		
		$('.fade').mosaic();
		
		$('.bar').mosaic({
			animation	:	'slide'		//fade or slide
		});
		
		$('.bar2').mosaic({
			animation	:	'slide'		//fade or slide
		});
		
		$('.bar3').mosaic({
			animation	:	'slide',	//fade or slide
			anchor_y	:	'top'		//Vertical anchor position
		});
		
		$('.cover').mosaic({
			animation	:	'slide',	//fade or slide
			hover_x		:	'400px'		//Horizontal position on hover
		});
		
		$('.cover2').mosaic({
			animation	:	'slide',	//fade or slide
			anchor_y	:	'top',		//Vertical anchor position
			hover_y		:	'80px'		//Vertical position on hover
		});
		
		$('.cover3').mosaic({
			animation	:	'slide',	//fade or slide
			hover_x		:	'400px',	//Horizontal position on hover
			hover_y		:	'300px'		//Vertical position on hover
		});
    
    });
    
</script>
		

		
	</head>

<body>
	
 <div class="nav">
      <div class="container">
        <ul class= "pull-right nav nav-pills">
          <li><a href="../index.html">Home</a></li>
          <li><a href="">Forms</a></li>
          <li><a href="../myStats/index.php">My Stats</a></li>
          <li><a href="../members/index.php">Members</a></li>
          <li><a href="../events/index.php">Events</a></li>
          <li><a href="../admin/index.php">Admin Login</a></li>
          <li><a href="../../members/signup.php">Create Account</a></li>
        </ul>
      </div>
 </div>
      <h1 class="formTitle">Forms</h1>
	<br><br><br><br><br><br>
	
	<!-- =============== Shirt Forms ================= -->
	
	<div class = "announcmentWrapper">
		<div class = "announcment">

			<h1>Fundraising</h1>
			<br><br><br>
			<hr class = "experiencehr"/>
			
			<h2>T-Shirt Form (Coming Soon!)</h2><h2><span class = "hide">   .    </span></h2>
			
			<div id="content">
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/tshirts.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>TShirts Form</h4>
							<p>Print and fill out this form</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/tshirtsThumb.jpg"/></div>
				</div>
			</div>


			<div class="clearfix"></div>
		</div>
	</div>

<!-- =============== Fundraising ================= -->

	<div class = "announcmentWrapper">
		<div class = "announcment">

			<h1>NHS Forms and Information</h1>
			<br><br><br>
			<hr class = "experiencehr"/>
			
			<h2>Permission Slip</h2><h2>Health Services</h2>

			<div id="content">
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file1.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #1</h4>
							<p>Permission Slip</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb1.jpg"/></div>
				</div>
			
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file2.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #2</h4>
							<p>Health Services Overnight Field Trip Medication Procedure</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb2.jpg"/></div>
				</div>
			</div>


			<h2>Emergency Authorization</h2><h2>Release Form</h2>

			<div id="content">
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file3.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #3</h4>
							<p>Emergency Authorization</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb3.jpg"/></div>
				</div>
				
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file4.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #4</h4>
							<p>Release, hold harmless and Indemnification Agreement</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb4.jpg"/></div>
				</div>
			</div>


			<h2>Field Trip</h2><h2>Deposit Form</h2>

			<div id="content">
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file5.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #5</h4>
							<p>Field Trip Information and Rules</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb5.jpg"/></div>
				</div>

				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file6.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #6</h4>
							<p>Deposit Form</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb6.jpg"/></div>
				</div>
			</div>


			<h2>Schedule</h2><h2>Deposit Directions</h2>
	
			<div id="content">
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file7.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #7</h4>
							<p>Schedule</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb7.jpg"/></div>
				</div>

				<div class="mosaic-block fade">

					<a target ="_blank" href = "files/file8.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #8</h4>
							<p>For the NHS trip, please use this process to pay both the deposit and the final payment.</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb8.jpg"/></div>
				</div>
			</div>

			
			<h2>Medication Form</h2><h2><span class = "hide">   .    </span></h2>
			
			<div id="content">
				<div class="mosaic-block fade">
					<a target ="_blank" href = "files/file9.pdf" class="mosaic-overlay">
						<div class="details">
							<h4>Form #9</h4>
							<p>Review of medication procedures</p>
							</div>
					</a>
					<div class="mosaic-backdrop"><img src="img/thumb9.jpg"/></div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	
</body>
</html>
