<!-- Basic PHP Questions - Part 2 - Q10 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q10</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <p><label for="input">Enter a word: </label><input type="text" name="input" id="input" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>

</body>

</html>

<?php
if(isset($_POST['input']) && isset($_POST['input'])){
	$input = $_POST['input'];

	for($x=0;$x < strlen($input);$x++){
		echo "$input[$x]<br>";
	}
}