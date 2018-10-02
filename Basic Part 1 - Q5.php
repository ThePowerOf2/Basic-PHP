<!-- Basic PHP Questions - Part 1 - Q5 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q5</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <p><label for="EnterNumber">Enter Number</label><input type="text" name="EnterNumber" id="EnterNumber" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>
</body>

</html>

<?php
if (isset($_POST['EnterNumber'])){
$number = $_POST['EnterNumber'];
echo "$number cubed = " . $number * $number * $number;
// Note to self .
}?>
