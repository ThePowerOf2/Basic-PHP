<!-- Basic PHP Questions - Part 2 - Q6 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q6</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <p><label for="input">Enter a word: </label><input type="text" name="input" id="input" /></p>
  <p><label for="input2">Enter a another word: </label><input type="text" name="input2" id="input2" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>

</body>

</html>

<?php
if(isset($_POST['input']) && isset($_POST['input'])){
	$input = $_POST['input'];
	$input2 = $_POST['input2'];

	if(strtolower($input) < strtolower($input2)){
		echo "$input  $input2";
	}else{
		echo "$input2  $input";
	}
}