<!-- Basic PHP Questions - Part 2 - Q2 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q2</title>
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
	for($x = 0; $x <= $number; $x++){
		echo "$x <br>";
	}
}
?>