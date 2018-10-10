<!-- Basic Array Questions - Part 2 - Q2 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q2</title>
</head>

<body>
<?php
$randomNumbers = array();
$i = 0;

for($x=0;$x<50;$x++){
	$randomNumbers[$x] = rand(0,50);
}

for($x=0;$x<50;$x++){
	echo "$randomNumbers[$x]  ";
	if((($x+1)%12) == 0){
		echo "<br>";
	}
	if(($randomNumbers[$x] < 19) && ($randomNumbers[$x] > 10)){
		$i++;
	}
}
echo "<br><br> The amount of numbers between 10 and 19 inclusive is: $i";

?>
</body>

</html>