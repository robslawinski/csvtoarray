<html>
<body>
<h1>
PHP assignment 1</h1>

<?php 
      


	include "HTMLUtils.php";
	$obj = new HTMLUtils;
	
	// Set path to CSV file
	$csvFile = 'cars.csv';
	
	$csvArray = $obj->readCSVtoArray($csvFile);
	
	$obj->toHTML2($csvArray);
	
?>
</body>
</html>
