<html>
<body>
	<?php
		session_start();
		echo implode('<br>', $_SESSION['events']['user']);
		//echo $_SESSION['event'];
		
	?>
</body>
</html>