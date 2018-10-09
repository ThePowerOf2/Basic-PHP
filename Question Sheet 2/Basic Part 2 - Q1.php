<!-- Basic PHP Questions - Part 2 - Q1 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q1</title>
</head>

<body>
	<?php
	$number = 12;
	$counter = 0;

	for($x = 0; $x <10; $x++){
		for($y = 0; $y <10; $y++){
			$randomNo = rand(1,19);
			echo "$randomNo  ";
			if($randomNo == 12){
				$counter++;
			}
		}
		echo "<br>";
	}

	echo "<br><br> Frequency of $number = " . $counter;
	?>

</body>

</html>