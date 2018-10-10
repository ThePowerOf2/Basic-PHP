<!-- Assosiative Array Questions - Part 2 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>Assosiative Arrays Part 2</title>
</head>

<body>
<?php
$arrayClasses = array("WP","WD","ID","DV","HC","PR");
for($i=0; $i<10;$i++){
	foreach($arrayClasses as $Class){
	
	//Creating a K number.
	$KNo = rand(0,100000000);
	$padding = 8 - strlen((string)$KNo);
	$studentKNo = "K" . str_pad((string)$KNo,$padding,'0',STR_PAD_LEFT);

	// Filling the array with random numbers.
	$resultArray = array( array("K_Number"=>$studentKNo, "Classe" =>$Class, "Result" =>rand(0,100)));
	}
}

echo $resultArray[$studentKNo];



?>
</body>

</html>