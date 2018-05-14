<!DOCTYPE html>
<head>
	<title>Blue Moon</title>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
	<header>
		<a href="#"><div class="headerbutton"><h2>Home</h2></div></a>
		<a href="viewworkers.php"><div class="headerbutton"><h2>View workers</h2></div></a>
	</header>
	<?php
		$workername = $_POST['workername'];
		$workermass = $_POST['workermass'];
		$belongingsmass = $_POST['belongingsmass'];
		/* Replace non set belongings as 0 */
		if(isset($belongingsmassadd) == false){
			$belongingsmassadd = 0;
		}
		/* Check if values are set */
		if(isset($workername) and isset($workermass)){
			$newworker = "|" . $workername . "?" . $workermass . "?" . $belongingsmass;
			// Get value for already existing workers.
			$textfile = file_get_contents('worker.txt');
			// Add new worker to the list of workers.
			file_put_contents('worker.txt',$textfile.$newworker);
			echo "<table><tr><td></td></tr></table>";
		}else{
			echo "Worker could not be added";
		}
	?>
</body>