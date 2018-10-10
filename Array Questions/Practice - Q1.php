<!-- Basic Array Questions - Part 2 - Q1 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q1</title>
</head>

<body>
<?php
$randomNumbers = array();

for($x=0;$x<100;$x++){
	$randomNumbers[$x] = rand(0,50);
}

$smallestNo = $randomNumbers[0];

for($x=0;$x<100;$x++){
	echo "$randomNumbers[$x] ";
	if((($x+1)%12) == 0){
		echo "<br>";
	}
	if($randomNumbers[$x] < $smallestNo){
		$smallestNo = $randomNumbers[$x];
	}
}
echo "<br><br> The smallest number is: $smallestNo";

?>
</body>

</html>