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
		/* Allow object.php to be used */
		include 'object.php';
		$workerName = $_POST['workername'];
		$workerMass = $_POST['workermass'];
		$belongingsMass = $_POST['belongingsmass'];
		/* Replace non set belongings as 0 */
		if(isset($belongingsmassadd) == false){
			$belongingsmass = 0;
		}
		/* Create an object */
		$objWorker = new worker($workerMass, $belongingsMass);
		$oneWayCost = $objWorker->getOneWayCost();
		$totalUn = $objWorker->getTotalUn();
		$totalRe = $objWorker->getTotalRe();
		$belongingsCost = $objWorker->getBelongingsCost();
		$unCost = $objWorker->getUnCost();
		$reCost = $objWorker->getReCost();
		$twoWayCost = $objWorker->getTwoWayCost();
		$totalMass = $objWorker->totalMass();
		$excessBelongingsCost = $objWorker->excessBelongingsCost();
		/* Check if values are set */
		if(isset($workerName) and isset($workerMass, $belongingsMass)){
			$newworker = "|" . $workerName . "?" . $workerMass . "?" . $belongingsMass . "?" . "$oneWayCost" . "?" . "$totalUn" . "?" . "$totalRe" . "?" . "$belongingsCost" . "?" . "$unCost" . "?" . "$reCost" . "?" . "$twoWayCost" . "?" . "$totalMass" . "?" . "$excessBelongingsCost";
			// Get value for already existing workers.
			$textfile = file_get_contents('worker.txt');
			// Add new worker to the list of workers.
			file_put_contents('worker.txt',$textfile.$newworker);
			echo "<h3>Worker added</h3><br><table><tr><td>Name</td><td>Mass</td><td>Belongings mass</td></tr><tr><td>$workerName</td><td>$workerMass</td><td>$belongingsMass</td></tr></table>";
		}else{
			echo "Worker could not be added";
		}
	?>
</body>
