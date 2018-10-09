<!-- Basic PHP Questions - Part 1 - Q8 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q8</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <p><label for="percentageMark">Enter the percentage you got: </label><input type="text" name="percentageMark" id="percentageMark" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>
</body>

</html>

<?php
if (isset($_POST['percentageMark'])){
	$percentageMark = $_POST['percentageMark'];
	if($percentageMark >= 40){
		echo "You've passsed! :D";
	}else{
		echo "You've failed :(";
	}
}
?>