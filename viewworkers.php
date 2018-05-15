<!DOCTYPE html>
<head>
	<title>Blue Moon</title>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
	<header>
		<a href="index.html"><div class="headerbutton"><h2>Home</h2></div></a>
	</header>
	<div><h2><a href="addworker1.html">Add a new worker.</a></h2></div>
	<?php
		/* Create first line of the table */
		echo '<table border="1"><tr><td>Name</td><td>Worker Mass</td><td>Belongings Mass</td><td>Cost of a 1 way trip</td><td>Unassemblium required</td><td>Reassemblium required</td><td>Cost of belongings</td><td>Cost of unassemblium</td><td>Cost of reassemblium</td><td>Cost of two way trip</td><td>Total mass</td><td>Cost of excess luggage</td></tr>';
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
