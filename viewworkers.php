<!DOCTYPE html>
<head>
	<title>Blue Moon</title>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
	<header>
		<div href="index.html" class="headerbutton"><h2>Home</h2></div>
	</header>
	<?php
		/* Create first line of the table */
		echo '<table border="1"><tr><td>Name</td><td>Worker Mass</td><td>Belongings Mass</td></tr>';
		/* Open file */
		$file = fopen("worker.txt", "r") or die("worker.txt could not be opened");
		while (!feof($file)){   
    		$filecontents = fgets($file); 
    		/* Replace the character "|" with a new row */
    		$filecontents1 = "<tr><td>" . str_replace('|','</td></tr><tr><td>',$filecontents) . '</td></tr>';
    		/* Echo the table with the character "?" replaced with a new coloumn */
    		echo str_replace('?','</td><td>',$filecontents1);
		}
		echo '</table>';
		fclose($file);
	?>
</body>