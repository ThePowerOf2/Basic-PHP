<!-- Basic PHP Questions - Part 2 - Q3 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q3</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <p><label for="number">Enter a number: </label><input type="text" name="number" id="number" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>

</body>

</html>

<?php
if(isset($_POST['number'])){
	$number = $_POST['number'];
	$prime = True;

	for($x = 2; $x <= ($number/2); $x++){
		if($number%$x == 0){
			$prime = False;
			echo "$number / $x =" . $number/$x . "<br>";
		}
	}
	if($number == 1){
		$prime = False;
	}
	
	if($prime){
		echo "This is a prime number!";
	}else if(!$prime){
		echo "This is not a prime number!";
	}
}
?>