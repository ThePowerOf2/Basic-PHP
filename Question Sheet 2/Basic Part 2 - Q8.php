<!-- Basic PHP Questions - Part 2 - Q8 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q8</title>
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
	$j = 0;
	$i = 0;

	for($x=0;$x < strlen($input);$x++){
		if(strtolower($input[$x]) == 'a'){
			$i++;
		}
	}
	for($x=0;$x<strlen($input2);$x++){
		if(strtolower($input2[$x]) == "a"){
			$j++;
		}
	}
	if($i == 1){
		echo "$input has $i 'a' in it!";
	}else{
		echo "$input has $i 'a's in it!";
	}
	if($j == 1){
		echo "<br>$input2 has $j 'a' in it!";
	}else{
		echo "<br>$input2 has $j 'a's in it!";
	}
}