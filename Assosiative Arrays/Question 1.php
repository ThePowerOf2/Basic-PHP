<!-- Assosiative Array Questions - Part 1 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>Assosiative Arrays Part 1</title>
</head>

<body>
<?php
$resultArray = array("WP"=>50,"WD"=>59,"ID"=>76,"DV"=>33,"HC"=>21,"PR"=>89);
$totalResult = 0;
$lowestMark = 0;
$lowestMark = $resultArray["WP"];
$lowestClass  = $resultArray["WP"];
$averageResult = 0;

// Printing out the average result for the student.
foreach($resultArray as $class=>$result){
	$totalResult += $result;
}
$averageResult = $totalResult / sizeof($resultArray);
echo "The Average Result is $averageResult.";

// Finding the lowest mark and the class it was in.
foreach($resultArray as $class=>$result){
	if($lowestMark > $result){
		$lowestMark = $result;
		$lowestClass = $class;
	}
}

echo "<br><br>The lowest result was $lowestMark in $lowestClass.<br>";

// Displaying the result an coloured Green/Orange/Red if it is Over/Equal/Under the average respectivly.
foreach($resultArray as $class=>$result){
	if($result>$averageResult){
		echo "<br>A result of <font color = \"Green\">$result</font> was acheived in $class";
	}
	else if($result==$averageResult){
		echo "<br>A result of <font color = \"Orange\">$result</font> was acheived in $class";
	}
	else if($result<$averageResult){
		echo "<br>A result of <font color = \"Red\">$result</font> was acheived in $class";
	}
}

?>
</body>

</html>